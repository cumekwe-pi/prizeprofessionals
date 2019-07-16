@extends('layout.app')
@section('content')

<div class="hero" style="background:url(img/index_hero.jpg) no-repeat; background-size: cover;">
        <span id="hero_text">
            We create bespoke incentives & prize promotions
            that boost brands.
        </span>
</div>

<div class="container">
    <div class="heading-text">
            <h1> We are the Prize Professionals </h1>
            <p> Your prizes and incentives taken care of. We create and manage 
                bespoke campaigns that drive business to boost your brand, any size, 
                anywhere in the world
             </p> 
    </div>       
    <div class="row">
            <div class="card col-md-4" style="">
                <img src="{{asset('img/gift.png')}}" class="card-img-top" alt="prize sourcing">
                <div class="card-body">
                    <h5 class="card-title">Prize sourcing</h5>
                    <p class="card-text">
                        Tell us the prize you want and we’ll find it, or let us source the perfect 
                        prize to match your promotion.
                    </p>
                    <a href="#" class="btn button">FIND OUT MORE</a>
                </div>
            </div>
            <div class="card col-md-4" style="">
                    <img src="{{asset('img/truck.png')}}" class="card-img-top" alt="prize fulfillment">
                    <div class="card-body">
                        <h5 class="card-title">Prize fulfillment</h5>
                        <p class="card-text">As well as trips and experiences, we can also send prizes.
                             We’ll also contact the winners and make all arrangements. </p>
                        <a href="#" class="btn button">FIND OUT MORE</a>
                    </div>
            </div>
            <div class="card col-md-4" style="">
                    <img src="{{asset('img/trophy.png')}}" class="card-img-top" alt="winner management">
                    <div class="card-body">
                        <h5 class="card-title">Winner management</h5>
                        <p class="card-text">
                             We treat every winner like royalty. Their dedicated Prize Professional is 
                             with them every step of their journey.
                        </p>
                        <a href="#" class="btn button">FIND OUT MORE</a>
                    </div>
            </div>
    </div>
</div>

<div class="container-fluid bg-brand-color">
    <div class="container">
            <div class="heading-text"> <h1> How it works </h1> </div>
            <div class="row">
                    <div class="card col-sm-3">
                            <img src="{{asset('img/list-ul.png')}}" class="card-img-top" alt="brief us">
                            <div class="card-body">
                                <h5 class="card-title">Brief us</h5>
                                <p class="card-text">
                                     Give us a precise brief, an idea that needs polishing or let us do our thing
                                </p>
                            </div>
                    </div>
                    <div class="col-sm-1 mobile-hide">
                         <img src="{{asset('img/long-arrow.png')}}">
                    </div>
                    <div class="col-sm-1 mobile-show">
                           <img src="{{asset('img/long-arrow-mobile.png')}}">
                    </div>
                    <div class="card col-sm-3">
                            <img src="{{asset('img/pencil-alt.png')}}" class="card-img-top" alt="we do our thing">
                            <div class="card-body">
                                <h5 class="card-title">We do our thing</h5>
                                <p class="card-text">A team will be dedicated to your campaign and will come up 
                                    with everything, all on-brand</p>
                            </div>
                    </div>
                    <div class="col-sm-1 mobile-hide">
                            <img src="{{asset('img/long-arrow.png')}}">
                    </div>
                    <div class="col-sm-1 mobile-show">
                        <img src="{{asset('img/long-arrow-mobile.png')}}">
                   </div>
                    <div class="card col-sm-3">
                            <img src="{{asset('img/heart.png')}}" class="card-img-top" alt="your winners cared for">
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

<div class="in-content-hero" style="background:url(img/splash-img-2.jpg) no-repeat; background-size: cover;"></div>

