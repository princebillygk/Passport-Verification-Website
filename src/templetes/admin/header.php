<!-- Header Element start -->
<!DOCTYPE html>
<html lang="en">
<head>
	
  <meta charset="UTF-8">
  <meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<meta name="title" content="Passport Verification">
	<link rel="stylesheet" href="css/style.css">
	<title><?php echo (isset($pageTitle))?$pageTitle:'Passport Application system'?></title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#"><i class="fas fa-passport"></i> <?php echo (isset($pageTitle))?'PAS-'.$pageTitle:'Passport Application system'?> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $user?>listview.php"> Show Applicant List<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link bg-danger btn rounded p-1" href="logout.php">logout</a>
      </li>
        </div>
      </li>
  </div>
</nav>
</header>



