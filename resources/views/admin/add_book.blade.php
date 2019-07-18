<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Book</title>
</head>
<body>
	<form action="/admin/add_book/store" method="post">
		@method('patch')
		@csrf
		<table border="1">
			<thead>
				<th>Thông tin cần nhập</th>
				<th>Nhập dữ liệu</th>
			</thead>
			<tbody>
				<tr>
					<td>Tên sách</td>
					<td><input type="text" name="name_book"></td>
				</tr>
				<tr>
					<td>Tác giả</td>
					<td><input type="text" name="author_book"></td>
				</tr>
				<tr>
					<td>Số lượng</td>
					<td><input type="text" name="amount"></td>
				</tr>
				<tr>
					<td>Giá sách</td>
					<td><input type="text" name="price_book"></td>
				</tr>
				<tr>
					<td>Ảnh minh họa</td>
					<td><input type="text" name="image_book"></td>
				</tr>
				<tr>
					<td>Mô tả</td>
					<td><textarea name="description_book" id="" cols="30" rows="5"></textarea></td>
				</tr>

				<tr>
					<td></td>
					<td><button type="submit">Thêm sách</button></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
