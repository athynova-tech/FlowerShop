 <?php 
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else {
        $user_id = '';
    }

    if (isset($_POST['send_message'])) {

        if ($user_id != '') {
            $id = unique_id();

            $name = $_POST['name'];
            $name = filter_var($name, FILTER_SANITIZE_STRING);

            $email = $_POST['email'];
            $email = filter_var($email, FILTER_SANITIZE_STRING);

            $subject = $_POST['subject'];
            $subject = filter_var($subject, FILTER_SANITIZE_STRING);

            $message = $_POST['message'];
            $message = filter_var($message, FILTER_SANITIZE_STRING);

            $verify_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ? AND name = ? AND email = ? AND subject = ? AND message = ?");
            $verify_message->execute([$user_id, $name, $email, $subject, $message]);

            if ($verify_message->rowCount() > 0) {
                $warning_msg[] = 'message already send';
            }else {
                $insert_message = $conn->prepare("INSERT INTO `message`(id, user_id, name, email, subject, message) VALUES(?, ?, ?, ?, ?, ?)");
                $insert_message->execute([$id, $user_id, $name, $email, $subject, $message]);
                $success_msg[] = 'message send';
            }
        }else {
            $warning_msg[] = 'please login first';
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloSun - flower website contact page</title>

    <!--box icon cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--style.css link-->
    <link rel="stylesheet" href="css/user_style.css?v=<?php echo time(); ?>">

</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>contact us</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus excepturi sed, iure similique velit iusto. Reprehenderit quisquam, aliquid exercitationem eaque quod impedit dolore.</p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>contact us</span>
        </div>
    </div>

    <div class="service">
        <div class="heading">
            <h1>our services</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste dolorem soluta ducimus! Odit laboriosam quo nostrum amet deleniti ducimus assumenda magni voluptas, doloremque quia earum mollitia dolor impedit omnis beatae.</p>
            <img src="image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
               <img src="image/delivery.png"> 
               <div>
                    <h1>free shipping fast</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel provident assumenda, culpa enim ipsum expedita.</p>
               </div>
            </div>
            <div class="box">
               <img src="image/return.png"> 
               <div>
                    <h1>money back guarentee</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel provident assumenda, culpa enim ipsum expedita.</p>
               </div>
            </div>
            <div class="box">
               <img src="image/discount.png"> 
               <div>
                    <h1>online support 24/7</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel provident assumenda, culpa enim ipsum expedita.</p>
               </div>
            </div>
        </div>
    </div>
    <!----------------service section end-------------------->
    <div class="contact">
        <div class="heading">
            <h1>droap a line</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo inventore labore suscipit placeat. Aliquam quibusdam rerum assumenda in eum eligendi doloribus nobis dicta sunt amet, molestias aliquid autem officiis harum!</p>
            <img src="image/separator.png">
        </div>
        <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data" class="login">
                <div class="input-field">
                    <p>your name <span>*</span></p>
                    <input type="text" name="name" placeholder="enter your name" required maxlength="50" class="box">
                </div>
                <div class="input-field">
                    <p>your email <span>*</span></p>
                    <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
                </div>
                <div class="input-field">
                    <p>subject <span>*</span></p>
                    <input type="text" name="subject"  required maxlength="50" class="box">
                </div>
                <div class="input-field">
                    <p>message <span>*</span></p>
                    <textarea name="message" class="box"></textarea>
                </div>

                <button type="submit" name="send_message" class="btn">send message</button>
            </form>
        </div>
    </div>

    <!----------------contact form section end-------------------->
    <div class="address">
        <div class="heading">
            <h1>droap a line</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo inventore labore suscipit placeat. Aliquam quibusdam rerum assumenda in eum eligendi doloribus nobis dicta sunt amet, molestias aliquid autem officiis harum!</p>
            <img src="image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
                <i class="bx bxs-map-alt"></i>
                <div>
                    <h4>address</h4>
                    <p>1093 Marigold Lane, Coral Way <br>Miami, Florida, 33169</p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-phone-incoming"></i>
                <div>
                    <h4>phone number</h4>
                    <p>+255 687 197 139</p>
                    <p>+255 774 444 268</p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-envelope"></i>
                <div>
                    <h4>email</h4>
                    <p>athyNova@gmail.com</p>
                    <p>athyNova9@gmail.com</p>
                </div>
            </div> 
        </div>
    </div>

    <!----------------service section end-------------------->


    <?php include 'components/user_footer.php'; ?>
    <!-- sweetalert cdn link -->
        <script src="js/sweetalert.min.js"></script>

    <!-- custom js link -->
         <script type="text/javascript" src="js/user_script.js"></script>

    <!--alert -->
    <?php include 'components/alert.php'; ?>

</body>
</html>