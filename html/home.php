<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
    <link rel="stylesheet" href="./CSS/homE.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./JS/home.js"></script>
</head>
<body>
    <div id="wrapper">
        <!-- <div class="conatiner"> -->
            <div class="upperHeader">
                <div class="left-part-upperHeader">
                    <i><i class="fa-brands fa-facebook"></i></i>
                    <i><i class="fa-brands fa-instagram"></i></i>
                    <i><i class="fa-brands fa-linkedin"></i></i>
                    <i><i class="fa-brands fa-youtube"></i></i>
                </div>
                <div class="right-part-upperHeader">
                    <p>sahabidesh523@gmail.com | 7003193887</p>
                </div>
            </div>
            <header class="head" id="headid">
                <div class="logo">
                    <figure>
                        <img src="./images/homepage-images/package-logo_10250-1057.avif" alt="" id="logoImg">
                        <figcaption>Production Hub</figcaption>
                    </figure>
                </div>
                <nav class="nav">
                    <ul>
                        <li>Home</li>
                        <li>Blog</li>
                        <li>Contact Us</li>
                        <li>About Us</li>
                       <li><a href="loginpage.php" target="_blank">login</a></li> 
                        <li><a href="signuppage.html" target="_blank">Sign up</a></li>
                    </ul>
                
                </nav>
            </header>
            <div class="imgSection">
                <img src="./images/homepage-images/M.jpg" alt="" id="slideImg">
            </div>
            <div class="newPost">
                <h3>New posts</h3>
                <ul>
                    <a href="#"><img src="./images/homepage-images/blog image.jpg"></a>
                    <a href="#">
                        <p>The post on Instragram</p>
                        <p>14/06/2024</p>
                        <p>Bidesh</p>
                    </a>

                </ul>

            </div>
            <div class="popularPost">
                <h3>Popular posts</h3>
                 <?php
                    $popularPost = [
                        [
                            'feature_image' => './images/homepage-images/F1.jpg',
                            'caption' => 'This is the first post',
                            'author' => 'Author 1'
                        ],
                        [
                            'feature_image' => './images/homepage-images/F2.jpg',
                            'caption' => 'This is the second post',
                            'author' => 'Author 1'
                        ],                        
                        [
                            'feature_image' => './images/homepage-images/F3.png',
                            'caption' => 'This is the third post',
                            'author' => 'Author 1'
                        ],

                    ]
                ?>
                    <?php 
                    echo "<ul>";
                        foreach($popularPost as $post){
                            echo "<li>";
                            echo '<a href="#"> <img src="' . $post['feature_image'] . '" alt="' . $post['caption'] . '"></a>';
                            echo '<a href="#"> <p>' . $post['caption'] . '</p> </a>';
                            echo '<a href="#"><p><strong>Author:</strong> ' . $post['author'] . '</p> </a>';
                            echo "</li>";
                        }
                    echo "</ul>";
                    ?>
                <!-- <ul>
                    <a href="#"><li><figure><img src="./images/homepage-images/F1.jpg"><figcaption>popular post1</figcaption></figure>one</li></a>
                    <a href="#"><li><figure><img src="./images/homepage-images/F2.jpg"><figcaption>popular post1</figcaption></figure>Two</li></a>
                    <a href="#"><li><figure><img src="./images/homepage-images/F3.png"><figcaption>popular post1</figcaption></figure>Three</li></a>   
                </ul> -->
            </div>
            <footer class="footer_section">
                <section class="footer">
                    <div class="footer_part">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="footer_part">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="footer_part">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                    <div class="footer_part">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </section>
                <section class="belowfooter">
                    <span>@copyright:Bidesh saha 2024 june 4</span> 
                </section>
            </footer>
        <!-- </div> -->
    </div>
</body>
</html>
