@extends('admin.layout.master1')

@section('title', 'vehicle')


@section('body')

    <section id="users">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Danh sách người dùng</h2>

        <!-- Nút Thêm Người Dùng -->
        <a href="/admin/user/create" class="inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 mb-4">
            + Thêm Người Dùng
        </a>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">ID</th>
                        <th class="px-6 py-3 text-left">Tên</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Account_code</th>
                        <th class="px-6 py-3 text-left">Level</th>
                        <th class="px-6 py-3 text-left">Hành Động</th> <!-- Cột hành động -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-t hover:bg-gray-100">
                            <td class="px-6 py-4">{{ $user->id }}</td>
                            <td class="px-6 py-4">{{ $user->name }}</td>
                            <td class="px-6 py-4">{{ $user->email }}</td>
                            <td class="px-6 py-4">{{ $user->account_code }}</td>
                            <td class="px-6 py-4">
                                @if ($user->level == 0)
                                    Admin
                                @elseif($user->level == 1)
                                    Employee
                                @elseif($user->level == 2)
                                    Client
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <a href="/admin/user/{{$user->id}}/edit" class="text-blue-600 hover:underline mr-2">Sửa</a>
                                <!-- Nút xóa -->
                                <form action="/admin/user/{{ $user->id }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>

@endsection
