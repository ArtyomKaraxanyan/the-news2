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
        <div class="content_area">
            <div class="main_content floatleft">
                <div class="left_coloum floatleft">
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">from   around   the   world</h2>
                        <a class="more" href="#">more</a>
                        <?php include_once 'functions/db.php' ?>

                        <?php

                        $sql = 'SELECT news.*,news_authors.last_name,categories.categories  FROM  news  
                                LEFT JOIN categories ON news.categoriesID=categories.id LEFT JOIN news_authors 
                                ON news.news_authorsID =news_authors.id  ';
                        $stmt=$conn->query($sql);
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                        <?php if(!empty($rows))   {  ?>
                        <?php
                        foreach ($rows as $post):

                        ?>

                        <div class="single_left_coloum floatleft">
                            <p class="datetime"><?php echo $post['data'];?></p>
                            <div>  <img src="images/<?php echo $post['images_path']; ?>" alt="" /></div>
                            <h2 class="title"><a href="view.php?id=<?php echo $post['id'];?>"> <?php echo $post['heading']; ?> </a></h2>

                                    <?php echo $post['text']; ?>
                                </div>

                        <?php endforeach;?>
                        <?php }?>
                    </div>
                    <div class="single_left_coloum_wrapper">
                        <h2 class="title">latest  articles</h2>
                        <a class="more" href="#">more</a>

                        <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
                            <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper
                                dolor eu mattis.</p>
                            <a class="readmore" href="#">read more</a> </div>
                        <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
                            <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper
                                dolor eu mattis.</p>
                            <a class="readmore" href="#">read more</a> </div>
                        <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
                            <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper
                                dolor eu mattis.</p>
                            <a class="readmore" href="#">read more</a> </div>
                    </div>
                    <div class="single_left_coloum_wrapper gallery">
                        <h2 class="title">gallery</h2>
                        <a class="more" href="#">more</a> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> </div>
                    <div class="single_left_coloum_wrapper single_cat_left">
                        <h2 class="title">tech news</h2>
                        <a class="more" href="#">more</a>
                        <div class="single_cat_left_content floatleft">

                            <h3> </h3>
                            <p>US President Donald Trump has stated that if Iran continued to threaten his country, it will suffer consequences...</p>
                            <p class="single_cat_left_content_meta">by <span></span> |  29 comments</p>
                        </div>
                        <div class="single_cat_left_content floatleft">

                            <h3> </h3>
                            <p>Twenty years after their first World Cup triumph, France are soccer�s world champions again after beating Croatia 4-2 in the World Cup final...</p>
                            <p class="single_cat_left_content_meta">by <span> </span> |  29 comments</p>
                        </div>
                        <div class="single_cat_left_content floatleft">

                            <h3> </h3>
                            <p>Facebook shares dove 19 percent Thursday, shedding about $120 billion in market value...</p>
                            <p class="single_cat_left_content_meta">by <span></span> |  29 comments</p>
                        </div>
                        <div class="single_cat_left_content floatleft">
                            <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit </h3>
                            <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...interdum</p>
                            <p class="single_cat_left_content_meta">by <span>John Doe</span> |  29 comments</p>
                        </div>
                    </div>
                </div>
                <div class="right_coloum floatright">
                    <div class="single_right_coloum">
                        <h2 class="title">The News Videos </h2>
                        <ul>
                            <li>
                                <div class="single_cat_right_content">
                                    <h3>Trump: If Iran continues to threaten US, it will suffer consequences</h3>
                                    <p><iframe width="210" height="180" src="https://www.youtube.com/embed/EL9YNiVZ1w4"
                                               frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>

                                </div>
                            </li>
                            <li>
                                <div class="single_cat_right_content">
                                    <h3>Russia 2018 - An Unforgettable World Cup : France Are Champions </h3>
                                    <p> <iframe width="210" height="180" src="https://www.youtube.com/embed/aocjr_wasCM"
                                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>

                                </div>
                            </li>
                            <li>
                                <div class="single_cat_right_content">
                                    <h3>Facebook shares fall by nearly 20%, wiping out over $120 billion in market value</h3>
                                    <p><iframe width="210" height="180" src="https://www.youtube.com/embed/IZTiqOoFM18"
                                               frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>

                                </div>
                            </li>
                        </ul>
                        <a class="popular_more" href="#">more</a> </div>
                    <div class="single_right_coloum">
                        <h2 class="title">editorial</h2>
                        <div class="single_cat_right_content editorial">

                            <img src= "" alt="" />
                            <h3></php></h3>
                        </div>
                        <div class="single_cat_right_content editorial">

                            <img src="" alt="" />
                            <h3></h3>
                        </div>
                        <div class="single_cat_right_content editorial">

                            <img src="" alt="" />
                            <h3></h3>
                        </div>
                        <div class="single_cat_right_content editorial"> <img src="images/editorial_img.png" alt="" />
                            <h3>Lorem ipsum dolor sit amet con se cte tur adipiscing elit</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar floatright">
                <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
                <div class="single_sidebar">
                    <div class="news-letter">
                        <h2>Sign Up for Newsletter</h2>
                        <p>Sign up to receive our free newsletters!</p>
                        <form action="#" method="post">
                            <input type="text" value="Name" id="name" />
                            <input type="text" value="Email Address" id="email" />
                            <input type="submit" value="SUBMIT" id="form-submit" />
                        </form>
                        <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
                    </div>
                </div>
                <div class="single_sidebar">
                    <div class="popular">
                        <h2 class="title">Popular</h2>
                        <ul>
                            <li>
                                <div class="single_popular">


                                    <p></p>
                                    <h3> <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">

                                    <p> </p>
                                    <h3>  <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">

                                    <p></p>
                                    <h3>  <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <p>Sept 24th 2045</p>
                                    <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="single_popular">
                                    <p>Sept 24th 2045</p>
                                    <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                                </div>
                            </li>
                        </ul>
                        <a class="popular_more">more</a> </div>
                </div>
                <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
                <div class="single_sidebar">
                    <h2 class="title">ADD</h2>
                    <img src="images/add2.png" alt="" /> </div>
            </div>
        </div>

        <div class="footer">
            <?php include_once ('layouts/footer.php');   ?>
        </div>
</body>
</html>