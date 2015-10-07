<?php include 'includes/header.php';?>

<?php 
$db = new Database;


$query = "SELECT * FROM topics";

$topics = $db->select($query);

$query = "SELECT * FROM years";
$years = $db->select($query);

if (isset($_GET['submit'])){
	$topicid =$_GET['topic'];
	$chosenyear = $_GET['year'];
	
	
	$query = "SELECT * FROM questions WHERE paper = 1 AND year=".$chosenyear." ORDER by year, number";
	echo $query;
	$paper1 = $db->select($query);
	
	$query = "SELECT * FROM questions WHERE paper = 2";
	$paper2 = $db->select($query);

	echo $topicid."<br>".$chosenyear;
	
}

echo "cccc";

?>


<div class="container">
<h2>Relation</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
<div class="col-md-4">
<select name="topic" class="form-control" >
<?php while ($row = $topics->fetch_assoc()):?>
<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>

<?php endwhile;?>

</select>
</div>

<div class="col-md-4">
<select name="year" class="form-control" >
<?php while ($row = $years->fetch_assoc()):?>
<option ><?php echo $row['year']?></option>

<?php endwhile;?>

</select>
</div>
 <input name="submit" type="submit" class="btn btn-default" value="Submit"/>

  </form>
  
 <?php if (isset($chosenyear)):?> 
  
 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET"> 
  
    <div class="bs-example" data-example-id="striped-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>id</th>
          <th>Year</th>
          <th>Question number</th>
          <th>Paper</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $paper1->fetch_assoc()) :?>
      	
        <tr>
          <th scope="row">1</th>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['year']?></td>
          <td><?php echo $row['number']?></td>
          <td><?php echo $row['paper']?></td>
        </tr>
        
        <?php endwhile;?>
  
      
      </tbody>
    </table>
  </div><!-- /example -->
  
  
    <div class="bs-example" data-example-id="striped-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /example -->
  
  </form>
  
  <?php else:?>
  
  <h2> Nothing is chosen</h2>
  
  
  <?php endif;?>
  
  
  
  
</div>