<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--Admin styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin Section- Edit User</title>
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
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit User</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

                <form action="edit.php" method="post">
                
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                
                <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email"value="<?php echo $email;?>" class="text-input">
                    </div>
               
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $password;?>" class="text-input">
                    </div>
                    <div>
                        <label>Password Confirmation</label>
                        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>"class="text-input">
                    </div>
                    <div>


                    <?php if (isset($admin) && $admin == 1): ?>
                        <label>
                        <input type="checkbox" name="admin">
                         Admin
                        </label>

                    <?php else: ?>
                        <label>
                        <input type="checkbox" name="admin">
                         Admin
                        </label>

                     <?php endif; ?>   

                    </div>



                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                    </div>
                </form>


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
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>