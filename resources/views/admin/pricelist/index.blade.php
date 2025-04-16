@extends(Auth::user()->level === \App\Utilities\Constant::user_level_admin ? 'admin.layout.master1' : 'admin.layout.masterEmployee')

@section('body')
    <div class="w-full max-w-4xl mx-auto mt-10">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-700 uppercase">Bảng Giá Gửi Xe</h1>
            {{-- @if (Auth::user()->level === \App\Utilities\Constant::user_level_admin)
                <a href=""
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm shadow transition">
                    Sửa đổi
                </a>
            @endif --}}
        </div>

        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="w-full table-auto border-collapse text-center text-sm text-gray-700">
                <thead class="bg-gray-200 text-gray-800">
                    <tr>
                        <th class="border px-4 py-3">Loại xe</th>
                        @foreach ($pricelists as $pricelist)
                            <th class="border px-4 py-3">{{ ucfirst($pricelist->vehicleType->vehicle_name) }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="odd:bg-gray-50">
                        <td class="border px-4 py-3 font-medium">Giá Một Giờ</td>
                        @foreach ($pricelists as $pricelist)
                            <td class="border px-4 py-3">{{ number_format($pricelist->price_one_hour, 0, ',', '.') }}đ/lượt
                            </td>
                        @endforeach
                    </tr>
                    <tr class="odd:bg-gray-50">
                        <td class="border px-4 py-3 font-medium">Giá Nửa Ngày</td>
                        @foreach ($pricelists as $pricelist)
                            <td class="border px-4 py-3">{{ number_format($pricelist->price_half_day, 0, ',', '.') }}đ/lượt
                            </td>
                        @endforeach
                    </tr>
                    <tr class="odd:bg-gray-50">
                        <td class="border px-4 py-3 font-medium">Giá Một Ngày</td>
                        @foreach ($pricelists as $pricelist)
                            <td class="border px-4 py-3">{{ number_format($pricelist->price_full_day, 0, ',', '.') }}đ/lượt
                            </td>
                        @endforeach
                    </tr>
                    <tr class="odd:bg-gray-50">
                        <td class="border px-4 py-3 font-medium">Giá Một Tuần</td>
                        @foreach ($pricelists as $pricelist)
                            <td class="border px-4 py-3">{{ number_format($pricelist->price_week, 0, ',', '.') }}đ/tuần</td>
                        @endforeach
                    </tr>
                    <tr class="odd:bg-gray-50">
                        <td class="border px-4 py-3 font-medium">Giá Một Tháng</td>
                        @foreach ($pricelists as $pricelist)
                            <td class="border px-4 py-3">{{ number_format($pricelist->price_month, 0, ',', '.') }}đ/tháng
                            </td>
                        @endforeach
                    </tr>

                    @if (Auth::user()->level === \App\Utilities\Constant::user_level_admin)
                        <tr class="bg-gray-50">
                            <td class="border px-4 py-3 font-semibold text-gray-700 text-left"></td>
                            @foreach ($pricelists as $pricelist)
                                <td class="border px-4 py-3 text-center">
                                    <a href="/admin/pricelist/{{$pricelist->id}}/edit"
                                        class="inline-flex items-center gap-1 text-xs text-blue-600 hover:text-blue-800 bg-white hover:bg-blue-50 border border-blue-200 px-3 py-1 rounded-md shadow-sm transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536M9 13l6.536-6.536a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-1.414.586H7v-3.414a2 2 0 01.586-1.414z" />
                                        </svg>
                                        Điều chỉnh
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
