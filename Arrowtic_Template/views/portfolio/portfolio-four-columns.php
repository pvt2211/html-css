<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Portfolio 4 Columns";
$fileTitle = "Portfolio";
?>
<script>
	var current_page = "port";
</script>
<?php include getTemplatePath() . "/partials/header/header-port.php"; ?>
<div class="inner-bg-wrapper port-three-columns port-four-col" style="background-image: url(<?php echo getTemplateUrl() . '/assets/images/bg/team_inner_bg.png'?>);">
	<?php include( getTemplatePath() . "/sections/portfolio/four-columns.php") ?>
</div>
<?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
