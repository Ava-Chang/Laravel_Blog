<!DOCTYPE html>
<html lang="ch">
<head>
	@include('public_layout.head')
</head>
<body>
	@include('public_layout.nav')
	<section class="jumbotron text-center">
      <div class="container">
        <h1>Laravel CRUD sample</h1>
      </div>
</section>
	@yield('content')
	@include('public_layout.footer')
</body>
	
</html>