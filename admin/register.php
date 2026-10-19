<?php 
    include '../components/connect.php';

    if (isset($_POST['register'])) {
        
        $id = unique_id();
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);

        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);

        $pass = $_POST['pass'];
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);

        $cpass = $_POST['cpass'];
        $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

        $image = $_FILES['image']['name'];
        $image = filter_var($image, FILTER_SANITIZE_STRING);
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        $rename = unique_id().'.'.$ext;
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = '../uploaded_files/'.$rename;

        $select_seller = $conn->prepare("SELECT * FROM `sellers` WHERE email=?");
        $select_seller->execute([$email]);

        if ($select_seller->rowCount() > 0) {
            $warning_msg[] = 'email already exist';
        }else {
            if ($pass != $cpass) {
                $warning_msg[] = 'confirm password not matched';
            }else {
                $insert_seller = $conn->prepare("INSERT INTO `sellers`(id, name, email, password, image) VALUES(?,?,?,?,?)");
                $insert_seller->execute([$id, $name, $email, $cpass, $rename]);
                move_uploaded_file($image_tmp_name, $image_folder);
                $success_msg[] = 'new seller registered! please login now';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloSun - flower website selller registration page</title>

    <!--box icon cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--style.css link-->
    <link rel="stylesheet" href="../css/admin_style.css?v=<?php echo time(); ?>">

</head>
<body>
    
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data" class="register">
            <h3>register now</h3>
            <div class="flex">
                <div class="col">
                    <div class="input-field">
                        <p>your name <span>*</span></p>
                        <input type="text" name="name" placeholder="enter your name" required maxlength="50" class="box">
                    </div>
                    <div class="input-field">
                        <p>your email <span>*</span></p>
                        <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
                    </div>
                </div>
                <div class="col">
                    <div class="input-field">
                        <p>your password <span>*</span></p>
                        <input type="password" name="pass" placeholder="enter your password" required maxlength="50" class="box">
                    </div>
                    <div class="input-field">
                        <p>confirm password <span>*</span></p>
                        <input type="password" name="cpass" placeholder="enter your password" required maxlength="50" class="box">
                    </div>
                </div>
            </div>
            <div class="input-field">
                <p>select profile <span>*</span></p>
                <input type="file" name="image" accept="image/*" class="box">
            </div>
            <p class="link">already have an account ? <a href="login.php">login now</a></p>
            <input type="submit" value="register now" name="register" class="btn">
        </form>
    </div>

    <!-- sweetalert cdn link -->
        <script src="../js/sweetalert.min.js"></script>

    <!-- custom js link -->
         <script type="text/javascript" src="../js/admin_script.js"></script>

    <!--alert -->
    <?php include '../components/alert.php'; ?>

</body>
</html>