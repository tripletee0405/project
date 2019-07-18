<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Book</title>
</head>
<body>
	<h1>{{ $books->name_book }}</h1>
	<h3>{{ $books->author_book }}</h3>
	<p>Số lượng: {{$books->amount}}</p>
	<p>Giá bán: {{$books->price_book}}</p>
	<img src="{{$books->image_book}}" alt="" style="height: 150px; width: 100px">
	<div>{{$books->description_book}}</div>
	<p>{{$books->created_at}}</p>
	<p>{{$books->updated_at}}</p>
</body>
</html>