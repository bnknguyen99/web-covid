@extends('layout')

@section('title', 'My Profile')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>My Profile</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="products-section container">
        <div class="sidebar">

            <ul>
              <li class="active"><a href="{{ route('users.edit') }}">Thông tin của tôi</a></li>
              <li><a href="{{ route('orders.index') }}">Đơn hàng</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="my-profile">
            <div class="products-header">
                <h1 class="stylish-heading">Thông tin</h1>
            </div>

            <div>
                <form action="{{ route('users.update') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-control">
                        <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Tên" required>
                    </div>
                    <div class="form-control">
                        <input id="address" type="text" name="address" value="{{ old('address', $user->address) }}" placeholder="Địa chỉ">
                    </div>
                    <div class="form-control">
                        <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Email" required>
                    </div>
                    <div class="form-control">
                        <input id="created_at" type="created_at" name="created_at" value="{{ old('role', $user->created_at) }}" placeholder="Ngày tạo" required disabled>
                    </div>
                    <div class="form-control">
                        <input id="password" type="password" name="password" placeholder="Mật khẩu">
                        <div><p style="text-align: right; padding-right: 300px; font-size:12px">Để trống nếu không muốn cập nhật mật khẩu</p></div>
                    </div>
                    <div class="form-control">
                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu">
                    </div>
                    <div>
                        <button type="submit" class="my-profile-button">Update Profile</button>
                    </div>
                </form>
            </div>

            <div class="spacer"></div>
        </div>
    </div>

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
