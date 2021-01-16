<?php
// database connection
$servername = "localhost";
$username = "root";
$password = "";
$db = "synlab";

$conn = new mysqli($servername, $username, $password, $db);
if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
} 
//these lines of code arw commented out so it won't duplicate database creation and table  ;



// echo "successfully connected";

// $sql = "CREATE DATABASE Synlab";
// if($conn->query($sql) === TRUE){
//     echo "Database created";
// }else {

// echo "Database not created" .$conn->error;
// }
// $sql = "CREATE TABLE patients (
//     id INT(6) AUTO_INCREMENT PRIMARY KEY,
//     lastname VARCHAR(50) NOT NULL,
//     firstname VARCHAR(50) NOT NULL,
//     email VARCHAR(50),
//     age DATE NOT NULL

// )";

// if($conn->query($sql) === TRUE){
//         echo "Table created";
//     }else {
    
//     echo "table not created" .$conn->error;
//     }
//

// inserts patients record into database
    
if(isset($_POST['submit'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    
     $age = $_POST['age'];
    
                // $dob = new DateTime('$age');
                // $today = new DateTime('now');
                // $age = $dob->diff($today)->y;
     mysqli_query($conn, "INSERT INTO patients (lastname, firstname, email, age) VALUES ('$lastname', '$firstname', email, age)");
    
    echo "<h1> REGISTRATION SUCCESSFUL</h1>";

}
// To output records saved in database in a table format
$results = mysqli_query($conn, "SELECT lastname, firstname,email,age, id FROM patients");

?>
<html>
<body>
    <table>
        <thead>
            <tr>
                <th>LASTNAME</th>
                <th>FIRSTNAME</th>
                <th>EMAIL</th>
                <th>DATE OF BIRTH</th>
                <th colspan = "2">ACTION</th>
            </tr>
        </thead>

        <?php while ($row = mysqli_fetch_array($results)) {?>
            <tr>
                <td> <?php echo$row['firstname'] ?></td>
                <td> <?php echo$row['lastname'] ?></td>
                <td> <?php echo$row['email'] ?></td>
                <td> <?php echo$row['age'] ?></td>
                <td><a href="update.php?edit= <?php echo $row['id'];?>"> edit</a></td>
                <td><a href="patient.php?delete= <?php echo $row['id'];?>"> delete</a></td>
            </tr>
        <?php }?>
    <?php

    //deletes record
     if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM patients WHERE id = $id");
        echo "<h1> Patient's record Deleted";
     }
     //gets form to edit records
      
    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = mysqli_query($conn, "SELECT lastname, firstname,email,age, id FROM patients WHERE id = $id");
        $n = mysqli_fetch_array($result);
        $lastname = $n['lastname'];
        $firstname = $n['firstname'];
        $email = $n['email'];
        $age = $n['age'];
    }
//updates record
        if (isset($_POST['update'])){
            $id = $_POST['id'];
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            mysqli_query($conn, "UPDATE patients SET lastname = '$lastname', firstname = '$firstname', email = '$email', age = '$age' WHERE id = $id");
            echo "<h1> successfully updated</h1>";

    }

    ?>
    </table>
</body>
</html>


