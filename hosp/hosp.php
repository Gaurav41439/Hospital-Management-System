<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>
  <link rel="stylesheet" href="hosp.css">
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
<i class="bi bi-hospital" id="logo"></i>
</div>
<div class="col">
  <h3>Register as a Hospital:</h3> <br>
  <form action="form.php" method="post" id="myForm" class="form">
          <label for="h_id">Hospital ID:</label>
            <input class="inpbox" type="text" name="h_id" id="h_id" placeholder="Enter the hospital id">
            <label for="hname">Hospital Name:</label>
            <input class="inpbox" type="text" name="hname" id="hname" placeholder="Enter the hospital name"><br><br>
            <label for="address">Address of the Hospital:</label><br>
            <textarea class="inpbox" style="padding:5px;" name="address" id="address" cols="45" rows="3" placeholder="Enter Hospital address"> </textarea><br><br>
            <label for="email">Hospital Email:</label>
            <input class="inpbox" type="text" name="email" id="email" placeholder="Enter the hospital email">
            <label for="pass">Enter a Password:</label>
            <input class="inpbox" type="text" name="pass" id="pass" placeholder="Enter a Password"><br><br>
            <label for="phone">Hospital Phone Number:</label>
            <input class="inpbox" type="phone" name="phone" id="phone" placeholder="Enter hospital phone"> 
            <label for="wards"> Number of wards:</label>
            <input class="inpbox" type="number" name="wards" id="wards" placeholder="Enter the number of wards"> <br><br>
            <label for="blood">| Blood Bank:</label>
        <input type="radio" id="Yes" name="blood" value="Yes">
        <label for="Yes">Yes</label>
        <input type="radio" id="No" name="blood" value="No">
        <label for="No">No |</label>

        <label style="margin-left:10px;" for="icu">| ICU:</label>
        <input type="radio" id="Yes" name="icu" value="Yes">
        <label for="Yes">Yes</label>
        <input type="radio" id="No" name="icu" value="No">
        <label for="No">No |</label>

        <label style="margin-left:10px;" for="emg">| Emergency ward:</label>
        <input type="radio" id="Yes" name="emg" value="Yes">
        <label for="Yes">Yes</label>
        <input type="radio" id="No" name="emg" value="No">
        <label for="No">No |</label><br><br>

            <a href="home.php"><input  class="btn" type="submit" name="submit" value="Submit"></a> <br>
            
        </form>


</div>

    </div>
      
</body>
</html>