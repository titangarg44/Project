<?php

$conn = mysqli_connect("localhost","root","","packetcode-tut");

if(!$conn){
    echo"<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able to establish Database Connection</h3>";
}

$sql="SELECT * FROM data";
$query=mysqli_query($conn, $sql);

if(isset($_REQUEST["new_post"])){   
    $title=$_REQUEST["title"];
    $content=mysqli_real_escape_string($conn, $_REQUEST["content"]);

    $sql="INSERT INTO data(title, content) VALUES('$title', '$content')";
    //echo $sql;
    // exit(0);
    mysqli_query($conn, $sql);

    header("Location: Event.php?info=added");
    exit();
}

if(isset($_REQUEST['update'])){
    $id=$_REQUEST["id"];
    $title=$_REQUEST["title"];
    $content=mysqli_real_escape_string($conn, $_REQUEST["content"]);

    $sql="UPDATE data SET title='$title', content='$content' WHERE id = $id";
    mysqli_query($conn, $sql);
}

if(isset($_REQUEST['delete'])){
    $id=$_REQUEST["id"];

    $sql="DELETE FROM data WHERE id = $id";
    mysqli_query($conn, $sql);
}

?>