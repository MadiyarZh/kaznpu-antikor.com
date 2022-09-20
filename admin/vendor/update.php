    <!-- Удаление элемента -->
    <?php

    include("../../includes/connection.php");  

    $id = $_POST['id'];
    $nameRu = $_POST['nameRu'];
    $nameKaz = $_POST['nameKaz'];
    $descriptionRu = $_POST['descriptionRu'];
    $descriptionKaz = $_POST['descriptionKaz'];
    $doc_type = $_POST['doc_type'];

    
    mysqli_set_charset($conn, 'utf8');
    $sql = mysqli_query($conn, "UPDATE `kor-db`.`documents` SET `nameRu` = '$nameRu',`nameKaz` = '$nameKaz', `descriptionRu` = '$descriptionRu', `descriptionKaz` = '$descriptionKaz' WHERE `documents`.`id` = '$id'");
    if ($sql) {
        header("Location:../admin.php");
        exit();
    } else {
        echo '<script>alert("Произошла ошибка: ' . mysqli_error($conn) . '")</script>';
    }
    ?>