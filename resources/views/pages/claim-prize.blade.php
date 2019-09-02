@extends('layout.app')
@section('content')

<div class="in-content-hero" style="background:url(img/claim-a-prize.jpg) no-repeat; background-size: cover;"></div>

<div class="container mb-5">
    <div class="py-md-5">
        <h1> Claim a prize</h1>
        <h3> Are you a winner of a prize promotion we’ve created, or have a promo code to redeem? Simply tell us below</h3>
        
        <div class="row" id="claim_prize">
                <div class="col-md-12">
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            {{ Session::get('success')}}
                        </div>
                     @elseif(Session::has('fail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            {{ Session::get('fail')}}
                        </div>
                    @endif
                </div>
            <form class="col-md-6" action="{{route('postClaimPrize')}}" method="post">
                <div class="form-group">
                        <input type="text" class="form-control" name="customer_name" placeholder="Name" value="{{old('customer_name')}}"/>
                        <p class="text-danger">
                            @if($errors->has('customer_name'))
                                {{ $errors->first('customer_name')}}
                            @endif
                        </p>
                </div>
                <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email address" value="{{old('email')}}"/>
                        <p class="text-danger">
                                @if($errors->has('email'))
                                    {{ $errors->first('email')}}
                                @endif
                        </p>
                </div>
                <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone number" value="{{old('phone')}}"/>
                        <p class="text-danger">
                                @if($errors->has('phone'))
                                    {{ $errors->first('phone')}}
                                @endif
                        </p>
                </div>
                <div class="form-group">
                        <input type="text" class="form-control" name="prize_campaign" value="{{old('prize_campaign')}}" placeholder="Prize campaign e.g Coca Cola Bluetooth speaker giveaway"/>
                        <p class="text-danger">
                                @if($errors->has('prize_campaign'))
                                    {{ $errors->first('prize_campaign')}}
                                @endif
                        </p>
                </div>
                <div class="form-group">
                        <input type="text" class="form-control" name="winning_code" value="{{old('winning_code')}}" placeholder="Winning code e.g ABC1-234D-EF56-GH78"/>
                        <p class="text-danger">
                                @if($errors->has('winning_code'))
                                    {{ $errors->first('winning_code')}}
                                @endif
                        </p>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="canEmail" name="canEmail" >
                    <label class="custom-control-label" for="canEmail">
                        Tick this box if you don’t mind us emailing you from time to 
                        time with updates and things. Take a look at our Privacy Policy here
                    </label>
                </div>
                @csrf
                <input type="submit" class="btn btn-pp" value="SEND"/>
            </form>  
        </div>
    </div> 

    

</div>

<div class="container-fluid bg-brand-color py-md-5">
    <div class="container">
            <div class="heading-text ">
                    <h1> Let’s talk</h1>
                    <p>Learn how it all works, request a quote, get started working with us or ask us anything.</p> 
                    <a href="{{route('contact')}}" class="btn white-button">Contact us</a>
            </div> 
    </div>
</div>

@endsection