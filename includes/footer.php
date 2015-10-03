<div class="sidebar col-md-2" >
<div class="panel panel-default">
  <div class="panel-heading">Select questions by year</div>
  
  <ul class="list-group">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
 
</div>
<div class="panel panel-default">
  <div class="panel-heading">Select questions by topic</div>
  
   <ul class="list-group">
   <?php if($topics):?>
   <?php while ($row = $topics->fetch_assoc()):?>
  <li class="list-group-item"><a href="#"><?php echo $row['name']?></a></li>

  <?php endwhile;?>
  <?php else:?>
  <p> Sorry, there is no topics available </p>
  <?php endif;?>
  
</ul>
</div>


</div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>