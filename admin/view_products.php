<?php 
    include '../components/connect.php';

    if (isset($_COOKIE['seller_id'])) {
        $seller_id = $_COOKIE['seller_id'];
    }else {
        $seller_id = '';
        header('location:login.php');
    }

    if (isset($_POST['delete'])) {
        
        $p_id = $_POST['product_id'];
        $p_id = filter_var($p_id, FILTER_SANITIZE_STRING);

        $delete_product = $conn->prepare("DELETE FROM `products` WHERE id=?");
        $delete_product->execute([$p_id]);

        $success_msg[] = 'product deleted successfully';
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloSun - flower website view products page</title>

    <!--box icon cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--style.css link-->
    <link rel="stylesheet" href="../css/admin_style.css?v=<?php echo time(); ?>">

</head>
<body>
    
    <?php include '../components/admin_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>View products</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus excepturi sed, iure similique velit iusto. Reprehenderit quisquam, aliquid exercitationem eaque quod impedit dolore.</p>
            <span><a href="dashboard.php">admin</a><i class="bx bx-right-arrow-alt"></i>View products</span>
        </div>
    </div>

    <section class="show_products">
        <div class="heading">
            <h1>your products</h1>
            <img src="../image/separator.png">
        </div>
        <div class="box-container">
            <?php 
                $select_products = $conn->prepare("SELECT * FROM `products` WHERE seller_id = ?");
                $select_products ->execute([$seller_id]);

                if ($select_products->rowCount() > 0) {
                    while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <form action="" method ="post" class="box">
                <input type="hidden" name="product_id" value ="<?= $fetch_products['id']; ?>">
                <?php
                    if ($fetch_products['image'] != '') { ?>
                        <img src="../uploaded_files/<?= $fetch_products['image']; ?>" class="image">
                  <?php  } 
                ?>
                <div class="status" style="color: <?php if($fetch_products['status'] == 'active'){echo "limegreen";}else {echo "red";}?>"><?= $fetch_products['status']; ?></div>

                <p class="price">$<?= $fetch_products['price']; ?>/-</p>
                <div class="content">
                    <div class="title"><?= $fetch_products['name']; ?></div>
                    <div class="flex-btn">
                        <a href="edit_product.php?id=<?= $fetch_products['id'];?>" class="btn">edit</a>
                        <button type="submit" name="delete"class="btn" onclick="confirm('delete this product');">delete</button>
                        <a href="read_product.php?post_id=<?= $fetch_products['id'];?>" class="btn">view product</a>
                    </div>
                </div>
            </form>
            <?php
                    }
                }else{
                    echo '
                        <div class="empty">
                            <p>no product added yet! <br><a href="add_product.php" class="btn" style="margin-top: 1rem;">add product</a></p>
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