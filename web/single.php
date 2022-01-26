<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 

if (isset($_GET['id'])) {

$post = selectOne('posts', ['id' => $_GET['id']]);

}
$topics = selectAll('topics');
$post = selectOne('posts', ['id' => $_GET['id']]);
//['publishing' => '1'])

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
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $post['title']; ?> | Madaraka </title>
</head>

<body>
    <!--Facebook Page Plugin SDK-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="M6Zcgr2B"></script>
   
    <!--TODO:Include here-->
  <?php include(ROOT_PATH ."/app/includes/header.php"); ?>
    <!--Page wrapper-->
    <div class="page-wrapper">


        <!--Content-->
        <div class="class content clearfix">


            <!--Main Content  Wrapper-->
            <div class="main-content-wrapper">
            <div class="class main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>

                <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
                </div>


            
            
            
            
            </div>
        </div>
            <!--//Main Content-->
           <!-- https://www.facebook.com/kfckenya -->
            <!--Side Bar-->
            <div class="class sidebar single">
                <div class="fb-page" data-href="https://www.facebook.com/kfckenya" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/kfckenya">KFC</a></blockquote>
               
                </div>
                <div class="section popular">
                    <h2 class="section-title">Popular</h2>
                    
                    <?php foreach ($posts as $p): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assest/images/' .$p['image']?>" alt="">
                        <a href="" class="title">
                            <h4><?php echo $p['title'] ?></h4>
                        </a>
                    </div>
                    <?php endforeach; ?>

                    


                </div>

                <div class="section topics">
                    <h2>
                        <div class="section-title">Categories</div>
                    </h2>
                    <ul>
                        <?php foreach ($topics as $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?></a></li>
                        <?php endforeach; ?>
               
                    </ul>
                </div>

            </div>
            <!--//Side Bar-->

        </div>


        <!--//Content-->


    </div>


    <!--// Page wrapper-->

<!--TODO:Footer includes-->
<?php include(ROOT_PATH ."/app/includes/footer.php");?>


    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Slick Carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--Custom Script-->
    <script src="assets/js/scripts.js"></script>
</body>

</html>