<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<form action="{{url('/login')}}" method="post">
		@csrf
		<input type="text" name="email">
		<input type="password" name="password">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>