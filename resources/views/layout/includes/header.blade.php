<header>
  <div class="header-left">
      <a href="{{route('index')}}" ><img class="logo" src="{{asset('img/prize-professional-logo.png')}}"></a>
  </div>

    <div class="header-right">
      <div class="desktop-nav">
          <div class="desktop-nav-links">
              <a href="{{route('services')}}"> services </a>
              <a href="{{route('partners')}}"> partners </a>
              <a href="{{route('requestQuote')}}"> request quote </a>
              <a href="{{route('contact')}}"> contact </a>
          </div>
         
          <div class="phone-email-prize">
            <div class="phone-email" style="">
                <span> 023 1234 567 </span>
                <span> hello@prizeprofessionals.co.uk </span>
            </div>
            <a href="{{route('claimPrize')}}" class="button"> claim a prize </a>
          </div>
      
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