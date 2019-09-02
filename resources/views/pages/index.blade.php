@extends('layout.app')
@section('content')

<div class="hero index-hero" style="">
        <span id="hero_text">
            We create bespoke incentives & prize promotions
            that boost brands.
        </span>
</div>

<div class="container pb-109">
    <div class="heading-text">
            <h1> Specialist prize fulfilment & management partner agency </h1>
            <p> 
                Your prizes and incentives taken care of. We work with partner agencies to source prizes, 
                look after fulfilment and winner management for a complete end-to-end specialist service. 
                We are the Prize Professionals.
             </p> 
    </div> 

    <div class="row">
            <div class="card col-md-4 card-custom" style="">
                <img src="{{asset('img/prize-sourcing.svg')}}" class="card-img-top" alt="prize sourcing">
                <div class="card-body">
                    <h5 class="card-title">Prize sourcing</h5>
                    <p class="card-text prize-sourcing-text">
                        Tell us the prize you want and we’ll supply it, or let us 
                        source the perfect prize to match your promotion.
                    </p>
                    <a href="{{route('prizeSourcing')}}" class="btn btn-pp">FIND OUT MORE</a>
                </div>
            </div>
            <div class="card col-md-4 card-custom" style="">
                    <img src="{{asset('img/prize-fulfilment.svg')}}" class="card-img-top" alt="prize fulfillment">
                    <div class="card-body">
                        <h5 class="card-title">Prize fulfillment</h5>
                        <p class="card-text prize-fulfilment-text">As well as trips and experiences, we can also send prizes.
                             We’ll also contact the winners and make all arrangements. </p>
                        <a href="{{route('prizeFulfillment')}}" class="btn btn-pp">FIND OUT MORE</a>
                    </div>
            </div>
            <div class="card col-md-4 card-custom" style="">
                    <img src="{{asset('img/winner-management.svg')}}" class="card-img-top" alt="winner management">
                    <div class="card-body">
                        <h5 class="card-title">Winner management</h5>
                        <p class="card-text winner-mgt-text">
                             We treat every winner like royalty. Their dedicated Prize Professional is 
                             with them every step of their journey.
                        </p>
                        <a href="{{route('winnerManagement')}}" class="btn btn-pp">FIND OUT MORE</a>
                    </div>
            </div>
    </div>

    <div class="row">
                <div class="card col-md-4 card-custom" style="">
                        <img src="{{asset('img/customer-service-support.svg')}}" class="card-img-top" alt="customer service support">
                        <div class="card-body">
                                <h5 class="card-title">Customer service support</h5>
                                <p class="card-text customer-service-support-text">
                                        We can take care of all customer questions and prize entries allowing you 
                                        to get on with what you need to do.
                                </p>
                                <a href="#" class="btn btn-pp">FIND OUT MORE</a>
                        </div>
                </div>
                <div class="card col-md-4 card-custom" style="">
                        <img src="{{asset('img/campaign-handling.svg')}}" class="card-img-top" alt="campaign handling">
                        <div class="card-body">
                                <h5 class="card-title campaign-handling-title">Campaign handling</h5>
                                <p class="card-text campaign-handling-text">Use us as much as you need, from coming up with the 
                                        big idea to execution, we’re used to working with partner agencies. </p>
                                <a href="#" class="btn btn-pp">FIND OUT MORE</a>
                        </div>
                </div>
                <div class="card col-md-4 card-custom" style="">
                        <img src="{{asset('img/end-to-end-management.svg')}}" class="card-img-top" alt="end to end management">
                        <div class="card-body">
                                <h5 class="card-title">End-to-end management</h5>
                                <p class="card-text end-to-end-text">
                                        From the campaign idea to prize delivery and everything in between, we offer a full end-to-end campaign management service.
                                </p>
                                <a href="#" class="btn btn-pp">FIND OUT MORE</a>
                        </div>
                </div>             
    </div>

</div>

<div class="container-fluid bg-brand-color pb-86">
    <div class="container ">
            <div class="heading-text"> <h1 class="mt-103"> How it works </h1> </div>
            <div class="row">
                    <div class="card col-md-3">
                            <img src="{{asset('img/brief-us.svg')}}" class="card-img-top" alt="brief us">
                            <div class="card-body">
                                <h5 class="card-title">Brief us</h5>
                                <p class="card-text">
                                        Give us a precise brief, an idea that needs polishing or let us handle the whole campaign
                                </p>
                            </div>
                    </div>
                    <div class="mobile-hide desktop-arrow-how-it-works-wrapper">
                         <img src="{{asset('img/long-arrow.png')}}" class="desktop-arrow-how-it-works">
                    </div>
                    <div class="mobile-show mobile-arrow-how-it-works-wrapper">
                           <img src="{{asset('img/long-arrow-mobile.png')}}" class="mobile-arrow-how-it-works">
                    </div>
                    <div class="card col-md-3">
                            <img src="{{asset('img/we-do-our-thing.svg')}}" class="card-img-top" alt="we do our thing">
                            <div class="card-body">
                                <h5 class="card-title">We do our thing</h5>
                                <p class="card-text">A team will be dedicated to your campaign and will come up 
                                    with everything, all on-brand</p>
                            </div>
                    </div>
                    <div class="mobile-hide desktop-arrow-how-it-works-wrapper">
                            <img src="{{asset('img/long-arrow.png')}}" class="desktop-arrow-how-it-works">
                    </div>
                    <div class="mobile-show mobile-arrow-how-it-works-wrapper">
                        <img src="{{asset('img/long-arrow-mobile.png')}}" class="mobile-arrow-how-it-works">
                   </div>
                    <div class="card col-md-3">
                            <img src="{{asset('img/winners-cared-for.svg')}}" class="card-img-top" alt="your winners cared for">
                            <div class="card-body">
                                <h5 class="card-title">Your winners cared for</h5>
                                <p class="card-text">
                                        We’ll then look after your winners and make sure they receive the VIP treatment they expect
                                </p>
                            </div>
                    </div>
            </div>
    </div>
