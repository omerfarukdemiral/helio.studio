<?php require_once('config.php') ?>
<?php require_once('blog/includes/public_functions.php') ?>
<?php require_once( 'blog/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<?php// require_once('blog/includes/head_section.php') ?>
<?php include "header.php"?>
<!--Header Start-->
<?php include "menu.php"?>
<?php $url = $_SERVER['REQUEST_URI'];?> 

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
                    <span>You are here:</span> <a href="index.html">Home</a> <span class="main-color"><i class="fa fa-angle-double-right"></i>Blog</span>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!--Cover End-->
<?php
if (isset($_GET["icerik"])) {
$icerik = $_GET["icerik"];
global $conn;
$sql = "SELECT * FROM posts WHERE id=$icerik";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
}
?>
<!--page content-->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="blog-detail-item row">
                <div class="blog-detail-img col-sm-12 mb-5 hover-effect">
                    <img src="<?php echo BASE_URL . 'static/images/' . $post['image']; ?>" alt="image">
                </div>
                <div class="col-lg-8 mb-lg-0 mb-5 mb-xs-5">
                    <!--blog contetn-->
                    <div class="blog-item-content">
                        <div class="content-text">
                            <span class="category third-color"><?php  ?></span> - <span class="date"><?php echo $post['updated_at'] ?></span>
                            <h4 class="mt-2 mb-4"><a href="javascript:void(0);"></a><?php echo $post['title'] ?></h4>
                            <p class="mb-4"><?php 
                            echo $post['body'];
                            ?>
                            </p>
                        </div>

                        <!--blog nav-->
                        <div class="blog-detail-nav">
                            <a href=<?php $pr = $icerik-1; echo "?icerik".$pr;?>><h6 class="d-inline-block text-capitalize float-left">Previous Article</h6></a>
                            <a href=<?php $nx = $icerik+1; echo "?icerik".$nx;?>><h6 class="d-inline-block text-capitalize float-right">Next Article</h6></a>
                        </div>
                        <!--blog tags & share-->
                        <div class="blog-detail-tag">
                            <a class="btn btn-small btn-transparent-gray" href="javascript:void(0);">FOOD</a>
                            <a class="btn btn-small btn-transparent-gray" href="javascript:void(0);">TRAVEL</a>
                            <a class="btn btn-small btn-transparent-gray" href="javascript:void(0);">AGENCY</a>
                            <ul class="blog-share list-unstyled">
                                <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="facebook-bg-hvr" href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <!--blog recent comment-->
                        <div class="blog-comment pt-3 mb-5">
                            <h4>Recent Post</h4>
                            <span class="hr-line mt-4 mb-5 ml-0"></span>
                            <ul class="blog-comment">
                                <li>
                                    <div class="d-table w-100">
                                        <div class="avatar">
                                            <img src="images/avtar-1.jpg" alt="" data-no-retina="">
                                        </div>
                                        <div class="d-table-cell comment-text">
                                            <a href="javascript:void(0);"><h6 class="d-inline-block m-0">Roman Walkin</h6></a>
                                            <a href="javascript:void(0);" class="btn btn-small float-right">Reply</a>
                                            <div class="date">19 DEC 2020, 8:30 pm</div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                        </div>
                                    </div>
                                    <ul class="child-comment">
                                        <li>
                                            <div class="d-table w-100">
                                                <div class="avatar">
                                                    <img src="images/avtar-2.jpg" alt="" data-no-retina="">
                                                </div>
                                                <div class="d-table-cell comment-text">
                                                    <a href="javascript:void(0);"><h6 class="d-inline-block m-0">Elzabth Swan</h6></a>
                                                    <a href="javascript:void(0);" class="btn btn-small float-right">Reply</a>
                                                    <div class="date">19 DEC 2020, 8:30 pm</div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="d-table w-100">
                                        <div class="avatar">
                                            <img src="images/avtar-3.jpg" alt="" data-no-retina="">
                                        </div>
                                        <div class="d-table-cell comment-text">
                                            <a href="javascript:void(0);"><h6 class="d-inline-block m-0">Herman Miller</h6></a>
                                            <a href="javascript:void(0);" class="btn btn-small float-right">Reply</a>
                                            <div class="date">19 DEC 2020, 8:30 pm</div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!--right side-->
                <div class="col-lg-4">
                    <!--search-->
                    <div class="widget d-flex bg-light mb-4">
                        <input class="search" placeholder="Search.." type="text">
                        <a href="javascript:void(0);" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                    <!--recent post-->
                    <div class="widget bg-light">
                        <h5 class="mb-4">Recent Post</h5>
                        <!--recent post item-->
                        <?php foreach ($posts as $right_post): ?>
                        
                        
                        <div class="recent-post d-flex">
                            <img src="<?php echo BASE_URL . 'static/images/' . $right_post['image']; ?>" alt="image">
                            <div class="text alt-font">
                                <a href=<?php echo "?icerik=".$right_post['id']; ?>><?php echo $right_post['title'];?></a>
                                <span class="date"><?php echo $right_post['updated_at'] ?></span>
                            </div>
                        </div>
                        <!--recent post item-->
                        <?php endforeach ?>
                    </div>
                    <!--category-->
                    <div class="widget bg-light">
                        <h5 class="mb-4">Category</h5>
                        <!--list-->
                        <ul class="list-unstyled blog-category m-0 alt-font">
                            <li><a href="javascript:void(0);">Corporate <span class="float-right">113</span></a></li>
                            <li><a href="javascript:void(0);">Creative <span class="float-right">87</span></a></li>
                            <li><a href="javascript:void(0);">Finance <span class="float-right">66</span></a></li>
                            <li><a href="javascript:void(0);">Digital <span class="float-right">98</span></a></li>
                            <li><a href="javascript:void(0);">Onepage <span class="float-right">47</span></a></li>
                            <li><a href="javascript:void(0);">Single Post <span class="float-right">76</span></a></li>
                        </ul>
                    </div>
                    <!--tags-->
                    <div class="widget bg-light">
                        <h5 class="mb-4">Tags</h5>
                        <!--list-->
                        <ul class="list-unstyled blog-tags m-0">
                            <li><a href="javascript:void(0);">Corporate</a></li>
                            <li><a href="javascript:void(0);">Creative</a></li>
                            <li><a href="javascript:void(0);">Finance</a></li>
                            <li><a href="javascript:void(0);">Digital</a></li>
                            <li><a href="javascript:void(0);">Onepage</a></li>
                            <li><a href="javascript:void(0);">Single</a></li>
                            <li><a href="javascript:void(0);">Designer</a></li>
                            <li><a href="javascript:void(0);">Developer</a></li>
                            <li><a href="javascript:void(0);">Classic</a></li>
                        </ul>
                    </div>
                    <!--category-->
                    <div class="widget bg-light">
                        <h5 class="mb-4">Archive</h5>
                        <!--list--> 
                        <ul class="list-unstyled blog-category m-0 alt-font">
                            <li><a href="javascript:void(0);">Corporate <span class="float-right">15</span></a></li>
                            <li><a href="javascript:void(0);">Creative <span class="float-right">18</span></a></li>
                            <li><a href="javascript:void(0);">Onepage <span class="float-right">11</span></a></li>
                            <li><a href="javascript:void(0);">Single Post <span class="float-right">13</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!--page content end-->

<?php include "footer-section.php" ?>


<?php include "footer.php" ?>