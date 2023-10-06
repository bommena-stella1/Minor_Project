<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="temp.css">
</head>
<body>
<!--<style>
    body {
      background-image: url(home2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.5);
    }

    .navbar-brand {
      color: white;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      color: white;
    }

    .navbar-nav .nav-link:hover {
      color: yellow;
    }

    .navbar-nav .active > .nav-link {
      color: yellow;
    }

    .quote-box {
      margin: 200px auto;
      max-width: 400px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.7);
      box-shadow: 0 5px 10px 5px rgba(0,0,0,0.5);
      text-align: center;
    }

    .quote {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: rgb(128, 128, 121);
      border-color: rgb(192, 192, 181);
    }

    .btn-primary:hover {
      background-color: white;
      border-color: rgb(83, 76, 76);
      color: black;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">&emsp;JOBSEARCH for women</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="quote-box">
      <p class="quote">"This Is Your Moment,OWN IT"</p>
      <a href="job_search.html" class="btn btn-primary">SEARCH JOB</a>
    </div>
  </div>

  Add Bootstrap JS at the end of the body tag -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--<div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>-->
    <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">&emsp;JOBSEARCH for women</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="grid-container">
    <div class="grid-item">
      <a href="company.html">
        <h4>Company</h4>
        <p>Eg: Google,Amazon etc</p>
        <p>Search your job by your dream company.<br>if you are searching for a job like software engineer at google you can search as software engineer in google</p>
    </a>
      </div>
    <div class="grid-item">
      <a href="industries.html">
        <h4>Industry</h4>
        <p>Eg: Human Resources Services,Sofware Developemnt,Rectruiting & Banking</p>
        <p>If you want to search your job in <br>particular Industry<br>,then you can search by job name </p>
    </a>
  </div>
    <div class="grid-item">
      <a href="location.html">
        <h4>Location</h4>
        <p>Eg: Hyderabad,Bangalore etc</p>
        <p>You can search for particular job in particular Location by specifying the job name with the location as Software Developer in Hyderabad</p>
    </a>
  </div>
  </div>
  <div class="grid-container2">
    <div class="grid-item">
      <a href="salary.html">
        <h4>Salary</h4>
        <p>Eg: 800000,1200000</p>
        <p>You can search for particular job with salary by specifying the required job as 800000LPA Java developer</p>
      </a>
    </div>
    <div class="grid-item">
      <a href="experience.html">
        <h4>Experience Level</h4>
        <p>Eg: Entry Level,Director,Associate etc</p>
        <p>You can search by Job based on Experience level like internship,Mid-senior level,Director,Recruiter & Associate etc</p>
    </a></div>
    <div class="grid-item">
      <a href="remote_home_contract.html">
        <h4>Job Type</h4>
        <p>Eg: Remote,Work from home etc</p>
        <p>You can Search for particular job based on your preferences whether you want to work remotely or work from home or work as a contract or you need a internship or temparary etc</p>
    </a>
    </div>
  </div>
  <footer class="footer">
  <div class="footer-bottom">
    <p>&copy; 2023 Your Job Search. All rights reserved.</p>
  </div>
  </footer>
</body>
</html>