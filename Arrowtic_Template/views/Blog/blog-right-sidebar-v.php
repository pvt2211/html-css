<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Blog Right Sidebar";
$fileTitle = "Blog";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="blog-inner-page">
	<?php include( getTemplatePath() . "/sections/blog/blog-right-s.php") ?>
</div>
<script>
	var current_page = "blog";
</script>
<?php include( getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
