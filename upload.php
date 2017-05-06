<?php 

// checks if something was uploaded or not
if(isset($_POST['submit'])){

//errors for uploads 
$upload_errors = array(

	UPLOAD_ERR_OK				=> "There is no error",
	UPLOAD_ERR_INI_SIZE		=> "The uploaded file exceeds the upload_max_filesize directive",
	UPLOAD_ERR_FORM_SIZE		=> "The uploaded file exceeds the MAX_FILE_SIZE directive",
	UPLOAD_ERR_PARTIAL		=> "The uploaded file was only partially uploaded.",
	UPLOAD_ERR_NO_FILE		=> "No file was uploaded.",
	UPLOAD_ERR_NO_TMP_DIR	=> "Missing a temporary folder.",
	UPLOAD_ERR_CANT_WRITE	=> "Failed to write file to disk.",
	UPLOAD_ERR_EXTENSION		=> "A PHP extension stopped the file upload."

	);

// check if file was uploaded 
$temp_name = $_FILES['file_upload']['tmp_name'];
$the_file = $_FILES['file_upload']['name'];
$directory = 'uploads';

if (move_uploaded_file($temp_name, $directory . "/" . $the_file)) {
	// if uploaded, let a brotha know!
	$the_message = "File uploaded successfully!";

} else {
	
	// uh oh error time bro
	$the_error = $_FILES['file_upload']['error'];

	$the_message = $upload_errors[$the_error];
}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>the document</title>
</head>
<body>
	<h2>
		<?php
		// check if error array is empty
		if(!empty($upload_errors)){

			echo $the_message;
		}
		?>
	</h2>
<!-- send other files in input text like images -->
<!-- basic html/php stuff -->
<form action="upload.php" method="POST" enctype="multipart/form-data">

	<input type="file" name="file_upload"><br>

	<input type="submit" name="submit">
</form>

</body>
</html>
