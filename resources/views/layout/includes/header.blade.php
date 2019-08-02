<header>
<a href="{{route('index')}}" class="logo"><img src="{{asset('img/logo_1.png')}}"></a>
  <div class="header-right">
      <div class="desktop-nav">
      <a href="{{route('services')}}"> services </a>
      <a href="{{route('partners')}}"> partners </a>
      <a href="{{route('requestQuote')}}"> request quote </a>
      <a href="{{route('contact')}}"> contact </a>
      <a href="" id="phone">023 1234 567 </a>
      <a href="{{route('claimPrize')}}" class="button"> claim a prize </a>
      </div>

      <button id="mobile-nav-toggle" class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#mobile-nav" aria-controls="mobile-nav" 
      aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
      </button>

  </div>

    <div class="collapse" id="mobile-nav">
            <a href="{{route('services')}}"> services </a>
            <a href="{{route('partners')}}"> partners </a>
            <a href="{{route('requestQuote')}}"> request quote </a>
            <a href="{{route('contact')}}"> contact </a>
            <a href="" id="phone">023 1234 567 </a>
            <a href="{{route('claimPrize')}}" class="button"> claim a prize </a>
    </div> 
</header>