<header>
    <div class="top-nav container">
      <div class="top-nav-left">
          <div class="logo"><a href="/"><img src="http://store.vnpt.com.vn/img/logo-vnpt-store.png" alt="logo"></a></div>
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          {{ menu('main', 'partials.menus.main') }}
          @endif
      </div>
      <div class="top-nav-right">
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          @include('partials.menus.main-right')
          @endif
      </div>
    </div> <!-- end top-nav -->
</header>