<!DOCTYPE html>
<html>
<?php $this->load->view('templates/admin/head.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    <?php $this->load->view('templates/admin/header.php'); ?>
    <?php $this->load->view('templates/admin/sidebar.php'); ?>
		<?php $this->load->view('pages/admin/'.$page.'.php',$content); ?>
		<?php $this->load->view('templates/admin/footer.php'); ?>
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<?php $this->load->view('templates/admin/script.php'); ?>
        
    </div>
<!-- ./wrapper -->


</body>
</html>
