<?php include 'navbar.php';?>

<h1>Level10</h1>
<h1>You made it sofar wp but now I am tired if trying to filter things so i disabled the execution it THE directory</h1>
<br>
<br>
<?php error_reporting(0); ?>
<div class="upload-form">
    <h2>Upload an Image!</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <label for="fileToUpload">Select a file:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload" name="submit">
    </form>
</div>

<?php
$files = $_FILES["fileToUpload"];
$uploadOk = true;
if($files["name"] != ""){ 
  $target_dir = urldecode("uploads/lvl10/" . $files["name"]);
  if(strpos($target_dir, ".htaccess")){
    echo "The upload of .htaccess files is prohibited.";
    $uploadOk = false;
    http_response_code(403);
  }
  if($uploadOk && move_uploaded_file($files["tmp_name"],$target_dir)){
    echo "<a href='$target_dir'>uploaded image!</a>";
  }
}
?>
