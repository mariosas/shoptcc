@extends('painel.layouts.main')

@section('content')

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Categorias</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	
	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de categorias<div class="pull-right"><a href="{{url('admin/category/create')}}"><span class="glyphicon glyphicon-plus"></span></a></div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Descrição</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($categories as $category)
                                    	<tr>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->description}}</td>
                                            <td>
                                            <a href="{{url('admin/category')}}/{{$category->id}}/edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="{{url('admin/category')}}/{{$category->id}}"><i class="glyphicon glyphicon-remove"></i></a>
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