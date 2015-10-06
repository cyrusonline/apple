<?php include 'includes/header.php';?>


<div class="container">
<h2>Relation</h2>
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
        <tr>
          <th scope="row">1</th>
          <td>Trigo</td>
          <td>2005</td>
          <td>1</td>
          <td>2</td>
          <td align="center"><input type = "checkbox" name="multiple[]" value="<?php //echo $row['id'];?>"></td>
        </tr>
           <tr>
          <th scope="row">1</th>
          <td>Trigo</td>
          <td>2005</td>
          <td>1</td>
          <td>2</td>
          <td align="center"><input type = "checkbox" name="multiple[]" value="<?php //echo $row['id'];?>"></td>
        </tr>
           <tr>
          <th scope="row">1</th>
          <td>Trigo</td>
          <td>2005</td>
          <td>1</td>
          <td>2</td>
          <td align="center"><input type = "checkbox" name="multiple[]" value="<?php //echo $row['id'];?>"></td>
        </tr>
     
      </tbody>
    </table>
  </div><!-- /example -->
</div>