<template>
	<div class="index">
		<table>
			<tr>
				<td>
					<addbook></addbook>
				</td>
				<td>
					<updatebook></updatebook>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<listbook></listbook>
				</td>
			</tr>
		</table>
	</div>
</template>
<script>
	import addbook from './add_book.vue'
	import updatebook from './update_book.vue'
	import listbook from './list_book.vue'
	export default{
		components:{
			addbook,
			updatebook,
			listbook
		}
	};
</script>
<style lang="scss" scoped>
	
</style>