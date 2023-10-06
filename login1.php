<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      grid-gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
    }

    .grid-item {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }
  </style>
  <title>Job Search Website</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5">Job Search Website</h1>
    <div class="grid-container">
      <div class="grid-item">
        <h4>Company</h4>
        <p>Company A</p>
      </div>
      <div class="grid-item">
        <h4>Location</h4>
        <p>City X</p>
      </div>
      <div class="grid-item">
        <h4>Salary</h4>
        <p>$60,000</p>
      </div>
      <div class="grid-item">
        <h4>Experience Level</h4>
        <p>Entry Level</p>
      </div>
      <div class="grid-item">
        <h4>Industry</h4>
        <p>Tech</p>
      </div>
      <!-- Add more grid items for additional job details -->
    </div>
  </div>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
