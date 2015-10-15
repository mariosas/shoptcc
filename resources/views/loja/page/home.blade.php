@extends('loja::layouts.main')

@section('content')

@inject('productsImage', 'App\Repositories\Eloquent\ProductInt')

<?php
$temp = $productsImage->all();
?>

<div class="col-md-9">
    <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">
                    @for($i = 1; $i <= 1; $i++)
                    <div class="item active">
                        <img class="slide-image img-carroseu" src="<?php echo $temp[rand(1, count($temp))]->icon ?>" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image img-carroseu" src="<?php echo $temp[rand(1, count($temp))]->icon ?>" alt="">
                    </div>
                    @endfor
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>

    @include('loja::fragments.listProducts')
</div>

@endsection