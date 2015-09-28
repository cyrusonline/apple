<?php include 'includes/header.php';?>

<?php

$id = $_GET['id'];
// Create DB Object
$db = new DataBase ();

// Create Query
$query = "SELECT * FROM topics WHERE id =".$id;

// Run Query
$topic = $db->select ( $query )->fetch_assoc();



?>
<div class="container">
<h2>Add questions</h2>
<form method="post" action="edit_topic.php">
  <div class="form-group">
    <label>Topic Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter a topic"  value="<?php echo $topic['name'];?>">
  </div>
 
  <div>
<input name="submit" type="submit" class="btn btn-default" value="Submit"/>	
  <a href = "index.php" class="btn btn-default">Cancel</a>
   <input name="delete" type="submit" class="btn btn-danger" value="Delete"/>
	</div>
  
  </form>
</div>