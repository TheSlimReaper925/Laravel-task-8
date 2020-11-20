<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('savepost') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="text" name="title">
	<textarea name="description"></textarea>
	<textarea name="short_description"></textarea>
	<input type="file" name="image">
	<input type="date" name="add_date">
	<select name="category_id">
		@foreach(App\Category::get() as $cat)
			<option value="{{ $cat->id }}"> {{ $cat->title }} </option>
		@endforeach
	</select>
	<input type="text" name="tags[]">
	<input type="text" name="tags[]">
	<input type="text" name="tags[]">
	<input type="text" name="tags[]">
	<button>save</button>
	</form>
	

</body>
</html>