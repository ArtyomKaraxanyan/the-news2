<?php
require_once 'functions/db.php';
require_once 'layouts/header.php';
?>


<div class="content_area">
    <div class="main_content floatleft">
        <div class="left_coloum floatleft">
            <div class="single_left_coloum_wrapper">
                <h2 class="title">from   around   the   world</h2>



        </div>

            <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $stmt = $conn->query("SELECT * FROM news where id=".$id);
                $data = $stmt->fetch(PDO::FETCH_ASSOC);


            }
            ?>
            <?php if(!empty($data)){?>

                <div class="news_list">
                    <h2 class="title"><?php echo $data['title'];?></h2>
                    <div><img src="uploads/<?php echo $data['image_path'];?>"</div>
                    <div><?php echo $data['description'];?></div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>

<?php  require_once 'layouts/footer.php'; ?>


