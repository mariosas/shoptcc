<!-- list Products -->
<div class="row">
    @foreach($products as $product)
    <div class="col-sm-4 col-lg-4 col-md-4 product">
        <div class="thumbnail">
            <a href="{{url('product')}}/{{$product->id}}">
                <img src="{{url('/')}}/{{$product->icon}}" alt="{{$product->short_description}}" title="{{$product->short_description}}" class="img-product">
                <h4 class="pull-right">R$ {{number_format($product->pricing, 2, ",",".")}}</h4>
                <div class="caption">
                	<h4>{{$product->name}}</h4>
                    <p>{{$product->short_description}}</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">{{$product->rating_count}} reviews</p>
                    <p>
                        @for($i = 1; $i <= $product->rating_cache; $i++)
                        <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </p>
                </div>
            </a>
        </div>
    </div>
    @endforeach
    
    <style>
    
    .pull-right {
    	margin-top: 2px;
    	margin-right: 4px;
    }
    
    </style>
</div>