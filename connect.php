<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    $conn = new mysqli('locathost','root','','test');
    if ($conn->connect_error){
        die('connection failed :' $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(name,email.password,confirm_password)values(?,?,?,?)");
        $stmt->bind_param("ssss",$name,$email,$password,$confirm_password );
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
    }
?>