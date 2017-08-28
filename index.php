<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Telmetry Analyzer</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Telmetry Analyzer</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Header Bar -->
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Setting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">?</a>
        </li>
      </ul>
      <div align="right">
        <button type="button" class="btn btn-outline-danger">Logout</button>
      </div>
    </nav>

    <!-- Menu Bar -->
    <br><br><br>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Rent Overview<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">?</a>
            </li>
          </ul>
        </nav>

        <!-- Workspace -->
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2>Rent Overview</h2>

          <!-- Search Bar -->
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>

          <!-- Main Table -->
          <br>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Rent No</th>
                  <th>Car No</th>
                  <th>Pi No</th>  
                  <th>Driver No</th> 
                  <th>Destination</th>
                  <th>Date</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                <!-- Table Data-->
                <?php include("test.php");?>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <ul class="pagination justify-content-center">
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
              <!-- Pagination Data-->
              <script type="text/javascript">
                var lines = '<li class="page-item active"><a class="page-link" href="#">#</a></li>';
                document.write(lines);
              </script>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>  
        </ul>

      </main>
    </div>
  </div>
</body>
</html>