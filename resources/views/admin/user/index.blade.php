@extends('admin.layout.master1')

@section('title', 'user')


@section('content')


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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->level}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>



@endsection