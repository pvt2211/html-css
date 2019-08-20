<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Our Clients";
$fileTitle = "Clients";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<script>
	var current_page = "page";
</script>
<div class="wrapper pt-90 pb-50">
    <div class="container">
        <?php include getTemplatePath() . "/sections/pages/our-clients-1.php"; ?>
        <div class="row text-center">
        	<?php include getTemplatePath() . "/sections/pages/pages-brand.php"; ?>
        	<?php include getTemplatePath() . "/sections/pages/pages-brand.php"; ?>
        	<?php include getTemplatePath() . "/sections/pages/pages-brand-2.php"; ?>
    	</div>
    </div>
</div>
<?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
