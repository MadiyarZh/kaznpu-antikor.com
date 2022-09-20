

<?php
session_start();

if(isset($_SESSION["session_username"])){
    // вывод "Session is set"; // в целях проверки
    header("Location: admin.php");
}

include("../includes/connection.php");
include("../includes/header.php");

	if(isset($_POST["login"])){

        if(!empty($_POST['username']) && !empty($_POST['password'])) {
            $username=htmlspecialchars($_POST['username']);
            $password=htmlspecialchars($_POST['password']);
            $salted="dsweddw1234".$password."2dxcs32";
            $hash = hash('sha512', $salted);
            $query =mysqli_query($conn, "SELECT * FROM admin WHERE username='".$username."' AND password='".$hash."'");
            $numrows=mysqli_num_rows($query);
            // var_dump($conn);
            // print_r($numrows);
            if($numrows!=0) {
                while($row=mysqli_fetch_assoc($query)) {
                    $dbusername=$row['username'];
                    $dbpassword=$row['password'];
                }
                if($username == $dbusername && $hash == $dbpassword) {
                    // старое место расположения
                    //  session_start();
                    $_SESSION['session_username']=$username;	 
                    /* Перенаправление браузера */
                    header("Location: admin.php");
                }
            } else {
                //  $message = "Invalid username or password!";
                $error_message = "Неправильное имя пользователя или пароль!";
            }
        } else {
            $error_message = "Все поля обязательны к заполнению!";
        }
    }
?>
    
    <div class="container mlogin">
        <div id="login">
            <h1>Вход</h1>
            <?php 
                if (!empty($error_message)) {
                    echo "<p class='alert alert-warning' role='alert'>" . $error_message . "</p>";
                }
            ?>
            <form action="" id="loginform" method="post" name="loginform">
                <p><label for="user_login">Имя опльзователя<br>
                <input class="input" id="username" name="username"
                type="text" value=""></label></p>
                <p><label for="user_pass">Пароль<br>
                <input class="input" id="password" name="password"
                type="password" value=""></label></p> 
                <p class="submit"><input class="button" name="login" type= "submit" value="Войти"></p>
                <!-- <p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p> -->
            </form>
        </div>
    </div>

    <script src="/admin/js/jquery-3.6.0.min.js"></script>
    <!-- <script src="/admin/js/admin.js"></script> -->

<?php include("../includes/footer.php"); ?>