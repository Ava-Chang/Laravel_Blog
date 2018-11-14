<!DOCTYPE html>
<html lang="ch">
<head>
	@include('public_layout.head')
</head>
<body>
	@include('public_layout.nav')
	<section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary">Main call to action</a>
          <a href="#" class="btn btn-secondary">Secondary action</a>
        </p>
      </div>
</section>
	@yield('content')
	@include('public_layout.footer')
</body>
	
</html>