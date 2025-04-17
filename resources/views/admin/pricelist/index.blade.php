@extends(Auth::user()->level === \App\Utilities\Constant::user_level_admin ? 'admin.layout.master1' : 'admin.layout.masterEmployee')

@section('body')
<div class="max-w-7xl mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-gray-700">Bảng giá dịch vụ</h2>
        @if(Auth::user()->level === \App\Utilities\Constant::user_level_admin)
        <a href="/admin/pricelist/create"
           class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">
            + Thêm mới
        </a>
        @endif
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($pricelist as $vehicleTypeId => $priceGroup)
            <div class="bg-white shadow border border-gray-200 rounded-lg p-4">
                <h3 class="text-base font-semibold text-gray-800 mb-3 text-center">
                    Loại xe: {{ $priceGroup->first()->vehicleType->vehicle_name }}
                </h3>

                <div class="overflow-x-auto">
                    <table class="min-w-full text-xs border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="px-2 py-1 border">Thoi Gian</th>
                                <th class="px-2 py-1 border">Thời lượng</th>
                                <th class="px-2 py-1 border">Giá</th>
                                @if(Auth::user()->level === \App\Utilities\Constant::user_level_admin)
                                <th class="px-2 py-1 border text-center">Hành động</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($priceGroup as $item)
                                <tr>
                                    <td class="px-2 py-1 border">{{ $item->duration_label }}</td>
                                    <td class="px-2 py-1 border text-center">{{ $item->duration }} giờ</td>
                                    <td class="px-2 py-1 border text-right">
                                        {{ number_format($item->price, 0, ',', '.') }} đ
                                    </td>

                                    @if(Auth::user()->level === \App\Utilities\Constant::user_level_admin)
                                    <td class="px-2 py-1 border text-center space-x-1">
                                        <a href="/admin/pricelist/{{$item->id}}/edit"
                                           class="text-blue-500 hover:underline text-xs">Sửa</a>
                                        <form action="/admin/pricelist/{{ $item->id }}"
                                              method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa?')"
                                                    class="text-red-500 hover:underline text-xs">
                                                Xóa
                                            </button>
                                        </form>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
