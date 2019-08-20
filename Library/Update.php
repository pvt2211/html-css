<?php
include "./header.php";
 
$errors = array();

 //Kiểm tra xem là trường hợp add hay edit
$check = isset($_GET['check']) ? $_GET['check'] : '';
if ($check == 'true') {
	$data = array();
} else if ($check == 'false' && checkCode($_GET['code'])) {
//Nếu là trường hợp edit thì lấy chỉ số của mảng sách
	$index = isset($_GET['code']) ? $_GET['code'] : '';
	$data = $_SESSION['books'][$index];
} else {
	header("Location: ./Body.php");
}
// Nếu người dùng click vào nút submit
if (!empty($_POST['add_book'])) {

 // Lấy thông tin
	$data['id'] = isset($_POST['id']) ? $_POST['id'] : '';
	$data['title'] = isset($_POST['title']) ? $_POST['title'] : '';
	$data['author'] = isset($_POST['author']) ? $_POST['author'] : '';
	$data['date'] = isset($_POST['date']) ? $_POST['date'] : '';
	$data['price'] = isset($_POST['price']) ? $_POST['price'] : '';
         
// Validate
	if (empty($data['id'])){
	    $errors['id'] = 'Ban chua nhap ID';
	}
	         
	if (empty($data['title'])){
	    $errors['title'] = 'Ban chua nhap title';
	}
	         
	if (empty($data['author'])){
	    $errors['author'] = 'Ban chua nhap tac gia';
	}
	if (empty($data['date'])){
	    $errors['date'] = 'Ban chua nhap ngay';
	}
	if (empty($data['price'])){
	    $errors['price'] = 'Ban chua nhap gia';
	}
	         
	        //  Nếu dữ liệu hợp lệ thì thực hiện thao tác update thông tin
	        // đồng thời redirect về trang danh sách
	if (empty($errors)){
	    if($check == "true") {
	        addBook($data);
	        header("Location: Body.php");
	    } else if ($check == "false") {
	    	if (checkCode($index)) {
		        editBook($index, $data);
		        header("Location: Body.php");
		    } else {
		    	header("Location: Body.php");
		    }
	    } else {
	    	header("Location: Body.php");
	    }
	}
}
?>
 
<div class="mid-right">
	<form method="post">
        Nhập ID:<br>
        <input type="text" name="id" value="<?php echo !empty($data['id']) ? $data['id'] : ''; ?>" />
        <?php echo !empty($errors['id']) ? $errors['id'] : ''; ?>
        <br>

        Nhập Tên sách:<br>
        <input type="text" name="title" value="<?php echo !empty($data['title']) ? $data['title'] : ''; ?>" />
        <?php echo !empty($errors['title']) ? $errors['title'] : ''; ?>
        <br>

        Nhập Tên tác giả:<br>
        <input type="text" name="author" value="<?php echo !empty($data['author']) ? $data['author'] : ''; ?>" />
        <?php echo !empty($errors['author']) ? $errors['author'] : ''; ?>
        <br>

        Nhập ngày xuất bản:<br>
        <input type="text" name="date" value="<?php echo !empty($data['date']) ? $data['date'] : ''; ?>" />
        <?php echo !empty($errors['date']) ? $errors['date'] : ''; ?>
        <br>

        Nhập giá:<br>
        <input type="text" name="price" value="<?php echo !empty($data['price']) ? $data['price'] : ''; ?>" />
        <?php echo !empty($errors['price']) ? $errors['price'] : ''; ?>
        <br>

        <input type="submit" name="add_book" value="<?php
            if ($check == "true") {
            	echo "Thêm";
            } else {
            	echo "Cập Nhật";
            }
        ?>" />
    </form> 	
 </div>

 <?php 
 	include "./footer.php";
  ?>