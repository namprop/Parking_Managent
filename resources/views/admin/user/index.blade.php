<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hệ thống đỗ xe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }

        .sidebar-header {
            text-align: center;
        }

        .sidebar-header .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .sidebar-menu {
            list-style: none;
            margin-top: 20px;
        }

        .sidebar-menu li {
            margin: 15px 0;
        }

        .sidebar-menu li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar-menu li a:hover {
            background-color: #34495e;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: white;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        section {
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #2c3e50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stat-box {
            background: #2c3e50;
            color: white;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            text-align: center;
        }

        .form-group {
            margin-bottom: 10px;
        }

        input, button {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #2c3e50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #34495e;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="avatar.png" alt="Admin Avatar" class="avatar">
                <h3>Người quản lý</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#dashboard">Dashboard</a></li>
                <li><a href="#users">Người dùng</a></li>
                <li><a href="#vehicles">Phương tiện</a></li>
                <li><a href="#parking-slots">Vị trí đỗ xe</a></li>
                <li><a href="#parking-tickets">Vé đỗ xe</a></li>
                <li><a href="#transactions">Thanh toán</a></li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="main-content">
            <h1>Quản lý hệ thống đỗ xe</h1>

            <!-- Dashboard -->
            <section id="dashboard">
                <h2>Dashboard</h2>
                <div class="stats">
                    <div class="stat-box">
                        <h2>10</h2>
                        <p>Xe đang đỗ</p>
                    </div>
                    <div class="stat-box">
                        <h2>5</h2>
                        <p>Vị trí còn trống</p>
                    </div>
                </div>

                <h2>Thêm xe mới</h2>
                <form>
                    <div class="form-group">
                        <input type="text" name="license_plate" placeholder="Biển số xe" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="vehicle_type" placeholder="Loại xe" required>
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
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Avatar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nguyễn Văn A</td>
                            <td>a@example.com</td>
                            <td>Admin</td>
                            <td><img src="avatar1.png" alt="Avatar" class="avatar"></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Phương tiện -->
            <section id="vehicles">
                <h2>Danh sách phương tiện</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Biển số</th>
                            <th>Loại xe</th>
                            <th>Hãng xe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>29A-12345</td>
                            <td>Ô tô</td>
                            <td>Toyota</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Vị trí đỗ xe -->
            <section id="parking-slots">
                <h2>Vị trí đỗ xe</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Số vị trí</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>A1</td>
                            <td>Còn trống</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Vé đỗ xe -->
            <section id="parking-tickets">
                <h2>Vé đỗ xe</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Biển số xe</th>
                            <th>Vị trí đỗ</th>
                            <th>Ngày giờ check-in</th>
                            <th>Ngày giờ check-out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>29A-12345</td>
                            <td>A1</td>
                            <td>10/05/2025 08:00</td>
                            <td>10/05/2025 10:00</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>
