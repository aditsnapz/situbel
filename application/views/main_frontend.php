<!DOCTYPE html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<?php $this->load->view('templates/frontend/head.php'); ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Main Body Area Start Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <?php $this->load->view('templates/frontend/header.php'); ?>
        <!-- Header Area End Here -->
        <?php $this->load->view('pages/frontend/'.$page.'.php',$content); ?>
        
		<?php $this->load->view('templates/frontend/footer.php'); ?>
    </div>
    <!-- Main Body Area End Here -->
	<?php $this->load->view('templates/frontend/script.php'); ?>
  
</body>

</html>
