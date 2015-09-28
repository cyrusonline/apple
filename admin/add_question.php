<?php include 'includes/header.php';?>
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
  <button name="submit" type="submit" class="btn btn-default">Submit</button>
  <a href = "index.php" class="btn btn-default">Cancel</a>
  </div>
</form>
</div>