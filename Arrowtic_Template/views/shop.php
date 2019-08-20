<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Shop";
$fileTitle = "Shop";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="blog-inner-page">
	<?php include( getTemplatePath() . "/sections/shop-content.php");?>
</div>
<script>
	var current_page = "shop";
</script>
<?php include( getTemplatePath() . "/partials/footer/footer-home-4.php");?>
