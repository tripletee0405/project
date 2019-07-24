<template>
	<div class="listbook">
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
				<tr v-for="book in listBook">
					<td>{{book.id}}</td>
					<td>{{book.name_book}}</td>
					<td>{{book.author_book}}</td>
					<td>{{book.amount}}</td>
					<td>{{book.price_book}}</td>
					<td>{{book.image_book}}</td>
					<td>{{book.description_book}}</td>
					<td>{{book.created_at}}</td>
					<td>{{book.updated_at}}</td>
					<td><a href=""><button>Edit</button></a></td>
					<td>
						<form method="POST" action="">
							<button type="submit">Delete</button>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>
<script>
export default{
	data(){
		return{
			listBook:[]
		}
	},
	created(){
		this.getListBook()
	},
	methods:{
		getListBook(){
			axios.get('/book')
			.then(response =>{
				this.listBook = response.data
			})
		}
	}
};
</script>
<style lang="scss" scoped>

</style>