<?php
include ('includes/dbconfig.php');
// Assuming you have already established a database connection
$db = new Database();

if($_GET['slug']){
    $slug =  mysqli_real_escape_string($conn2, htmlspecialchars(trim($_GET['slug'])));
}else{
    header("location: law-updates");
}

$table1 = "lawsUpdates";
$where = "status='Active' AND slug='$slug'";
$orderBy = "id Desc";
$limit = "";

$productData = $db->getData($table1, $where, $orderBy, $limit);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title><?php echo $productData[0]['title']; ?> - Justice For Commons</title>
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
                                <h1 class="pbmit-tbar-title"> <?php echo $productData[0]['title']; ?></h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="/" class="home"><span>Home</span></a></span>
                                <span class="sep"> > </span>
                                <span><a href="/law-updates" class="home"><span>Law Updates</span></a></span>
                                <span class="sep"> > </span>
                                <span><span class="post-root post post-post current-item">
                                        <?php echo $productData[0]['title']; ?></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <!-- Page Content -->
        <div class="page-content">

            <!-- Blog Details -->
            <section class="pbmit-blog-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 blog-right-col">
                            <div class="row">
                                <div class="col-md-12">
                                    <article class="post blog-details">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="assets/img/blog-03.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-blog-classic-box-content">
                                            <div class="pbmit-blog-classic">
                                                <div class="pbmit-entry-meta-wrapper">
                                                    <div
                                                        class="entry-meta pbmit-entry-meta pbmit-entry-meta-blogclassic">
                                                        <span class="pbmit-meta-line posted-on">
                                                            <span class="screen-reader-text pbmit-hide">
                                                                Posted on
                                                            </span>
                                                            <time class="entry-date published updated"
                                                                datetime="2019-06-13T08:48:51+00:00">
                                                                <?php echo date('M', strtotime($productData[0]['add_on']))." ".date('d', strtotime($productData[0]['add_on'])).", ".date('Y', strtotime($productData[0]['add_on']))?>
                                                            </time>
                                                        </span>
                                                        <span class="pbmit-meta-line byline">
                                                            <span class="author vcard">
                                                                <span class="screen-reader-text pbmit-hide">Author
                                                                </span>By <?php echo $productData[0]['add_by']; ?>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-box-title">
                                                <h4><?php echo $productData[0]['title']; ?></h4>
                                            </div>
                                            <div class="entry-content">
                                                <?php echo $productData[0]['content']; ?>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 blog-left-col">
                            <aside class="sidebar">
                                <aside class="widget widget-recent-post">
                                    <h3 class="widget-title">Recent Posts</h3>
                                    <ul class="recent-post-list">
                                        <?php
                                            $table2 = "lawsUpdates";
                                            $where2 = "status='Active' AND slug!='$slug'";
                                            $orderBy2 = "id Desc";
                                            $limit2 = "5"; // Set the limit to 5
                                            
                                            $productData2 = $db->getData($table2, $where2, $orderBy2, $limit2);
                                            if (!empty($productData2)) {
                                                $counter = 0; // Initialize a counter
                                                foreach ($productData2 as $blog) {
                                                    $slug = $blog['slug'];
                                                    $title = $blog['title'];
                                                    $img = $blog['img'];
                                                    $add_on = $blog['add_on'];
                                                    $add_by = $blog['add_by'];

                                                    // Format the date
                                                    $formattedDate1 = date('d', strtotime($add_on));
                                                    $formattedDate2 = date('M', strtotime($add_on));

                                                    // Display only 5 items
                                                    if ($counter < 5) {
                                            ?>
                                        <li class="recent-post-list-li" onclick="onClickRedriect('<?php echo $slug; ?>')">
                                            <a class="recent-post-thum" href="/law-update/<?php echo $slug; ?>">
                                                <img src="<?php echo SERVER_HTTP_ASSET_DB.$img; ?>" class="img-fluid"
                                                alt="<?php echo $title; ?>">
                                            </a>
                                            <a href="/law-update/<?php echo $slug; ?>"><?php echo $title; ?></a>
                                            <span
                                                class="post-date"><?php echo $formattedDate2 . ' ' . $formattedDate1 . ', ' . date('Y', strtotime($add_on)); ?></span>
                                        </li>
                                        <?php
                                                $counter++; // Increment the counter
                                                } else {
                                                    break; // Break out of the loop after displaying 5 items
                                                }
                                            }
                                        } else {
                                            // If no updates available, display a message
                                            echo 'No updates available.';
                                        }
                                        ?>
                                    </ul>
                                </aside>
                                <aside class="widget widget-contact">
                                    <div class="single-service-contact">
                                        <div class="single-service-contact-inner">
                                            <i
                                                class="pbmit-attorco-business-icon pbmit-attorco-business-icon-balance"></i>
                                            <h3>How Can We Help</h3>
                                            <p>If you need any helps, please feel free to contact us.</p>
                                            <ul>
                                                <li>
                                                    <span class="pbmit-base-icon-phone"></span>
                                                    <a href="tel:919643595922">+91 9643 595 922</a>
                                                </li>
                                                <li>
                                                    <span class="fa fa-paper-plane-o"></span>
                                                    <a href="mailto:info@justiceforcommons.com"
                                                        class="text-white">info@justiceforcommons.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Details End -->

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