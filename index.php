<?php
include ('includes/dbconfig.php');
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
        <header class="site-header header-style-3">
            <?php include_once('includes/navbar.php'); ?>

            <div class="pbmit-slider-area">
                <!-- START Homeslider1 REVOLUTION SLIDER 6.6.12 -->
                <p class="rs-p-wp-fix"></p>
                <rs-module-wrap id="rev_slider_3_1_wrapper" data-alias="homeslider1" data-source="gallery"
                    style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                    <rs-module id="rev_slider_3_1" data-version="6.6.12">
                        <rs-slides style="overflow: hidden; position: absolute;">
                            <rs-slide style="position: absolute;" data-key="rs-3" data-title="Slide"
                                data-thumb="assets/img/slider1-01.jpg" data-anim="adpr:false;ms:600;" data-in="o:0;"
                                data-out="a:false;">
                                <img src="assets/img/slider1-01.jpg" alt="" title="slider1-01.jpg" width="1900"
                                    height="950" class="rev-slidebg tp-rs-img rs-lazyload"
                                    data-lazyload="assets/img/slider1-01.jpg" data-no-retina>
                                <rs-layer id="slider-2-slide-3-layer-1" class="tp-shape tp-shapewrapper"
                                    data-type="shape" data-rsp_ch="on" data-xy="xo:20px,20px,33px,33px;yo:418px;"
                                    data-text="a:inherit;" data-dim="w:230px;h:1px;" data-vbility="t,t,t,f"
                                    data-frame_0="o:1;" data-frame_0_sfx="se:blocktoright;"
                                    data-frame_1="e:power4.inOut;st:1060;sp:2000;sR:1060;"
                                    data-frame_1_sfx="se:blocktoright;" data-frame_999="o:0;st:w;sR:5940;"
                                    style="z-index:5;background-color:#ffffff;"></rs-layer>
                                <rs-layer id="slider-2-slide-3-layer-2" data-type="text" data-rsp_ch="on"
                                    data-xy="xo:20px,20px,33px,33px;yo:392px,392px,391px,391px;"
                                    data-text="s:14;l:20;ls:3px;fw:600;a:inherit;" data-vbility="t,t,t,f"
                                    data-frame_0="x:-100%;o:1;" data-frame_0_mask="u:t;"
                                    data-frame_1="st:430;sp:1500;sR:430;" data-frame_1_mask="u:t;"
                                    data-frame_999="o:0;st:w;sR:7070;"
                                    style="z-index:6;font-family:'Montserrat';text-transform:uppercase;">we fight for
                                    justice
                                </rs-layer>
                                <rs-layer id="slider-2-slide-3-layer-3" data-type="text" data-rsp_ch="on"
                                    data-xy="xo:20px;yo:428px;" data-text="s:64;l:80;a:inherit;"
                                    data-frame_0="x:-100%;o:1;" data-frame_0_mask="u:t;"
                                    data-frame_1="st:1940;sp:1500;sR:1940;" data-frame_1_mask="u:t;"
                                    data-frame_999="o:0;st:w;sR:5560;"
                                    style="z-index:7;font-family:'Playfair Display';">Special Approach, <br> Dedicated
                                    Attorneys
                                </rs-layer>
                            </rs-slide>
                            <!-- <rs-slide style="position: absolute;" data-key="rs-4" data-title="Slide"
                                data-thumb="assets/img/slider1-02.jpg" data-anim="adpr:false;ms:600;" data-in="o:0;"
                                data-out="a:false;">
                                <img src="assets/img/slider1-02.jpg" alt="" title="slider1-02.jpg" width="1900"
                                    height="950" class="rev-slidebg tp-rs-img rs-lazyload"
                                    data-lazyload="assets/img/slider1-02.jpg" data-no-retina>
                                <rs-layer id="slider-2-slide-4-layer-1" class="tp-shape tp-shapewrapper"
                                    data-type="shape" data-rsp_ch="on" data-xy="xo:20px,20px,33px,33px;yo:418px;"
                                    data-text="a:inherit;" data-dim="w:230px;h:1px;" data-vbility="t,t,t,f"
                                    data-frame_0="o:1;" data-frame_0_sfx="se:blocktoright;"
                                    data-frame_1="e:power4.inOut;st:1060;sp:2000;sR:1060;"
                                    data-frame_1_sfx="se:blocktoright;" data-frame_999="o:0;st:w;sR:5940;"
                                    style="z-index:5;background-color:#ffffff;">
                                </rs-layer>
                                <rs-layer id="slider-2-slide-4-layer-2" data-type="text" data-rsp_ch="on"
                                    data-xy="xo:20px,20px,33px,33px;yo:392px,392px,391px,391px;"
                                    data-text="s:14;l:20;ls:3px;fw:600;a:inherit;" data-vbility="t,t,t,f"
                                    data-frame_0="x:-100%;o:1;" data-frame_0_mask="u:t;"
                                    data-frame_1="st:430;sp:1500;sR:430;" data-frame_1_mask="u:t;"
                                    data-frame_999="o:0;st:w;sR:7070;"
                                    style="z-index:6;font-family:'Montserrat';text-transform:uppercase;">we fight for
                                    justice
                                </rs-layer>
                                <rs-layer id="slider-2-slide-4-layer-3" data-type="text" data-rsp_ch="on"
                                    data-xy="xo:20px;yo:428px;" data-text="s:64;l:80;a:inherit;"
                                    data-frame_0="x:-100%;o:1;" data-frame_0_mask="u:t;"
                                    data-frame_1="st:1940;sp:1500;sR:1940;" data-frame_1_mask="u:t;"
                                    data-frame_999="o:0;st:w;sR:5560;"
                                    style="z-index:7;font-family:'Playfair Display';">Special Approach, <br> Dedicated
                                    Attorneys
                                </rs-layer>
                            </rs-slide> -->
                        </rs-slides>
                        <rs-static-layers class="rs-stl-visible">
                            <rs-layer id="slider-2-slide-2-layer-7" class="rs-layer-static" data-type="text"
                                data-rsp_ch="on" data-xy="xo:77px;yo:618px;" data-text="s:14;l:22;fw:500;a:inherit;"
                                data-vbility="t,t,f,f" data-wrpid="rev-total-slide" data-onslides="s:1;"
                                data-frame_0="tp:600;" data-frame_1="tp:600;st:0;"
                                data-frame_999="o:0;tp:600;st:w;sR:8700;" style="z-index:11;font-family:'Montserrat';">
                                <!-- 01 / 01 -->
                                We are the best
                            </rs-layer>
                        </rs-static-layers>
                    </rs-module>
                </rs-module-wrap>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </header>
        <!-- Header Main Area End Here -->

        <!-- Page Content -->
        <div class="page-content">

            <!-- Why Choose us Start -->
            <section class="section-xxl pbmit-bg-color-secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="pbmit-heading-subheading text-white">
                                <h4 class="pbmit-subtitle">Why Choose us</h4>
                                <!-- <h2 class="pbmit-title">Expertise In All Aspects<br> Of Divorce</h2> -->
                                <h2 class="pbmit-title">Expertise In All</h2>
                            </div>
                            <div class="single-sign-image">
                                <img src="assets/img/sing.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="choose-us-one-rightbox">
                                <div class="pbmit-firstlater">
                                    <p>Justice for Commons, we believe in the power of justice to transform societies and empower individuals.</p>
                                </div>
                                <p>Our team of legal experts is driven by a passion for safeguarding the rights and interests of the common man. With a deep understanding of the intricacies of the legal landscape, we navigate through complex legal challenges with finesse, ensuring that justice is not just a theoretical concept but a tangible reality for all.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Why Choose us End -->

            <!-- Iconbox Start -->
            <section class="ihbox-section-one pbmit-bg-color-light">
                <div class="container">
                    <div class="ihbox-one">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="pbmit-ihbox-style-3 pbmit-textcolor-white">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-icon pbmit-icon-skincolor">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i
                                                    class="pbmit-attorco-business-icon pbmit-attorco-business-icon-auction"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <div class="pbmit-vc_general pbmit-vc_cta3 pbmit-cta3-only">
                                                <div class="pbmit-vc_cta3_content-container">
                                                    <div class="pbmit-vc_cta3-content">
                                                        <div class="pbmit-vc_cta3-content-header pbmit-wrap">
                                                            <div class="pbmit-vc_cta3-headers pbmit-wrap-cell">
                                                                <h2 class="pbmit-custom-heading ">Best Legal Defence
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-cta3-content-wrapper">Our criminal defense attorneys
                                                will<br>
                                                protect your rights in court.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pbmit-ihbox-style-3">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-icon pbmit-icon-skincolor">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i
                                                    class="pbmit-attorco-business-icon pbmit-attorco-business-icon-balance"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <div class="pbmit-vc_general pbmit-vc_cta3 pbmit-cta3-only">
                                                <div class="pbmit-vc_cta3_content-container">
                                                    <div class="pbmit-vc_cta3-content">
                                                        <div class="pbmit-vc_cta3-content-header pbmit-wrap">
                                                            <div class="pbmit-vc_cta3-headers pbmit-wrap-cell">
                                                                <h2 class="pbmit-custom-heading ">Only Skilled Attorneys
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-cta3-content-wrapper">We have best skilled attorneys
                                                with<br>
                                                extensive backgrounds.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pbmit-ihbox-style-3">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-icon pbmit-icon-skincolor">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i
                                                    class="pbmit-attorco-business-icon pbmit-attorco-business-icon-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <div class="pbmit-vc_general pbmit-vc_cta3 pbmit-cta3-only">
                                                <div class="pbmit-vc_cta3_content-container">
                                                    <div class="pbmit-vc_cta3-content">
                                                        <div class="pbmit-vc_cta3-content-header pbmit-wrap">
                                                            <div class="pbmit-vc_cta3-headers pbmit-wrap-cell">
                                                                <h2 class="pbmit-custom-heading">Strive for Excellence
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-cta3-content-wrapper">We have received more than 150<br>
                                                juryand court trial victories.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Iconbox End -->

            <!-- About Start -->
            <section class="about-section-seven pbmit-bg-color-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="about-seven-imgbox">
                                <figure>
                                    <img src="assets/img/img-01.png" class="img-fluid" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="about-seven-content">
                                <div class="pbmit-heading-subheading-style-2">
                                    <h4 class="pbmit-subtitle">WHY CHOOSE US</h4>
                                    <h2 class="pbmit-title">Lawyers group with over 25 Years of experience</h2>
                                </div>
                                <div class="pbmit-firstlater">
                                    <p class="mb-3">Adv. Kaushal Kishore Verma, the visionary founder of Justice for Commons, stands as the guiding force and inspiration behind our commitment to justice and the common good. With a legal career marked by wisdom, compassion, and an unwavering dedication to societal welfare, Adv. Kaushal Kishore Verma has left an indelible mark on the legal landscape.</p>
                                </div>
                                <div class="about-seven-inner">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-7">
                                            <h4>Adv. Kaushal Kishore Verma</h4>
                                        </div>
                                        <div class="col-12 col-lg-5">
                                            <a href="contact-us" class="pbmit-btn pbmit-btn-global">
                                                Get Touch
                                                <i class="themifyicon ti-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About End -->

            <!-- Ihbox Start -->
            <section class="section-lgb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-inner">
                                    <div class="pbmit-ihbox-heading-with-icon">
                                        <div class="pbmit-ihbox-icon ">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i
                                                    class="pbmit-attorco-business-icon pbmit-attorco-business-icon-balance"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-heading">
                                            <div class="pbmit-ihbox-big-number-text">01</div>
                                            <div class="pbmit-vc_general pbmit-vc_cta3 pbmit-cta3-only">
                                                <div class="pbmit-vc_cta3_content-container">
                                                    <div class="pbmit-vc_cta3-content">
                                                        <div class="pbmit-vc_cta3-content-header pbmit-wrap">
                                                            <div class="pbmit-vc_cta3-headers pbmit-wrap-cell">
                                                                <h2 class="pbmit-custom-heading ">Get Legal Advice</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <div class="pbmit-cta3-content-wrapper">Post question and get free legal
                                                    advice direct from.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="pbmit-ihbox-style-8 ihbox-seven-second-style">
                                <div class="pbmit-ihbox-inner">
                                    <div class="pbmit-ihbox-heading-with-icon">
                                        <div class="pbmit-ihbox-icon ">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i
                                                    class="pbmit-attorco-business-icon pbmit-attorco-business-icon-suitcase"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-heading">
                                            <div class="pbmit-ihbox-big-number-text">02</div>
                                            <div class="pbmit-vc_general pbmit-vc_cta3 pbmit-cta3-only">
                                                <div class="pbmit-vc_cta3_content-container">
                                                    <div class="pbmit-vc_cta3-content">
                                                        <div class="pbmit-vc_cta3-content-header pbmit-wrap">
                                                            <div class="pbmit-vc_cta3-headers pbmit-wrap-cell">
                                                                <h2 class="pbmit-custom-heading ">Document Review</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <div class="pbmit-cta3-content-wrapper">Post question and get free legal
                                                    advice direct from.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="pbmit-ihbox-style-8 ihbox-seven-last-style">
                                <div class="pbmit-ihbox-inner">
                                    <div class="pbmit-ihbox-heading-with-icon">
                                        <div class="pbmit-ihbox-icon ">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i
                                                    class="pbmit-attorco-business-icon pbmit-attorco-business-icon-legal-document"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-heading">
                                            <div class="pbmit-ihbox-big-number-text">03</div>
                                            <div class="pbmit-vc_general pbmit-vc_cta3 pbmit-cta3-only">
                                                <div class="pbmit-vc_cta3_content-container">
                                                    <div class="pbmit-vc_cta3-content">
                                                        <div class="pbmit-vc_cta3-content-header pbmit-wrap">
                                                            <div class="pbmit-vc_cta3-headers pbmit-wrap-cell">
                                                                <h2 class="pbmit-custom-heading ">Discounted Rates</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <div class="pbmit-cta3-content-wrapper">Post question and get free legal
                                                    advice direct from.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Ihbox End -->

            <!-- Service Start -->
            <section class="section-md">
                <div class="container">
                    <div class="pbmit-heading-subheading text-center">
                        <h4 class="pbmit-subtitle">Practice Areas</h4>
                        <h2 class="pbmit-title">We serve the best service</h2>
                        <p class="pbmit-heading-desc">At Justice for Commons, our dedication to excellence is not just a statement; it's a commitment to providing unparalleled legal services across Education, Family, Business, Real Estate, Civil, Criminal, Employment, and Banking Law. Trust us to be your partners in justice, delivering the highest standard of legal representation for your peace of mind and success.</p>
                    </div>
                    <div class="swiper-slider" data-loop="true" data-autoplay="true" data-dots="true"
                        data-arrows="false" data-columns="3" data-margin="30" data-effect="slide">
                        <div class="swiper-wrapper">
    <div class="swiper-slide">
        <!-- Slide1 -->
        <article class="pbmit-servicebox-style-2">
            <div class="pbmit-post-item">
                <span class="pbmit-item-thumbnail">
                    <span class="pbmit-item-thumbnail-inner">
                        <img src="assets/img/service-01.jpg" class="img-fluid" alt="">
                    </span>
                </span>
                <div class="pbmit-box-content">
                    <div class="pbmit-box-content-inner">
                        <div class="pbmit-pf-box-title">
                            <div class="pbmit-box-category">
                                <a href="practice-areas" rel="tag" tabindex="0">Corporate</a>
                            </div>
                            <h3><a href="javascript:void(0);" tabindex="0">Corporate Law</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="swiper-slide">
        <!-- Slide2 -->
        <article class="pbmit-servicebox-style-2">
            <div class="pbmit-post-item">
                <span class="pbmit-item-thumbnail">
                    <span class="pbmit-item-thumbnail-inner">
                        <img src="assets/img/service-02.jpg" class="img-fluid" alt="">
                    </span>
                </span>
                <div class="pbmit-box-content">
                    <div class="pbmit-box-content-inner">
                        <div class="pbmit-pf-box-title">
                            <div class="pbmit-box-category">
                                <a href="practice-areas" rel="tag" tabindex="0">Civil</a>
                            </div>
                            <h3><a href="javascript:void(0);" tabindex="0">Civil Law</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="swiper-slide">
        <!-- Slide3 -->
        <article class="pbmit-servicebox-style-2">
            <div class="pbmit-post-item">
                <span class="pbmit-item-thumbnail">
                    <span class="pbmit-item-thumbnail-inner">
                        <img src="assets/img/service-03.jpg" class="img-fluid" alt="">
                    </span>
                </span>
                <div class="pbmit-box-content">
                    <div class="pbmit-box-content-inner">
                        <div class="pbmit-pf-box-title">
                            <div class="pbmit-box-category">
                                <a href="practice-areas" rel="tag" tabindex="0">Matrimonial</a>
                            </div>
                            <h3><a href="javascript:void(0);" tabindex="0">Matrimonial Law</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="swiper-slide">
        <!-- Slide4 -->
        <article class="pbmit-servicebox-style-2">
            <div class="pbmit-post-item">
                <span class="pbmit-item-thumbnail">
                    <span class="pbmit-item-thumbnail-inner">
                        <img src="assets/img/service-04.jpg" class="img-fluid" alt="">
                    </span>
                </span>
                <div class="pbmit-box-content">
                    <div class="pbmit-box-content-inner">
                        <div class="pbmit-pf-box-title">
                            <div class="pbmit-box-category">
                                <a href="practice-areas" rel="tag" tabindex="0">Criminal</a>
                            </div>
                            <h3><a href="javascript:void(0);" tabindex="0">Criminal Law</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="swiper-slide">
        <!-- Slide5 -->
        <article class="pbmit-servicebox-style-2">
            <div class="pbmit-post-item">
                <span class="pbmit-item-thumbnail">
                    <span class="pbmit-item-thumbnail-inner">
                        <img src="assets/img/service-05.jpg" class="img-fluid" alt="">
                    </span>
                </span>
                <div class="pbmit-box-content">
                    <div class="pbmit-box-content-inner">
                        <div class="pbmit-pf-box-title">
                            <div class="pbmit-box-category">
                                <a href="practice-areas" rel="tag" tabindex="0">Service matters</a>
                            </div>
                            <h3><a href="javascript:void(0);" tabindex="0">Service matters</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="swiper-slide">
        <!-- Slide6 -->
        <article class="pbmit-servicebox-style-2">
            <div class="pbmit-post-item">
                <span class="pbmit-item-thumbnail">
                    <span class="pbmit-item-thumbnail-inner">
                        <img src="assets/img/service-06.jpg" class="img-fluid" alt="">
                    </span>
                </span>
                <div class="pbmit-box-content">
                    <div class="pbmit-box-content-inner">
                        <div class="pbmit-pf-box-title">
                            <div class="pbmit-box-category">
                                <a href="practice-areas" rel="tag" tabindex="0">Railway matters</a>
                            </div>
                            <h3><a href="javascript:void(0);" tabindex="0">Railway matters</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <div class="swiper-slide">
        <!-- Slide7 -->
        <article class="pbmit-servicebox-style-2">
            <div class="pbmit-post-item">
                <span class="pbmit-item-thumbnail">
                    <span class="pbmit-item-thumbnail-inner">
                        <img src="assets/img/service-07.jpg" class="img-fluid" alt="">
                    </span>
                </span>
                <div class="pbmit-box-content">
                    <div class="pbmit-box-content-inner">
                        <div class="pbmit-pf-box-title">
                            <div class="pbmit-box-category">
                                <a href="practice-areas" rel="tag" tabindex="0">Center government</a>
                            </div>
                            <h3><a href="javascript:void(0);" tabindex="0">Center government</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>

                    </div>
                </div>
            </section>
            <!-- Service End -->

            <!-- Counter Start -->
            <section class="counter-one pbmit-bg-color-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="pbmit-fidbox-style-4">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-sbox-icon-wrapper">
                                            <i
                                                class="pbmit-attorco-business-icon pbmit-attorco-business-icon-suitcase"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-fld-contents-wrap">
                                        <div class="pbmit-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0" data-to="1000"
                                                data-interval="5" class="numinate">1000</span>+
                                        </div>
                                        <h3 class="pbmit-fid-title"><span>PROJECTS DONE<br></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pbmit-fidbox-style-4">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-sbox-icon-wrapper">
                                            <i
                                                class="pbmit-attorco-business-icon pbmit-attorco-business-icon-lawyer"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-fld-contents-wrap">
                                        <div class="pbmit-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0" data-to="100"
                                                data-interval="5" class="numinate">100</span>+
                                        </div>
                                        <h3 class="pbmit-fid-title"><span>Professional Attorneys<br></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pbmit-fidbox-style-4">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-sbox-icon-wrapper">
                                            <i
                                                class="pbmit-attorco-business-icon pbmit-attorco-business-icon-law-3"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-fld-contents-wrap">
                                        <div class="pbmit-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0" data-to="927"
                                                data-interval="5" class="numinate">927</span>+
                                        </div>
                                        <h3 class="pbmit-fid-title"><span>Cases Dismissed<br></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pbmit-fidbox-style-4">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-sbox-icon-wrapper">
                                            <i
                                                class="pbmit-attorco-business-icon pbmit-attorco-business-icon-legal"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-fld-contents-wrap">
                                        <div class="pbmit-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0" data-to="100"
                                                data-interval="5" class="numinate">100</span>+
                                        </div>
                                        <h3 class="pbmit-fid-title"><span>PRACTICE AREAS IN WORLD<br></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counter End -->

            <!-- Team Start -->
            <section class="section-md team-section-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="pbmit-heading-subheading text-white">
                                <h4 class="pbmit-subtitle">MEET OUR PROFESSIONAL ATTORNEYS</h4>
                                <h2 class="pbmit-title">Advice On A Full Range Of <br> Any Law Matters</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="team-one-content">
                                <p>Empower yourself with informed decisions as our attorneys provide expert guidance on a comprehensive array of legal matters. Whether you're navigating the complexities of family disputes, delving into business intricacies, or seeking counsel on criminal defense, our team stands ready to offer insightful advice tailored to your unique situation.</p>
                                <a href="our-attorneys" class="pbmit-btn pbmit-btn-transparent">
                                    See All Attorneys
                                    <i class="themifyicon ti-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-one-box">
                        <div class="row justify-content-center gap-5">
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
                    </div>
                </div>
            </section>
            <!-- Team End -->

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