 @extends('auth.layouts.main') @section('conteudo')
<body class="login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="{{url('#')}}"><b>Shop</b>TCC</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Entre para iniciar sua sessão
			
			
			<form method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="social-auth-links text-center">
					<a href="{{url('login-google')}}"
						class="btn btn-block btn-social btn-google-plus btn-flat"><i
						class="fa fa-google-plus"></i> Entrar usando Google+</a>
				</div>
				<!-- /.social-auth-links -->
			</form>
		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 2.1.3 -->
	<script src="{{url('plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{url('assets/js/bootstrap.min.js')}}"
		type="text/javascript"></script>
	<!-- iCheck -->
	<script src="{{url('plugins/iCheck/icheck.min.js')}}"
		type="text/javascript"></script>
	<script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
@endsection
