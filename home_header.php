<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Photo Album</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Photo Album</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">

				 <ul class="nav navbar-nav navbar-right">
 				<li><a href="addnew.php"> <span class="glyphicon glyphicon-plus-sign"></span>   Add</a></li>
				<li><a href="editform.php"> <span class="glyphicon glyphicon-edit"></span>  Edit</a></li>
				<li><a href="home.php"> <span class="glyphicon glyphicon-eye-open"></span>  View</a></li>
 				<li><a href="search.php"> <span class="glyphicon glyphicon-search"></span>  Search</a></li>
 				<li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
				 
			</ul>
		
		</div>
	</div>
</nav>