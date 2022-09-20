<?php include("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

    <?php

    $id = $_GET['id'];

    mysqli_set_charset($conn, 'utf8');
    $query = mysqli_query($conn, "SELECT * FROM documents WHERE id = '$id'");
    $result = mysqli_fetch_assoc($query);

    ?>

    <!-- Main page -->
    <div class="col-lg-12">
        <div class="breadcrumb">
            <div class="breadcrumb-item">
                <a href="/">Главная</a>
            </div>
            <div class="breadcrumb-item">
                <i>/</i>
                <a href="#">О противодействии коррупции</a>
            </div>
            <div class="breadcrumb-item">
                <i>/</i>
                <a href="/documents.php">Документы</a>
            </div>
            <div class="breadcrumb-item">
                <i>/</i>
                <?=$result['nameRu'] ?>
            </div>
        </div>
    </div>

    <div class="page-header">
        <h2 class="document-name"><?=$result['nameRu'] ?></h2>
        <a href="/documents.php" class="back-btn"><i class="icon-arrow-left2"></i> К списку</a>
    </div>
    
    <div class="col-lg-9 col-md-10">
        <div class="document-file">
            <embed src="uploads/documents/<?=$result['path_file']?>" width="100%" height="500" />
        </div>
    </div>

    

    <div class="col-lg-3 col-md-2 mt-4 mt-sm-0">
        <div class="document-info px-3 py-4">
            <div class="info-item">
                <label for="date">Дата публикации</label>
                <p class=""><?=date("F j, Y, g:i a",strtotime($result['doc_date']))?></p>
            </div>
            <?
                $file = "uploads/documents/".$result['path_file']."";
                $filetype = pathinfo($file, PATHINFO_EXTENSION);
                $filesize = filesize($file);
                $filesize = round($filesize / 1024, 2);
            ?>
            <div class="info-item">
                <label for="date">Формат файла</label>
                <p class=""><?=$filetype?></p>
            </div>
            <div class="info-item">
                <label for="date">Размер файла</label>
                <p class=""><?=$filesize?> КБ</p>
            </div>
            <a href="uploads/documents/<?=$result['path_file']?>" class="download-btn" download>Скачать</a>
        </div>
    </div>

<?php include("includes/footer.php"); ?>