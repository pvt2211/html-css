<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Portfolio Standard";
$fileTitle = "Portfolio";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<script>
	var current_page = "port";
</script>
<div class="inner-bg-wrapper" id="port-stand" style="background-image: url(<?php echo getTemplateUrl() . '/assets/images/bg/team_inner_bg.png';?>)">
	<?php include( getTemplatePath() . "/sections/portfolio/portfolio-area.php") ?>
</div>
<?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
