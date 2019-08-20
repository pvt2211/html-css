<?php 
	if (!empty($_POST['delete']))
	{
	    require "./books.php";
	    $deleteCode = isset($_POST['deleteCode']) ? $_POST['deleteCode'] : '';
	    var_dump($deleteCode);
	    deleteBook($deleteCode);
	}
	 
	// Cuối cùng là chuyển hướng về trang danh sách
	header("Location:./body.php");
?>