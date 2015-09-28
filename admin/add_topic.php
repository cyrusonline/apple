<?php include 'includes/header.php';?>


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