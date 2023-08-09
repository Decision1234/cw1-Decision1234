<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f257b9379.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>yatrimotorcycles Website</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <header class="header">
                    
                 
        <nav class="navbar">
            <div class="container">

                <h1 class="logo">Yatri</h1>
                <ul class="nav-items">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item"><a href="about.php">About</a></li>
                <li class="nav-item"><a href="Project-0.php">Project-0</a></li>
                <li class="nav-item"><a href="Project-1.php">Project-1</a></li>
                <li class="nav-item"><a href="contact.php">Contact</a></li>
                <li class="nav-item"><a href="login.php"> Login</a></li>
            </ul>
            </div>
        </nav>

        <div class="header-content">
            <a href="#explore" class="button-primary" id="explore-link">RESERVE NOW</a>

        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Smooth scroll animation
            $("#explore-link").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>

    <section class="showcase" id="explore">
        <div class="container">
            <div class="row row1">
                <div class="img-box">
                    <img src=".\img\Yatri-P1-Side-Styling.png" alt="Project-1">
                </div>
                <div class="text-box">
                    <h2>Project-1</h2>
                    <p>Project One is our first take on the commercial platform by 
                        bringing all the knowledge and experience from P-0 and pushing
                         ourselves to bring a relatively affordable electric motorcycle 
                         while still having compelling specs. While it is still far from
                          a true mass-market platform, it forms a solid foundation for the 
                          team to build on and create a game changer, P-2.</p>
                          <p><a href="login.php" class="button-secondary">More</a></p>
                </div>
            </div>
            <div class="row row2">
                <div class="img-box">
                    <img src=".\img\Project-Zero.png" alt="Project-0">
                </div>
                <div class="text-box">
                    <h2>Project-0</h2>
                    <p> Project Zero is the first iteration of our vision to reinvent urban 
                        mobility. Launched in 2019, the proof-of-concept showed the intention 
                        and direction of the company with its cutting-edge powertrain design, 
                        class-leading vehicle software and in-house development prowess. Market 
                        leading 230 km range, over-the-air software updates that keep refreshing 
                        the motorcycle over time, and performance-oriented specifications has truly 
                        defined Yatri motorcycles and helps raise the overall bar for the whole industry.</p>
                        <p><a href="login.php" class="button-secondary">More</a></p>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br> 
            <br>
            <br>
            <br>    
        </div>
       
        <section class="contact-form">
        <div class="container-contact">
            <div class="form-wrapper">
                <div class="company-address">
                    <i class="fas fa-map-marker-alt fa-3x" style="color: #05b8ff;"></i>
                    <p>ADDRESS:44616 Thirbam Sadak, Baluwatar Kathmandu, Nepal</p>
                    <i class="fas fa-map-marker-alt fa-3x" style="color: #05b8ff;"></i>
                    <p>ADDRESS:44600, Budanilkantha Kathmandu, Nepal</p>
                    <i class="fas fa-envelope fa-3x" style="color: #05b8ff;"></i>
                    <p>info@yatrimotorcycles.com</p>
                    <i class="fas fa-phone-square-alt fa-3x" style="color: #05b8ff;"></i>
                    <p> +977 (980) 187-7447</p>

                    <img src=".\img\images.jpg" alt="Company Image">
                </div>
                <form action="" class="form">
                    <h1>Contact Us</h1>
                      <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" name="" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="" id="message" required></textarea>
                    </div>
                    <button type="submit" class="form-btn">Submit</button>
                </form>
                <div class="col-sm-8">
                    <div class="map-responsive">
                       </div>
                    </p>
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3530.194092376108!2d85.36266917519654!3d27.77299312259364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1d8c6aafd8d9%3A0xfefe2648d451db4!2sYatri%20Motorcycles!5e0!3m2!1sen!2snp!4v1688628194199!5m2!1sen!2snp" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
            </div>
        </div>
    </section>

    

    <section class="features">
        <div class="container">
            </div>

        </div>
    </section>

    <footer class="footer">
        <div class="social-media-links">
            <i class="fab fa-facebook fa-4x"></i>
            <i class="fab fa-twitter fa-4x"></i>
            <i class="fab fa-instagram fa-4x"></i>
        </div>
        <p>Yatri &copy; 2023, All Rights Reserved</p>
    </footer>
</body>
</html>