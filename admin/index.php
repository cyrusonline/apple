<?php include '../config/config.php';?>
<?php include '../libraries/Database.php';?>

<?php 
	
	
	$db = new Database();
	
	
		$query = "SELECT * FROM questions WHERE paper = 1";
		$paper1 = $db->select($query);
		
		$query = "SELECT * FROM questions WHERE paper = 2";
		$paper2 = $db->select($query);
			
	
	
	$query = "SELECT * FROM topics ORDER by name";
	$topics = $db->select($query);
	
	
	
	
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#about">Add Question</a></li>
            <li><a href="#contact">Add Topics</a></li>
            <li><a href="#contact"></a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
	<h2>Admin Area</h2>
	<div class="col-md-12">
	<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>id</th>
          <th>Year</th>
          <th>Question number</th>
          <th>Answer</th>
          <th>Paper</th>
          <th>Youtube</th>
          <th>Topic</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td>5</td>
          <td>2005</td>
          <td>3</td>
          <td>The required probability is</td>
          <td>1</td>
          <td>TcqsayIZdp0</td>
          <td>Equation of Straight Line</td>
        </tr>
           <tr>
          <th>1</th>
          <td>5</td>
          <td>2005</td>
          <td>3</td>
          <td>The required probability is</td>
          <td>1</td>
          <td>TcqsayIZdp0</td>
          <td>Equation of Straight Line</td>
        </tr>
           <tr>
          <th>1</th>
          <td>5</td>
          <td>2005</td>
          <td>3</td>
          <td>The required probability is</td>
          <td>1</td>
          <td>TcqsayIZdp0</td>
          <td>Equation of Straight Line</td>
        </tr>
      </tbody>
    </table>
	
	
	
	
	
	
	
	
	</div>







    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
