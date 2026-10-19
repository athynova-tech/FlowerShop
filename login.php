 <?php 
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else {
        $user_id = '';
    }

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);

        $pass = $_POST['pass'];
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);

        $select_user = $conn->prepare("SELECT * FROM `users` WHERE email=? AND password=? LIMIT 1");
        $select_user->execute([$email, $pass]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($select_user->rowCount() > 0) {
            setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
            header('location:home.php');
        }else {
            $warning_msg[] = 'incorrect email or password!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloSun - flower website login page</title>

    <!--box icon cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--style.css link-->
    <link rel="stylesheet" href="css/user_style.css?v=<?php echo time(); ?>">

</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>login</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus excepturi sed, iure similique velit iusto. Reprehenderit quisquam, aliquid exercitationem eaque quod impedit dolore.</p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>login</span>
        </div>
    </div>

    <!----------------login form section end-------------------->
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data" class="login">
            <h3>login now</h3>
            <div class="input-field">
                    <p>your email <span>*</span></p>
                    <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
             </div>
             <div class="input-field">
                    <p>your password <span>*</span></p>
                    <input type="password" name="pass" placeholder="enter your password" required maxlength="50" class="box">
            </div>

            <p class="link">don't have an account ? <a href="register.php">register now</a></p>
            <input type="submit" value="login now" name="login" class="btn">
        </form>
    </div>

    <?php include 'components/user_footer.php'; ?>
    <!-- sweetalert cdn link -->
        <script src="js/sweetalert.min.js"></script>

    <!-- custom js link -->
         <script type="text/javascript" src="js/user_script.js"></script>

    <!--alert -->
    <?php include 'components/alert.php'; ?>

</body>
</html>