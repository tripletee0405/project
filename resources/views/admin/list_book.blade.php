<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Book</title>
</head>
<body>
	<h1>{{ $pageName }}</h1>
	<table border="1">
		<thead>
			<th>STT</th>
			<th>Tên sách</th>
			<th>Tác giả</th>
			<th>Số lượng</th>
			<th>Giá sách</th>
			<th>Ảnh</th>
			<th>Mô tả</th>
			<th>Thêm ngày</th>
			<th>Cập nhật ngày</th>
			<th colspan="2">Tools</th>
		</thead>
		<tbody>
			@foreach($books as $row)
			<tr>
				<td>{{$row->id}}</td>
				<td><a href="/admin/detail_book/{{$row->id}}">{{$row->name_book}}</a></td>
				<td>{{$row->author_book}}</td>
				<td>{{$row->amount}}</td>
				<td>{{$row->price_book}}</td>
				<td><img src="{{$row->image_book}}" alt="" style="height: 150px; width: 100px"></td>
				<td>{{$row->description_book}}</td>
				<td>{{$row->created_at}}</td>
				<td>{{$row->updated_at}}</td>
				<td><a href="/admin/edit_book/{{$row->id}}"><button>Edit</button></a></td>
				<td>
					<form method="POST" action="/admin/delete_book/{{$row->id}}">
						@method('DELETE')
						@csrf
						<button type="submit">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>