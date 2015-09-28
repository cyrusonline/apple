<?php include 'includes/header.php';?>
<?php 
	
	
	$db = new Database();
	
	
		$query = "SELECT * FROM questions WHERE paper = 1 ORDER by year, number";
		$paper1 = $db->select($query);
		
		$query = "SELECT * FROM questions WHERE paper = 2";
		$paper2 = $db->select($query);
		
		$query = "SELECT * FROM questions ORDER BY paper";
		$questions = $db->select($query);
			
	
	
	$query = "SELECT * FROM topics ORDER by name";
	$topics = $db->select($query);
	
	
	
	
?>





    <div class="container">
	<h2>Admin Area</h2>
	<h1>Questions</h1>
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
          <th>Date</th>
          
          
        </tr>
      </thead>
      <tbody>
      	<?php while ($row = $paper1->fetch_assoc()):?>
        <tr>
       
          <th>1</th>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['year'];?></td>
          <td><?php echo $row['number'];?></td>
          <td><?php echo $row['answer'];?></td>
          <td><?php echo $row['paper'];?></td>
          <td><?php echo $row['youtube'];?></td>
          <td><?php echo $row['date_add'];?></td>
          
        </tr>
        <?php endwhile;?>
       
        
      </tbody>
    </table>
	
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
          <th>Date</th>
          
          
        </tr>
      </thead>
      <tbody>
      	<?php while ($row = $paper2->fetch_assoc()):?>
        <tr>
       
          <th>1</th>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['year'];?></td>
          <td><?php echo $row['number'];?></td>
          <td><?php echo $row['answer'];?></td>
          <td><?php echo $row['paper'];?></td>
          <td><?php echo $row['youtube'];?></td>
          <td><?php echo $row['date_add'];?></td>
          
        </tr>
        <?php endwhile;?>
       
      
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
