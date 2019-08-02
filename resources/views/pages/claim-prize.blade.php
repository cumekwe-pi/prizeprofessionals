@extends('layout.app')
@section('content')

<div class="container mb-5">
    <div class="py-md-5">
        <h1> Claim a prize</h1>
        <h3> Are you a winner of a prize promotion we’ve created? Congratulations! 
            Tell us you’ve won below and we’ll be in touch</h3>
        
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
                        <input type="text" class="form-control" name="" placeholder="Prize campaign e.g Coca Cola Bluetooth speaker giveaway"/>
                </div>
                <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Winning code e.g ABC1-234D-EF56-GH78"/>
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