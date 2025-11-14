<?php
include ('includes/dbconfig.php');
// Assuming you have already established a database connection
$db = new Database();

$table1 = "practiceAreas";
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
        .pbmit-item-thumbnail-inner img{
            height:auto;
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
                                <h1 class="pbmit-tbar-title"> Practice Areas</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="/" class="home"><span>Home</span></a></span>
                                <span class="sep"> > </span>
                                <span><span class="post-root post post-post current-item"> Practice Area</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <!-- Page Content -->
        <div class="page-content">

            <!-- service -->
            <section class="section-md">
                <div class="container">
                    <div class="row">

                        <?php
                            if (!empty($productData)) {
                                foreach ($productData as $product) {
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <article class="pbmit-servicebox-style-2">
                                <div class="pbmit-post-item">
                                    <span class="pbmit-item-thumbnail">
                                        <span class="pbmit-item-thumbnail-inner">
                                            <img src="<?php echo SERVER_HTTP_ASSET_DB.$product['img']; ?>" class="img-fluid"
                                                alt="">
                                        </span>
                                    </span>
                                    <div class="pbmit-box-content">
                                        <div class="pbmit-box-content-inner">
                                            <div class="pbmit-pf-box-title text-center">
                                                <h3><a href="javascript:void(0);"
                                                        tabindex="0"><?php echo $product['name']; ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php
                                }
                            } else {
                                // Display a message when no data is found
                                echo '<p>No data found.</p>';
                            }
                            ?>
                    </div>
                </div>
            </section>
            <!-- service End -->

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