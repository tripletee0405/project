<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Book</title>
</head>
<body>
	<h1>{{ $pageName }}</h1>
	<form action="/admin/update_book/{{ $books->id }}" method="post">
		@method('patch')
		@csrf
		<table border="1">
			<thead>
				<th>Thông tin cập nhật</th>
				<th>Nhập dữ liệu</th>
			</thead>
			<tbody>
				<tr>
					<td>Tên sách</td>
					<td><input type="text" name="name_book" value="{{$books->name_book}}"></td>
				</tr>
				<tr>
					<td>Tác giả</td>
					<td><input type="text" name="author_book" value="{{$books->author_book}}"></td>
				</tr>
				<tr>
					<td>Số lượng</td>
					<td><input type="text" name="amount" value="{{$books->amount}}"></td>
				</tr>
				<tr>
					<td>Giá sách</td>
					<td><input type="text" name="price_book" value="{{$books->price_book}}"></td>
				</tr>
				<tr>
					<td>Ảnh minh họa</td>
					<td><input type="text" name="image_book" value="{{$books->image_book}}"></td>
				</tr>
				<tr>
					<td>Mô tả</td>
					<td><textarea name="description_book" id="" cols="30" rows="5">{{$books->description_book}}</textarea></td>
				</tr>

				<tr>
					<td></td>
					<td><button type="submit">Sửa sách</button></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
