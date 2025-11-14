<?php
include ('includes/dbconfig.php');
// Assuming you have already established a database connection
$db = new Database();

$table1 = "ourAttorneys";
$where = "status='Active'";
$orderBy = "id ASC";
$limit = "";

$productData = $db->getData($table1, $where, $orderBy, $limit);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Justice For Commons</title>
    <meta name="description" content="">
    <?php include_once('includes/header.php'); ?>
    <style>
    .pbmit-servicebox-style-2 .pbmit-box-content.nn {
        position: unset;
    }
    </style>
</head>

<body>
    <!-- page wrapper -->
    <div class="page-wrapper">

        <!-- Header Main Area -->
        <header class="site-header header-style-1">
            <?php include_once('includes/navbar-2.php'); ?>
        </header>
        <!-- Header Main Area End Here -->

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title"> Our Attorneys</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="/" class="home"><span>Home</span></a></span>
                                <span class="sep"> > </span>
                                <span><span class="post-root post post-post current-item"> Our Attorneys</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <!-- Page Content -->
        <div class="page-content our-team-section">

            <!-- Our Team -->
            <section class="section-md">
                <div class="container">
                    <h3 class="text-center mb-5">Senior Advocates</h3>
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-3">
                            <article class="pbmit-teambox-style-3">
                                <div class="pbmit-post-item">
                                    <div class="pbmit-team-image-box">
                                        <span class="pbmit-item-thumbnail">
                                            <span class="pbmit-item-thumbnail-inner">
                                                <img src="assets/img/ad_vijay_verma.jpeg" class="img-fluid" alt="">
                                            </span>
                                        </span>
                                        <div class="pbmit-teambox-social-links">
                                            <div class="pbmit-team-social-links-wrapper">
                                                <ul class="pbmit-team-social-links">
                                                    <li>
                                                        <a href="mailto:info@advocatevijayverma.com" target="_blank"
                                                            class="pbmit-team-social-google">
                                                            <i class="pbmit-base-icon-gplus"></i>
                                                            <span class="pbmit-hide">Connect with Advocate</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-box-content">
                                        <div class="pbmit-box-content-inner">
                                            <div class="pbmit-pf-box-title">
                                                <div class="pbmit-box-title">
                                                    <h4><a href="attorney-details">Adv. Vijay Bhaskar Verma</a></h4>
                                                </div>
                                            </div>
                                            <div class="pbmit-box-team-position pbmit-skincolor">
                                                Senior Advocate
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <article class="pbmit-teambox-style-3">
                                <div class="pbmit-post-item">
                                    <div class="pbmit-team-image-box">
                                        <span class="pbmit-item-thumbnail">
                                            <span class="pbmit-item-thumbnail-inner">
                                                <img src="assets/img/ad_santosh_gupta.jpeg" class="img-fluid" alt="">
                                            </span>
                                        </span>
                                        <div class="pbmit-teambox-social-links">
                                            <div class="pbmit-team-social-links-wrapper">
                                                <ul class="pbmit-team-social-links">
                                                    <li>
                                                        <a href="contact-us" target="_blank"
                                                            class="pbmit-team-social-google">
                                                            <i class="pbmit-base-icon-gplus"></i>
                                                            <span class="pbmit-hide">Connect with Advocate</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-box-content">
                                        <div class="pbmit-box-content-inner">
                                            <div class="pbmit-pf-box-title">
                                                <div class="pbmit-box-title">
                                                    <h4><a href="attorney-details">Adv. Santosh Kumar Gupta</a></h4>
                                                </div>
                                            </div>
                                            <div class="pbmit-box-team-position pbmit-skincolor">
                                                Senior Advocate
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <h3 class="text-center mt-4 mb-3">Our Attorneys</h3>
                    <style>
                        .pbmit-item-thumbnail-inner img{
                            height: 347px;
    margin: auto;
                        }
                        </style>
                    <div class="row mt-4">
                        <?php
                                foreach ($productData as $product) {
                        ?>
                        <div class="col-md-6 col-lg-2">
                            <article class="pbmit-servicebox-style-2">
                                <div class="pbmit-post-item text-center">
                                <span class="pbmit-item-thumbnail">
                                            <span class="pbmit-item-thumbnail-inner">
                                                <img src="<?php echo SERVER_HTTP_ASSET_DB. $product['img']; ?>" class="img-fluid" alt="">
                                            </span>
                                        </span>
                                    <div class="pbmit-box-content nn">
                                        <div class="pbmit-box-content-inner">
                                            <div class="pbmit-pf-box-title text-center">
                                                <h3>Adv. <a href="javascript:void(0);"
                                                        tabindex="0"><?php echo $product['name']; ?></a></h3>
                                                <a href="contact-us" target="_blank" class="pbmit-team-social-google">
                                                    <i class="pbmit-base-icon-gplus mx-1"></i>
                                                    Connect with Advocate
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php 
                                }
                            ?>
                    </div>
                </div>
            </section>
            <!-- Our Team End -->

        </div>
        <!-- Page Content End -->

        <!-- footer -->
        <?php include_once('includes/footer.php');?>
        <!-- footer End -->
    </div>
    <!-- page wrapper End -->
    <?php include_once('includes/footer-links.php');?>
</body>

</html>