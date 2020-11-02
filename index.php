<?php 
error_reporting(0);
    session_start();
    include("db_Connection.php");
    include("lib_func_admin.php");
?>

<html>
	<head>
			<title>
				PWA Admin
			</title>
	    <?php _head(); ?>
	</head>
    
    <body class="text">
        <?php 
            $_SESSION['dashboard_pwa_session'];
            $sudahlogin=$_SESSION['dashboard_pwa_session'];
                if($sudahlogin == TRUE){
                    _index();
                    _bar();
                    _dashboard();
                }else{
                    form_login();
                }
        ?>
		<?php _footer(); ?>
	</body>
</html>