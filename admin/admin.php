<?php

session_start();

if(!isset($_SESSION["session_username"])):
    header("location:index.php");
else:
?>

<?php 
    include("../includes/connection.php");
    include("../includes/header.php");
?>

    <?php
        if (isset($_SESSION['message']) && $_SESSION['message'])
        {
            echo '<script>alert("'.  $_SESSION['message'] . '")</script>';
            unset($_SESSION['message']);
        }
    ?>

    

    <button id="myBtn" class="button button1">
        Добавить новый документ
    </button>

    <div id="myModal" class="modal">
        <form class="modal-content" method="POST" action="upload.php" enctype="multipart/form-data">
            <span class="close">&times;</span>
            <h4>Добавление нового документа: </h4>
            <br />
            <div class="upload-wrapper">
                <span class="file-name">Выберите файл:</span><br>
                <label for="file-upload" class="file-upload"><input type="file" id="file-upload" name="uploadedFile"></label>
            </div>
            <!-- <div class="date-of-file">
                <div>
                    <label for="file-name">Название:</label>
                    <input type="text" name="titleRu" class="file-name" placeholder="Название" required/>
                </div>
                <div>
                    <label for="">Дата(Казахский):</label>
                    <input type="text" name="titleKaz" class="file-name" placeholder="Н" required/>
                </div>
            </div> -->
            <div class="name-of-file">
                <div>
                    <label for="file-name">Название(Русский):</label>
                    <input type="text" name="nameRu" class="file-name" placeholder="Название" required/>
                </div>
                <div>
                    <label for="">Название(Казахский):</label>
                    <input type="text" name="nameKaz" class="file-name" placeholder="Аты" required/>
                </div>
            </div>
            <div class="description-of-file">
                <div>
                    <label for="file-name">Описание(Русский):</label>
                    <textarea id="descriptionRu" name="descriptionRu" rows="4" placeholder="Краткое описание..." required></textarea>
                </div>
                <div>
                    <label for="">Описание(Казахский):</label>
                    <textarea id="descriptionKaz" name="descriptionKaz" rows="4" placeholder="Қысқаша сипаттамасы..." required></textarea>
                </div>
            </div>
            <div class="date-of-file">
                <div>
                    <label for="file-name">Дата:</label>
                    <input type="date" id="date" name="doc_date" class="file-name" required/>
                </div>
                <div>
                    <label for="file-name">Тип:</label>
                    <input type="text" id="type" name="doc_type" class="file-name" required/>
                </div>
            </div>
            <br />
            <input type="submit" name="uploadBtn" value="Загрузить" class="button button1"/>
        </form>
    </div>

	<script src="../admin/js/jquery-3.6.0.min.js"></script>

    <script src="../admin/js/admin.js"></script>

<?php include("../includes/footer.php"); ?>

<?php endif; ?>





