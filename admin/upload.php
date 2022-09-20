<?php

include("../includes/connection.php");

session_start();
 
$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Загрузить')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $pathName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $nameRu = $_POST['nameRu'];
    $nameKaz = $_POST['nameKaz'];
    $descriptionRu = $_POST['descriptionRu'];
    $descriptionKaz = $_POST['descriptionKaz'];
    $doc_date = $_POST['doc_date'];
    $doc_type = $_POST['doc_type'];


    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
 
    // sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
 
    // check if file has one of the following extensions
    // $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'pdf');
    $allowedfileExtensions = array('xlsx', 'doc', 'pdf');
 
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      // $uploadFileDir = '/var/www/html/abiturient/uploads/exame/';
      $uploadFileDir = '../uploads/documents/';
      $dest_path = $uploadFileDir . $fileName;

      var_dump($dest_path);
 
      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='Файл супешно загружен.';

        $sql="INSERT INTO documents (nameRu, nameKaz, descriptionRu, descriptionKaz, doc_date, doc_type, path_file) VALUES ('$nameRu', '$nameRu', '$descriptionRu', '$descriptionKaz', '$doc_date', '$doc_type', '$pathName')";
        mysqli_set_charset($conn, 'utf8');
        $result=mysqli_query($conn, $sql);
        if($result){
            $message .= " Имя файла успешно добавлена";
        } else {
            $message .= "Не удалось вставить информацию о данных!";
        }

      }
      else
      {
        $message = 'Произошла ошибка при перемещении файла в каталог загрузки. Пожалуйста, убедитесь, что каталог загрузки доступен для записи веб-сервером.' . $dest_path;
      }
    }
    else
    {
      $message = 'Загрузка не удалась. Разрешенные типы файлов: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'Какая-то ошибка при загрузке файла. Проверьте следующую ошибку.<br>';
    $message .= 'Ошибка:' . $_FILES['uploadedFile']['error'];
  }
}



    $_SESSION['message'] = $message;
header("Location: admin.php");