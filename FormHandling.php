<?php
$con = mysqli_connect('localhost', 'root', 'root','contact_me');

// Check connection
if ($con->connect_error) {
    die("Connection failed: "
        . $con->connect_error);
}

// get the post records
$txtName = $_POST['Name'];
$txtEmail = $_POST['Email'];
$txtGender = $_POST['Gender'];
$txtMessage = $_POST['Comment'];

// database insert SQL code
$sql = "INSERT INTO `tb_contact_me` (`Name`, `Email`, `Gender`, `Comment`) VALUES ('$txtName', '$txtEmail', '$txtGender', '$txtMessage')";
// $sql = "INSERT INTO `tb_contact_me` (`Name`, `Email`, `Gender`, `Comment`) VALUES ('Hansika', 'nikisika@gmail.com', 'Female', 'h')";


if ($con->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// // insert in database 
// $rs = mysqli_query($con, $sql);

// if($rs)
// {
// 	echo "Contact Records Inserted";
// } else {
//     echo "";
// }
 

echo "<h2>Your Submit Information</h2> <br>";
echo "Name:".ucwords ($_POST["Name"])."<br>";
echo "Email: {$_POST["Email"]}<br>";
echo "Gender: {$_POST["Gender"]}<br>";
echo "Website: {$_POST["Website"]}<br>";
echo "Comments: {$_POST["Comment"]}<br>";

// echo "db_url: {$_POST["db_url"]}<br>";
// echo "db_user: {$_POST["db_user"]}<br>";
// echo "db_pw: {$_POST["̉db_pw"]}<br>";

// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = 'root';
// $db_db = 'information_schema';

// $mysqli = @new mysqli(
//   $db_host,
//   $db_user,
//   $db_password,
//   $db_db
// );
  
// if ($mysqli->connect_error) {
//   echo 'Errno: '.$mysqli->connect_errno;
//   echo '<br>';
//   echo 'Error: '.$mysqli->connect_error;
//   exit();
// }

// echo 'Success: A proper connection to MySQL was made.';
// echo '<br>';
// echo 'Host information: '.$mysqli->host_info;
// echo '<br>';
// echo 'Protocol version: '.$mysqli->protocol_version;

// $mysqli->close();

?>
