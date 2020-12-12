<?php include ('patient.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYNLAB</title>
</head>
<body>
    <h2 style = color:green;>REGISTER</h2>
    <form action="patient.php" method = "POST">
        <div>
            <label for="">LASTNAME:</label>
        <input type="text" name = "lastname" value = "<?php echo $lastname?>">
        </div>
        <div>
            <label for="">FIRSTNAME:</label>
        <input type="text" name = "firstname" value = "<?php echo $firstname?>">
        </div>
        <div>
            <label for="">EMAIL:</label>
        <input type="email" name = "email" value = "<?php echo $email?>">
        </div>
        <div>
            <label for="">DATE OF BIRTH:</label>
        <input type="text" name = "age" placeholder="Enter in format YYY-MM-DD" value = "<?php echo $age?>">
        </div>
        <input type="hidden" name = "id" value = "<?php echo $id?>">
        <input type="submit" name="update" value = "update">




    </form>
</body>
</html>