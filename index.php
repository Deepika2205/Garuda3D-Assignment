<?php
require_once "db.php";

$success=""; // null
$error="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name     =trim($_POST['name']);
$email    =trim($_POST['email']);
$phone    =trim($_POST['phone']);
$message  =trim($_POST['message']);

//validations

if(empty($name) || empty($email) || empty($phone) || empty($message)){
    $error = "All fields are required.";
}
elseif( !preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email))
{
    $error ="Invalid email format";

}
else{
    $stmt =$con->prepare("Insert into  contact_form(name,email,phone,message) Values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$phone,$message);
    if($stmt->execute()){
        $success ="your form has submitted successfully";

    }
    else{
        $error ="Failed to submit the form";
    
    }
    $stmt->close();
}
}
?>
<!DOCTYPE html>
<head>
    <title> Contact Form </title>
</head>
<body>
    <h2>    Contact Form  </h2>

    <?php if ($success) echo "<p style='color:green'>$success</p>"; ?>
    <?php if ($error) echo "<p style='color:red'>$error</p>"; ?>


    <form method="post" action="">
        <lable> Name: </lable>
        <input type="text" name="name"><br> <br> 
          <lable> Email: </lable>
        <input type="email" name="email"><br> <br> 

          <lable> phone No: </lable>
        <input type="text" name="phone"><br> <br> 

          <lable> message :</lable>
        <textarea name="message"> </textarea> <br> <br>

        <button type="submit"> sumbit</button>
</form>
<br>
<a href="view.php">View Submissions</a>
</body>
</html>