<?php include 'includes/header.php';?>

<?php 
$db = new Database;

$query = "SELECT relation.* , questions.year, questions.number, questions.paper, topics.name AS topicname FROM relation 
INNER JOIN questions 
ON questions.id = relation.question_id
INNER JOIN topics
ON topics.id = relation.topic_id";

$relations = $db->select($query);


if (isset($_GET['delete'])){
	$multiple = $_GET['multiple'];
	
	$i = 0;
	$sql = "DELETE FROM relation ";
	foreach ($multiple as $item_id){
		$i++;
		if ($i == 1) {
			$sql .= "WHERE id= ".mysql_real_escape_string($item_id)."";
		}else {
			$sql .= " OR id= ".mysql_real_escape_string($item_id)."";
			
		}
	}
	
	echo $sql;
	$delete = $db->delete($sql);
	
	//mysql_query($sql) or die(mysql_error());
	
	header("location:".$_SERVER['PHP_SELF']);
	
	exit();
}
?>
<div class="container">
<h2>Relation</h2>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
  <div class="bs-example" data-example-id="striped-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Topic Name</th>
          <th>Year</th>         
          <th>Question number</th>
          <th>Paper</th>
          <th ><div align="center"><input type = "submit" name = "delete" value="Delete Mulitple"></div></th>
        </tr>
      </thead>
      <tbody>
      <?php while($row = $relations->fetch_assoc()) :?>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $row['topicname'];?></td>
          <td><?php echo $row['year'];?></td>
          <td><?php echo $row['number'];?></td>
          <td><?php echo $row['paper'];?></td>
          <td align="center"><input type = "checkbox" name="multiple[]" value="<?php echo $row['id'];?>"></td>
        </tr>
       <?php endwhile;?>
     
      </tbody>
    </table>
  </div><!-- /example -->
  
  </form>
</div>