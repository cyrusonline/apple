<?php include 'includes/header.php';?>
<?php 

$db = new Database();

if (isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db->link, $_POST['name']);
	
	//Simple validation
if ($name == ''){
	
}else {
	$query = "INSERT INTO topics
			(name) 
		VALUES('$name')	";
	$insert_row = $db->insert($query);
}
}



?>

<div class="container">
<h2>Add questions</h2>
<form method="post" action="add_topic.php">
  <div class="form-group">
    <label>Topic Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter a topic">
  </div>
 
  <div>
<input name="submit" type="submit" class="btn btn-default" value="Submit"/>	
<a href = "index.php" class="btn btn-default">Cancel</a>
	</div>
  
  </form>
</div>