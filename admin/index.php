<?php include 'includes/header.php';?>
<?php 
	
	
	$db = new Database();
	
	
		$query = "SELECT * FROM questions WHERE paper = 1";
		$paper1 = $db->select($query);
		
		$query = "SELECT * FROM questions WHERE paper = 2";
		$paper2 = $db->select($query);
			
	
	
	$query = "SELECT * FROM topics ORDER by name";
	$topics = $db->select($query);
	
	
	
	
?>





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
          
        </tr>
           <tr>
          <th>1</th>
          <td>5</td>
          <td>2005</td>
          <td>3</td>
          <td>The required probability is</td>
          <td>1</td>
          <td>TcqsayIZdp0</td>
          
        </tr>
           <tr>
          <th>1</th>
          <td>5</td>
          <td>2005</td>
          <td>3</td>
          <td>The required probability is</td>
          <td>1</td>
          <td>TcqsayIZdp0</td>
          
        </tr>
      </tbody>
    </table>
	
	
		<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>id</th>
          <th>Topic name</th>
          
          
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <td>1</td>
          <td>Trigonometry</td>
          
        </tr>
       <tr>
          <th>1</th>
          <td>1</td>
          <td>Trigonometry</td>
          
        </tr>
        
         <tr>
          <th>1</th>
          <td>1</td>
          <td>Trigonometry</td>
          
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
