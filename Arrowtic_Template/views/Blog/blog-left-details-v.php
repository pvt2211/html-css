<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Blog Details Left Sidebar";
$fileTitle = "Blog";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<script>
	var current_page = "blog";
</script>
<div class="blog-inner-page">
	<?php include( getTemplatePath() . "/sections/blog/blog-left-details.php"); ?>
</div>
<?php include( getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
