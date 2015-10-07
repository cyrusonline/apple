<?php include 'includes/header.php';?>

<?php
//get sth
$id = $_GET['id'];
// Create DB Object
$db = new DataBase ();

// Create Query
$query = "SELECT * FROM topics WHERE id =".$id;

// Run Query
$topic = $db->select ( $query )->fetch_assoc();



?>

<?php 

if (isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db->link, $_POST['name']);
	
	//Simple validation
	if ($name == ''){

	}else {
		$query = "UPDATE topics
		SET
		name = '$name' 
		WHERE id=".$id;
		
		$update_row = $db->update($query);
	}
}
?>
<div class="container">

<h2>Add questions</h2>
<form method="post" action="edit_topic.php?id=<?php echo $id;?>">
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