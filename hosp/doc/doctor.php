<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>
  <link rel="stylesheet" href="doc.css">
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
            <a class="navlink" aria-current="page" href="../home/home.php">Home</a>
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
  <i class="bi bi-heart-pulse" id="logo"></i>
</div>
<div class="col">
    <form class="docform" action="doc.php" method="post" id="docForm">
      <h3>Enter Doctor's Information</h3>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob"><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male"> Male
        <input type="radio" id="female" name="gender" value="Female"> Female
        <input type="radio" id="other" name="gender" value="Other"> Other<br><br>

        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact"><br><br>

        <label for="qualification">Education:</label>
        <input type="text" id="qualification" name="qualification"> 

        <label for="experience">Experience in years:</label>
        <input type="text" id="experience" name="experience"><br><br>

        <label for="speciality">Speciality:</label>
        <input type="text" id="speciality" name="speciality"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="pass">Password:</label>
        <input type="text" id="pass" name="pass"><br><br>


        <input id="submit" type="submit" value="Submit" name="submit">
    </form>

</div>

<script>
        document.getElementById("docForm").addEventListener("submit", function(event) {


            var name = document.getElementById("name").value;
            var dob = document.getElementById("dob").value;
            var gender = document.getElementById("gender").value;
            var contact = document.getElementById("contact").value;
            var qualification = document.getElementById("qualification").value;
            var experience = document.getElementById("experience").value;
            var speciality = document.getElementById("speciality").value;
            var email = document.getElementById("email").value;
            var pass = document.getElementById("pass").value;

        });
    </script>

  
</body>
</html>