<!DOCTYPE html>
<html>
<head>
	<title>add category</title>
</head>
<body>
	<form method="POST" action="storecategory">
		@csrf
		<input type="text" name="title">
		<button>add</button>
	</form>
</body>
</html>