<nav class="navbar navbar-inverse" role="navigation" style="background:#ffb849;border-radius: 0px;">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php" style="color:white;"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Photo Album</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right top">
			    <li <?php if(isset($page) and $page == 'home') echo 'style="background:#10578d;"'; ?> ><a href="index.php" style="color:white;"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
				<li <?php if(isset($page) and $page == 'login') echo 'style="background:#10578d;"'; ?>><a href="login.php" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<!-- <li><a href="register.php" style="color:white;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
				<li <?php if(isset($page) and $page == 'contact') echo 'style="background:#10578d;"'; ?>><a href="contact.php" style="color:white;"><span class="glyphicon glyphicon-envelope"></span>  Contact Us</a></li>
			</ul>
		</div>
	</div>
</nav>