@extends('painel.layouts.main') @section('content')

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Edit Product</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>

	<div class="row">
		<div class="col-lg-12">

			<form class="form-horizontal" role="form" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label class="col-md-2 control-label">Name</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="name" required
							value="{{ $product->name}}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Price</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="price" required
							value="{{ $product->pricing}}">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-md-4 control-label">Description</label>
					<div class="col-md-6">
						<textarea rows="5" cols="40" class="form-control">{{$product->short_description}}</textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">SALVAR</button>
					</div>
				</div>
			</form>

			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>


</div>

@endsection
