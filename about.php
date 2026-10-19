 <?php 
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else {
        $user_id = '';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloSun - flower website about us page</title>

    <!--box icon cdn link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--style.css link-->
    <link rel="stylesheet" href="css/user_style.css?v=<?php echo time(); ?>">

</head>
<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus excepturi sed, iure similique velit iusto. Reprehenderit quisquam, aliquid exercitationem eaque quod impedit dolore.</p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>about us</span>
        </div>
    </div>

    <!----------------user profile section end-------------------->
    <div class="who">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>who we are</span>
                    <h1>we are passionate about making beautiful more beautiful</h1>
                    <img src="image/separator.png">
                </div>
                <p>AthyNova is a Tanzania-born pastry chef who 2 years in his city Dar es salaam perfecting his craft and exceptional creations. Lorem ipsum dolor sit amet consectetur adipisicing elit. At porro, laboriosam temporibus perspiciatis modi eum, voluptatum iste non adipisci quod veritatis sed. Ex, consequuntur neque consectetur quam voluptates quos temporibus.</p>
                <div class="flex-btn">
                    <a href="menu.php" class="btn">explore more menu</a>
                    <a href="menu.php" class="btn">visit our shop</a>
                </div>
            </div>
            <div class="img-box">
                <img src="image/who.jpg" class="img">
                <img src="image/shap.png" class="shape">
            </div>
        </div>
    </div>

    <div class="use">
        <div class="box-container">
            <div class="box">
                <img src="image/flowers.png" class="img">
            </div>
            <div class="box">
                <h1>Ready For Instant And Convenient Use</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum itaque suscipit rerum temporibus molestias consequatur et delectus quod incidunt excepturi quasi, dicta possimus vitae dignissimos fugiat? Atque deserunt numquam sapiente neque, minus autem dolorum animi, aliquam dicta necessitatibus consequuntur! Consectetur culpa reiciendis quaerat eius deserunt obcaecati aspernatur consequuntur eaque totam. Perspiciatis, ullam! Rerum alias harum adipisci, explicabo libero quo quis labore atque, magni corporis praesentium ipsa odit dolores distinctio at.</p>
                <div class="icon">
                    <div class="icon-detail">
                        <div class="img-box"><img src="image/use.png"></div>
                        <p>quality flowers</p>
                    </div>
                    <div class="icon-detail">
                        <div class="img-box"><img src="image/use0.png"></div>
                        <p>smooth & firm</p>
                    </div>
                </div>
                <div class="icon">
                    <div class="icon-detail">
                        <div class="img-box"><img src="image/use1.png"></div>
                        <p>organically grown</p>
                    </div>
                    <div class="icon-detail">
                        <div class="img-box"><img src="image/use2.png"></div>
                        <p>chemical free</p>
                    </div>
                </div>
                <div class="flex-btn">
                    <a href="shop.php" class="btn">shop now</a>
                    <a href="contact.php" class="btn">call us any time </a>
                </div>
            </div>
        </div>
    </div>

    <!-- cms banner section -->
     <div class="cms-banner">
        <div class="box-container">
            <div class="box">
                <img src="image/cms-banner.avif">
                <div class="detail">
                    <span>flat 35% discount</span>
                    <h1>fresh lowers & <br> plants</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="image/cms-banner.jpg">
                <div class="detail">
                    <span>flat 15% discount</span>
                    <h1>fresh lowers & <br> plants</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
     </div>

    <!-- story section -->
    <div class="story">
        <div class="box">
            <div class="heading">
                <span>fresh & healthy</span>
                <h1>Discount up to 30% for your <br> first purchase.</h1>
            </div>
            <p style="color: red; text-transform: uppercase; padding-bottom: .5rem; ">get 20% extra</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate laboriosam dolorem asperiores, necessitatibus commodi et aspernatur quo pariatur obcaecati ab eos tempora iure fugiat temporibus quibusdam repudiandae rerum. Fugiat sequi tempore debitis alias earum? Dolore nulla amet deserunt incidunt vel iusto animi repellat sit porro illum, qui quam quia, debitis cum possimus. Dolor quisquam cupiditate eos fugit. Officiis, accusamus dicta?</p>
            <a href="" class="btn">our services</a>
        </div>
    </div>

    <!-- team section -->
    <div class="team">
        <div class="heading">
            <span>our team</span>
            <h1>Quality & Passion with our Services</h1>
            <img src="image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/team.avif" class="img">
                <div class="content">
                    <h2>AthyNova Lampard</h2>
                    <p>wedding planner</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team0.jpg" class="img">
                <div class="content">
                    <h2>Aysher Mustapha</h2>
                    <p>ceremony planner</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team2.avif" class="img">
                <div class="content">
                    <h2>Jasmin Edward</h2>
                    <p>appartment planner</p>
                </div>
            </div>
        </div>
    </div>

    <!-- about section -->
     <div class="about">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>About Company</span>
                    <h1>Organic & Healthy Flowers <br> Provider Farming</h1>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia commodi consequuntur officiis inventore ipsum consequatur tenetur aliquam, enim eaque dignissimos minima! Enim quae nisi ad placeat est at. Cupiditate, fuga ratione! Est tempora consequuntur deleniti et. Ipsa alias quia error quod sunt eos minima sapiente, possimus, id repudiandae dicta sequi. Obcaecati est earum natus provident impedit, harum repellat, nesciunt nam possimus quam voluptatum nulla eaque vel. Eveniet omnis maxime distinctio sint neque. Ut aut suscipit non ullam. Modi, dolores dolorum.</p>
            </div>
        </div>
     </div>

    <!-- why choose us section -->
    <div class="choose">
        <div class="box-container">
            <div class="img-box">
                <img src="image/about.jpg">
            </div>
            <div class="box">
                <div class="heading">
                    <span>why choose us</span>
                    <h1>Special Care For Our Every <br> flower lovers </h1>
                </div>
                <div class="box-detail">
                    <div class="detail">
                        <img src="image/discount.png">
                        <h2>discount options</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nostrum, temporibus illum doloribus eos ipsum.</p>
                        <span>1</span>
                    </div>
                    <div class="detail">
                        <img src="image/gift.png">
                        <h2>gift offer</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nostrum, temporibus illum doloribus eos ipsum.</p>
                        <span>2</span>
                    </div>
                    <div class="detail">
                        <img src="image/return.png">
                        <h2>best return policy</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nostrum, temporibus illum doloribus eos ipsum.</p>
                        <span>3</span>
                    </div>
                    <div class="detail">
                        <img src="image/support.png">
                        <h2>online support</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nostrum, temporibus illum doloribus eos ipsum.</p>
                        <span>4</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial section -->
    <div class="testimonial-container">
        <div class="heading">
            <h1>testimonial</h1>
            <img src="image/separator.png">
        </div>
        <div class="container">
            <div class="testimonial-item active">
                <i class="bx bxs-quote-right" id="quote"></i>
                <img src="image/ourteam.webp">
                <h1>lara smith</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quia nobis, vel architecto quo iure suscipit maiores magni atque fuga delectus rem iusto ipsum, nostrum fugiat numquam in, laudantium unde? Cupiditate sapiente deserunt, rerum quisquam optio vel sit dolor, animi ipsa amet tempore repudiandae exercitationem debitis deleniti ut numquam nulla! Iure doloremque porro quae cupiditate ex explicabo veritatis, incidunt laboriosam nobis quibusdam exercitationem, cum rem nesciunt molestias assumenda quidem dolore?</p>
            </div>
            <div class="testimonial-item">
                <i class="bx bxs-quote-right" id="quote"></i>
                <img src="image/ourteam0.webp">
                <h1>Phabian John</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quia nobis, vel architecto quo iure suscipit maiores magni atque fuga delectus rem iusto ipsum, nostrum fugiat numquam in, laudantium unde? Cupiditate sapiente deserunt, rerum quisquam optio vel sit dolor, animi ipsa amet tempore repudiandae exercitationem debitis deleniti ut numquam nulla! Iure doloremque porro quae cupiditate ex explicabo veritatis, incidunt laboriosam nobis quibusdam exercitationem, cum rem nesciunt molestias assumenda quidem dolore?</p>
            </div>
            <div class="testimonial-item">
                <i class="bx bxs-quote-right" id="quote"></i>
                <img src="image/ourteam1.webp">
                <h1>ecmile sirleh</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quia nobis, vel architecto quo iure suscipit maiores magni atque fuga delectus rem iusto ipsum, nostrum fugiat numquam in, laudantium unde? Cupiditate sapiente deserunt, rerum quisquam optio vel sit dolor, animi ipsa amet tempore repudiandae exercitationem debitis deleniti ut numquam nulla! Iure doloremque porro quae cupiditate ex explicabo veritatis, incidunt laboriosam nobis quibusdam exercitationem, cum rem nesciunt molestias assumenda quidem dolore?</p>
            </div>
            <div class="testimonial-item">
                <i class="bx bxs-quote-right" id="quote"></i>
                <img src="image/ourteam2.webp">
                <h1>Alberto Stephenno</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quia nobis, vel architecto quo iure suscipit maiores magni atque fuga delectus rem iusto ipsum, nostrum fugiat numquam in, laudantium unde? Cupiditate sapiente deserunt, rerum quisquam optio vel sit dolor, animi ipsa amet tempore repudiandae exercitationem debitis deleniti ut numquam nulla! Iure doloremque porro quae cupiditate ex explicabo veritatis, incidunt laboriosam nobis quibusdam exercitationem, cum rem nesciunt molestias assumenda quidem dolore?</p>
            </div>
            <div class="left-arrow" onclick="nextSlide()"><i class="bx bx-left-arrow-alt"></i></div>
            <div class="right-arrow" onclick="prevSlide()"><i class="bx bx-right-arrow-alt"></i></div>
        </div>
    </div>

    <!-- testimonial section -->
    <div class="mission">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>our mission</span>
                    <h1>Fresh flowers with the fresh smile</h1>
                    <img src="image/separator.png">
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/flower.png">
                    </div>
                    <div>
                        <h2>fresh flowers</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid facilis tempora, deleniti voluptas distinctio molestias suscipit repellat iste soluta, corrupti qui blanditiis. Ut, rem. Ut.</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/delivery.png">
                    </div>
                    <div>
                        <h2>delivery in 24 hours</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid facilis tempora, deleniti voluptas distinctio molestias suscipit repellat iste soluta, corrupti qui blanditiis. Ut, rem. Ut.</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/app.png">
                    </div>
                    <div>
                        <h2>order online</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid facilis tempora, deleniti voluptas distinctio molestias suscipit repellat iste soluta, corrupti qui blanditiis. Ut, rem. Ut.</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/support.png">
                    </div>
                    <div>
                        <h2>24/7 support</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid facilis tempora, deleniti voluptas distinctio molestias suscipit repellat iste soluta, corrupti qui blanditiis. Ut, rem. Ut.</p>
                    </div>
                </div>
            </div>
            <div class="box-img">
                <img src="image/mission-r.avif" class="img">
                <img src="image/mission-r0.jpg" class="img0">
            </div>
        </div>
    </div>

    <div class="about-banner">
        <div class="box-container">
            <div class="box">
                <img src="image/about-banner.avif">
            </div>
            <div class="box">
                <img src="image/about-banner.webp">
            </div>
        </div>
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