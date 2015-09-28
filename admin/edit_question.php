<?php include 'includes/header.php';?>
<?php 
$id = $_GET['id'];
$db = new Database();

$query = "SELECT * FROM questions WHERE id=".$id;

$question = $db->select($query)->fetch_assoc();



?>
<div class="container">
<h2>Add questions</h2>
<form method="post" action="edit_question.php">
  <div class="form-group">
    <label>Year</label>
    <input name="year" type="text" class="form-control"  placeholder="Enter Year" value="<?php echo $question['year'];?>">
  </div>
   <div class="form-group">
    <label>Question Number</label>
    <input name="number" type="text" class="form-control"  placeholder="Enter Question Number" value="<?php echo $question['number'];?>">
  </div>
   <div class="form-group">
    <label>Answer</label>
    <textarea name="answer" class="form-control" placeholder="Enter the answer"><?php echo $question['answer'];?></textarea>
  </div>
   <div class="form-group">
    <label>Paper</label>
    <input name="paper" type="text" class="form-control"  placeholder="paper 1 or paper 2" value="<?php echo $question['paper'];?>">
  </div>
   <div class="form-group">
    <label>Youtube</label>
    <input name="youtube" type="text" class="form-control"  placeholder="Enter youtube link" value="<?php echo $question['youtube'];?>">
  </div>
  <div>
  <input name="submit" type="submit" class="btn btn-default" value="Submit"/>
  <a href = "index.php" class="btn btn-default">Cancel</a>
   <input name="delete" type="submit" class="btn btn-danger" value="Delete"/>
  </div>
</form>
</div>