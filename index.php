<?php
$data = require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home 12 lavska vanda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="header">
    <nav class="header-nav">
        <ul class="nav-list">
            <?php
            foreach ($data['mainNav'] as $navItem) {
                ?>
                <li class="nav-item">
                    <a href="<?php echo $navItem['url']; ?>"><?php echo $navItem['title']; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </nav>

    <a href="#" class="header-logo">
        <img src="<?php echo $data['headerLogo']; ?>" alt="cantus">
    </a>

    <div class="right-bar">
        <ul class="share-counter">
            <?php

            foreach ($data['shareCounter'] as $shareCounterItem) {
                ?>
                <li class="share-counter-item">
                    <a href="<?php echo $shareCounterItem['url']; ?>">
                        <i class="fa <?php echo $shareCounterItem['class']; ?>"></i>
                        <span><?php echo $shareCounterItem['count']; ?></span>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
        <a href="<?php echo $data['btnHeader']['url']; ?>"
           class="btn btn-secondary"><?php echo $data['btnHeader']['title']; ?></a>

    </div>

</header>

<section class="preview">
    <div class="preview-slider">
        <?php
        foreach ($data['previewSlider'] as $previewSlide) { ?>
            <div class="preview-slide" style="background-image:url(<?php echo $previewSlide['url']; ?>)"></div>
            <?php
        }
        ?>
    </div>
    <div class="container">
        <div class="heading-preview">
            <h1 class="title-preview"><?php echo $data['headingPreview']['titlePreview']; ?></h1>
            <span><?php echo $data['headingPreview']['subTitle']; ?></span>
        </div>
        <a href="<?php echo $data['btnPreview']['url']; ?>" class="btn btn-main btn-preview">
            <?php echo $data['btnPreview']['title']; ?>
        </a>
    </div>
    <div class="timer"></div>
</section>
<section class="introducing-section">
    <div class="container">
        <div class="heading">
            <h2 class="title-section"><?php echo $data['introducingSection']['title']; ?></h2>
            <span><?php echo $data['introducingSection']['subtitle']; ?></span>
        </div>
        <div class="introducing-section-slider">
            <div class="inner">
                <div class="pagination"></div>
                <div class="row multiple-slide">
                    <?php
                    foreach ($data['introducingSection']['slider'] as $slideItem) { ?>
                        <div class="column-4 card">
                            <div class="container-img">
                                <img src="<?php echo $slideItem['url']; ?>" alt="Jone Smith">
                                <div class="text-card">
                                    <h5><?php echo $slideItem['name']; ?></h5>
                                    <p><?php echo $slideItem['category']; ?></p>
                                    <ul class="share-counter">
                                        <?php
                                        foreach ($slideItem['shareCounter'] as $shareCounterItem) {
                                            ?>

                                            <li class="share-counter-item">
                                                <a href="<?php echo $shareCounterItem['url']; ?>">
                                                    <i class="fa <?php echo $shareCounterItem['class']; ?>"></i>
                                                    <span><?php echo $shareCounterItem['count']; ?></span>
                                                </a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="column-8">
            <section class="upcoming-section">
                <div class="heading">
                    <h2 class="title-section"><?php echo  $data['upcomingSection']['title']?></h2>
                    <span><?php echo  $data['upcomingSection']['subtitle']?></span>
                </div>
                <div class="flex-wrap">
                    <div class="img-box">
                        <img src="<?php echo $data['upcomingSection']['imgBox']?>" alt="concert">
                    </div>
                    <div class="poster">
                        <h3><?php $schedule = $data['upcomingSection']['poster']; echo $schedule['title']?></h3>
                        <dl class="poster-list">
                            <?php
                            foreach ($schedule['posterList'] as $key => $posterItem) {?>
                            <dt><?php echo "$key" ?></dt>
                            <dd><?php echo $posterItem ?></dd>
                            <?php
                            }
                            ?>
                        <a href="<?php echo $schedule['btnPoster']['url']; ?>" class="btn btn-main btn-upcoming">
                            <?php echo $schedule['btnPoster']['title']; ?>
                        </a>
                    </div>
                </div>
                <div class="scroll-bar">
                    <div class="scroll-dragger"></div>
                </div>
            </section>
        </div>
        <div class="column-4">
            <section class="video-section">
                <div class="heading">
                    <h2 class="title-section"><?php  echo $data['videoSection']['title']?></h2>
                    <span><?php  echo $data['videoSection']['subtitle']?></span>
                </div>
                <div class="slider-videos-section">
                    <div class="pagination"></div>
                    <div class="slides">
                        <?php
                        foreach ($data['videoSection']['slider'] as $slideItem) {
                            ?>
                            <div class="container-video">
                                <iframe width="380" height="290"
                                        src="<?php echo $slideItem['url']; ?>?rel=0&modestbranding=1;rel=0&amp;controls=0&amp;showinfo=0"
                                        frameborder="0" gesture="media"
                                        allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<section class="section-posts">
    <div class="container">
        <div class="text-wrap">
            <h3 class="title-post"><?php echo $data['posts']['title']; ?></h3>
            <p><?php echo $data['posts']['textPost']; ?></p>
            <a href="<?php
            $btnPosts  = $data['posts']['btnPosts'];
            echo $btnPosts['url']; ?>" class="btn btn-secondary" id="popup-trigger"><?php echo $btnPosts['title']; ?></a>

        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <section class="column-8 section-songs">
            <div class="heading">
                <h2 class="title-section">Popular</h2>
                <span>Songs</span>
            </div>
            <div class="container-audio">
                <iframe width="100%" height="166" scrolling="no" frameborder="no"
                        src="<?php echo $data['songs']['url']; ?>color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></iframe>
                <ol class="play-list">
                    <?php
                    foreach ($data['songs']['playList'] as $listItem) {
                        ?>
                        <li class="song-item">
                            <a href="<?php echo $listItem['url']; ?>"><?php echo $listItem['title']; ?>g</a>
                        </li>
                        <?php
                    }
                    ?>
                </ol>
            </div>
        </section>
        <section class="column-4 section-gallery">
            <div class="container-gallery">
                <div class="heading">
                    <h2 class="title-section"><?php echo $data['gallery']['title']?></h2>
                    <span><?php echo $data['gallery']['subtitle']?></span>
                </div>
                <div class="row">
                    <?php
                    foreach ($data['gallery']['galleryThumbs'] as $thumbsItem) {

                    ?>
                    <div class="column-6 container-img-gallery">
                        <a href="<?php echo $thumbsItem['url'];?>">
                            <img src="<?php echo $thumbsItem['thumbs'];?>" alt="scene">
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>
<section class="official-apps">
    <div class="container">
        <h2 class="official-apps-title"><?php echo $data['officialApps']['title'];?></h2>
        <p><?php echo $data['officialApps']['sectionText']; ?></p>
        <ul>
            <?php foreach ($data['officialApps']['btnGroup'] as $btnItem) {
                ?>
                <li>
                    <a href="<?php echo $btnItem['url']; ?>" class="btn btn-dark">
                        <img src="<?php echo $btnItem['btnImg']; ?>" alt="apple-store">
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</section>
<section class="section-newsletter">
    <div class="container">
        <form action="#" method="post" class="form-container">
            <div class="form-group">
                <input type="email" id="box" name="email">
                <label for="box">subscribe newsletter</label>
            </div>
            <button type="submit" class="btn-newsletter"><img src="img/arrow-icon.png" alt=""></button>
        </form>
    </div>
</section>
<footer class="footer">
    <nav class="footer-nav">
        <ul class="nav-list">
            <?php
            foreach ($data['mainNav'] as $navItem) {
                ?>
                <li class="nav-item">
                    <a href="<?php echo $navItem['url']; ?>"><?php echo $navItem['title']; ?></a>
                </li>
                <?php
            }
            ?>
        </ul>
    </nav>
    <p><?php echo $data['copyright']; ?></p>
</footer>
<div id="popup">
    <div class="popup-header">
        <span id="popup-close">X</span>
        <h2 class="pop-title"><?php echo $data['popup'];?></h2>
    </div>
    <div class="popup-content">
        <p><?php echo $data['popup']['text1'];?>
        </p>
        <a href="<?php echo $data['popup']['url1'];?>" class="link-popup">Lorem ipsum dolor</a>
        <p><?php echo $data['popup']['text2'];?></p>
        <a href="<?php echo $data['popup']['url2'];?>" class="link-popup">Lorem ipsum dolor</a>
    </div>
</div>
<div id="overlay"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>