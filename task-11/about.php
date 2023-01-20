<?php
$page_title="About"
?>
<!-- Head -->
<?php include_once  './layouts/head.php'; ?>

<!-- Navigation -->
<?php include_once  './layouts/nav.php'; ?>

<?php include_once  './layouts/slider.php'; ?>

<div class="container-fluid">

	<!-- Left Column -->
	<div class="col-sm-3">

		<!-- List-Group Panel -->
		<?php include_once  './layouts/list_group.php'; ?>


		<!-- Text Panel -->
		<?php include_once  './layouts/text_panel.php'; ?>

	</div>
	<!--/Left Column-->


	<!-- Center Column -->
	<?php include_once  './layouts/contain.php'; ?>
	<!--/Center Column-->


	<!-- Right Column -->
	<div class="col-sm-3">

		<!-- Search -->
		<?php include_once  './layouts/right_search.php'; ?>

		<!-- Progress Bars -->
		<?php include_once  './layouts/progress_bar.php'; ?>

		<!-- Text Panel -->
		<?php include_once  './layouts/right_text_panel.php'; ?>

	</div><!--/Right Column -->

</div><!--/container-fluid-->

<?php include_once  './layouts/footer.php'; ?>


