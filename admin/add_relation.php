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
	
	
	$query = "SELECT * FROM questions WHERE paper = 1 AND year=".$chosenyear." ORDER by number ASC";
	echo $query;
	$paper1 = $db->select($query);
	
	$query = "SELECT * FROM questions WHERE paper = 2 AND year=".$chosenyear." ORDER by number";
	$paper2 = $db->select($query);

	echo $topicid."<br>".$chosenyear;
	
}

echo "cccc";

?>

<?php 
if (isset($_GET['add'])){
	$multiple = $_GET['multiple'];
	$topicid = $_GET['topicid'];
	$i = 0;
	
	
	$sql = "INSERT INTO relation ( topic_id, question_id ) VALUES";
	foreach ($multiple as $item_id){
		$i++;
		if ($i == 1) {
			$sql .= "(".$topicid.",".mysql_real_escape_string($item_id).")";
		}else {
			$sql .= ",(".$topicid.",".mysql_real_escape_string($item_id).")" ;
			
		}
	}
	
	echo $sql;
	$insert = $db->insert($sql);
	
	//mysql_query($sql) or die(mysql_error());
	
	header("location:".$_SERVER['PHP_SELF']);
	
	exit();
}

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
          <td align="center"><div><input type = "submit" name = "add" value="Add Mulitple"></div></td>
        </tr>
      </thead>
      <tbody>
      <?php $i=1?>
        <?php while($row = $paper1->fetch_assoc()) :?>
      	
        <tr>
          <th scope="row"><?php echo $i?></th>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['year']?></td>
          <td><?php echo $row['number']?></td>
          <td><?php echo $row['paper']?></td>
	          <td align="center">
		 <input type = "checkbox" name="multiple[]" value="<?php echo $row['id'];?>">
		</td>
        </tr>
        <?php $i++;?>
        
        <?php endwhile;?>
   <?php while($row = $paper2->fetch_assoc()) :?>
      	
        <tr>
          <th scope="row"><?php echo $i?></th>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['year']?></td>
          <td><?php echo $row['number']?></td>
          <td><?php echo $row['paper']?></td>
    
	          <td align="center">
		 <input type = "checkbox" name="multiple[]" value="<?php echo $row['id'];?>">
		</td>
        </tr>
        <?php $i++;?>
        
        <?php endwhile;?>
      
      </tbody>
    </table>
  </div><!-- /example -->
  
  
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
        <?php while($row = $paper2->fetch_assoc()) :?>
      	
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
  <input type="hidden" name="topicid" value="<?php echo $topicid?>">
  </form>
  
  <?php else:?>
  
  <h2> Nothing is chosen</h2>
  
  
  <?php endif;?>
  
  
  
  
</div>