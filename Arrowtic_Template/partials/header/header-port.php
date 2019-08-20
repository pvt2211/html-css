<section class="breadcrumb-area" style="background-image: url(<?php echo getTemplateUrl() . '/assets/images/bg/bc.jpg'?>);">
	<?php include( getTemplatePath() . "/partials/header/top-header.php"); ?>
	<div id="header" class="port-page footer-logo">
		<?php include( getTemplatePath() . "/partials/header/main-navbar.php"); ?>
	</div>
	<div class="port-breadcrumb-wrap">
		<div class="port-breadcrumb-wrap-title">
			<h2><b id="page-name"><?php echo $fileName; ?></b></h2>
		</div>
		<div class="breadcrumb-nav">
			<ol>
				<li class="breadcrumb-item pr-5"> <a href="<?php echo getTemplateUrl() . "/index.php"; ?>">Home</a> </li>
				<li class="breadcrumb-item active pl-10"><p><?php echo $fileTitle; ?></p> </li>
			</ol>
		</div>
	</div>
</section>
