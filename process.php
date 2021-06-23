<?php 
// database connection
$conn=mysqli_connect('localhost','root','','ajaxtest');

if ($_POST['name']!=null) {
    $name=mysqli_real_escape_string($conn,$_POST['name'],);
    $phn=mysqli_real_escape_string($conn,$_POST['tele'],);

    $query="INSERT INTO users(name,mobile) VALUES('$name','$phn')";

    if (mysqli_query($conn,$query)) {
        echo 'user added...';
    }
    else{
        echo 'ERROR: '.mysqli_error($conn);
    }
}
else{
    echo 'empty';
}



?>