<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>The News Reporter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/font/font.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
    <div class="center">

        <?php include_once ('layouts/header.php') ?>

        <div class="main_menu_area">
            <?php include_once ('layouts/menu.php')  ?>
        </div>
        <div class="slider_area">
            <div class="slider">
                <ul class="bxslider">
                    <li><img src="images/1.jpg" alt="" title="Slider caption text" /></li>
                    <li><img src="images/2.jpg" alt="" title="Slider caption text" /></li>
                    <li><img src="images/3.jpg" alt="" title="Slider caption text" /></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php  include_once ('layouts/content.php')    ?>
        </div>

        <div class="footer">
            <?php include_once ('layouts/footer.php');   ?>
        </div>
</body>
</html>