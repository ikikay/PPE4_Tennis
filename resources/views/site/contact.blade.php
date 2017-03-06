@extends('layout_front')
@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contact
                <small>Tennis Club Tavaux</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->
        <div class="col-md-8">
            <!-- Embedded Google Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.4491686554734!2d5.411436451145834!3d47.05103863408057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f2b5002043e913%3A0xf8c71eccb638f6c4!2sTennis+Club+Tavaux!5e0!3m2!1sfr!2sfr!4v1484229314658" width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>

            <h3>Envoyez nous un Message</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Votre nom :</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Votre prénom :</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Votre numéro de téléphone :</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Votre email :</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Envoyer Message</button>
            </form>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">  
            <div class="text-center">
                <h1>Contact</h1>
                <p>
                    Tennis CLub Tavaux
                <p>
                <p>
                    94 Avenue de la République
                </p>
                39500 Tavaux
                </p> 
                </br>
            </div>   
            
            
            @foreach ($leComite as $unStatut)
            @if(count($unStatut->users) != 0))            
            <div class="text-center">
                <p><b>{{$unStatut->fonction}}</b></p>
            </div>
            <div class="col-md-9 col-md-offset-3">
                @foreach ($unStatut->users as $unUtilisateur)
                <p><i>{{$unUtilisateur->nom.' '.$unUtilisateur->prenom}}</i></p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Tel :</abbr> {{$unUtilisateur->telephone}}</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Mail :</abbr> <a href="mailto:{{$unUtilisateur->email}}">{{$unUtilisateur->email}}</a>
                </p>
                @endforeach
            </div>
            @endif
            @endforeach



        </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">


    </div>
    <!-- /.row -->



    @stop