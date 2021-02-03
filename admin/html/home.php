<?php 
                    $connect = mysqli_connect("localhost","root","","akpandey");
                    session_start();
                    if(isset($_POST["appointment"]))
                    {
                        if(empty($_POST["name"]) && empty($_POST["email"]))
                        {
                            echo '<script>alert("All Field are required to filled")</script>';
                        }

                        else
                        {
                            $name=mysqli_real_escape_string($connect,$_POST["name"]);
                            $email=mysqli_real_escape_string($connect,$_POST["email"]);
                            $phone=mysqli_real_escape_string($connect,$_POST["phone"]);
                            $speciality=mysqli_real_escape_string($connect,$_POST["speciality"]);
                            $homeopathic=mysqli_real_escape_string($connect,$_POST["homeopathic"]);
                            $date=mysqli_real_escape_string($connect,$_POST["date"]);

                            $query="INSERT INTO appointments (name,email,phone,specaility,homeopathic,date) VALUES('$name','$email','$phone','$speciality','$homeopathic','$date')";
                            
                            if(mysqli_query($connect, $query))
                            {
                                echo'<script>alert("Appointment Book Successfully")</script>';
                            }
                        }
                    }
                ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>A.k Pandey</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A.k Pandya template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="icon" href="images/b.png" type="image" sizes="16x16">
</head>

<body>
    <div class="super_container">

        <header class="header trans_400">
            <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

                <div class="logo">
                    <a href="index.html">
                        <img src="images/large.png" alt="logo" width="150">

                    </a>
                </div>

                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="services.html">Skin & Hair Treatment</a>
          <a class="dropdown-item" href="services.html">Child Disease Treatment</a>
          <a class="dropdown-item" href="services.html">Female Disease Treatment</a>
          <a class="dropdown-item" href="services.html">Male Disease Treatment</a>
          <a class="dropdown-item" href="services.html">Other Disease Treatment</a>
        </div>
      </li>
      <li><a href="contact.html">Contact</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
     
                    </ul>
                </nav>
                <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

                    <div class="work_hours">Mo - Sat: 8:00am - 9:00pm</div>

                    <div class="header_phone">+34 586 778 8892</div>

                    <div class="button button_1 header_button"><a href="contact.html">Make an Appointment</a></div>

                    <div class="social header_social">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </header>

        <div class="menu_overlay trans_400"></div>
        <div class="menu trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <nav class="menu_nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="services.html">Skin & Hair Treatment</a>
          <a class="dropdown-item" href="services.html">Child Disease Treatment</a>
          <a class="dropdown-item" href="services.html">Female Disease Treatment</a>
          <a class="dropdown-item" href="services.html">Male Disease Treatment</a>
          <a class="dropdown-item" href="services.html">Other Disease Treatment</a>
        </div>
      </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_link">Mo - Sat: 8:00am - 9:00pm</div>
                <div class="menu_link">+34 586 778 8892</div>
                <div class="menu_link"><a href="contact.html">Make an appointment</a></div>
            </div>
            <div class="social menu_social">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="home">

            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">

                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/about.jpg)"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_content">
                                            <div class="home_subtitle">“Meditation is both the symbol and expression of our intention to grow."</div>
                                            <div class="home_title">Love the new you</div>
                                            <div class="home_text">
                                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                            </div>
                                            <div class="home_buttons d-flex flex-row align-items-center justify-content-start">
                                                <div class="button button_1 trans_200"><a href="#">read more</a></div>
                                                <div class="button button_2 trans_200"><a href="contact.html">make an appointment</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/contact.jpg); width:100%;"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_content">
                                            <div class="home_subtitle">“Meditation is both the symbol and expression of our intention to grow."</div>
                                            <div class="home_title">Love the new you</div>
                                            <div class="home_text">
                                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                            </div>
                                            <div class="home_buttons d-flex flex-row align-items-center justify-content-start">
                                                <div class="button button_1 trans_200"><a href="#">read more</a></div>
                                                <div class="button button_2 trans_200"><a href="contact.html">make an appointment</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/services.jpg)"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_content">
                                            <div class="home_subtitle">“Meditation is both the symbol and expression of our intention to grow."</div>
                                            <div class="home_title">Love the new you</div>
                                            <div class="home_text">
                                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                                            </div>
                                            <div class="home_buttons d-flex flex-row align-items-center justify-content-start">
                                                <div class="button button_1 trans_200"><a href="#">read more</a></div>
                                                <div class="button button_2 trans_200"><a href="contact.html">make an appointment</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home_slider_dots">
                    <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
                        <li class="home_slider_custom_dot trans_200 active"></li>
                        <li class="home_slider_custom_dot trans_200"></li>
                        <li class="home_slider_custom_dot trans_200"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="intro">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 intro_col">
                        <div class="intro_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">This is A.k Pandya</div>
                                <div class="section_title">
                                    <h2>Welcome to our Clinic</h2>
                                </div>
                            </div>
                            <div class="intro_text">
                                <p><b>Homeopathy</b> is natural, efficient, logical, completely safe way to cure any diseases. Homeopathy medicines play a vital role to cure any disease permanently from its roots. Homeopathy is the very simple and efficient way to treats the patient by stimulating the immune system of the patient. Homeopathic medicines are potentized medicines that are enough to stimulate the immune system to fight the diseased condition without leaving any side effect. 
