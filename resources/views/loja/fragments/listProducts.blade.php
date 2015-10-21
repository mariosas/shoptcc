<!-- list Products -->
<div class="row">
    @foreach($products as $product)
    <div class="col-sm-4 col-lg-4 col-md-4 product">
        <div class="thumbnail">
            <a href="{{url('product')}}/{{$product->id}}">
            <!--<img src="http://placehold.it/320x150" alt="">-->
                <img src="{{$product->icon}}" alt="{{$product->short_description}}" title="{{$product->short_description}}" class="img-product">
                <div class="caption">
                    <h4 class="pull-right">R$ {{$product->pricing}}</h4>
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
</div>