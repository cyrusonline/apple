<?php include 'includes/header.php';?>
<?php 

$db = new Database();

if (isset($_POST['submit'])){
	$year = mysqli_real_escape_string($db->link, $_POST['year']);
	$number = mysqli_real_escape_string($db->link, $_POST['number']);
	$answer = mysqli_real_escape_string($db->link, $_POST['answer']);
	$paper = mysqli_real_escape_string($db->link, $_POST['paper']);
	$youtube = mysqli_real_escape_string($db->link, $_POST['youtube']);
	//Simple validation
if ($year == ''|| $number == ''||$paper == ''){
	
}else {
	$query = "INSERT INTO questions
			(year, number, answer, paper, youtube) 
		VALUES('$year','$number','$answer','$paper','$youtube')	";
	$insert_row = $db->insert($query);
}
}



?>


<div class="container">
<h2>Add questions</h2>
<form method="post" action="add_question.php">
  <div class="form-group">
    <label>Year</label>
    <input name="year" type="text" class="form-control"  placeholder="Enter Year">
  </div>
   <div class="form-group">
    <label>Question Number</label>
    <input name="number" type="text" class="form-control"  placeholder="Enter Question Number">
  </div>
   <div class="form-group">
    <label>Answer</label>
    <textarea name="answer" class="form-control" placeholder="Enter the answer"></textarea>
  </div>
   <div class="form-group">
    <label>Paper</label>
    <input name="paper" type="text" class="form-control"  placeholder="Enter Year">
  </div>
   <div class="form-group">
    <label>Youtube</label>
    <input name="youtube" type="text" class="form-control"  placeholder="Enter Year">
  </div>
  <div>
  <input name="submit" type="submit" class="btn btn-default" value="Submit"/>
  <a href = "index.php" class="btn btn-default">Cancel</a>
 
  </div>
</form>
</div>