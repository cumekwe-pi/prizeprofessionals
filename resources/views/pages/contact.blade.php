@extends('layout.app')
@section('content')

<div class="in-content-hero contact-hero" style=""></div>

<div class="container mb-5">
    <div class="py-md-5">
        <div class="contact-heading-text">
            <h1> Contact us</h1>
            <h3> Talk to us about your next campaign, find out more about what we do or ask us anything. We aim to reply within a day</h3>        
        </div>
      
        <div class="row" id="contact_form">
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
          
            <form action="{{URL::route('submitContactForm')}}" method="post" class="col-md-6">
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
                    <textarea class="form-control"  placeholder="How can we help?" name="how_can_we_help" >{{old('how_can_we_help')}}</textarea>
                    <p class="text-danger">
                            @if($errors->has('how_can_we_help'))
                                {{ $errors->first('how_can_we_help')}}
                            @endif
                    </p>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="canEmail" name="can_email" >
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
            <div class="lets-talk">
                    <h1> Let’s talk</h1>
                    <p>Learn how it all works, request a quote, get started working with us or ask us anything.</p> 
                    <a href="{{route('contact')}}" class="btn white-button">Contact us</a>
            </div> 
    </div>
</div>

@endsection