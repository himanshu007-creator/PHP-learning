<?php
// 1) file status
//

if(isset($_POST['btnsubmit'])){
	if($_FILES['file']['size'] ===0){
		$status=' PLEASE UPLOAD A FILE';
}
else{
	$fsize=$_FILES['file']['size'];
	$target_dir='images/';
	$target_path=$target_dir.basename($_FILES['file']['name']);
	$valids=array('jpg','png','gif','jpeg');
	$fname=$_FILES['file']['tmp_name'];
	if($fsize>50000){
		$status='LARGE FILE , WON\'T WORK :(';
	}
	else{
			if(preg_match('/png/i',strval($_FILES['file']['type'])) ||
			preg_match('/jpg/i',strval($_FILES['file']['type'])) ||
			preg_match('/jpeg/i',strval($_FILES['file']['type'])) || 
			preg_match('/gif/i',strval($_FILES['file']['type']))){		
              $loc=scandir('images/');
			  if(in_array($fname,$loc)){
				  $status='File already exist in location';
			  }				  
			  else{
			move_uploaded_file($fname,$target_path);
			$status='UPLOADED SUCCESSFULLY';
			  }
}
}
}
}
echo "	
<div align='center'>
<p align='center'>$status; </p>
<form method='post' enctype='multipart/form-data'>
<input type='file' name='file'/>
<div align='center'><input type='submit' name='btnsubmit'/></div>
</form>
</div>
</body>";


?>