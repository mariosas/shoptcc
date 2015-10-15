
@inject('categories', 'App\Repositories\Eloquent\CategoryInt')

<?php
$categorias = $categories->with('subcategory')->findWhere(['published' => 1]);
?>

<div class="col-md-3">
    <p class="lead">ShopTCC</p>
    <div class="list-group">
        <li class="">
            @foreach($categorias as $category)
            <a href="{{url('category')}}/{{$category->id}}" class="list-group-item">{{$category->name}}</a>
            @if(!empty($category->subcategory))
                @foreach($category->subcategory as $subcategory)
                <ul class="">
                    <a href="{{url('category/'.$category->id)}}/{{$subcategory->id}}">{{$subcategory->name}}</a>
                </ul>
                @endforeach
            @endif
            @endforeach
        </li>
    </div>
</div>
