<?php
include $_SERVER['DOCUMENT_ROOT'] . '/Arrowtic_Template/partials/header.php';
$fileName = "Meet The Team";
$fileTitle = "Team";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<script>
	var current_page = "page";
</script>
<div class="pages-our-team-background ">
	<div class="pt-100 pb-70 pages-our-team-2">
		<div class="wrapper">
			<div class="container">
				<?php include getTemplatePath() . "/sections/pages/our-team-2.php"; ?>
				<div class="row">
					<?php include getTemplatePath() . "/sections/pages/our-team-1.php" ?>
					<?php include getTemplatePath() . "/sections/pages/our-team-3.php" ?>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper pb-100">
		<div class="container">
			<?php include getTemplatePath() . "/sections/pages/our-team-4.php"; ?>
		</div>
	</div>
</div>
<?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
