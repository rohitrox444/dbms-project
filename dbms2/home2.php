<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <!-- old bootstrap 3.4.1-->
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Oswald|Playfair+Display" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  
  <!-- custome stylesheets -->
   <link rel="stylesheet" href="resources/home.css">
    <title>DBMS Project</title>
  </head>
  <body>

    <?php session_start() ?>

   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.html" width="60" ><i class="glyphicon glyphicon-book"></i>   ONLINE EXAMINATION SYSTEM</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">HOME <span class="sr-only">(current)</span></a></li>
        <li ><a href="login.php">STUDENT LOGIN/SIGN UP</a></li>
        <li><a href="login.php">ADMIN LOGIN/SIGN UP</a></li>
        
        <!-- if logged in then will work otherwise not  start-->

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['loggedinUser'] ;?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Progress action</a></li>
            <li><a href="#">Leaderboard</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logoutProcess.php">Logout</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>

       <!-- if logged in then will work otherwise not  end-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- crasoul home page -->

<div class="container-fluid" style="padding: 0%;">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="resources/slide1.jpg" style="width: 100%; height: 400px;">
      <div class="carousel-caption">
        <h3>IMAGE 1</h3>
      </div>
    </div>
    <div class="item">
      <img src="resources/slide-4.jpg" alt="..." style="width: 100%; height: 400px;">
      <div class="carousel-caption">
        <h3>IMAGE 2</h3>
      </div>
    </div>
    <div class="item">
      <img src="resources/slide-1.jpg" alt="..." style="width: 100%; height: 400px;">
      <div class="carousel-caption">
        <h3>IMAGE 2</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- tests section -->
<div class="row" style="text-align: center; font-family: 'Oswald', sans-serif;"><h2>AVAILABLE TEST</h2></div>
<div class="container">
   <!-- 1st row -->
    <div class="row" >
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail" >
      <img src="resources/test-logo-cat_255x255.jpg" alt="...">
      <div class="caption">
        <h3>CAT Test</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="#" class="btn btn-primary" role="button" >Take Test</a> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail">
      <img src="resources/test-logo-c_255x255.png" alt="...">
      <div class="caption">
        <h3>CS Test</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="#" class="btn btn-primary" role="button">Take Test</a> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail">
      <img src="resources/test-logo-cs_255x255.png" alt="...">
      <div class="caption">
        <h3>CS Test</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="#" class="btn btn-primary" role="button">Take Test</a> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
      </div>
    </div>
  </div>
</div>

<!-- 2nd row -->
    <div class="row">
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail">
      <img src="resources/test-logo-machinelearning_255x255.jpg" alt="...">
      <div class="caption">
        <h3>CS Test</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="#" class="btn btn-primary" role="button">Take Test</a> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail">
      <img src="resources/test-logo-maths_255x255.png" alt="...">
      <div class="caption">
        <h3>CS Test</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="#" class="btn btn-primary" role="button">Take Test</a> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail">
      <img src="resources/test-logo-stats_255x255.png" alt="...">
      <div class="caption">
        <h3>CS Test</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="#" class="btn btn-primary" role="button">Take Test</a> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
      </div>
    </div>
  </div>
</div>

<!-- 3rd row -->
    <div class="row">
    <div class="row" style="text-align: center; font-family: 'Oswald', sans-serif;"><h2>UPCOMING TEST</h2></div>
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail">
      <img src="resources/test-logo-machinelearning_255x255.jpg" alt="...">
      <div class="caption">
        <h3>CS Test</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="#" class="btn btn-primary" role="button">Take Test</a> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail">
      <img src="resources/test-logo-maths_255x255.png" alt="...">
      <div class="caption">
        <h3>CS Test</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="#" class="btn btn-primary" role="button">Take Test</a> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div class="thumbnail">
      <img src="resources/test-logo-stats_255x255.png" alt="...">
      <div class="caption">
        <h3>CS Test</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="#" class="btn btn-primary" role="button">Take Test</a> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal CODE START-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <h3>test description</h3>
        <p>ghfvgcgcghcgcvcvcghchgcghcgh</p>
        
        <p><b>Prerequisite :</b> BASIC APTITUDE &amp; VOCABULARY </p>
        <p><b>DURATION :</b> 1 HR 30min </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal CODE END-->

<!-- footer CODE END-->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    
    </body>
</html>