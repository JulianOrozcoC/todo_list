<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo List</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('includes.navbar')
  <div class="container">
		@include('includes.messages')
    @yield('content')
  </div>

  <footer id="footer" class="text-center">
    <p>Copyright &copy; 2017 TodoList</p>
  </footer>
</body>
</html>