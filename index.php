<?php
// check connection
$conn = mysqli_connect('localhost', 'root', '', 'vehicle');
//test connection
if($conn === false){
    DIE ("Error! Database not connected".mysqli_connect.error());
}
else{
    echo "Database connected succesfully";
}

// take user values
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$secondname = mysqli_real_escape_string($conn, $_POST['secondname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$feedback = mysqli_real_escape_string($conn, $_POST['name']);

//insert values taken into the table
$sql = "INSERT INTO v_table (First_Name, Second_Name, Email, Feedback) VALUES
('$firstname', '$secondname', '$email', '$feedback')";

//test insertions
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully";
}
else{
    echo "Error in insertions".mysqli_error($conn);
}
// close connection
mysqli_close($conn);
?>