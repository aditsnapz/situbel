<!DOCTYPE html>
<html>
<?php $this->load->view('templates/user/head.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    <?php $this->load->view('templates/user/header.php'); ?>
    <?php $this->load->view('templates/user/sidebar.php'); ?>
		<?php $this->load->view('pages/user/'.$page.'.php',$content); ?>
		<?php $this->load->view('templates/user/footer.php'); ?>
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<?php $this->load->view('templates/user/script.php'); ?>
        
    </div>
<!-- ./wrapper -->


</body>
</html>
