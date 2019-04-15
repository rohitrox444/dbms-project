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

    <?php  
    include_once 'loginvalidate.php';  

    include_once  'php/User.php' ;

    $quiz_row = new User();

    ?>

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

        <?php if(isset($_SESSION['loggedin'])){ ?>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['loggedinUser'] ;?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Progress action</a></li>
            <li><a href="#">Leaderboard</a></li>
            <li role="separator" class="divider"></li>
            <?php if(isset($_SESSION['user-type']) && $_SESSION['user-type'] == 'admin'){ ?>
              <li><a href="#">Create Quiz</a></li>
              <li><a href="#">Modify Quiz</a></li>
            <?php } ?>
            <li><a href="logoutProcess.php">Logout</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>
      <?php } ?>
       <!-- if logged in then will work otherwise not  end-->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- quiz questions starts here -->

<div class="container">

  <table class="table">
    <tr class="active">questions</tr>
    <tr class="active">...</tr>
    <tr class="active">...</tr>
    <tr class="active">...</tr>
</table>
  
</div>


</body>
</html>
