<form name="getBlogList" id="getBlogList" action="index.php" method="POST">
	<div class ="col-lg-2 col-md-2 col-sm-2"></div>
	<div class="col-lg-8 col-md-8 col-sm-8 div-white">
		<div class="table-responsive">
		<a href="index.php?op=blog-createNewBlog" class="btn btn-info active btn-xs" role="button">New Blog</a>
			<table class="table" id="blogListTable">
				<tr class="active">
					<th>title</th>
					<th>content</th>
					<th>operation_date</th>
					<th>tags</th>
					<th>likes</th>
					<th>dislikes</th>
					<th></th>
					<th></th>
				</tr>
				<?php //print_R($data)
					for( $i=0; $i<count($data); $i++){
						echo
							'<tr>
								<td>'.$data[$i]['title'].'</td>
								<td>'.$data[$i]['content'].'</td>
								<td>'.$data[$i]['operation_date'].'</td>
								<td>'.$data[$i]['tags'].'</td>
								<td>'.$data[$i]['likes'].'</td>
								<td>'.$data[$i]['dislikes'].'</td>
								<td><a href="index.php?op=blog-edit&blog_id='.$data[$i]['blog_id'].'" class="btn btn-info active btn-xs" role="button">Edit</a></td>
								<td><a href="index.php?op=blog-delete&blog_id='.$data[$i]['blog_id'].'"class="btn btn-info active btn-xs" role="button">Delete</a></td>
							</tr>';
				}
				?>
			</table>
		</div>
	<div class ="col-lg-2 col-md-2 col-sm-2"></div>
	</div>
</form>
<script type="text/javascript">
$(document).ready(function(){
	$("#blogListTable").DataTable();
});
</script>