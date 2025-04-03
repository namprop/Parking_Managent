<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý xe</title>
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
                        <!-- Add more users here -->
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
                        <!-- Add more vehicles here -->
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
                        <!-- Add more parking slots here -->
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
                        <!-- Add more parking tickets here -->
                    </tbody>
                </table>
            </section>

            <!-- Thanh toán -->
            <section id="transactions">
                <h2>Thanh toán</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Số vé</th>
                            <th>Số tiền</th>
                            <th>Trạng thái</th>
                            <th>Ngày thanh toán</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1234</td>
                            <td>50,000 VND</td>
                            <td>Hoàn thành</td>
                            <td>10/05/2025</td>
                        </tr>
                        <!-- Add more transactions here -->
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>
