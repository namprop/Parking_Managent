@extends('admin.layout.master1')

@section('title', 'vehicle_type')


@section('body')

            <!-- Vehicle Type -->
            <section id="vehicle-type" class="mb-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Danh sách Loại Xe</h2>
                <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                    <table class="min-w-full table-auto">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left">ID</th>
                                <th class="px-6 py-3 text-left">Mã Loại Xe</th>
                                <th class="px-6 py-3 text-left">Tên Loại Xe</th>
                                <th class="px-6 py-3 text-left">Hành Động</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($vehicleTypes as $vehicleType)
                                <tr class="border-t hover:bg-gray-100">
                                    <td class="px-6 py-4">{{ $vehicleType->id }}</td>
                                    <td class="px-6 py-4">{{ $vehicleType->vehicle_code }}</td>
                                    <td class="px-6 py-4">{{ $vehicleType->vehicle_name }}</td>
                                    <td class="px-6 py-4">
                                        <!-- Nút sửa và xóa -->
                                        <form action="/admin/vehicletype/{{$vehicleType->id}}" method="POST" class="inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')">
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

            <!-- Thêm Loại Xe -->
            <section id="add-vehicle-type" class="mt-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Thêm Loại Xe</h2>
                <a href="/admin/vehicletype/create" class="inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
                    Thêm Loại Xe
                </a>

    @endsection
