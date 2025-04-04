@extends('admin.layout.master1')

@section('title', 'vehicle_type')


@section('content')

        <!-- Main content -->
        <div class="main-content">
            <h1>Quản lý hệ thống đỗ xe</h1>

            <!-- Dashboard -->
            <section id="dashboard">

                <h2>Thêm Loai Xe</h2>
                <form action="" >
                    <div class="form-group">
                        <input type="text" name="maloaixe" placeholder="Ma Loai Xe" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tenloaixe" placeholder="Ten Loai Xe" required>
                    </div>
                    <button type="submit">Thêm xe</button>
                </form>
            </section>

            <!-- Người dùng -->
            <section id="users">
                <h2>Vehicle_Type</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ma Loai Xe</th>
                            <th>Ten Loai Xe</th>

                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($vehicleTypes as $vehicleType)
                        <tr>
                            <td>{{$vehicleType->id}}</td>
                            <td>{{$vehicleType->maloaixe}}</td>
                            <td>{{$vehicleType->tenloaixe}}</td>
                            <td><a href="">Sua</a>|| <a href="">Xoa</a></td>       
                        </tr>
                        @endforeach
                        

                    </tbody>
                </table>
            </section>

@endsection





