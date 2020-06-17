	<?php
	 	$conn = mysqli_connect('localhost','root','','frame');
 
   if(isset($_POST['upload']))
	 {
	 $destination="";	
	$file = $_FILES['file'];
	
	  $filename = $file['name'];
 	 $tmp_name = $file['tmp_name'];
  
	$filecheck =  explode('.',$filename);
   
		 echo $fname =$filecheck[0];
  $fileext = strtolower(end($filecheck));
	
	$store = array('jpg','png','jpeg');
	 if(in_array($fileext,$store))
	 {
		 $destination = "upload/".$filename;
		 
		 	if(move_uploaded_file($tmp_name,$destination))
		 {
			 echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					 <span aria-hidden="true">&times;</span>
					 <span class="sr-only">Close</span>
				 </button>
				 <strong> file upload succesfully</strong> 
			 </div>';
		 }
		 else
		 {
			 echo " file not uploaded succfully";
			 
			 
		 }
		 
	 }
		 else
		 {
			 $error = "fil format not matach"; 
			 header("location:index.php?user=".$error);
			 die();
		 }
		 $insert = " insert into uploadframe(image,name)values('$filename','$fname	 ')";
		 $result = mysqli_query($conn,$insert);
		  if($result)
			{
				echo " image inserted";
			}
		 else
		 {
			 echo " image not uploaded";
		 }
		  header('location:index.php');	
	 }
else
{
	echo "";
}

    
if(isset($_POST['getproduct']))
{
	$sql = " SELECT * FROM `uploadframe` ";
	 $RESULT = mysqli_query($conn,$sql);
	if(mysqli_num_rows($RESULT)>0)
	{
		while($row= mysqli_fetch_array($RESULT))
		{
		 $pid = $row['image'];
		$pname = $row['name'];
		
			echo "
			      
			    		<div class='col-lg-4 col-md-6   col-12 mb-5 box p-2'>
					   
						   <div class='card card-info' style='width:300px; hight:300px;'>
					 
					    	
					    		<img src='upload/$pid'id='imgdis'>
					    	
					    	<div class='card-footer bg-white text-white p-2'>
					    				
					    		<h6>$pname</h6>
					    	</div>
					    </div>		
					    	
					    </div>			
							
						
							
							
			 ";
		}
	}
	
}
?>
