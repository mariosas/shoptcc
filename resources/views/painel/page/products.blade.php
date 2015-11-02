@extends('painel.layouts.main')

@section('content')

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Products</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	
	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Icon</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($products as $product)
                                    	<tr>
                                            <td>{{$product->id}}</td>
                                            <td><img src="{{url('/')}}/{{$product->icon}}" height="50px" width="50px"></td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->short_description}}</td>
                                            <td>R$ {{number_format($product->pricing, 2, ",",".")}}</td>
                                            <td>
                                            <a href="{{url('admin/product')}}/{{$product->id}}/edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="{{url('admin/product')}}/{{$product->id}}"><i class="glyphicon glyphicon-remove"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
	
	
</div>

@endsection