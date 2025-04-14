@extends(Auth::user()->level === \App\Utilities\Constant::user_level_admin ? 'admin.layout.master1' : 'admin.layout.masterEmployee')

@section('body')
    <section id="users">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Lịch Sử Giao Dịch</h2>


        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">ID</th>
                        <th class="px-6 py-3 text-left">Tên Khách Hàng</th>
                        <th class="px-6 py-3 text-left">Tên Phương Tiện</th>
                        <th class="px-6 py-3 text-left">Biển số</th>
                        <th class="px-6 py-3 text-left">Giờ Vào</th>
                        <th class="px-6 py-3 text-left">Giờ Ra</th>
                        <th class="px-6 py-3 text-left">Số Tiền</th>
                        <th class="px-6 py-3 text-left">Ca Của nhân Viên</th>
                        @if (Auth::user()->level === \App\Utilities\Constant::user_level_admin)
                            <th class="px-6 py-3 text-left">Hành Động</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr class="border-t hover:bg-gray-100">
                            <td class="px-6 py-4">{{ $transaction->id }}</td>
                            <td class="px-6 py-4">{{ $transaction->sender }}</td>
                            <td class="px-6 py-4">{{ $transaction->vehicle_name }}</td>
                            <td class="px-6 py-4"> {{ $transaction->license_plate }} </td>
                            <td class="px-6 py-4"> {{ $transaction->check_in }} </td>
                            <td class="px-6 py-4"> {{ $transaction->check_out }} </td>
                            <td class="px-6 py-4"> {{ $transaction->price }}</td>
                            <td class="px-6 py-4">{{ $transaction->employee_name }}</td>
                            <td class="px-6 py-4">
                                <!-- Nút xóa -->
                                @if (Auth::user()->level === \App\Utilities\Constant::user_level_admin)
                                    <form action="{{ route('transactionadmin.destroy', $transaction->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Xóa</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
@endsection
