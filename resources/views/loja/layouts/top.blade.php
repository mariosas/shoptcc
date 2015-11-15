<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">ShopTCC</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            	
                <li>
                    <a href="{{url('cart')}}">Carrinho (<?php echo \Cart::count()?>) </a>
                </li>
				
			</ul>

			@if(Auth::user())
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-haspopup="true"
					aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><img class="img-circle" src="{{Auth::user()->avatar}}" height="30px" width="30px"></li>
						<li><a href="{{url('sair')}}">Sair</a></li>
					</ul>
				</li>
			</ul>
			@endif

		</div>

		<!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>