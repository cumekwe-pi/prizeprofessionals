@extends('layout.app')
@section('content')

<div class="in-content-hero request-quote-hero" style=" background-size: cover;"></div>

<div class="container mb-5">
    <div class="py-md-5">
        <h1> Request a quote</h1>
        <h3> Tell us what you need and we’ll put together a tailored made quote just for you</h3>
        
        <p> 
            We now you have budgets to stick to, so we help you stick to them by giving you all costs up front. 
            We can then help you tweak your quote to get the most out of your money while still creating a 
            high-performing campaign. If you have a brief, send it through or if you have an idea let us 
            help you turn that idea into reality.
        </p>
        <p>
            Call us on 023 1234 5678, attach a brief and email us on hello@prizeprofessionals.com or 
            use the form below: 
        </p>

        <div class="row" id="request_quote_form">
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
            <form method="post" action="{{URL::route('postRequestQuote')}}" class="col-md-6">
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
                    <textarea class="form-control" name="details" placeholder="Give us some details(more the better)"> {{old('details')}}</textarea>
                    <p class="text-danger">
                            @if($errors->has('details'))
                                {{ $errors->first('details')}}
                            @endif
                    </p>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="canEmail" name="canEmail">
                    <label class="custom-control-label" for="canEmail">
                        Tick this box if you don’t mind us emailing you from time to 
                        time with updates and things. Take a look at our Privacy Policy here
                    </label>
                </div>
                @csrf
                <input type="submit" class="btn btn-pp" value="REQUEST QUOTE"/>
            </form>  
        </div>
    </div> 

    

</div>

<div class="container-fluid bg-brand-color py-md-5">
    <div class="container">
            <div class="lets-talk">
                    <h1> Let’s talk</h1>
                    <p>Learn how it all works, request a quote, get started working with us or ask us anything.</p> 
                    <a href="#" class="btn white-button">Contact us</a>
            </div> 
    </div>
</div>
@endsection