
<!DOCTYPE html>
<html>
<head>
      
    <title>Dashboard</title>
	
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/a.css">
     
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css">
     
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/morris-0.4.3.min.css">
        
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/b.css">
    
     
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
        <a class="navbar-brand" href="">Logged in</a> 
        </div>

        <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> 
        <a href="<?php echo site_url('Login/logout') ?>" class="btn btn-danger square-btn-adjust">Logout</a> 
        </div>
    </nav>   
           
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
				<li class="text-center">
                <img src="<?php echo base_url() ?>assets/img/find_user.png" class="user-image img-responsive"/>
				</li>	
                <li>
                <a class="active-menu"  href=""><i class=""></i> Dashboard</a>
                </li>	
					                   
            </ul>
               
        </div>
            
    </nav>  
        
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                <h2>Admin Dashboard</h2>   
                <h5>Welcome <?= $_SESSION['username']?> , Love to see you back. </h5>
                </div>
            </div>              
                     
                           
        </div>
             
    </div>
         
</div>
     
    
   
</body>
</html>
