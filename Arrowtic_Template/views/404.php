<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Error 404";
$fileTitle = "404";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="blog-inner-page">
	<?php include( getTemplatePath() . "/sections/error-404.php");?>
</div>
<?php include( getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
