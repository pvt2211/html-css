<?php
include "./header.php";
include "./Pagination.php";
?>

<div class="mid-right">
	<div align="center">
		<table border="1" cellspacing="0" cellpadding="15" >
			<thead>
				<tr>
					<th> ID </th>
					<th> Tên sách </th>
					<th> Tên tác giả </th>
					<th> Ngày xuất bản </th>
					<th> Giá </th>
					<th>
						<a href="./Update.php?check=true"><button>Add</button></a>
					</th>
				</tr>
			</thead>

			<?php 
				$pageTemp = array_slice($books, $curArray, 10 , true);
				foreach ($pageTemp as $key => $value){
			 ?>
			<tbody>
				<tr>
					<td> <?php echo $value['id']; ?> </td>
					<td> <?php echo $value['title']; ?> </td>
					<td> <?php echo $value['author']; ?> </td>
					<td> <?php echo $value['date']; ?> </td>	
					<td> <?php echo $value['price']; ?> </td>
					<td>	
						 <a href="./Update.php?code=<?php echo $key?>&check=false"><button>Edit</button></a>
					</td>
					<td>
						<script>
							function confirmDelete() {
		  						return confirm("Bạn có chắc muốn xóa không?");
							}
						</script>
						<form method="post" action="delete.php">
		                        <input type="hidden" value="<?php echo $key; ?>" name="deleteCode"/>
		                        <input onclick="return confirmDelete()" type="submit" value="Delete" name="delete"/>
		                </form>
					</td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		<div class="navigation" >
		    <ul>
			    <?php
			        if(isset($total_pages)) {
			           	if($total_pages > 1) { // nếu tổng số trang > 1 in dòng Page..of..      
			                echo '<li class="single">'.$curr_page. '/'.$total_pages.'</li>';
			                // hiển thị nút 'Previous'
			                if($curr_page > 1) {
			                    echo '<li><a href="'.$page_url.'?page='.($curr_page-1).'"><</a> </li>';
			                }    

			                //Hiển thị trang hiện tại, các trang trước và sau trang hiện tại, trang first và last
			                // Trang hiện tại <=4 thì hiển thị 3 trang đầu
			              	if ($curr_page <=4) {
			              		//Hiển thị các trang trước trang hiện tại
				              	for ($pages = 1; $pages <= $curr_page - 1; $pages++) {
				              		echo '<li><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>'; 
				              	}
			              		//Hiển thị trang hiện tại
			              		echo '<li class="active"><a href="'.$page_url.'?page='.$curr_page.'">'.$curr_page.'</a></li>';
				              	//Nếu tổng số trang - trang hiện tại <4 thì hiện  luôn 3 trang cuối
				              	if (($total_pages - $curr_page) < 4) {
				              		for ($pages = $curr_page + 1; $pages <= $total_pages; $pages++) {
				              			echo '<li><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>'; 
				              		}
			              		// Còn không thì chỉ hiện 2 trang tiếp theo và trang cuối 
			              		} else {
				              		for ($pages = $curr_page + 1; $pages <= $curr_page + 2; $pages++) {
				              			echo '<li><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>'; 
				              		}
				              		echo '<li><a href="'.$page_url.'?page='.($curr_page + 3).'">...</a></li>'; 
				              		echo '<li><a href="'.$page_url.'?page='.$total_pages.'">'.$total_pages.'</a></li>'; 
			              		}
			                //Trang hiện tại >4 thì chỉ hiện first và 2 trang trước trang hiện tại
			                } else {
			              		//Hiển thị trang first
			              		echo '<li><a href="'.$page_url.'?page=1">1</a></li>';
			              		//Hiển thị ..
			              		echo '<li><a href="'.$page_url.'?page='.($curr_page - 3).'">...</a></li>'; 
			              		//Hiển thị 2 trang trước trang hiện tại
			              		for ($pages = $curr_page -2; $pages <= $curr_page-1; $pages++){
			              			echo '<li><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>'; 
			              		}
			              		//Hiển thị trang hiện tại
			              		echo '<li class="active"><a href="'.$page_url.'?page='.$curr_page.'">'.$curr_page.'</a></li>';
			              		//Nếu tổng số trang - trang hiện tại <4 thì hiện  luôn 3 trang cuối
			              		if (($total_pages - $curr_page) < 4) {
				              		for ($pages = $curr_page + 1; $pages <= $total_pages; $pages++) {
				              			echo '<li><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>'; 
				              		}
				              	// Còn không thì chỉ hiện 2 trang tiếp theo và trang cuối 
				              	} else {
				              		for ($pages = $curr_page + 1; $pages <= $curr_page + 2; $pages++) {
				              			echo '<li><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>'; 
				              		}
				              		echo '<li><a href="'.$page_url.'?page='.($curr_page + 3).'">...</a></li>'; 
				              		echo '<li><a href="'.$page_url.'?page='.$total_pages.'">'.$total_pages.'</a></li>'; 
				              	}
			                }

			                //hiển thị nút 'Next'          
				            if($curr_page < $total_pages )
				            { 
				                echo '<li><a href="'.$page_url.'?page='.($curr_page+1).'">></a></li>';
				            }
			       	 	}
			   	  	}
			    ?>
		    </ul>
		</div>
	</div>
</div>

<?php 
	include "./footer.php";
 ?>