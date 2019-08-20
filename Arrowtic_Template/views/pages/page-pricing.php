<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Pricing Plans";
$fileTitle = "Pricing Plans";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<script>
	var current_page = "page";
</script>
<div class="pages-our-team-background ">
	<div class="pt-100 pb-100 pages-border-b pages-our-team-2">
		<?php include getTemplatePath() . "/sections/pages/pricing-1.php"; ?>
	</div>
	<div class="wrapper">
		<div class="container pt-100 pb-100">
			<?php include getTemplatePath() . "/sections/pages/pricing-2.php"; ?>
		</div>
	</div>
</div>
<?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
