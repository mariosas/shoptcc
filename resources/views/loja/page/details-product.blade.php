@extends('loja::layouts.main')

@section('content')

<div class="col-md-9">
    <div class="thumbnail">
        <img class="img-responsive" src="{{url('/')}}/{{$product->icon}}" height="300px" width="200px" alt="">
        <div class="caption-full">
            <h4 class="pull-right">R$ {{number_format($product->pricing, 2, ",",".")}}</h4>
            <h4><a href="#"> {{$product->name}}</a>
            </h4>
            <p>{{$product->short_description}}</p>
            <p>{{$product->long_description}}</p>
        </div>

		<div class="col-sm-12" id="btnComprar">
			<a href="{{url('cart/add-product-cart')}}/{{$product->id}}"
				class="pull-right btn btn-success">Comprar</a>
		</div>
		
		<style>
		#btnComprar {
			margin-bottom: 7px;
		}
		</style>

		<div class="ratings">
            <p class="pull-right">{{$product->rating_count}} reviews</p>
            <p>
                @for($i = 1; $i <= $product->rating_cache; $i++)
                <span class="glyphicon glyphicon-star"></span>
                @endfor

                @for($i = 1; $i <= (5 - $product->rating_cache); $i++)
                <span class="glyphicon glyphicon-star-empty"></span>
                @endfor
                {{$product->rating_cache}} stars
            </p>
        </div>
    </div>

    <div class="well">

        <div class="container col-md-12">
            <div class="row" style="margin-top:50px">
                <div class="col-md-12">
                    <form class="formtest">
                        <button type="button" class="btaval btn btn-success pull-right" data-toggle="collapse" data-target="#1" onClick="esconder(this)">Review !!</button>
                        <div id="1" class="collapse">
                            <div class="col-md-12 avaliar ">
                                <textarea cols="50" id="comentario" name="comment" value="" placeholder="Tell me your rate"></textarea>				

                                <div class="stars starrr" data-rating="0">
                                    <input class="nota" name="rating" type="hidden" value="">
                                </div>
                                <div class="text-right">	
                                    <button class="btn btn-success" type="submit" onclick="test()" >Enviar <i class="fa fa-reply"></i> </button>
                                    <span class="btn btn-danger" data-toggle="collapse" data-target="#1" onClick="mostrar()">Cancelar <i class="fa fa-times"></i> </span>
                                </div>	
                            </div>
                        </div>	
                    </form>
                </div>    
            </div>
        </div>
        <hr>

        @foreach($product->reviews as $review)
        <div class="row">
            <div class="col-md-12">
                @for ($i=1; $i <= 5 ; $i++)
                <span class="glyphicon glyphicon-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
                @endfor

                {{ $review->user ? $review->user->name : 'Anonymous'}} <span class="pull-right">{{$review->timeago}}</span> 

                <p>{{{$review->comment}}}</p>
            </div>
        </div>
        @endforeach
        <hr>
    </div>
</div>

<style>
    .avaliar{
        margin-top:5px;
        background-color:#EDEDED;
    }
    .avaliar textarea{
        width:100%;
    }
    .stars
    {
        margin: 20px 0;
        font-size: 24px;
        color: #d17581;
    }
</style>

@endsection