<div class="container">
        <div class="heading-text">
                <h1> When your customers win, so do you </h1>
                <p> Boost your brand or campaign by influencing consumer
                    behaviour with unmissable prizes and incentives.
                </p> 
        </div>       
        <div class="row">
                <div class="card col-md-4" style="">
                    <img src="{{asset('img/bullhorn.png')}}" class="card-img-top" alt="increased awareness">
                    <div class="card-body">
                        <h5 class="card-title">Increased awareness</h5>
                        <p class="card-text"> A prize or incentive is an ideal opportunity to promote your brand or product</p>
                    </div>
                </div>
                <div class="card col-md-4" style="">
                        <img src="{{asset('img/chart-line.png')}}" class="card-img-top" alt="Increased profits">
                        <div class="card-body">
                            <h5 class="card-title">Increased profits</h5>
                            <p class="card-text">Another reason for consumers to choose your product over a competitor.</p>
                        </div>
                </div>
                <div class="card col-md-4" style="">
                        <img src="{{asset('img/heart-color.png')}}" class="card-img-top" alt="increased loyalty">
                        <div class="card-body">
                            <h5 class="card-title">Increased loyalty</h5>
                            <p class="card-text"> Customers will recognise your generosity and will look out for future campaigns</p>
                        </div>
                </div>
        </div>
</div>

<div class="in-content-hero" style="background:url(img/splash-img-1.jpg) no-repeat; background-size: cover;"></div>


<div class="container">
        <div class="heading-text">
                <h1> Prizes & incentives for all </h1>
                <p> Any budget, any audience, anywhere in the world. We have the right prizes for your promotional campaign.</p> 
        </div>       
        <div class="row">
                <div class="card col-md-4">
                        <img src="{{asset('img/umbrella-beach.png')}}" class="card-img-top" alt="Travel & holidays">
                        <div class="card-body">
                                <h5 class="card-title">Travel & holidays</h5>
                        </div>
                </div>
                <div class="card col-md-4">
                        <img src="{{asset('img/skiing.png')}}" class="card-img-top" alt="Experience days">
                        <div class="card-body">
                                <h5 class="card-title">Experience days</h5>
                        </div>
                </div>
                <div class="card col-md-4">
                        <img src="{{asset('img/voucher.png')}}" class="card-img-top" alt="increased loyalty">
                        <div class="card-body">
                                <h5 class="card-title">Vouchers</h5>
                        </div>
                </div>
        </div>
        <div class="row">
                <div class="card col-md-4">
                        <img src="{{asset('img/globe-europe.png')}}" class="card-img-top" alt="Weekend breaks">
                        <div class="card-body">
                                <h5 class="card-title">Weekend breaks</h5>
                        </div>
                </div>
                <div class="card col-md-4">
                        <img src="{{asset('img/users.png')}}" class="card-img-top" alt="Group experiences">
                        <div class="card-body">
                                <h5 class="card-title">Group experiences</h5>
                        </div>
                </div>
                <div class="card col-md-4">
                        <img src="{{asset('img/gifts.png')}}" class="card-img-top" alt="Gifts & prizes">
                        <div class="card-body">
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
                                <img src="{{asset('img/airbnb.png')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/facebook.png')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/apple.png')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/windows.png')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/xbox.png')}}" class="card-img-top" alt="">
                        </div>
                </div>

                <div class="row py-md-5 text-center">
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/mailchimp.png')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/linkedin.png')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/instagram.png')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-sm mt-4">
                                <img src="{{asset('img/whatsapp.png')}}" class="card-img-top" alt="">
                        </div>
                        <div class="col-sm mt-4 mb-4">
                                <img src="{{asset('img/adobe.png')}}" class="card-img-top" alt="">
                        </div>
                </div>
        </div>
      
</div>

<div class="container-fluid bg-brand-color py-md-5">
        <div class="container">
                <div class="heading-text ">
                        <h1> Let’s talk</h1>
                        <p>Learn how it all works, request a quote, get started working with us or ask us anything.</p> 
                        <a href="#" class="btn white-button">Contact us</a>
                </div> 
        </div>
</div>

@endsection
