<?php
include ('includes/dbconfig.php');
// Assuming you have already established a database connection
$db = new Database();

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['msg'])){
    
    $errorsArray  = [];

    // Validate other form fields if needed

    if(empty($_POST['name']))
    {
        $errorsArray[] = 'Name is required';
    }
    if(empty($_POST['phone']))
    {
        $errorsArray[] = 'Phone is required';
    }
    if(empty($_POST['subject']))
    {
        $errorsArray[] = 'Subject is required';
    }
    if(empty($_POST['msg']))
    {
        $errorsArray[] = 'Message is required';
    }

    // Validate and sanitize other form fields if needed

    $name = mysqli_real_escape_string($conn2, htmlspecialchars(trim($_POST['name'])));
    $phone = mysqli_real_escape_string($conn2, htmlspecialchars(trim($_POST['phone'])));
    $subject = mysqli_real_escape_string($conn2, htmlspecialchars(trim($_POST['subject'])));
    $msg = mysqli_real_escape_string($conn2, htmlspecialchars(trim($_POST['msg'])));
    
    // Example usage of the insertData() function
    $attorneyData = array(
        'name' => $name,
        'number' => $phone,
        'subject' => $subject,
        'msg' => $msg,
        // Add other fields as needed
    );

    $result = $db->insertData('contactUs', $attorneyData);

    if ($result) {
        // Successfully inserted into the database, now send an email

        $to = "workwithaashuu@gmail.com";
        $subject = $subject;
        
        // Customize the email message with the form data
        $message = "<p><br> Please check the below details. <br>
                    <b>Name :</b>".$_POST['name']."<br>
                    <b>Contact :</b>".$_POST['phone']."<br>
                    <b>Message :</b>".$_POST['msg']."<br>";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: noreply <noreply@justiceforcommons.com>' . "\r\n";
        
        // Additional security measures
        $headers .= 'X-Mailer: PHP/' . phpversion(); // Add X-Mailer header to prevent email spoofing
        
        $emailResult = mail($to, $subject, $message, $headers);

        if ($emailResult) {
            echo json_encode(['success_msg' => 'sent']);
            exit();
        } else {
            echo json_encode(['error_msg' => 'Failed to send email.']);
            exit();
        }
    } else {
        echo json_encode(['error_msg' => 'Something went wrong with database insertion.']);
        exit();
    }    
}


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
                                <h1 class="pbmit-tbar-title"> Contact Us</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="/" class="home"><span>Home</span></a></span>
                                <span class="sep"> > </span>
                                <span><span class="post-root post post-post current-item">Contact Us</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <!-- Page Content -->
        <div class="page-content">

            <!-- Ihbox -->
            <section class="contact-ihbox-section">
                <div class="container">
                    <div class="contact-ihbox">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="pbmit-ihbox-style-4">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-icon pbmit-icon-skincolor"></div>
                                        <div class="pbmit-ihbox-contents">
                                            <div class="pbmit-vc_general pbmit-vc_cta3 pbmit-cta3-only">
                                                <div class="pbmit-vc_cta3_content-container">
                                                    <div class="pbmit-vc_cta3-content">
                                                        <div class="pbmit-vc_cta3-content-header pbmit-wrap">
                                                            <div class="pbmit-vc_cta3-headers pbmit-wrap-cell">
                                                                <h2 class="pbmit-custom-heading">Address</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-cta3-content-wrapper">
                                                Chamber No. - 12,<br> Supreme Court of India,<br>
                                                New Delhi - 110001
                                                <p></p>
                                                <!-- <p><a href="#">View On Google Map</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pbmit-ihbox-style-4 pbmit-textcolor-white">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-icon pbmit-icon-skincolor"></div>
                                        <div class="pbmit-ihbox-contents">
                                            <div class="pbmit-vc_general pbmit-vc_cta3 pbmit-cta3-only">
                                                <div class="pbmit-vc_cta3_content-container">
                                                    <div class="pbmit-vc_cta3-content">
                                                        <div class="pbmit-vc_cta3-content-header pbmit-wrap">
                                                            <div class="pbmit-vc_cta3-headers pbmit-wrap-cell">
                                                                <h2 class="pbmit-custom-heading">Phone</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-cta3-content-wrapper">
                                                A wonderful serenity has taken possession of my entire soul, like these.
                                                <p></p>
                                                <p><a href="tel:+919643595922" class="text-white">+91 964-359-5922</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pbmit-ihbox-style-4">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-icon pbmit-icon-skincolor"></div>
                                        <div class="pbmit-ihbox-contents">
                                            <div class="pbmit-vc_general pbmit-vc_cta3 pbmit-cta3-only">
                                                <div class="pbmit-vc_cta3_content-container">
                                                    <div class="pbmit-vc_cta3-content">
                                                        <div class="pbmit-vc_cta3-content-header pbmit-wrap">
                                                            <div class="pbmit-vc_cta3-headers pbmit-wrap-cell">
                                                                <h2 class="pbmit-custom-heading">Email</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbmit-cta3-content-wrapper">
                                                A wonderful serenity has taken possession of my entire soul, like these.
                                                <p></p>
                                                <p><a href="mailto:info@justiceforcommons.com"
                                                        class="text-black">info@justiceforcommons.com</a>
                                                </p>
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

            <!-- Contact Form -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-details">
                                <div class="pbmit-heading-subheading">
                                    <h4 class="pbmit-subtitle">GET IN TOUCH</h4>
                                    <h2 class="pbmit-title">Contact Details</h2>
                                </div>
                                <p>If you are interested in working with us then please drop us a line, we would love to
                                    hear from you.</p>
                                <!-- <h5>Opening Hour</h5>
                                <p>Monday – Friday: 9am to 5pm <br> Saturday: 10.00am to 4pm</p> -->
                                <h5>Call Us Today</h5>
                                <p><span>Mr. Aakash Rajput: </span><a href="tel:+919643595922" class="text-dark">+91 964-359-5922</a></p>
                                <h5>Whats App</h5>
                                <p><a href="https://wa.link/o0hav0" class="text-dark">+91 964-359-5922</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div class="pbmit-heading-subheading">
                                    <h4 class="pbmit-subtitle">PLEASE Fill Form</h4>
                                    <h2 class="pbmit-title">Do You Have Any Questions?</h2>
                                </div>
                                <form id="leadsForm3">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <input type="text" id="leadsFormName3" class="form-control"
                                                placeholder="Name" required>
                                            <small class="mssssage-error commonerror2 text-danger"></small>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <input type="number" id="leadsFormNumber3" class="form-control"
                                                placeholder="Phone" required>
                                            <small class="mssssage-error commonerror2 text-danger"></small>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <input type="text" id="leadsFormSubject3" class="form-control"
                                                placeholder="Subject" required>
                                            <small class="mssssage-error commonerror2 text-danger"></small>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea id="leadsFormMsg3" cols="40" rows="4" class="form-control"
                                                placeholder="Message" required=""></textarea>
                                            <small class="mssssage-error commonerror2 text-danger"></small>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <button type="submit" id="leadsFormBtn3"
                                                class="pbmit-btn pbmit-btn-global pbmit-btn-shape-round w-100">
                                                <i
                                                    class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                                SEND MESSAGE
                                            </button>
                                        </div>
                                        <div class="col-md-12 col-lg-12 message-status"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Form End -->
        </div>
        <!-- Page Content End -->

        <!-- footer -->
        <?php include_once('includes/footer.php');?>
        <!-- footer End -->
    </div>
    <!-- page wrapper End -->
    <?php include_once('includes/footer-links.php');?>
    <!-- Sweet Alert ============================================ -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $("#leadsFormBtn3").click(function(e) {
        e.preventDefault();
        var FormInfo = {
            "formId": "leadsForm3", // form id 
            "SenderControlID": "leadsFormName3", // input Name
            "SenderControlMobileID": "leadsFormNumber3", // input number
            "SenderControlSubjectID": "leadsFormSubject3", // error msg div
            "SenderControlMsgID": "leadsFormMsg3", // error msg div
            "SenderControlSubmitID": "leadsFormBtn3", // submit button
            "SenderControlErrorMsgID": "leadsFormErr3", // error msg div
        };
        SubmitQueryData(FormInfo);
    });

    function SubmitQueryData(FormInfo) {
        let emptyInputCount = 0;
        let check = 1;

        $("#" + FormInfo.formId + " input").each(function(index) {
            if ($(this).val() === '') {
                $(this).next().text('This Field is required.');
                check = 0;
            } else {
                $(this).next().text(' ');
            }
        });

        // Validate phone
        let phone = $("#" + FormInfo.SenderControlMobileID).val();
        let intRegex = /^[1-9][0-9]+$/;
        if (phone.length < 10 || (!intRegex.test(phone))) {
            check = 0;
            $("#" + FormInfo.SenderControlMobileID).next().text('Please enter a valid phone number.');
        }
        if (phone.length > 10) {
            check = 0;
            $("#" + FormInfo.SenderControlMobileID).next().text('Please enter a valid phone number.');
        }

        if (check !== 1) {
            return false;
        }

        let getName = $("#" + FormInfo.SenderControlID).val();
        let getNumber = $("#" + FormInfo.SenderControlMobileID).val();
        let getSubject = $("#" + FormInfo.SenderControlSubjectID).val();
        let getMsg = $("#" + FormInfo.SenderControlMsgID).val();

        let postObj = {
            name: getName,
            phone: getNumber,
            subject: getSubject,
            msg: getMsg,
        };

        let timerInterval;
        Swal.fire({
            title: 'Your Query is submitting',
            html: 'I will close in <b></b> milliseconds.',
            timer: 2500,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
                const b = Swal.getHtmlContainer().querySelector('b');
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft();
                }, 100);
            },
            willClose: () => {
                clearInterval(timerInterval);
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            // window.location.href = "thankyou";
            if (result.dismiss === Swal.DismissReason.timer) {}
        });

        $.ajax({
            type: "POST",
            data: postObj,
            beforeSend: function() {
                $("." + FormInfo.SenderControlErrorMsgID).html("Processing...");
                $("#" + FormInfo.SenderControlSubmitID).html("Please wait...");
                $("#" + FormInfo.SenderControlSubmitID).attr('disabled', 'true');
            },
            success: function(data) {
                if (data.success_msg == "sent") {
                    window.location.reload();
                }
                $("." + FormInfo.SenderControlErrorMsgID).html("Processing...");
                $("#" + FormInfo.SenderControlSubmitID).removeAttr('disabled');
                $("#" + FormInfo.SenderControlSubmitID).html("submit");
            }
        });
    }
    </script>
</body>

</html>