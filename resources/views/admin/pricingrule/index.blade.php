@extends('admin.layout.master1')

@section('title', 'vehicle')


@section('body')

    <section id="users">
        {{-- <h2 class="text-2xl font-semibold text-gray-700 mb-4">Danh sách người dùng</h2> --}}

        <!-- Nút Thêm Người Dùng -->
        <a href="/admin/pricingrule/create" class="inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 mb-4">
            + Thêm Mới
        </a>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">ID</th>
                        <th class="px-6 py-3 text-left">Loại Xe</th>
                        <th class="px-6 py-3 text-left">Ngày</th>
                        <th class="px-6 py-3 text-left">Giờ Bắt Đầu</th>
                        <th class="px-6 py-3 text-left">Giờ Kết Thúc</th>
                        <th class="px-6 py-3 text-left">Giá</th>
                        <th class="px-6 py-3 text-left">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pricingRule as $pricingRule)
                        <tr class="border-t hover:bg-gray-100">
                            <td class="px-6 py-4">{{ $pricingRule->id }}</td>
                            <td class="px-6 py-4">{{ $pricingRule->vehicleType->vehicle_name }}</td>
                            <td class="px-6 py-4">{{ $pricingRule->day_of_week }}</td>
                            <td class="px-6 py-4">{{ $pricingRule->start_time }}</td>
                            <td class="px-6 py-4">{{ $pricingRule->end_time}}</td>
                            <td class="px-6 py-4">{{ $pricingRule->price }}</td>
                            <td class="px-6 py-4">
                                <a href="/admin/pricingrule/{{ $pricingRule->id }}/edit"
                                    class="text-blue-600 hover:underline mr-2">Sửa</a>
                                <!-- Nút xóa -->
                                <form action="/admin/pricingrule/{{ $pricingRule->id }}" method="POST" class="inline">
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



