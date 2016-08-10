<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ Session::token() }}">

        <title>Stoyan's website</title>
        <base href="http://localhost:8000/">

        <!-- Styles -->
        <link href="user/css/bootstrap.min.css" rel="stylesheet">
        <link href="user/css/business-casual.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        @include('user.templates.partials.header')
        @yield('content')
        @include('user.templates.partials.footer')

        <!-- Scripts -->
        <script src="user/js/jquery.js"></script>
        <script src="user/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./source/jquery.fancybox.js?v=2.1.5"></script>	
        <script type="text/javascript" src="./user/js/gallery.js"></script>    
        <link rel="stylesheet" type="text/css" href="./source/jquery.fancybox.css?v=2.1.5" media="screen" /> 
        <script type="text/javascript" src="./user/js/custom.js"></script>  
        
    </body>
</html>