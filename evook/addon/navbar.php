<head>
    <!--navbarCSS HERE-->

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- material icons cdn -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- common css -->
    <link rel="stylesheet" type="text/css" href="css/common.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="bootcatch sidebar is simple single page template with sidebar based on bootstrap, it's starter template for admin template - thanks :)">
    <meta name="author" content="">
</head>

<div id="main-wrapper">
        <!-- Sidebar -->
        <div id="sidebar">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="d-flex align-items-center" >
                        E - Vook
                    </a>
                </li>
                <li>
                    <a href="booking.html">Reservation Bookings</a>
                </li>
                <li>
                    <a href="user.html">Check Users</a>
                </li>
                <li>
                    <a href="faq.html">FAQs</a>
                </li>
                <li>
                    <a href="setting.php">Settings</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="db/logout.php">Logout</a>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="main-content">
        	<!-- navbar start -->
        	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  	<!-- sidebar collapse button ## mobile view -->
				<ul class="navbar-nav  d-flex align-items-center ">
			      <li class="nav-item active mobile-view">
			        <a class="nav-link d-flex align-items-center" href="#menu-toggle"  id="menu-toggle">
			        	<i class="material-icons">menu</i>
			        	<span class="sr-only">(current)</span></a>
			      </li>
			  	</ul>
			  	<!-- end sidebar collapse button ## mobile view -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav d-flex align-items-center">
			      <li class="nav-item active">
			        <a class="nav-link d-flex align-items-center" href="home.php"  id="menu-toggle">
			        	Home
			        	<span class="sr-only">(current)</span></a>
			      </li>
			     
			    </ul>
			  </div>
			</nav>
			<!-- navbar ends -->
            <div class="container-fluid">
               <p>Welcome Admin!</p>
            </div>
        </div>
        <!-- /#main-content -->

    </div>
    <!-- /#wrapper -->
<!-- /#sidebar -->