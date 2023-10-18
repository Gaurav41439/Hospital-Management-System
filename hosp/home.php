<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="body">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<div>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hospital Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="navitem">
            <a class="navlink" aria-current="page" href="#">Home</a>
          </li>
          <li class="navitem">
            <a class="navlink" href="#">Login</a>
          </li>
          <li class="navitem">
            <a class="navlink" href="#">SignUp</a>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</div>
<div class="col-left">
<i class="bi bi-calendar2-plus" id="logo"></i>
</div>
<div class="col">
  <h3>Sign up here!</h3>
  <p>Sign as:</p>
  <div class="reg-btn">
  <a href="#"><button type="button" class="btn-reg">Doctor</button></a>
  <a href="hosp.php"><button type="button" class="btn-reg">Hospital</button></a>
  <a href="#"><button type="button" class="btn-reg ">Patient</button></a>
  </div>
  <p>Sign up as a new Hospital, Doctor or Patient</p>

  <h3 style="margin-top:7%;">Already Registered? Login here!</h3>
  <p>Login here:</p>
  <div class="reg-btn">
  <a href="#"><button type="button" class="btn-reg" style="margin-top:3%;">Login</button></a>
  </div>
  <p>Login if you are already registered with us </p>


</div>

  
</body>
</html>