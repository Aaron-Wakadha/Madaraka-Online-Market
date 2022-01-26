<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font awesome link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!--Custom styling-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--Admin styling-->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin Section- Dashboard</title>
</head>

<body>
<!-- Admin header here...-->
<?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>
    <!--Admin Page wrapper-->
    <div class="admin-wrapper">
        <!--Left Sidebar-->
<?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
        <!--//Left Sidebar-->
        <!--Admin Content-->
        <div class="admin-content">
           

            <div class="content">
                <h2 class="page-title">Dashboard</h2>
      
               <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                

            </div>

        </div>
        <!--//Admin Content-->


    </div>
    <!--//Admin Page wrapper-->



    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--CKeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

    <!--Custom Script-->
    <script src="../assets/js/scripts.js"></script>
</body>

</html>