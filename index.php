<?php include 'config/config.php';?>
<?php include 'libraries/Database.php';?>

<?php 
	$id=1;
	$id = $_GET['id'];
	
	$db = new Database();
	
	if ($id){
		$query = "SELECT * FROM questions";
		$paper1 = $db->select($query);
		$paper2 = $db->select($query);
	}else {
		$query = "SELECT * FROM questions WHERE paper = 1";
		$paper1 = $db->select($query);
		
		$query = "SELECT * FROM questions WHERE paper = 2";
		$paper2 = $db->select($query);
	}
		
	
	
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
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
 <div class = "questiontable col-md-5"  >
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Paper I </div>

  <!-- Table -->

 <table class="table">
       <?php if ($paper1):?>
        <thead>
          <tr>
            <th>#</th>
            <th>Year</th>
            <th>Question number</th>
            <th>Answer</th>
          </tr>
        </thead>
        
        <tbody>
        

    <?php while($row = $paper1->fetch_assoc()) :?>
          <tr>
         
            <th scope="row">1</th>
            <td><?php echo $row['year']?></td>
            <td><a href="#">Q<?php echo $row['number']?></a></td>
            <td><?php  echo $row['answer']?></td>
          </tr>
          
     <?php endwhile;?>
           
 <?php else:?>
 
  There are no requested question yet
 
 
 <?php endif;?>
          
        </tbody>
      </table>
</div>
</div>


<div class = "questiontable col-md-5"  >
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Paper II </div>

  <!-- Table -->

 <table class="table">
       <?php if ($paper2):?>
        <thead>
          <tr>
            <th>#</th>
            <th>Year</th>
            <th>Question number</th>
            <th>Answer</th>
          </tr>
        </thead>
        
        <tbody>
        

    <?php while($row = $paper2->fetch_assoc()) :?>
          <tr>
         
            <th scope="row">1</th>
            <td><?php echo $row['year']?></td>
            <td><a href="#">Q<?php echo $row['number']?></a></td>
            <td><?php  echo $row['answer']?></td>
          </tr>
          
     <?php endwhile;?>
           
 <?php else:?>
 
  There are no requested question yet
 
 
 <?php endif;?>
          
        </tbody>
      </table>
</div>
</div>



<div class="sidebar col-md-2" >
<div class="panel panel-default">
  <div class="panel-heading">Select questions by year</div>
  <div class="panel-body">
  <ul class="list-group">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">Select questions by topic</div>
  
   <ul class="list-group">
   <?php if($topics):?>
   <?php while ($row = $topics->fetch_assoc()):?>
  <li class="list-group-item"><a href="#"><?php echo $row['name']?></a></li>

  <?php endwhile;?>
  <?php else:?>
  <p> Sorry, there is no topics available </p>
  <?php endif;?>
  
</ul>
</div>


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
