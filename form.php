<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYNLAB</title>
</head>
<body>
    <h2 style = color:green;>SYNLAB REGISTERATION FORM</h2>
    <form action="patient.php" method = "POST">
        <div>
            <label for="">LASTNAME:</label>
            <input type="text" name = "lastname" placeholder="Enter Last Name">
        </div>
        <div>
            <label for="">FIRSTNAME:</label>
            <input type="text" name = "firstname" placeholder="Enter First name">
        </div>
        <div>
            <label for="">EMAIL:</label>
            <input type="email" name = "email" placeholder="Input your  Email Address">
        </div>
        <div>
            <label for="">DATE OF BIRTH:</label>
            <input type="text" name = "age" placeholder="format YYY-MM-DD">
        </div>
        <input type="submit" name="submit">
</form>
</body>
</html>