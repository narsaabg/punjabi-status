<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>
	@if(session('msg') && session('msg')!= '')
		{{session('msg')}}
		@php
			session(['msg' => '']);
		@endphp
	@endif
	<form action="{{url('/admin/add-status')}}" method="post">
		@csrf
		<textarea name="status"></textarea>
		<select name="cat_id">
			<option value="">select</option>
			@foreach(get_categories() as $category)
			<option value="{{$category->id}}" >{{$category->name}}</option>
			@endforeach
		</select>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>