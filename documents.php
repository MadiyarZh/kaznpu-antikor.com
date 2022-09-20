<?php include("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

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
                Документы
            </div>
        </div>
    </div>
    <h1 class="page-title">Документы</h1>

    <div class="col-lg-4">
        <div class="document-filter">
            <form action="" method="">
                <div class="key mb-2">
                    <label for="key-word">Ключевые слова</label>
                    <input type="text" placeholder='Ключевые слова'>
                </div>
                <div class="date mb-2">
                    <label for="date">Период публикации</label>
                    <div class="date-input">
                        <input class='start-date' type="text" placeholder="Начальная дата" onfocus="(this.type='date')"/>
                        <i class="icon-arrow-right2"></i>
                        <input class='end-date' type="text" placeholder="Конечная дата" onfocus="(this.type='date')"/>
                    </div>
                </div>
                <div class="key mb-2">
                    <label for="type">Тип</label>
                    <select name="type" id="type">
                        <option value="">Не выбрано</option>
                        <option value="Бюджет">Бюджет</option>
                        <option value="Закон">Закон</option>
                        <option value="Кодекс">Кодекс</option>
                        <option value="Объявление">Объявление</option>
                        <option value="Перечень">Перечень</option>
                        <option value="План">План</option>
                        <option value="Положение">Положение</option>
                        <option value="Постановление">Постановление</option>
                        <option value="Постановление Правительства">Постановление Правительства</option>
                        <option value="Правила">Правила</option>
                        <option value="Приказ">Приказ</option>
                        <option value="Проект">Проект</option>
                        <option value="Проект НПА">Проект НПА</option>
                        <option value="Проект постановления">Проект постановления</option>
                        <option value="Регламент">Регламент</option>
                        <option value="Статистика">Статистика</option>
                        <option value="Указ">Указ</option>
                    </select>
                </div>
                <div class="my-3">
                    <a type='submit' class="filter-btn">Применить</a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-8">
        <?
        mysqli_set_charset($conn, 'utf8');
        $query =mysqli_query($conn, "SELECT * FROM documents");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0) {

            ?>
            <div class="documents-block">
                <h2 class="mb-4">Документов: <?=$numrows?></h2>
                <div class="documents-block-outer p-3">

                    <?
                    while($row=mysqli_fetch_assoc($query)) {
                    $path=$row['path_file'];
                    ?>
                    <div class="documents-block__item">
                        <div class="documents-block__item_info mb-2">
                            <span class='documents-block__item_type'>
                                <strong><i class='icon-file-text'></i></strong>
                                <?= $row['doc_type']?>
                            </span>
                            <div class="divider-vertical"></div>
                            <span class='documents-block__item_date'>
                                <?= $row['doc_date']?>
                            </span>
                        </div>
                        <a href="document_detail.php?id=<?=$row['id']?>" class='document-link'>
                            <h4>
                                <?=$row['nameRu']?>
                            </h4>
                        </a>
                    </div>
                    <hr>
                    <?
                    }
                    ?>
                </div>
            </div>
            <br>
            <?
        }
        ?>
    </div>


<?php include("includes/footer.php"); ?>