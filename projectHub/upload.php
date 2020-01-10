 <?php
 require "config.php";
   $name=$_POST['filename'];
   $proid=$_POST['proid'];
  // $fileid=$_POST['fileid'];


//Ekta pdf directory thakte hobe. pdf folder htdocs er vitore
 $pathname="pdf/".$name;

$path=$pathname;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($pathname,PATHINFO_EXTENSION));
//Check if file already exists
if (file_exists($pathname)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
   }
  
 $sql="INSERT into pdf_table (proid,pdf_name,pdf_link)values('$proid','$name','$pathname');";
 $result=mysqli_query($connection, $sql);
 
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
 //if everything is ok, try to upload file
}
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pathname)) {
             header('location:up_down.php?project_id='.$proid);
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?> 