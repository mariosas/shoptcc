@extends('loja::layouts.main-cart') @section('content')

<div class="col-md-9">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
            	
            	@if($totalItens < 1)

				<div class="panel">
					<span><a href="{{url('')}}">Voltar</a></span>
				</div>

				@else
            
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Produto(s)</th>
                            <th>Quantidade</th>
                            <th class="text-center">Pre�o</th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($carrinho as $cart)

                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="{{url('product')}}/{{$cart->id}}"> <img
                                            class="media-object"
                                            src="{{$cart->options['icon']}}"
                                            style="width: 72px; height: 72px;">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="{{url('product')}}/{{$cart->id}}">{{$cart->name}}</a>
                                        </h4>
                                    </div>
                                </div>
                            </td>

							<td class="col-sm-1 col-md-1" style="text-align: center">
								<div>
									<a href="{{url('cart')}}/update/{{$cart->rowid}}/decrement"><span class="glyphicon glyphicon-chevron-down"></span></a>
									<input type="email" class="form-control col-sm-1" id="exampleInputEmail1" value="{{$cart->qty}}">
									<a href="{{url('cart')}}/update/{{$cart->rowid}}/increment"><span class="glyphicon glyphicon-chevron-up"></span></a>
								</div>
							</td>

							<td class="col-sm-1 col-md-1 text-center"><strong>R$ {{number_format($cart->price, 2, ",",".")}}</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>R$ <?php echo number_format(($cart->price * $cart->qty), 2, ",",".") ?></strong></td>
                            <td class="col-sm-1 col-md-1">
                                <a href="{{url('cart/remove')}}/{{$cart->rowid}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Remover</a>
                            </td>
                        </tr>

                        @endforeach
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td><h5>Subtotal</h5></td>
                            <td class="text-right"><h5>
                                    <strong>R$ {{number_format($total, 2, ",",".")}}</strong>
                                </h5></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td><h3>Total</h3></td>
                            <td class="text-right"><h3>
                                    <strong>R$ {{number_format($total, 2, ",",".")}}</strong>
                                </h3></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td>
                                <a href="{{url('/')}}" class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span> Continuar Comprando</a>
                            </td>
                            <td>
                                <a href="{{url('checkout')}}" class="btn btn-success"><span class="glyphicon glyphicon-play"></span> Finalizar Compra</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

</div>


@endsection
