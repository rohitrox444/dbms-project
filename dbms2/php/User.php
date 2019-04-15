<?php 

	require 'databseConnection.php';
	class User
	{
		

		function get_Quiz_List(){

			global $db_conn;

			$sql = "SELECT * FROM quiz_list";

			$result = $db_conn->query($sql);

			if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
    			
    			echo '<form method="post" action="php/quiz_validate.php">
  						<div class="col-sm-6 col-md-4 col-lg-4">
            			<div class="thumbnail" >
              			<img src="resources/test-logo-cat_255x255.jpg" alt="...">
              			<div class="caption">
                		<h3>'.$row['quiz_title'].'</h3>
                		<p>'.$row['quiz_desc'].'</p>
                	<p><input class="btn btn-primary" type="submit" value="Take Test"> <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#myModal">Test Info.</a></p>
			              </div>
			            </div>
			          </div>
			          <input type="hidden" id="sub_id" name="sub_id" value='.$row['sub_id'].'>
			          <input type="hidden" id="quiz_id" name="quiz_id" value='.$row['quiz_id'].'>
			          </form>';
    		}
		}	
		
	}
}

 ?>