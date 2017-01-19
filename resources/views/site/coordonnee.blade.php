@extends('layout_front')
@section('content')

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/image1.jpg" alt="Chania" class="img-responsive center-block">
        </div>

        <div class="item">
            <img src="img/image2.jpg" alt="Chania" class="img-responsive center-block">
        </div>

        <div class="item">
            <img src="img/image3.jpg" alt="Flower" class="img-responsive center-block">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
<!-- Page Content -->
<div class="container">
    
    <div class="col-md-8">
        <h2>
            Les coordonnées
        </h2>

        <hr>
        {!! $contenu["ckeditor"] !!}
        <hr>

    </div>

    @stop