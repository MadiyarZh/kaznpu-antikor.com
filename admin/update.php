<?php
    include("../includes/connection.php");
    include("../includes/header.php");

    $id = $_GET['id'];

    mysqli_set_charset($conn, 'utf8');
    $query = mysqli_query($conn, "SELECT * FROM documents WHERE id = '$id'");
    $result = mysqli_fetch_assoc($query);

        ?>
        <h4>Редактирование</h4>
        <br>
        <form action="vendor/update.php" class='update-form' method="post">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <div class="date-of-file">
                <div>
                    <label for="file-title">Название(ru)</label>
                    <input type="text" name="titleRu" value="<?= $result['nameRu'] ?>">
                </div>
                <div>
                    <label for="file-title">Название(kaz)</label>
                    <input type="text" name="titleKaz" value="<?= $result['nameKaz'] ?>">
                </div>
            </div>
            <div class="name-of-file">
                <div>
                    <label for="file-title">Описание(ru)</label>
                    <input type="text" name="fileNameRu" value="<?= $result['descriptionRu'] ?>">
                </div>
                <div>
                    <label for="file-title">Описание(kaz)</label>
                    <input type="text" name="fileNameKaz" value="<?= $result['descriptionKaz'] ?>">
                </div>
            </div>
            <div class="name-of-file">
                <div>
                    <label for="file-title">Тип</label>
                    <input type="text" name="fileNameRu" value="<?= $result['doc_type'] ?>">
                </div>
            </div>
            <br>
            <a href="admin.php" class="button button1">
                Назад
            </a>
            <button type="submit" class="button button1">
                Редактировать
            </button>
        </form>
        <?
        
      


    include("../includes/footer.php");
?>