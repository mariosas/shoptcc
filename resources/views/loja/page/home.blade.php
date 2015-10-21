@extends('loja::layouts.main')

@section('content')

@inject('productsImage', 'App\Repositories\Eloquent\ProductInt')

<?php
$images = $productsImage->findWhere(['published' => 1]);
$temp1 = gerarImageandomica($images);

/*MElhorar esta função */
//dd(gerarImageandomica($images));
function gerarImageandomica($images){
	$temp1 = $images->random();
	$temp2 = $images->random();
	
	if($temp1->icon == $temp2->icon) {
		return gerarImageandomica($images);
	}
	
	$temp3 = array();
	array_push($temp3, $temp1->icon);
	array_push($temp3, $temp2->icon);
	return $temp3;
	
}
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
                    <div class="item active">
                        <img class="slide-image img-carroseu" src="<?php echo $temp1[0] ?>" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image img-carroseu" src="<?php echo $temp1[1] ?>" alt="">
                    </div>
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