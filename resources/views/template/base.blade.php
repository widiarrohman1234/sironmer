<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  @include('template.section.link')

</head>

<body>

  @include('template.section.navigation')
  <!-- Page Content -->
  <div class="container">
  		@yield('index')
  		
  	<div class="row">
 		@yield('content')
  	</div>
  </div>
  <!-- /.container -->

  @include('template.section.footer')

  @include('template.section.script')

</body>

</html>
