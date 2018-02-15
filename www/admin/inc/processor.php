<?php
require_once('../inc/conn.php');
$target_dir = "/home/sacpoolp/public_html/images/gallery/";
$target_file = $target_dir . basename($_FILES['image']['name']);
$upLoadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

if(isset($_POST['submit']) && isset($_POST['post_title']) && isset($_POST['content'])){
	$check = getimagesize($_FILES['image']['tmp_name']);
	
	
	if($check !== false ){
		echo "File is an image - " . $check['mime']. ".";
		$upLoadOk = 1;
	}else{
		echo "file is not an image.";
		$upLoadOk = 0;
	}
}else if( $_POST['post_title'] == "" && $_POST['content'] == "" ){
		echo "Please enter title or post content";
		return(false);
	}
$title = $_POST['post_title'];
$post_content = preg_replace('/style=\\"[^\\"]*/', '', $_POST['content']);
$post_content_clean = mysqli_real_escape_string($conn, $post_content);
$description = $_POST['description'];
$auth = "Sac Pool Pros";
$img = $_FILES['image']['name'];
$insert = '
			INSERT INTO blog (blog_id, title, content, description, author, posted, img) VALUES (NULL, "'. $title .'", "'. $post_content_clean .'", "'. $description .'", "'.$auth .'", CURRENT_TIMESTAMP, "'. $img.'")';	
$inser_qry = mysqli_query($conn, $insert);
if($inser_qry){
	if(file_exists($target_file)){
	echo "Sorry file exists.";
	$upLoadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" &&
   $imageFileType != "jpge"){
	echo "sorry format not accepted try jpg or png";
}

if($upLoadOk == 0){
	echo "sorry you file was not uploaded";
}else{
	
if(move_uploaded_file($_FILES['image']["tmp_name"], $target_file)){
	
	echo "The file ". basename($_FILES['image']['name'])." has been uploaded";
}else{
	echo "Sorry there was an error uploading your file";
}
}
}else{
	echo mysqli_error($conn);
}

?>