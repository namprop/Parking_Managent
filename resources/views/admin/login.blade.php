@extends('admin.layout.master')

@section('title', 'login')


@section('body')

    <div class="login-container">
        <h2>Đăng nhập Admin</h2>
        @if (session('notification'))
            <div class="alert alert-danger">
                {{ session('notification') }}
            </div>
        @endif

        <form action=" " method="POST">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Đăng nhập</button>
        </form>
    </div>

@endsection






