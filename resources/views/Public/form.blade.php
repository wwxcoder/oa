<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="test" enctype="multipart/form-data" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
	user: <input type="text" name="user">
	pass: <input type="password" name="pass">
	file: <input type="file" name="file">
	<input type="submit" value="sure">
	</form>
</body>
</html>