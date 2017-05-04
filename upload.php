<?php 

// checks if something was uploaded or not
if(isset($_POST['submit'])){
	echo "<pre>";
	print_r($_FILES['file_upload']);
	echo "</pre>";	

}

//errors for uploads 
$upload_errors = array(
	UPLOAD_ERR_OK				=> "There is no error",
	UPLOAD_ERR_INI_SIZE		=> "The uploaded file exceeds the upload_max_filesize directive",
	UPLOAD_ERR_FORM_SIZE		=> "The uploaded file exceeds the MAX_FILE_SIZE directive",
	UPLOAD_ERR_PARTIAL		=> "The uploaded file was only partially uploaded.",
	UPLOAD_ERR_NO_FILE		=> "No file was uploaded.",
	UPLOAD_ERR_NO_TMP_DR		=> "Missing a temporary folder.",
	UPLOAD_ERR_CANT_WRITE	=> "Failed to write file to disk.",
	UPLOAD_ERR_EXTENSION		=> "A PHP extension stopped the file upload."

	);





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<!-- send other files in input text like images -->
<form action="upload.php" method="POST" enctype="multipart/form-data">
	
	<input type="file" name="file_upload"><br>

	<input type="submit" name="submit">
</form>





	
</body>
</html>