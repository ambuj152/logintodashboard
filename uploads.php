<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />

<style>
    *{
	margin: 0; 
	padding: 0; 
	box-sizing: border-box;
}

#content{
	width: 50%;
	justify-content: center;
	align-items: center;
	margin: 20px auto;
	border: 1px solid #cbcbcb;
}
form{
	width: 50%;
	margin: 20px auto;
}

#display-image{
	width: 100%;
	justify-content: center;
	padding: 5px;
	margin: 15px;
}
img{
	margin: 5px;
	width: 350px;
	height: 250px;
}

</style>

</head>

<body>
<div id="content">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <input class="form-control" type="file" name="uploadfile" id="uploadfile" value="" />
            <input type="hidden"
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
        </div>
    </form>
</div>
<div id="display-image">
<?php
include("connection.php");

if(isset($_POST['upload'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);

    if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file)) {
        $filename = basename($_FILES["uploadfile"]["name"]);
        $filepath = $target_file;
        $query = "INSERT INTO files (`filename`, `filepath`) VALUES ('$filename', '$filepath')";
        
        if(mysqli_query($conn, $query)) {

            echo "The file ". htmlspecialchars($filename). " has been uploaded.";
            echo"<script> alert('image is successfully uploaded'); window.location.href = 'uploads.php';</script>";
          
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    // header("Location:uploads.php");
    
}
?>
</div>

</body>

</html>
