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

        @foreach ($tab_articles as $unArticle)
        <!-- First Blog Post -->
        <h2>
            <a href="#">{{ $unArticle["titre"] }}</a>
        </h2>
        <p><i class="fa fa-clock-o"></i> Posté le {{ $unArticle["created_at"]->format('d/m/Y à H:i') }}</p>
        <hr>
        
        @if (is_null($unArticle["photo"]) == false)
        <a href="#"> <!-- Futur lien du "voir plus" -->
           <img class="img-responsive img-hover" src="img/articles/{{ $unArticle["photo"]}}" alt="">
        </a>
        @endif
   
        <br>
        {!! $unArticle["description"] !!}
        <hr>
        @endforeach

        <div class="col-md-4">
            <!-- Side Widget Well -->
            <div class="well">
                <h4>Sponsors</h4>
                <img src="img/sponsor1.png" alt="Chania">
                <img src="img/sponsor2.png" alt="Chania">
            </div>
        </div>


        <!-- Pager -->
        <ul class="pager">
            <li class="previous">
                <a href="#">← Older</a>
            </li>
            <li class="next">
                <a href="#">Newer →</a>
            </li>
        </ul>

    </div>


    @stop