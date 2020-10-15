<!DOCTYPE html>
<html lang="en">

<head>
    <title> Contact </title>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="none">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="An award winning photographer best known for my work on social media.  With a focus on unique, architectural and portrait photography.">
    <meta name="keywords" content="Photography, Portfolio, Gowsi Masi, Videography, Photo, Video">
    <meta name="copyright" content="Gowsi Masi">
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Gowsi Masi">
    <meta property="og:description" content="An award winning photographer best known for my work on social media.  With a focus on unique, architectural and portrait photography.">
    <meta property="og:image" content="resources/main/images/og_image.jpg">
    <meta property="og:site_name" content="gowsimasi">
    <meta property="og:url" content="https://www.gowsimasi.com">
    <!-- Apple Meta Tags -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="format-detection" content="telephone=no">
    <!--  Twitter Meta Tags -->
    <meta name="twitter:title" content="Gowsi Masi">
    <meta name="twitter:description" content="An award winning photographer best known for my work on social media.  With a focus on unique, architectural and portrait photography.">
    <meta name="twitter:image" content="resources/main/images/og_image.jpg">
    <meta name="twitter:card" content="resources/main/images/og_image.jpg">
    <meta name="twitter:site" content="@gxwsi">
    <!-- Link Tags -->
    <link rel="stylesheet" type="text/css" href="resources/main/css/main.css">
    <link rel="stylesheet" type="text/css" href="resources/plugins/fancybox/jquery.fancybox.min.css">
    <link rel="canonical" href="https://www.gowsimasi.com">
    <!-- Icon Link Tags -->
    <link rel="shortcut icon" href="resources/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="resources/icon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="resources/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/icon/favicon-16x16.png">
    <link rel="manifest" href="resources/icon/site.webmanifest">
    <!-- Script Tags -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <div class="navbar">
        <div class="logo-container">
            <h1>Gowsi Masi</h1>
        </div>

        <div class="open-btn">
            <span></span>
            <span></span>
        </div>

        <div class="nav-responsive">
            <ul>
                <li><a href="index">Home</a></li>
                <li><a href="works">Works</a></li>
                <li><a href="elitesnaps">Elitesnaps</a></li>
                <li><a href="contact" class="active-visible">Contact</a></li>
            </ul>
        </div>
    </div>

    <div class="contact-modal">
        <div class="modal-content">
            <div class="header">
                <h1>Contact</h1>

                <a class="close-btn" href="#">
                    <img src="resources/svg/close.svg" alt="">
                </a>
            </div>

            <form action="" method="post">
                <div class="input-con">
                    <p>Name *</p>
                    <div class="group-input">
                        <input type="text" class="first-in" name="firstName" required>
                        <input type="text" name="lastName" required>
                    </div>
                </div>

                <div class="input-con">
                    <p>Email *</p>
                    <div class="group-input">
                        <input type="email" name="email" required>
                    </div>
                </div>

                <div class="input-con">
                    <p>Subject *</p>
                    <div class="group-input">
                        <input type="text" name="subject" required>
                    </div>
                </div>

                <div class="input-con">
                    <p>Message *</p>
                    <div class="group-input">
                        <textarea name="message" cols="30" rows="10" required></textarea>
                    </div>
                </div>

                <div class="g-recaptcha" data-sitekey="6LcyTagZAAAAAC77pe0wdYjdknhPNoCHFgL9mAcC"></div>
                <div class="input-con">
                    <div class="group-input center">
                        <input type="submit" name="submitBtn" value="Submit">
                    </div>
                </div>
            </form>

        </div>
    </div>

    <section class="contact-container">
        <div class="contact-content">
            <div class="contact-col">
                <h1>About Me</h1>
                <p>An award winning photographer best known for my work on social media. With a focus of unique, architectural, travel and portrait photography. My desire to push creative boundaries and an appreciation for fashion has led to me being commissioned to work with brands such as Lynx, Daniel Wellington, Puma, Sudio and others.
                    <br><br>
                    Further expanding my skills, knowledge and passion, I have my own photography and cinematography company, EliteSnaps & EliteWeddings. From covering all events such as weddings, birthdays, university events and much more.
                    <br><br>
                    To check out more of my work please check the links below. To contact me please check the information on the right.</p>
                <a href="#contact-modal" class="btn-modal">Get in touch</a>
            </div>
            <div class="contact-col">
                <div class="right-col">
                    <li>
                        <p>Contact Me</p>
                        <p><b>hi@gowsimasi.com</b></p>
                    </li>
                    <li>
                        <p>Event Contact</p>
                        <p><b>bookings@elitesnaps.co.uk</b></p>
                    </li>
                    <li>
                        <div class="icon">
                            <a href="https://www.instagram.com/elitesnapsuk" target="_blank">
                                <img src="resources/svg/instagram.svg" alt="">
                            </a>

                            <a href="https://twitter.com/elitesnapsuk" target="_blank">
                                <img src="resources/svg/twitter.svg" alt="">
                            </a>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>

    <div class="subscribe-container">
        <div class="subscribe-content" id="subscribe-form">
            <?php

            $data = [
                $_POST['emailSub'],
                $_POST['btnSub']
            ];

            $class->subscribe($data);
            ?>
            <h1>WANT TO BE UPDATED?</h1>
            <div class="form-container-sub">
                <p>Subscribe for updates, events and more!</p>
                <form action="#subscribe-form" method="POST">
                    <input type="email" name="emailSub" placeholder="Email Address" maxlength="35">
                    <button type="submit" name="btnSub">Subscribe</button>
                </form>
                <?php echo $class->msg; ?>
            </div>
        </div>
    </div>

    <div class="footer-container">
        <div class="footer-row">
            <div class="col-3">
                <h2>Contact</h2>
                <div class="col-3-content">
                    <p>
                        <a href="">hi@gowsimasi.com</a>
                    </p>
                </div>
            </div>
            <div class="col-3">
                <h2>Socials</h2>
                <div class="col-3-content">
                    <div class="icon">
                        <a href="https://www.instagram.com/elitesnapsuk" target="_blank">
                            <img src="resources/svg/instagram.svg" alt="">
                        </a>
                        <a href="https://elitesnaps.co.uk/" target="_blank" title="EliteSnaps Website">
                            <img src="resources/svg/elitesnaps.svg" class="small-icon" alt="">
                        </a>
                        <a href="https://twitter.com/elitesnapsuk" target="_blank">
                            <img src="resources/svg/twitter.svg" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-3">
                <h2>Linkedin</h2>
                <div class="col-3-content">
                    <div class="icon">
                        <a href="https://www.linkedin.com/in/gowsi-masi-a22b3b100/" target="_blank">
                            <img src="resources/svg/linkedin.svg" alt=""><span class="icon-link">gowsimasi</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const btnModal = document.querySelector('.btn-modal');
        const btnClose = document.querySelector('.close-btn');
        const modal = document.querySelector('.contact-modal');
        btnModal.addEventListener('click', () => {
            modal.style.visibility = 'visible';
        })

        btnClose.addEventListener('click', () => {
            modal.style.visibility = 'hidden';
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="resources/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="resources/main/js/animate-header.js"></script>
    <script src="resources/main/js/nav-bar.js"></script>
    <script src="resources/main/js/nav-visible.js"></script>
</body>

</html>