Homeopathy works well on complete case taking of patient also need totality of symptoms. Homeopathic medicines work well on all age groups, especially infants, children, and elderlies. Prepared by the process of potentisation, which eliminates the toxic effect of the crude drug, homeopathic medicines do not leave any side effects.
Homeopathic doctor considers the treatment of patient not of the disease, homeopathy says that the reason behind every illness is the imbalance in the vital force, which is caused by the noxious effect of different types of viruses, bacteria’s, etc. This balance of vital force keeps the body in a healthy state, which helps an individual to enjoy every sphere of life.
</p>
                            </div>
                            <div class="milestones">
                                <div class="row milestones_row">

                                    <div class="col-md-4 milestone_col">
                                        <div class="milestone">
                                            <div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
                                            <div class="milestone_text">Satisfied Patients</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 milestone_col">
                                        <div class="milestone">
                                            <div class="milestone_counter" data-end-value="352">0</div>
                                            <div class="milestone_text">Face Liftings</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 milestone_col">
                                        <div class="milestone">
                                            <div class="milestone_counter" data-end-value="718">0</div>
                                            <div class="milestone_text">Injectibles</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6 intro_col">
                        <div class="intro_form_container">
                            <div class="intro_form_title">Make an Appointment</div>
                            <form action="html/home.php" class="intro_form" id="intro_form" method="post">
                                <div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
                                    <input type="text" id="name" class="intro_input" placeholder="Your Name" name="name" required>
                                    <input type="email" id="email" class="intro_input" placeholder="Your E-mail" name="email" required>
                                    <input type="tel" id="phone" class="intro_input" placeholder="Your Phone" name="phone" required>
                                    <select class="intro_select intro_input" id="speciality" name="speciality" required>
<option disabled="" selected="" value="">Speciality</option>
<option>Speciality 1</option>
<option>Speciality 2</option>
<option>Speciality 3</option>
<option>Speciality 4</option>
<option>Speciality 5</option>
</select>
                                    <select class="intro_select intro_input" id="homeopathic" name="homeopathic" required>
<option disabled="" selected="" value="">Homeopathic</option>
<option>Homeopathic 1</option>
<option>Homeopathic 2</option>
<option>Homeopathic 3</option>
<option>Homeopathic 4</option>
<option>Homeopathic 5</option>
</select>
                                    <input type="text"  id="date" class="intro_input datepicker" placeholder="Date" name="date" required>
                                </div>
                                <button type="submit"class="button button_1 intro_button trans_200" name="appointment" >make an appointment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="why">

            <div class="container">

                <div class="section_title_container">
                                <div class="section_subtitle">This is A.k Pandya</div>
                                <div class="section_title">
                                    <h2>Why choose us?</h2>
                                </div>
                            </div>
                            <div class="why_text">
                                <p>Homeopathic doctor considers the treatment of patient not of the disease, homeopathy says that the reason behind every illness is the imbalance in the vital force, which is caused by the noxious effect of different types of viruses, bacteria’s, etc. This balance of vital force keeps the body in a healthy state, which helps an individual to enjoy every sphere of life.
                                </p>
                            </div>
                <div class="row row-eq-height">

                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="why_image_container">
                            <div class="why_image"><img src="images/why_1.jpg" alt="" style="width: 100%; padding-bottom: 25%;"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="why_content">
                            <div class="section_title_container">
                                
                            <div class="why_list">
                                <ul>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Homeopathy: an effective treatment</div>
                                        </div>
                                    </li>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Surgery Avoidance & Cost Effective</div>
                                        </div>
                                    </li>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Use in Epidemic Diseases</div>
                                        </div>
                                    </li>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Improves Body Resistance & Immunity</div>
                                        </div>
                                    </li>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Treats Chronic Diseases</div>
                                            
                                        </div>
                                    </li>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Homeopathy is Safe
