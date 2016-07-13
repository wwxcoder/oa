<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



@foreach($people as $person)
<li>
	{{$person}}
</li>
@endforeach
</body>
</html>