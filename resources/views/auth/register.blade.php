@extends('layout')

@section('title', 'Sign Up for an Account')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div>
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
            <h2>Tạo tài khoản</h2>
            <div class="spacer"></div>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Tên" required autofocus>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                <input id="password" type="password" class="form-control" name="password" placeholder="Mật khẩu" required>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Xác nhận mật khẩu"
                    required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Tạo tài khoản</button>
                    <div class="already-have-container">
                        <p><strong>Đã có tài khoản?</strong></p>
                        <a href="{{ route('login') }}">Đăng nhập ngay</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="auth-right">
        <h2 >Iphone 12 đã ra mắt:</h2> 
        <div class="spacer"></div>
        <iframe width="550" height="295" src="https://www.youtube.com/embed/65JrtwtTOdc?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style=" border: 1px solid black; border-radius: 10px"></iframe>

        <button type="submit" class="auth-button" style="border: none; cursor: pointer; font-size: 18px; line-height: 1.6; margin-top: 20px; float:right"> Mua ngay </button>
        </div>
    </div> <!-- end auth-pages -->
</div>
@endsection