</div>
                                            
                                        </div>
                                    </li>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Homeopathy is Effective and Fast Acting</div>
                                            
                                        </div>
                                    </li>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Homeopathy is a Scientific and Natural Medicine</div>
                                            
                                        </div>
                                    </li>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">Homeopathy for All Life's Stages</div>
                                            
                                        </div>
                                    </li>

                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="icon_container d-flex flex-column align-items-center justify-content-center">
                                            <div class="icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                        </div>
                                        <div class="why_list_content">
                                            <div class="why_list_title">No Side Effects</div>
                                            
                                        </div>
                                    </li>






                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title_container">
                            <div class="section_subtitle">This is Dr. AK Pandey</div>
                            <div class="section_title">
                                <h2>Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row services_row">

                    <div class="col-xl-4 col-md-6 service_col">
                        <div class="service text-center">
                            <a href="details.html">
                                <div class="service">
                                    <div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
                                        <div class="icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                    </div>
                                    <div class="service_title">Skin & Hair Treatment</div>
                                    <div class="service_text">
                                        <p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 service_col">
                        <div class="service text-center">
                            <a href="details.html">
                                <div class="service">
                                    <div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
                                        <div class="icon"><img src="images/icon_5.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                    </div>
                                    <div class="service_title">Child Disease Treatment</div>
                                    <div class="service_text">
                                        <p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 service_col">
                        <div class="service text-center">
                            <div class="service">
                                <a href="details.html">
                                    <div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
                                        <div class="icon"><img src="images/icon_6.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                    </div>
                                    <div class="service_title">Male Disease Treatment</div>
                                    <div class="service_text">
                                        <p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 service_col">
                        <div class="service text-center">
                            <div class="service">
                                <a href="details.html">
                                    <div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
                                        <div class="icon"><img src="images/icon_7.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                    </div>
                                    <div class="service_title">Female Disease Treatment</div>
                                    <div class="service_text">
                                        <p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 service_col">
                        <div class="service text-center">
                            <div class="service">
                                <a href="details.html">
                                    <div class="icon_container d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
                                        <div class="icon"><img src="images/icon_8.svg" alt="https://www.flaticon.com/authors/prosymbols"></div>
                                    </div>
                                    <div class="service_title">Other Disease Treatment</div>
                                    <div class="service_text">
                                        <p>Odio ultrices ut. Etiam ac erat ut enim maximus accumsan vel ac nisl. Duis feugiat bibendum orci, non elementum urna.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="extra">
            <div class="parallax_background parallax-window" style="background-image:url(images/extra.jpg); width:100%;"  data-parallax="scroll" data-speed="0.8" ></div>
            <div data-image-src="images/extra.jpg" class="parallax_background parallax-window"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="extra_container d-flex flex-row align-items-start justify-content-end">
                            <div class="extra_content">
                                <div class="extra_disc d-flex flex-row align-items-end justify-content-start">
                                    <div>30<span>%</span></div>
                                    <div>Discount</div>
                                </div>
                                <div class="extra_title">Only in August</div>
                                <div class="extra_text">
                                    <p>Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci elementum eleifend tempor, nunc libero porttitor tellus.</p>
                                </div>
                                <div class="button button_1 extra_link trans_200"><a href="#">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cta">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cta_container d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <div class="cta_content">
                                <div class="cta_title">Make your appointment today!</div>
                                <div class="cta_text">Etiam ac erat ut enim maximus accumsan vel ac nisl</div>
                            </div>
                            <div class="cta_phone ml-lg-auto">+34 586 778 8892</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsletter">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="newsletter_title">Subscribe to our newsletter</div>
                    </div>
                </div>
                <div class="row newsletter_row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="newsletter_form_container">
                            <form action="#" id="newsleter_form" class="newsletter_form">
                                <input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
                                <button class="newsletter_button">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 footer_col">
                            <div class="footer_about">
                                <div class="footer_logo">
                                    <a href="#">
                                        <div>
                                            <a href="index.html">
                                                <img src="images/large.png" alt="logo" width="150">

                                            </a>
                                        </div>
                                        <div> Disease Treatment</div>
                                    </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Nulla facilisi. Nulla egestas vel lacus sed interdum. Sed mollis, orci eleme ntum eleifend tempor, nunc libero porttitor tellus.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">Contact Info</div>
                                <ul class="contact_list">
                                    <li>+91 8354808215</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 footer_col">
                            <div class="footer_location">
                                <div class="footer_title">Our Locations</div>
                                <ul class="locations_list">
                                    <li>
                                        <div class="location_title">1/160,vibhav khand </div>
                                        <div class="location_text">gomtinagar, Lucknow, 206010</div>
                                    </li>
                                    <li>
                                        <div class="location_title">Gomtinagar</div>
                                        <div class="location_text">Lucknow, 206010</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 footer_col">
                            <div class="opening_hours">
                                <div class="footer_title">Opening Hours</div>
                                <ul class="opening_hours_list">
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Monday:</div>
                                        <div class="ml-auto">8:00am - 9:00pm</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Thuesday:</div>
                                        <div class="ml-auto">8:00am - 9:00pm</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Wednesday:</div>
                                        <div class="ml-auto">8:00am - 9:00pm</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Thursday:</div>
                                        <div class="ml-auto">8:00am - 9:00pm</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Friday:</div>
                                        <div class="ml-auto">8:00am - 7:00pm</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
                                <div class="copyright">
                                    Copyright &copy;
                                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                    <script type="68ed49aa95a58c80cbae0012-text/javascript">
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank"> Dr. AK Pandey</a>
                                </div>
                                <nav class="footer_nav ml-md-auto">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery-3.2.1.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="styles/bootstrap-4.1.2/popper.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/greensock/TweenMax.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/greensock/TimelineMax.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/greensock/animation.gsap.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/easing/easing.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/parallax-js-master/parallax.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/jquery-datepicker/jquery-ui.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="js/custom.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script type="68ed49aa95a58c80cbae0012-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    
    	</script>
    	


    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="68ed49aa95a58c80cbae0012-|49" defer=""></script>
</body>

</html>