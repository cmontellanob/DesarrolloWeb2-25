<?php session_start();
include("conexion.php");
$email=$_POST['email'];
$password=sha1($_POST['password']);

$sql="SELECT email,rol from usuarios  where  email=? and password=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("ss",$email,$password);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "Usuario encontrado";
    $_SESSION['email'] = $email;
    $_SESSION['rol'] = $result->fetch_assoc()['rol'];
    header("Location:read.php");

} else {
    echo "Error datos de autenticación incorrectos";
    ?>
    <meta http-equiv="refresh" content="3;url=form-login.html">
    <?php
}

?>



