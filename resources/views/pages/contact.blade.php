@extends('layout.app')
@section('content')

<div class="in-content-hero" style="background:url(img/contact.jpg) no-repeat; background-size: cover;"></div>

<div class="container mb-5">
    <div class="py-md-5">
        <h1> Contact us</h1>
        <h3> Talk to us about your next campaign, find out more about what we do or ask us anything. We aim to reply within a day</h3>
        
        <div class="row">
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
                <div class="form-group">
                    <textarea class="form-control"  placeholder="How can we help?" ></textarea>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="canEmail" required>
                    <label class="custom-control-label" for="canEmail">
                        Tick this box if you don’t mind us emailing you from time to 
                        time with updates and things. Take a look at our Privacy Policy here
                    </label>
                </div>
                <input type="submit" class="btn button" value="SEND"/>
            </form>  
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