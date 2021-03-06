<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
    <link rel="stylesheet" href="../css files/general.css">
    <link rel="stylesheet" href="../css files/service.css">
</head>
<body>
    <!-- this is the header section that contains the logo and the navigation bars   -->
    <header > 
        <!-- this is the logo container -->
        <div class="logo-container">
            <img src="../images/images__10_-removebg-preview.png" alt="" class="logo">
        </div>

        <!-- this is the navigation bar  for the destop view -->
        <nav class="navbar">

            <ul class="navlist">
                <li class="tab">
                    <!-- these are the navbar links to different pages -->
                    <a href="../index.html" class="link">home</a>
                </li>
                <li class="tab">
                    <a href="./service.html" class="link">services</a>
                </li>
                <li class="tab">
                    <a href="./podcast.html" class="link">podcast</a>
                </li>
                <li class="tab">
                    <a href="./about.html" class="link">about</a>
                </li>
                <li class="tab">
                    <a href="./announcement.html" class="link">announcements</a>
                </li>
            </ul>
        </nav>
        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
        <!-- this is the navigation sidebar for the mobile view -->

        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="../images/1193.png" alt=""  id="close-sidebar" class="close-btn">
            </div>
            <ul class="list-items">
                <li><a href="../index.html">home <img src="./images/arrow-24-xxl.png" alt="" class="arrow"> </a ></li>
                 <li><a href="./contact.html">contact  <img src="./images/arrow-24-xxl.png" alt="" class="arrow"></a></li>            
                  <li><a href="./podcast.html">podcast  <img src="./images/arrow-24-xxl.png" alt="" class="arrow"></a></li>
                 <li><a href="./about.html">about <img src="./images/arrow-24-xxl.png" alt="" class="arrow"></a></li>
                 <li><a href="./announcement.html">announcement  <img src="./images/arrow-24-xxl.png" alt="" class="arrow"></a></li>
                 <li><a href="./service.html">service <img src="./images/arrow-24-xxl.png" alt="" class="arrow"></a></li>
             </ul>
        </div>
        <!-- this is the code for the hamburger menu in the mobile view -->
        
        
        <div class="login-container">
            <a href="./contact.html" class="contact-btn">contact</a>
        </div>
    </header>
<!-- end of the header section -->
<section class="service-landpage landpage-card">
        <div class="announcement-card">
                <h2>let us pray</h2>
                <h1>our weekly announcement</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Ex illo maxime explicabo, rem architecto odit provident, 
                    obcaecati nobis omnis distinctio molestiae repudiandae dignissimos exercitationem 
                    et error, asperiores esse pariatur.
                </p>
                <div class="recent-podcast-icon-container">
                    <button class="learn-more">
                        <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Learn More</span>
                    </button>
                </div>     
        </div>
