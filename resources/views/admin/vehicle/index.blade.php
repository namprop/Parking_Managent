@extends('admin.layout.master1')

@section('title', 'vehicle')


@section('content')

        <!-- Main content -->
        <div class="main-content">
            <h1>Quản lý hệ thống đỗ xe</h1>

            <!-- Dashboard -->
            <section id="dashboard">

                <h2>Thêm xe mới</h2>
                <form>
                    <div class="form-group">
                        <select name="vehicle_types_id" required>
                            <option value="">-- Chọn loại phương tiện --</option>
                            <option value="1">Xe máy</option>
                            <option value="2">Ô tô</option>
                            <option value="3">Xe đạp</option>
                            <!-- Bạn có thể thêm các loại khác tùy ý -->
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tennguoigui" placeholder="Ten Nguoi Gui" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="bienso" placeholder="Bien So" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="ngaygui" placeholder="Ngay gui" required>
                    </div>
                    <button type="submit">Thêm xe</button>
                </form>
            </section>

            <!-- Người dùng -->
            <section id="users">
                <h2>Danh sách người dùng</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Loai Phuong Tien</th>
                            <th>Ten nguoi gui</th>
                            <th>Bien So</th>
                            <th>Ngay gui</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($vehicles as $vehicle)
                        <tr>
                            <td>{{$vehicle->id}}</td>
                            <td>{{$vehicle->vehicleType->tenloaixe}}</td>
                            <td>{{$vehicle->tennguoigui}}</td>
                            <td>{{$vehicle->bienso}}</td>
                            <td>{{$vehicle->ngaygui}}</td>
                            <td><a href="">Thanh Toan</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </section>

@endsection





