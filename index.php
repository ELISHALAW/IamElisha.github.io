<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

</head>
<body>
    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's me</h3>
            <h1 class="content1">Law Seong Chun</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>I am a student with 2 years experience in university My course is Diploma in Information Technology</p>
            <div class="social-media">
                <a href="https://www.facebook.com/Seong-Law" target="_blank"><i class='bx bxl-facebook' target="_blank"></i></a>
                <a href="https://wa.me/01133903509" target="_blank"><i class='bx bxl-whatsapp' ></i></a>
                <a href="https://www.instagram.com/_everlastings" target="_blank"><i class='bx bxl-instagram' ></i></a>
                
            </div>
            
        </div>
        <div class="home-img">
            <img src="llw.jpg" alt="">
        </div>
    </section>
    <!-- About Section design -->
     <section class="about" id="about">
        <div class="about-img">
            <img src="llw.jpg" alt="">
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Front-End Developer</h3>
            <p>I provide Front-End Development services specializing in Vue.js, HTML, CSS, and JavaScript to create dynamic 
                and responsive web applications. With expertise in modern web technologies, I build user-friendly interfaces that
                 enhance user experience and ensure compatibility across various devices and browsers. My services include designing 
                 intuitive layouts, optimizing performance, and implementing interactive features to deliver high-quality web solutions
                  tailored to your needs.</p>
        </div>
    </section>

        <!-- Services section design -->
         <section class="services" id="services">
            <h2 class="heading">My <span>Services</span></h2>
            <div class="services-container">
                <div class="services-box">
                    <i class='bx bxl-html5'></i>
                    <h3>Front-End Development</h3>
                    <p>
                       I specialize in Front-End Development using Vue.js, HTML, CSS, and JavaScript to create responsive, user-friendly web applications.
                    </p>
                    <a href="https://en.wikipedia.org/wiki/Front-end_web_development" target="_blank" class="btn">Read More</a>
                </div>
                <div class="services-box">
                    <i class='bx bxl-php' ></i>
                    <h3>Back-End Development</h3>
                    <p>
                        I specialize in Back-End Development using PHP and Java Database management to create robust, efficient server-side applications.
                    </p>
                    <a href="https://en.wikipedia.org/wiki/Back_end" target="_blank"  class="btn">Read More</a>
                </div>
                <div class="services-box">
                    <i class='bx bx-cloud' ></i>
                    <h3>Cloud Development</h3>
                    <p>
                        I specialize in Cloud Development with RDS, EC2, VPC, and WordPress, designing and managing scalable, secure cloud applications for optimal performance
                    </p>
                    <a href="https://en.wikipedia.org/wiki/Cloud_computing" target="_blank"  class="btn">Read More</a>
                </div>
            </div>
         </section>
         <!-- Portfolio Section Design -->
          <section class="portfolio" id="portfolio">
            <h2 class="heading">Latest <span>Project</span></h2>
            <div class="portfolio-container">
                <div class="portfolio-box">
                    <img src="fronted.jpg" alt="" >
                    <div class="portfolio-layer">
                        <h4>Web Design(Front-End)</h4>
                        <p>I am doing website design, creating visually appealing, user-friendly layouts.</p>
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="luca.jpg" alt="" >
                    <div class="portfolio-layer">
                        <h4>Web Design(Back-End)</h4>
                        <p>I develop backend systems ensuring reliability, efficiency, and scalability.</p>
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="iya.jpg" alt="" >
                    <div class="portfolio-layer">
                        <h4>Java Programming</h4>
                        <p>I develop reliable, efficient backend systems using Java programming.</p>
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="chris.jpg" alt="" >
                    <div class="portfolio-layer">
                        <h4>C language</h4>
                        <p>I program in C, creating efficient and reliable software solutions.</p>
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="sander.jpg" alt="" >
                    <div class="portfolio-layer">
                        <h4>Network Engineer</h4>   
                        <p>I use Cisco Packet Tracer for network design and simulation.</p>
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="portfolio-box">
                    <img src="cloudd.jpg" alt="" >
                    <div class="portfolio-layer">
                        <h4>Cloud</h4>
                        <p>I develop and manage scalable cloud solutions for various applications.</p>
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
            </div>
          </section>

          <section class="contact" id="contact">
            <h2 class="heading">Contact <span>Me!</span></h2>

            <form action="send.php" method="post">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="email" name="Clientemail" placeholder="Your Email Address">
                </div>
                <div class="input-box">
                    <input type="number" name="number" placeholder="Mobile Number">
                    <input type="text" name="subject" placeholder="Subjective">
                </div>
                <textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                <input type="submit" value="Send Message" name="send" class="btn">
            </form>

            <!-- <form action="send.php" method="post">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="email" name="Clientemail" placeholder="Email Address">
                </div>
                <div class="input-box">
                    <input type="number" name="number" placeholder="Mobile Number">
                    <input type="email" name="email" placeholder="Email Subject">
                </div>

                <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <input type="submit" value="Send Message" name="send" class="btn">
            </form> -->
          </section>
          <footer class="footer">
            <div class="footer-text">
                <p>Copyright &copy; 2023 by Codehal | All Rights Reserved.</p>
            </div>
            <div class="footer-iconTop">
                <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
            </div>
          </footer>
          <script src="https://unpkg.com/scrollreveal"></script>
          <script src="script.js"></script>
</body>
</html>