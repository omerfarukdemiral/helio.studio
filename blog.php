<?php include "header.php"?>
<!--Header Start-->
<?php include "menu.php"?>
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '../blog/includes/public_functions.php') ?>

<?php $posts = getPublishedPosts(); ?>
<?php $topics = getAllTopics();	?>
<?php// $desc = getPostDescription(); ?>

<script> document.getElementById("menu5").classList.add('active'); </script>


<!--slider-->
<!--Cover-->
<section class="pb-0 bg-img1">
    <div class="bg-overlay gradient-bg1 opacity-9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cover-text mt-5">
                    <h2 class="text-white mb-2">Our Blog</h2>
                    <p class="text-white">We offer the most creative web designs.</p>
                    <div class="page_nav">
                        <span>You are here:</span> <a href="">Home</a> <span class="third-color"><i class="fa fa-angle-double-right"></i>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cover End-->
<!--Page Content-->
<section>
    <div class="container">
        <div class="row">
            <!--left side-->
            <div class="col-lg-8 mb-xs-5">
            <?php foreach ($posts as $post): ?>
            <!--item-->
                <div class="blog-list-item">
                    <!--blog image-->
                    <a href=<?php echo "blog-detail.php?icerik=".$post['id'];?>>
                        <div class="blog-item-img mb-5 hover-effect">
                            <img src="<?php echo BASE_URL . 'static/images/' . $post['image']; ?>" alt="image">
                        </div>
                    </a>
                    <!--blog contetn-->
                    <div class="blog-item-content">
                        <span class="category third-color tex">	<?php if($post['topic']['name']==null){echo "Genel";}else{echo $post['topic']['name'];} ?></span> - <span class="date">Dec 20, 2022</span>
                        <h4 class="mt-2 mb-3"><a href=<?php echo "blog-detail.php?icerik=".$post['id'];?>><?php echo $post['title']; ?></a></h4>
                        <p class="mb-4"><?php getPostDescription($post['body']); ?></p>
                        <!--button-->
                        <a href="javascript:void(0);" class="btn btn-large btn-gradient btn-rounded">Read More</a>
                    </div>
                </div>

                <?php endforeach ?>


                <!--pagination-->
                <ul class="blog-pagination p-0 list-unstyled text-center text-md-left">
                    <li><a href="#."><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    <li><a href="#.">1</a></li>
                    <li class="active"><a href="#.">2</a></li>
                    <li><a href="#.">3</a></li>
                    <li><a href="#.">...</a></li>
                    <li><a href="#.">7</a></li>
                    <li><a href="#."><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <!--right side-->
            <div class="col-lg-4">
                <!--search-->
                <div class="widget d-flex bg-light mb-4">
                    <input class="search" placeholder="Search.." type="text">
                    <a href="#." class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
                </div>
                <!--recent post-->
                <div class="widget bg-light">
                    <h5 class="mb-4">Recent Post</h5>
                    <!--recent post item-->
                    <div class="recent-post d-flex">
                        <img src="images/blog-thumb1.jpg" alt="image">
                        <div class="text alt-font">
                            <a href="#.">At the end of the day go forward</a>
                            <span class="date">August 23, 2019</span>
                        </div>
                    </div>
                    <!--recent post item-->
                    <div class="recent-post d-flex">
                        <img src="images/blog-thumb2.jpg" alt="image">
                        <div class="text alt-font">
                            <a href="#.">At the end of the day go forward</a>
                            <span class="date">August 23, 2019</span>
                        </div>
                    </div>
                    <!--recent post item-->
                    <div class="recent-post d-flex">
                        <img src="images/blog-thumb3.jpg" alt="image">
                        <div class="text alt-font">
                            <a href="#.">At the end of the day go forward</a>
                            <span class="date">August 23, 2019</span>
                        </div>
                    </div>
                </div>
                <!--category-->
                <div class="widget bg-light">
                    <h5 class="mb-4">Category</h5>
                    <!--list-->
                    <ul class="list-unstyled blog-category m-0 alt-font">
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="#."><?php echo $topic['name']; ?> <span class="float-right">113</span></a></li>
                    <?php endforeach ?>
                    </ul>
                </div>
                <!--tags-->
                <div class="widget bg-light">
                    <h5 class="mb-4">Tags</h5>
                    <!--list-->
                    <ul class="list-unstyled blog-tags m-0">
                        <li><a href="#.">Corporate</a></li>
                        <li><a href="#.">Creative</a></li>
                        <li><a href="#.">Finance</a></li>
                        <li><a href="#.">Digital</a></li>
                        <li><a href="#.">Onepage</a></li>
                        <li><a href="#.">Single</a></li>
                        <li><a href="#.">Designer</a></li>
                        <li><a href="#.">Developer</a></li>
                        <li><a href="#.">Classic</a></li>
                    </ul>
                </div>
                <!--category-->
                <div class="widget bg-light">
                    <h5 class="mb-4">Archive</h5>
                    <!--list-->
                    <ul class="list-unstyled blog-category m-0 alt-font">
                        <li><a href="#.">Corporate <span class="float-right">15</span></a></li>
                        <li><a href="#.">Creative <span class="float-right">18</span></a></li>
                        <li><a href="#.">Onepage <span class="float-right">11</span></a></li>
                        <li><a href="#.">Single Post <span class="float-right">13</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Content End-->

<?php include "footer-section.php" ?>


<?php include "footer.php" ?>
