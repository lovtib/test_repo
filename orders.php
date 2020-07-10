<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="import" href="/navigation.html">
  <script src="/node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</head>

<body>
  <div class="container">
    <div class="navigation">
      <?php include 'navigation.html';?>
    </div>
    <div>&nbsp;</div>
    <button id="getDataBtn" class="btn btn-block btn-primary">
      Get Data
    </button>
    <table id="userTable" class="table table-striped">
      <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>action</th>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>

  <script src="js/main.js"></script>

</body>

</html>