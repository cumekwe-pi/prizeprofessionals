@extends('layout.app')
@section('content')

<div class="in-content-hero" style="background:url(img/partners-splash-img-1.jpg) no-repeat; background-size: cover;"></div>

<div class="container">
        <div class="py-md-5">
                <h1> Our partners</h1>
                <h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                    labore et dolore magna aliqua.
                </h3> 
        </div> 
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
             culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
             exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
             Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
             nulla pariatur. Excepteur sint occaecat cupidatat non proident,.
        </p>
        
        <div class="row py-md-5 text-center">
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/airbnb.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/facebook.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/apple.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/windows.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/xbox.png')}}" class="card-img-top" alt="">
                </div>
        </div>

        
        <div class="row py-md-5 text-center">
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/mailchimp.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/linkedin.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/instagram.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/whatsapp.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4 mb-4">
                        <img src="{{asset('img/adobe.png')}}" class="card-img-top" alt="">
                </div>
        </div>

        
        <div class="row py-md-5 text-center">
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/airbnb.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/facebook.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/apple.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/windows.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/xbox.png')}}" class="card-img-top" alt="">
                </div>
        </div>

        <div class="row py-md-5 text-center">
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/mailchimp.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/linkedin.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/instagram.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4">
                        <img src="{{asset('img/whatsapp.png')}}" class="card-img-top" alt="">
                </div>
                <div class="col-sm-2 mt-4 mb-4">
                        <img src="{{asset('img/adobe.png')}}" class="card-img-top" alt="">
                </div>
        </div>

</div>

<div class="container mb-5">
        <div class="row">
                <h3> Be our next partner </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                </p>
    
                <form class="col-md-6">
                    <div class="form-group">
                            <input type="text" class="form-control" name="" placeholder="Name"/>
                    </div>
                    <div class="form-group">
                            <input type="email" class="form-control" name="" placeholder="Email address"/>
                    </div>
                    <div class="form-group">
                            <input type="text" class="form-control" name="" placeholder="Phone number"/>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control"  placeholder="How can we help?" ></textarea>
                    </div>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                        <label class="custom-control-label" for="customControlValidation1">
                            Tick this box if you don’t mind us emailing you from time to 
                            time with updates and things. Take a look at our Privacy Policy here
                        </label>
                    </div>
                    <input type="submit" class="btn button" value="SEND"/>
                </form>
                
                
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