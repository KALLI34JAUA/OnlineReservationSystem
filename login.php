<?php
echo "Login page loaded<br>";
include 'db.php';   // include only ONCE
echo "DB file included<br>";

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        header("Location: reservation.php");
        exit();
    } else {
        echo "Invalid Login";
    }
}
?>

<form method="POST">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  <button type="submit" name="login">Login</button>
</form>
