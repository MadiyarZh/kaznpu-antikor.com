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
                Sanaly Urpaq
            </div>
        </div>
    </div>
    
    <?

    mysqli_set_charset($conn, 'utf8');
    $query =mysqli_query($conn, "SELECT * FROM info WHERE page = 'sanaly-urpaq'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0) {
        while($result=mysqli_fetch_assoc($query)) {
    ?>

        <h1 class="page-title"><?=$result['title']?></h1>

        <div class="sanaly-urpaq-page">
            <div class="image-block">
                <img src="/assets/img/<?=$result['image-1']?>" alt="sanaly-urpaq">
                <img src="/assets/img/<?=$result['image-2']?>" alt="sanaly-urpaq">
            </div>
            <p>
                <strong><?=$result['text-1']?></strong>
            </p>

            <div class="document-file">
                <embed src="uploads/sanaly-urpaq/<?=$result['file_path']?>" width="90%" height="1000" />
            </div>
        </div>

    <?php 
        }
       }
    ?>


<?php include("includes/footer.php"); ?>