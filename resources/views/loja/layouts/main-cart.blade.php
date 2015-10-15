<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shop Homepage - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{url('assets_loja/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('assets_loja/css/shop-homepage.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('assets_loja/css/shop-item.css')}}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('loja::layouts.top')
        <!-- Page Content -->
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <!-- /.container -->

        <div class="container">

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="{{url('assets_loja/js/jquery.js')}}"></script>
        
        <script src="{{url('assets_loja/js/rating.js')}}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('assets_loja/js/bootstrap.min.js')}}"></script>

    </body>

</html>