</div>

<div class="in-content-hero prize-promotion-hero" style=""></div>

<div class="container pb-109">
        <div class="heading-text">
                <h1 class="mt-120"> Your new prize promotion partner. </h1>
                <p> We love working with other agencies! We can provide as much support 
                    as you need from prize sourcing to end-to-end campaign management.
                </p> 
        </div>
        <div class="row">
                <div class="card col-md-4" style="">
                                <img src="{{asset('img/collaborative.svg')}}" class="card-img-top" alt="increased awareness">
                                <div class="card-body">
                                        <h5 class="card-title">Collaborative</h5>
                                        <p class="card-text"> 
                                           We’re flexible with our creative approach and happy to collaborate on the creative process
                                        </p>
                                </div>
                </div>
                <div class="card col-md-4" style="">
                                <img src="{{asset('img/time-saving.svg')}}" class="card-img-top" alt="increased awareness">
                                <div class="card-body">
                                        <h5 class="card-title">Time saving</h5>
                                        <p class="card-text">
                                                With a tonne of ideas and a lengthy list of suppliers, we can do the work for you, saving you time
                                        </p>
                                </div>
                </div>
                <div class="card col-md-4" style="">
                                <img src="{{asset('img/results-driven.svg')}}" class="card-img-top" alt="increased awareness">
                                <div class="card-body">
                                        <h5 class="card-title">Results driven</h5>
                                        <p class="card-text">
                                                We know that great campaigns produce great results, which is why we’re all about those KPIs
                                        </p>
                                </div>
                </div>
        </div> 
</div>

<div class="in-content-hero customer-win-hero" style=""></div>

<div class="container">
        <div class="heading-text">
                <h1> When your customers win, so do you </h1>
                <p> Boost your brand or campaign by influencing consumer behaviour with unmissable 
                    prizes and incentives, or internal employee rewards.
                </p> 
        </div>       
</div>

<div class="in-content-hero prize-incentive-hero"></div>


<div class="container">
        <div class="heading-text">
                <h1 class="mt-120"> Prizes & incentives for all </h1>
                <p> Any budget, any audience, anywhere in the world. We have the right prizes for your promotional campaign.</p> 
        </div>       
        <div class="row mt-83">
                <div class="card col-md-4">
                        <img src="{{asset('img/travel-holidays.svg')}}" class="card-img-top prize-incentive-img" alt="Travel & holidays">
                        <div class="card-body mt-83">
                                <h5 class="card-title">Travel & holidays</h5>
                        </div>
                </div>
                <div class="card col-md-4">
                        <img src="{{asset('img/experience-days.svg')}}" class="card-img-top prize-incentive-img" alt="Experience days">
                        <div class="card-body mt-83">
                                <h5 class="card-title">Experience days</h5>
                        </div>
                </div>
                <div class="card col-md-4">
                        <img src="{{asset('img/vouchers.svg')}}" class="card-img-top prize-incentive-img" alt="increased loyalty">
                        <div class="card-body mt-83">
                                <h5 class="card-title">Vouchers</h5>
                        </div>
                </div>
        </div>
        <div class="row mt-83">
                <div class="card col-md-4">
                        <img src="{{asset('img/weekend-breaks.svg')}}" class="card-img-top prize-incentive-img" alt="Weekend breaks">
                        <div class="card-body mt-83">
                                <h5 class="card-title">Weekend breaks</h5>
                        </div>
                </div>
                <div class="card col-md-4">
                        <img src="{{asset('img/high-value-prizes.svg')}}" class="card-img-top prize-incentive-img" alt="High value items">
                        <div class="card-body mt-83">
                                <h5 class="card-title">High Value Items</h5>
                        </div>
                </div>
                <div class="card col-md-4">
                        <img src="{{asset('img/gifts-prizes.svg')}}" class="card-img-top prize-incentive-img" alt="Gifts & prizes">
                        <div class="card-body mt-83">
                                <h5 class="card-title">Gifts & prizes</h5>
                        </div>
                </div>
        </div>
</div>

<div class="container-fluid grey-bg">
        <div class="container">
                <div class="heading-text ">
                        <h1> Brands we work with </h1>
                        <p>We create incentives and prize promotions for some of the world’s largest 
                           brands over many industry sectors. Whether a small startup or a corporate enterprise, 
                           we tailor our approach to each brand’s individual needs.
                        </p> 
                </div>

                <div class="row py-md-5 text-center">
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/airbnb.png')}}" class="" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/facebook.png')}}" class="" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/apple.png')}}" class="" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/windows.png')}}" class="" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/xbox.png')}}" class="" alt="">
                        </div>
                </div>

                <div class="row py-md-5 text-center">
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/mailchimp.png')}}" class="" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/linkedin.png')}}" class="" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/instagram.png')}}" class="" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/whatsapp.png')}}" class="" alt="">
                        </div>
                        <div class="col-sm mt-4 mb-4">
                                <img src="{{asset('img/adobe.png')}}" class="" alt="">
                        </div>
                </div>
        </div>
      
</div>

<div class="container-fluid bg-brand-color py-md-5">
        <div class="container">
                <div class="lets-talk mt-83">
                        <h1> Let’s talk</h1>
                        <p>Learn how it all works, request a quote, get started working with us or ask us anything.</p> 
                <a href="{{route('contact')}}" class="btn white-button mt-27">Contact us</a>
                </div> 
        </div>
</div>

@endsection
