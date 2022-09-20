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
                <a href="#">Центр «Парасат»</a>
            </div>
            <div class="breadcrumb-item">
                <i>/</i>
                О центре
            </div>
        </div>
    </div>

    <?

    mysqli_set_charset($conn, 'utf8');
    $query =mysqli_query($conn, "SELECT * FROM info WHERE page = 'about'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0) {
        while($row=mysqli_fetch_assoc($query)) {
    ?>

        <h1 class="page-title"><?=$row['title']?></h1>

        <div class="about-page">
            <div class="about-page-wrapper">
                
                    <div class="person-info">
                        <div class="img-block">
                            <img src="/assets/img/<?=$row['avatar']?>" alt="avatar">
                        </div>
                        <div class="info-block">
                            <p class="name"><?=$row['fullname']?></p>
                            <p class="profession"><?=$row['profession']?></p>
                            <p class="email"><?=$row['email']?></p>
                        </div>
                    </div>
                    <div class="text-info">
                        <p>
                        <strong><?=$row['sub_title']?>:</strong>
                        <br>
                        <?=$row['text-1']?>
                        </p>
                        <br>
                        <p>
                        <strong><?=$row['sub_title-2']?>:</strong>
                        <br>
                        <?=$row['text-2']?>
                        </p>
                    </div>
            </div>
        </div>
    <?php 
        }
    }
    ?>

<?php include("includes/footer.php"); ?>