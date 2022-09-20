    <!-- Удаление элемента -->
    <?php

    include("../../includes/connection.php");  


    if (isset($_GET['id'])) { //проверяем, есть ли переменная
        //удаляем строку из таблицы
        
            $sql = mysqli_query($conn, "DELETE FROM `names` WHERE `id` = {$_GET['id']}");
            if ($sql) {
                header("Location:../admin.php");
                exit();
            } else {
                echo '<script>alert("Произошла ошибка: ' . mysqli_error($link) . '")</script>';
            }
        
    }
    ?>