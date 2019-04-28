<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content= "width=device-width, initial-scale=1.0">
  <meta name="title" content="Passport Verification">
  <link rel="stylesheet" href="css/style.css">
  <title>Passport app</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#"><i class="fas fa-passport"></i> Passport app</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="applyOnline.php">Apply for passport</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="thana.php">SB Login</a>
          <a class="dropdown-item" href="#">Ward Commissioner Login</a>
          <a href="#" class="dropdown-item">Check Passsport Status</a>
        </div>
      </li>
  </div>
</nav>


  </header>

  <!------------------------------------------------------>
    
    <section id="thana">
      <div class="container">
        <table class="table table-dark">
          <thead>
            <th>Id</th>
            <th>Name</th>
            <th>District</th>
          </thead>
          <tr>
            <td><a href="">122</a></td>
            <td>Prince</td>
            <td>Barishal</td>
          </tr>
          <tr>
            <td><a href="">123</a></td>
            <td>Hasibul</td>
            <td>Chitagang</td>
          </tr>
          <tr>
            <td><a href="">234</a></td>
            <td>Omi</td>
            <td>Dhaka</td>
          </tr>
        </table>
      </div>
    </section>



  <!------------------------------------------------------->

  <footer class="p-5 text-light bg-dark">
    <i class="fas fa-envelope-square"></i>
    passportoffice@gmail.com &nbsp &nbsp &nbsp
    <i class="fas fa-phone"></i> 
    +88000000000
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>