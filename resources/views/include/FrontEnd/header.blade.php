<header class="header">      
  <nav class="navigation">
    <div class="container-fluid">
      <div class="navigation__column left">
        <div class="header__logo">
          <a class="ps-logo"  href="{{ route('FrontEnd.index') }}">
          	<span style="color:#797474; font-size: 40px;  font-family: 'Ubuntu', sans-serif;"><span style="color: #00B159">Permata</span><span style="color: #4d9aea;">Belajar
          </a></div>
      </div>
      <div class="navigation__column right" style="color: #000; font-size: 18px; padding-top: 10px; width: 85%;">
        
        @if(Session::get('login'))  
	        <div class="ps-cart">
	        	<a class="btn btn-primary btn-sm" href="{{ route('logout') }}">Keluar</a>
	        </div>
	    @endif
      </div>
    </div>
  </nav>
</header>

<style type="text/css">
	.icon-menu {
	    background-color: #56c174 !important;
	}

	.header-menu>li>a {
		background-color: #41c866;
	}
</style>