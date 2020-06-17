<?php
 

if(isset($_GET['user']))
{
  $error =$_GET['user'];
	echo "<script>alert(' jpeg,png,jpg extension allow ')</script>";
}
else
{
	 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YouFrame</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initical-scale=0.1">
	<script src="js/jquery-.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
	<script>
	
    $(document).ready(function(){
			 product();
				function product(){
		$.ajax({
			url:"backend.php",
			type:"post",
			data:{getproduct:1},
			success: function(data,staus)
			{
				$('#get_product').html(data);
			}
			
		});
	}
			
		})
	</script>
	<style>

	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-color">
		<h2 class="text-white">Gallery</h2>
	</nav>
	
	<p><br></p>
	
	<div class="container">
	<center>
		<button type="button" class="btn btn-sm btn-color  " data-toggle="modal" data-target="#modal">
			<i class="fa fa-upload" aria-hidden="true"></i> <b>upload</b></button>
			
		</center>
		<div class="modal" id="modal">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
			    <div class="modal-header">
		         <h5 class="" style="margin-left:42%;">upload image</h5>
			      <button type="button" class="close" data-dismiss="modal" >&times;</button>
					</div>
						<div class="modal-body">
					    <form action="backend.php" enctype="multipart/form-data" method="post">
						  <div class="form-group">
							<label><b>upload image</b></label>
							<input type="file" name="file" required>
							</div>
							<div class="form-group text-center">
							 <button type="submit" name="upload" class="btn  btn-primary" >
							submit </button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		 <br>
	<br>
			<div class="image-preview container  ">
				
		      <div id="get_product" class="row   mb-2">
		   	  
		      </div>
				
		</div>
	
		<footer>
			<h4>FullStack  challenge - 2020</h4>
		</footer>
				
					
						
	
			

				
</body>
</html>
