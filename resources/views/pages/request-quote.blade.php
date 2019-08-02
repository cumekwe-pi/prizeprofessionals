@extends('layout.app')
@section('content')

<div class="container">
    <div class="py-md-5">
        <h1> Request a quote</h1>
        <h3> Tell us what you need and we’ll put together a tailored made quote just for you</h3>
        
        <p> 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
             culpa qui officia deserunt mollit anim id est laborum.
        </p>

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
                <div class="form-group mb-3">
                    <textarea class="form-control"  placeholder="Give us some details(more the better)" ></textarea>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                    <label class="custom-control-label" for="customControlValidation1">
                        Tick this box if you don’t mind us emailing you from time to 
                        time with updates and things. Take a look at our Privacy Policy here
                    </label>
                </div>
                <input type="submit" class="btn button" value="REQUEST QUOTE"/>
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