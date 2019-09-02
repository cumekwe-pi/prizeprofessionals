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
                  <span> hello@prizeprofessionals.com </span>
              </div>
              <a href="{{route('claimPrize')}}" class="button"> claim a prize </a>
            </div>
        
        </div>

        <div class="mobile-nav-content">
          <div class="phone-icon"> <i class="fa fa-phone fa-2x"></i> </div>
            <div class="hamburger-icon">  
              <button id="mobile-nav-toggle" class="navbar-toggler" type="button" data-toggle="collapse" 
              data-target="#mobile-nav" aria-controls="mobile-nav" 
              aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars fa-2x"></i>
              </button>
            </div>
          
        </div>
    

  </div>

</header>
<div class="collapse" id="mobile-nav">
  <a href="{{route('services')}}"> services </a>
  <a href="{{route('partners')}}"> partners </a>
  <a href="{{route('requestQuote')}}"> request quote </a>
  <a href="{{route('contact')}}"> contact </a>

  <div class="phone-email" style="">
      <span> 023 1234 567 </span>
      <span> hello@prizeprofessionals.com </span>
  </div>
</div> 