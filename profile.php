 <?php 
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else {
        $user_id = 'login.php';
    }

    $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
    $select_orders->execute([$user_id]);
    $total_orders = $select_orders->rowCount();

    $select_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ?");
    $select_message->execute([$user_id]);
    $total_message = $select_message->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloSun - flower website user profile page</title>

    <!--box icon cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--style.css link-->
    <link rel="stylesheet" href="css/user_style.css?v=<?php echo time(); ?>">

</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>user profile</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus excepturi sed, iure similique velit iusto. Reprehenderit quisquam, aliquid exercitationem eaque quod impedit dolore.</p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>user profile</span>
        </div>
    </div>

    <!----------------user profile section end-------------------->
    <section class="profile">
        <div class="heading">
            <h1>profile detail</h1>
            <img src="image/separator.png">
        </div>
        <div class="details">
            <div class="user">
                <img src="uploaded_files/<?= $fetch_profile['image'];?>">
                <h3><?= $fetch_profile['name'];?></h3>
                <p>user</p>
                <a href="update.php" class="btn">update profile</a>
            </div>
            <div class="box-container">
                <div class="box">
                    <div class="flex">
                        <i class="bx bxs-food-menu"></i>
                        <h3><?= $total_orders; ?></h3>
                    </div>
                    <a href="order.php" class="btn">view orders</a>
                </div>
                <div class="box">
                    <div class="flex">
                        <i class="bx bxs-chat"></i>
                        <h3><?= $total_message; ?></h3>
                    </div>
                    <a href="contact.php" class="btn">send message</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/user_footer.php'; ?>
    <!-- sweetalert cdn link -->
        <script src="js/sweetalert.min.js"></script>

    <!-- custom js link -->
         <script type="text/javascript" src="js/user_script.js"></script>

    <!--alert -->
    <?php include 'components/alert.php'; ?>

</body>
</html>