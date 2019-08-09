@extends('layout.app')
@section('content')

<div class="in-content-hero" style="background:url(img/winners-managed.jpg) no-repeat; background-size: cover;"></div>

<div class="container">
        <div class="heading-text">
                <h1> Specialist Campaign Winner Management </h1>
                <p> 
                    We’re experts in winner management; notifying winners swiftly and with a
                    personal approach while providing exceptional customer support and meeting
                    all brand guidelines
                </p> 
        </div>
        <div class="row">
            <p>Creating and running a successful prize promotion campaign is great, 
               but what happens with the winners? If entries aren’t collected and organised correctly, 
               finding and then contacting winners can become much harder than it should be. 
               That’s where the Prize Professionals come in; we remove all the stress and 
               risk of winner management and do it all for you. From the initial contact to
               continued customer support, we make sure your winners keep smiling from
                when they’re first told to when they receive their prize.
            </p>
            <p>
                We make sure every contact made with the winner is on-brand and meets the 
                tone of voice set by the brand. This keeps the whole campaign feeling 
                professional, legitimate and makes the winner feel special. Every winner
                we contact is made to feel like a VIP, from the moment we let them know all
                the way through until they have received their prize or returned from their trip.  
            </p>
            <p>
                After the effort and investment in making a standout campaign, the last 
                thing you want is unhappy winners and risk damaged reputation. 
                By letting Prize Professionals take care of the winner management, you’ll
                save time and reduce risk, letting you get on with what you do best while letting us do our thing.
            </p>
        </div>
        <div class="heading-text">
                <h2> How our Winner Handling works </h2>
        </div>
        <div class="row">
                <div class="card col-md-4" style="">
                        <img src="{{asset('img/let-them-know-theyve-won.svg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">We let them know they’ve won</h5>
                            <p class="card-text">Letting your winners know they’ve won in a personalised way that will get them excited</p>
                           
                        </div>
                </div>
                <div class="card col-md-4" style="">
                        <img src="{{asset('img/every-step.svg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">We’re with them every step</h5>
                            <p class="card-text">Especially with complex travel plans, we’re always in contact and available for support</p>
                            
                        </div>
                </div>
                <div class="card col-md-4" style="">
                        <img src="{{asset('img/happy.svg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">We make sure they’re happy</h5>
                            <p class="card-text">We make sure your winners are still happy once they’ve received their prize or returned from their trip</p>
                       
                        </div>
                </div>
        </div>
</div>

<div class="in-content-hero" style="background:url(img/prize-entry-claim-management.jpg) no-repeat; background-size: cover;"></div>

<div class="container">
        <div class="heading-text">
                <h2> Prize entry & claim management </h2>
        </div>
        <div class="row">
            <p> If you have your own way of collecting winners, great! We’re happy to work with a platform you’re already used to. If not, we offer our own bespoke online entry platform developed by our very own internal team.
        </div>
</div>

@endsection