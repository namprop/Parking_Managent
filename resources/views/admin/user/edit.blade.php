@extends('admin.layout.master1')

@section('title', 'vehicle')


@section('body')

    <section id="users">

        <!-- Nút Thêm Người Dùng -->

        <section id="add-vehicle-type" class="mt-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Thêm Person</h2>
            <form action="{{ route('user.update', $user->id) }}" method="POST" class="max-w-md mx-auto p-6 bg-white rounded-2xl shadow-md space-y-4">
                @csrf
                @method('PUT')

                <h2 class="text-2xl font-bold text-center">Chỉnh sửa thông tin</h2>

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Họ và tên</label>
                    <input type="text" id="name" name="name" value="{{$user->name}}" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{$user->email}}" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="level" class="block text-sm font-medium text-gray-700">Cấp độ</label>
                    <select id="level" name="level" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="0">Admin</option>
                        <option value="2" selected>Nhân viên</option> 
                    </select>
                </div>

                <div>
                    <label for="account_code" class="block text-sm font-medium text-gray-700">Mã tài khoản</label>
                    <input type="text" id="account_code" value="{{$user->account_code}}" name="account_code"
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Mật khẩu</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Xác nhận mật
                        khẩu</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                    Sửa
                </button>
            </form>
        </section>





    </section>

@endsection
