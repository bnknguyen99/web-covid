@extends('layout')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div class="auth-left">
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2>Đăng nhập</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <span>Tài khoản:</span>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                <span>Mật khẩu: </span>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Đăng nhập</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Nhớ mật khẩu
                </div>

                <div class="spacer"></div>

                <a href="{{ route('password.request') }}">
                    Quên mật khẩu!
                </a>

            </form>
        </div>

        <div class="auth-right">
            <h2>Khác hàng mới</h2>
            <div class="spacer"></div>
            <h3>Tiết kiệm thời gian.</h3>
            <div class="spacer"></div>
            <a href="{{ route('guestCheckout.index') }}" class="auth-button-hollow">Tiếp tục mua sắm</a>
            <div class="spacer"></div>
            <h3 style="text-align: center;">---- hoặc ----</h3>
            <h3>Tạo một tài khoản để thanh toán và truy cập vào lịch sử đặt hàng. </h3>
            <div class="spacer"></div>
            <a href="{{ route('register') }}" class="auth-button-hollow">Tạo tài khoản</a>

        </div>
    </div>
</div>
@endsection
