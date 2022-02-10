<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $msg_subject = $_POST['msg_subject'];
  //database connection
  $conn=new mysqli('localhost','root','','parakkat');
  if($conn->connect_error){
      die('connection failed :'.$conn->connection_error);
}else{
    $stmt-$conn->prepare("insert into registration(name,email,phone_number,msg_subject)
    values(?,?,?,?)");
    $stmt->bind_param("ssis", $name, $email, $phone_number, $msg_subject);
    $stmt->execute();
    echo "registration successfully....";
    $stmt->close();
    $conn->close();
}
?>