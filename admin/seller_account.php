<?php 
    include '../components/connect.php';

    if (isset($_COOKIE['seller_id'])) {
        $seller_id = $_COOKIE['seller_id'];
    }else {
        $seller_id = '';
        header('location:login.php');
    }

    //delete message from database

    if (isset($_POST['delete'])) {
        $delete_id = $_POST['delete_id'];
        $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

        $verify_delete = $conn->prepare("SELECT * FROM `message` WHERE id =?");
        $verify_delete->execute([$delete_id]);

        if ($verify_delete->rowCount() > 0) {
            
            $delete_message = $conn->prepare("DELETE FROM `message` WHERE id = ?");
            $delete_message->execute([$delete_id]);

            $success_msg[] = 'message deleted';
        }else {
            $warning_msg[] = 'message already deleted';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloSun - flower website registered user page</title>

    <!--box icon cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--style.css link-->
    <link rel="stylesheet" href="../css/admin_style.css?v=<?php echo time(); ?>">

</head>
<body>
    
    <?php include '../components/admin_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>registered seller</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus excepturi sed, iure similique velit iusto. Reprehenderit quisquam, aliquid exercitationem eaque quod impedit dolore.</p>
            <span><a href="dashboard.php">admin</a><i class="bx bx-right-arrow-alt"></i>registered seller </span>
        </div>
    </div>

    <section class="user-container">
        <div class="heading">
            <h1>registered seller</h1>
            <img src="../image/separator.png">
        </div>
        <div class="box-container">
           <?php 
                $select_seller = $conn->prepare("SELECT * FROM `sellers`");
                $select_seller->execute();

                if ($select_seller->rowCount() > 0){
                    while ($fetch_seller = $select_seller->fetch(PDO::FETCH_ASSOC)) {
                        $seller_id = $fetch_seller['id'];
            ?>
            <div class="box">
                <img src="../uploaded_files/<?= $fetch_seller['image']; ?>" alt="">
                <div class="detail">
                    <p>seller id: <span><?= $fetch_seller['id']; ?></span></p>
                    <p>seller name: <span><?= $fetch_seller['name']; ?></span></p>
                    <p>seller email: <span><?= $fetch_seller['email']; ?></span></p>
                </div>
            </div>
            <?php
                    }
                }else{
                    echo '
                        <div class="empty" style="margin: 2rem auto">
                            <p>no seller registered yet!</p>
                        </div>
                    ';
                }
           ?>
        </div>
    </section>

    <?php include '../components/admin_footer.php'; ?>

    <!-- sweetalert cdn link -->
        <script src="../js/sweetalert.min.js"></script>

    <!-- custom js link -->
         <script type="text/javascript" src="../js/admin_script.js"></script>

    <!--alert -->
    <?php include '../components/alert.php'; ?>

</body>
</html>