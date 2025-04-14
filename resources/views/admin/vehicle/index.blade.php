@extends(Auth::user()->level === \App\Utilities\Constant::user_level_admin ? 'admin.layout.master1' : 'admin.layout.masterEmployee')

@section('body')
    
  <!-- Thêm Xe -->
  <section class="mb-8" id="dashboard">
    <a href="{{ Auth::user()->level === \App\Utilities\Constant::user_level_admin ? route('admin.vehicle.create') : route('employee.vehicle.create') }}"
        class="inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition duration-200">
        + Thêm Xe Vào
    </a>
</section>

<!-- Danh sách phương tiện -->
<section id="vehicles">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-gray-700">Danh sách phương tiện</h2>
        <form method="GET" action="" class="flex space-x-2">
            <input type="text" name="keyword" value="{{ $keyword ?? '' }}"
                class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Tìm phương tiện...">
            <button type="submit"
                class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700 transition duration-200">🔍</button>
        </form>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Loại Phương Tiện</th>
                    <th class="px-4 py-2">Nhận Dạng</th>
                    <th class="px-4 py-2">Tên Người Gửi</th>
                    <th class="px-4 py-2">Biển Số</th>
                    <th class="px-4 py-2">Mã Xe</th>
                    <th class="px-4 py-2">Ngày Gửi</th>
                    <th class="px-4 py-2">Hành Động</th>
                </tr>
            </thead>
            <tbody class="text-center text-gray-700">
                @foreach ($vehicles as $vehicle)
                <tr class="border-t hover:bg-gray-100">
                    <td class="px-4 py-2">{{ $vehicle->id }}</td>
                    <td class="px-4 py-2">{{ $vehicle->vehicleType->vehicle_name }}</td>
                    <td class="px-4 py-2">{{ $vehicle->users_id ? 'Nhân viên' : 'Khách' }}</td>
                    <td class="px-4 py-2">{{ $vehicle->sender_name }}</td>
                    <td class="px-4 py-2">{{ $vehicle->license_plate }}</td>
                    <td class="px-4 py-2">{{ $vehicle->vehicleType->vehicle_code }}</td>
                    <td class="px-4 py-2">{{ $vehicle->check_in }}</td>
                    <td class="px-4 py-2">
                        <a href="{{Auth::user()->level === \App\Utilities\Constant::user_level_admin ? route('transactionadmin.confirm', $vehicle->id) : route('transaction.confirm', $vehicle->id) }}"
                            class="text-blue-600 hover:underline font-medium">Thanh Toán</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $vehicles->links() }}
    </div>
</section>
@endsection
