<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li class="sidebar-search">
			<form action="{{url('search')}}">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Pesquisar..." name="q"> <span
						class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div> <!-- /input-group -->
			</form>
			</li>
			<li><a href="{{url('admin')}}"><i class="fa fa-dashboard fa-fw"></i>
					Dashboard</a></li>
			<li><a href="{{url('admin/product')}}"><i class="fa fa-table fa-fw"></i>
					Produtos</a></li>
			<li><a href="{{url('admin/category')}}"><i class="fa fa-table fa-fw"></i>
					Categorias</a></li>
		</ul>
	</div>
	<!-- /.sidebar-collapse -->
</div>