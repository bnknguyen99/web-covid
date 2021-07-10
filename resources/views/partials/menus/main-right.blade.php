<ul>
    <li><a href="/" >Trang chủ</a></li>
    <li><a href="/shop">Cửa hàng</a></li>    
    <li><a href="/">Liên hệ</a></li>    
    <li><a href="{{ route('cart.index') }}">Giỏ hàng
    @if (Cart::instance('default')->count() > 0)
    <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
    @endif
    
    @guest
    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
    @else
    <li>
        <a href="{{ route('users.edit') }}">Tài khoản</i></a>
    </li>
    <li>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Đăng xuất
        </a>
    </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    @endguest
    
    </a></li>
    {{-- @foreach($items as $menu_item)
        <li>
            <a href="{{ $menu_item->link() }}">
                {{ $menu_item->title }}
                @if ($menu_item->title === 'Cart')
                    @if (Cart::instance('default')->count() > 0)
                    <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                    @endif
                @endif
            </a>
        </li>
    @endforeach --}}
</ul>
