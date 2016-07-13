<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

<form action="{route('LoginAction')}" method="post">
		用户名：<input type="text" name="user"/>
		密码：<input type="password" name="password"/>
		<input type="submit"/>
	</form>
	<a href="{{ url('home/test/id/1') }}">click</a>
</body>
</html>
