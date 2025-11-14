<?php
include ('includes/dbconfig.php');
// Assuming you have already established a database connection
$db = new Database();

$table1 = "lawsUpdates";
$where = "status='Active'";
$orderBy = "id Desc";
$limit = "";

$productData = $db->getData($table1, $where, $orderBy, $limit);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Justice For Commons</title>
    <meta name="description" content="">
    <?php include_once('includes/header.php'); ?>
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
                                <h1 class="pbmit-tbar-title"> Law Updates</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="/" class="home"><span>Home</span></a></span>
                                <span class="sep"> > </span>
                                <span><span class="post-root post post-post current-item"> Law Updates</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <!-- Page Content -->
        <div class="page-content">
            <!-- Blog Grid -->
            <section class="section-md">
                <div class="container">
                    <div class="row">
                        <?php
                            if (!empty($productData)) {
                                foreach ($productData as $blog) {
                                    $slug = $blog['slug'];
                                    $title = $blog['title'];
                                    $img = $blog['img'];
                                    $add_on = $blog['add_on'];
                                    $add_by = $blog['add_by'];

                                    // Format the date
                                    $formattedDate1 = date('d', strtotime($add_on));
                                    $formattedDate2 = date('M', strtotime($add_on));
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <article class="pbmit-box-blog pbmit-blogbox-style-1" onclick="onClickRedriect('<?php echo $slug; ?>')">
                                <div class="post-item">
                                    <div class="pbmit-blog-image-with-meta">
                                        <div class="pbmit-featured-wrapper pbmit-post-featured-wrapper">
                                            <img src="<?php echo SERVER_HTTP_ASSET_DB.$img; ?>" class="img-fluid"
                                                alt="<?php echo $title; ?>">
                                        </div>
                                        <div class="pbmit-meta-date"><?php echo $formattedDate1; ?>
                                            <span><?php echo $formattedDate2; ?> </span></div>
                                    </div>
                                    <div class="pbmit-box-content">
                                        <div class="pbmit-box-title">
                                            <h4><a
                                                    href="law-update/<?php echo $slug; ?>"><?php echo $title; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php
                            }
                        } else {
                            // If no updates available, display a message
                            echo 'No updates available.';
                        }
                        ?>

                    </div>
                </div>
            </section>
            <!-- Blog Grid End -->

        </div>
        <!-- Page Content End -->

        <!-- footer -->
        <?php include_once('includes/footer.php');?>
        <!-- footer End -->
    </div>
    <!-- page wrapper End -->
    <?php include_once('includes/footer-links.php');?>
    <script>
    function onClickRedriect(link) {
        window.location.href = "law-update/" + link;
    }
    </script>
</body>

</html>