<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="/css/bootstrap.css" >


    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>  
    @include ('layouts.nav')
        <div class="container">
       		 @yield ('content')       
       	</div><!-- /.container -->
    @include ('layouts.footer')
  </body>  
</html>