</section> 
<!-- this section probably works the same way with the podcast page because i used the sam css file for some pages  -->
    <section class="recent-podcast-section">
        <div class="recent-postcast-header">
            <h1>recent annoncements</h1>
        </div>
        <div class="podcast-card-container">
            <div class="recent-podcard">
                <div class="microphone-container">
                    <img src="../images/mic2-removebg-preview.png" alt="" class="micro-phone">
                </div>
                <img src="../images/preacher.jpeg" alt="" class="recent-podcast-img">
                <div class="recent-podcast-body">
                    <h1>importance of god in us</h1>
                    <p>god is our father, who is in heaven, heprotects us from danger
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <div class="recent-podcast-icon-container">
                        <div class="recent-podcast-icon-container">
                            <button class="learn-more">
                                <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">Learn More</span>
                              </button>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="recent-podcard">
                <div class="microphone-container">
                    <img src="../images/mic2-removebg-preview.png" alt="" class="micro-phone">
                </div>
                <img src="../images/preacher2.jpeg" alt="" class="recent-podcast-img">
                <div class="recent-podcast-body">
                    <h1>importance of god in us</h1>
                    <p>god is our father, who is in heaven, heprotects us from danger
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <div class="recent-podcast-icon-container">
                        <div class="recent-podcast-icon-container">
                            <button class="learn-more">
                                <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">Learn More</span>
                              </button>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="recent-podcard">
                <div class="microphone-container">
                    <img src="../images/mic2-removebg-preview.png" alt="" class="micro-phone">
                </div>
               
                <img src="../images/pastor3.jpeg" alt="" class="recent-podcast-img">
                <div class="recent-podcast-body">
                    <h1>importance of god in us</h1>
                    <p>god is our father, who is in heaven, heprotects us from danger
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <div class="recent-podcast-icon-container">
                        <div class="recent-podcast-icon-container">
                            <button class="learn-more">
                                <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">Learn More</span>
                              </button>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <section class="recent-podcast-section">
        <div class="recent-postcast-header">
            <h1>all podcasts</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, placeat.</p>
        </div>
        <div class="podcast-card-container">
            <div class="recent-podcard">
                <div class="microphone-container">
                    <img src="../images/mic2-removebg-preview.png" alt="" class="micro-phone">
                </div>
                <img src="../images/podcast.jpeg" alt="" class="recent-podcast-img">
                <div class="recent-podcast-body">
                    <h1>importance of god in us</h1>
                    <p>god is our father, who is in heaven, heprotects us from danger
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <div class="recent-podcast-icon-container">
                        <div class="recent-podcast-icon-container">
                            <button class="learn-more">
                                <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">Learn More</span>
                              </button>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="recent-podcard">
                <div class="microphone-container">
                    <img src="../images/mic2-removebg-preview.png" alt="" class="micro-phone">
                </div>
                <img src="../images/chior1.jpeg" alt="" class="recent-podcast-img">
                <div class="recent-podcast-body">
                    <h1>importance of god in us</h1>
                    <p>god is our father, who is in heaven, heprotects us from danger
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <div class="recent-podcast-icon-container">
                        <div class="recent-podcast-icon-container">
                            <button class="learn-more">
                                <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">Learn More</span>
                              </button>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="recent-podcard">
                <div class="microphone-container">
                    <img src="../images/mic2-removebg-preview.png" alt="" class="micro-phone">
                </div>
                <img src="../images/congregation2.jpeg" alt="" class="recent-podcast-img">
                <div class="recent-podcast-body">
                    <h1>importance of god in us</h1>
                    <p>god is our father, who is in heaven, heprotects us from danger
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <div class="recent-podcast-icon-container">
                        <div class="recent-podcast-icon-container">
                            <button class="learn-more">
                                <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">Learn More</span>
                              </button>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <section class="help-section">
        <div class="overlay">
            <div class="help-card-container">
                <div class="help-card">
                    <img src="../images/twitter.png" alt="" class="help-img">
                    <h1>be your brother's keeper</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa
                        quasi unde nobis nam ratione! Aspernatur
                        nesciunt porro sint veritatis nulla est rem natus maiores suscipit.
                    </p>
                </div>
                <div class="help-card">
                    <img src="../images/images__10_-removebg-preview.png" alt="" class="help-img">
                    <h1>be your brother's keeper</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa
                        quasi unde nobis nam ratione! Aspernatur
                        nesciunt porro sint veritatis nulla est rem natus maiores suscipit.
                    </p>
                </div>
                <div class="help-card">
                    <img src="../images/right-arrow.png" alt="" class="help-img">
                    <h1>be your brother's keeper</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa
                        quasi unde nobis nam ratione! Aspernatur
                        nesciunt porro sint veritatis nulla est rem natus maiores suscipit.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section -->
    <footer>
        <div class="foot1">  
            <h2>contact me</h2>
            <li > <a href="#" class="foot-1-links"> @emmanula/twitter.com</a></li>
            <li > <a href="#"  class="foot-1-links">www.google.com</a></li>
            <li ><a href="#"  class="foot-1-links">+234 7042244539</a></li>
        </div>
       
        <!-- second division  -->
        <div class="foot1">
            <h2>useful links</h2>
            <ul class="foot-list">
                <li>
                    <a href="#">home</a>
                </li>
                <li>
                    <a href="#">about</a>
                </li>
                <li>
                    <a href="#">blog</a>
                </li>
                <li>
                    <a href="#">contact</a>
                </li>
            </ul>
            <div class="social-media-handle">
                <img src="../images/black fb.png" alt="" class="social-icon">
                <img src="../images/black insta.png" alt="" class="social-icon">
                <img src="../images/black mail.png" alt="" class="social-icon">
                <img src="../images/black twitter.png" alt="" class="social-icon">
                <img src="../images/black whatsapp.png" alt="" class="social-icon">
            </div>
        </div>
        <!-- 3rd division  -->

        <div class="foot1">
            <p>
            <h2>newsletter</h2>
               <p> Consequuntur neque excepturi debitis hic quasi labore amet
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, deserunt.
            </p>
            <form action="" class="footer-form">
                <input type="email" name="" id="" placeholder="enter your email" class="input">
                <button class="learn-more-btn"> submit
                </button>
            </form>
        </div>
        <script src="../js files/main.js"></script>
    </body>
</html>