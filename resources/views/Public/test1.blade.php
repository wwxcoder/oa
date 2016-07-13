<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
@foreach($user1 as $person)
<li>{{$person->inAdminId}}</li>
<li>{{$person->strAdminName}}</li>
<li>{{$person->strPassword}}</li>
@endforeach

</body>
</html>