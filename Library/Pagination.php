<?php 

	$page_url = 'http://localhost/TempLibrary/Body.php';
	$display = 10;
	$total_rows = count($books);
	$total_pages = ceil($total_rows / $display);
	if(isset($_GET['page']) && is_numeric($_GET['page']) &&$_GET['page'] <=$total_pages)
	{
	      $curr_page = $_GET['page'];
	      $curArray = ($curr_page - 1) * 10;
	}
	 
	else
	{
	     //nếu không tồn tại trang thì mặc nhiên sẽ là trang 1
	     $curr_page = 1;
	     $curArray = 0;
	}
	$position = ($curr_page - 1)*$display;
 ?>