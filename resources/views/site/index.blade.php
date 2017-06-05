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



<div class="col-md-8 contenu">

    @foreach ($tab_articles as $unArticle)
    <!-- First Blog Post -->
    <h2>
        <a href="#">{{ $unArticle["titre"] }}</a>
    </h2>
    <p><i class="fa fa-clock-o"></i> Posté le {{ $unArticle["created_at"]->format('d/m/Y à H:i') }}</p>

    @if (is_null($unArticle["photo"]) == false)
    <a href="#"> <!-- Futur lien du "voir plus" -->
        <img class="img-responsive img-hover" src="img/articles/{{ $unArticle["photo"]}}" alt="">
    </a>
    @endif

    <br>
    {!! $unArticle["description"] !!}
    <hr>
    @endforeach
</div>
<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Sponsors</h3>
        </div>
        <div class="panel-body">
            @foreach ($tab_partenaires as $unPartenaire)
            <a href="http://{{ $unPartenaire["site"]}}"><img class="img-responsive" src="img/partenaire/{{ $unPartenaire["logo"]}}" alt="{{$unPartenaire["nom"]}}"></a>
            @endforeach
        </div>
    </div>
</div>



<!-- Pager
<ul class="pager">
    <li class="previous">
        <a href="#">← Older</a>
    </li>
    <li class="next">
        <a href="#">Newer →</a>
    </li>
</ul> -->




@stop
