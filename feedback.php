<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header id="header">
        <div class="nav1">
            <div class="nav1_1">
                <a href="mailto:rk2557393@gmail.com">contact: rk5227393@gmail.com</a>
                <a href="tel:+917055004449" id="nav_contact_phone">9939184712</a>
            </div>
            <div class="nav1_2">
                <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fa-brands fa-youtube"></i></a>
                <a id="nav1_2_a_4" href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="nav1_3">
                <ul class="contact-list clearfix">

                    <li><a class="blink" href="#" style="text-align: center ; "><b><span
                                    style="color:#e7f608;font: size 50px;">Admissions Open</span></b> </a>&nbsp;<a
                            href="#" style="text-align: center; font: size 50px;">CBSE Affiliated </a></li>
                    <!-- target="_blank" is used to open link in another window target is used after href -->
                </ul>
            </div>
        </div>

        <div class="nav2 mainnav">
            <img src="tisa_logo.png" alt="BPS LOGO" id="logoimg">
            <a href="#">Pay School Fee</a>

        </div>

        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=919939184712&text=Hello" class="float" target="_blank">
                <img src="whatsapp.jpeg" alt="Whatsapp">
                <!-- <i class="fa-brands fa-whatsapp"></i> -->
        </div>
        <div class="nav3">
            <a href="index.html">HOME</a>
        
            <div class="dropdown">
                <button class="dropbtn">OUR SCHOOL
                    ▼
                </button>
                <div class="dropdown-content">
                    <a href="about.html">About School</a>
                    <a href="statement&philosphy.html">Statement & Philosophy</a>
                    <a href="leadershipteam.html">Our Leadership Team</a>
                    <a href="#">The Advisory Board</a>
                    <a href="cbse_guidelines_philoshpy.html">CBSE Guideline And Philosophy </a>
                    <a href="sports_academy.html">Sports Academy</a>
                    <a href="mandatory_disclosure.html">Mandatory Disclosures</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">ADMISSION
                    ▼
                </button>
                <div class="dropdown-content">
                    <a href="admission_process.html">Admission Process</a>
                    <a href="#">Online Registration</a>
                    <a href="#">Payments</a>
                    <a href="schooltransport.html">School Transport</a>
                    <a href="entrancetestsyllabus.html">Entrance Test Syllabus
                        2024-2025
                    </a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">OUR CAMPUS
                    ▼
                </button>
                <div class="dropdown-content">
                    <a href="overview.html">Overview</a>
                    <a href="infrastructure.html">Infrastructure</a>
                    <a href="facilities.html">Facilities</a>
                    <a href="photo_gallery.html">Photo Gallery</a>
                    <a href="virtual_video_tour.html">Virtual Tour</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">OUR CURRICULUM
                    ▼
                </button>
                <div class="dropdown-content">
                    <a href="curriculam-and-assessment.html">Curriculum And Assessment</a>
                    <a href="bestacadimicpractices.html">Academic Practice</a>
                    <a href="academic-calendar.html">Academic Calendar</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">FOR PARENTS
                    ▼
                </button>
                <div class="dropdown-content">
                    <a href="student-activities.html">Students Activities</a>
                    <a href="guidelines-and-policies.html">Guidelines And Policies</a>
                    <a href="health-and-medicine.html">Health Guideline And Policy</a>
                    <a href="feedback.html">Feedback</a>
                    <a href="curriculam-and-assessment.html">Circulars</a>

                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">FOR STUDENT
                    ▼
                </button>
                <div class="dropdown-content">
                    <a href="#">Student Council</a>
                    <a href="student-responsibility-and-rights.html">Responsibilities And Rights</a>
                    <a href="student_rules_and_policies.html">Rules And Policies</a>
                    <a href="#">Disipline Incharges</a>
                    <a href="#">TC Issued</a>

                </div>
            </div>
            <a class="dropbtn_anchor" href="#">BLOG</a>

            <a class="dropbtn_anchor" href="contact.html">CONTACT</a>



        </div>

    </header>
    <main>










    

        <div class="cbse_guideline">
            <p>
                FEEDBACK
            </p>
        </div>

       

        <div class="feedbackparentmain">

            <form action="https://formspree.io/f/xkndegdj" method="POST">
                <input type="text" class="feedback_form_input" id="yourname" name="yourname" placeholder="Your Name*" required> <br><br><br>
                <input type="email" class="feedback_form_input" name="email" id="email" placeholder="Email*" required><br><br><br><br>
                <input type="tel" class="feedback_form_input" name="mobile" id="mobile" placeholder="Mobile Number*" required><br><br><br><br>
                <input type="text" class="feedback_form_input" name="studentname" id="studentname" placeholder="Student Name*" required> <br><br><br><br>
                <input type="text" class="feedback_form_input" name="studentclass" id="studentclass" placeholder="Student Class*" required> <br><br><br><br>
                <div class="formsectiondiv">
                <label id="section_label" for="section">Choose Section</label>
                <select id="section" name="section">
                    <option value="sectionA">A</option>
                    <option value="sectionB">B</option>
                    <option value="sectionC">C</option>
                    <option value="sectionD">D</option>
                  </select> <br>
                </div> <br><br><br>
                  <!-- <textarea name="message" rows="10" cols="30"></textarea> -->
                   <textarea name="schoolwell" class="feedback_form_textarea" id="schoolwell" placeholder="What do you think the School does well ?"></textarea><br><br><br><br>
                   <textarea name="schoolimprove" class="feedback_form_textarea" id="schoolimprove" placeholder="What do you think the School could improve ?"></textarea><br><br><br><br>
                   <textarea name="providecomments" class="feedback_form_textarea" id="providecomments" placeholder="Please provide us with any comments you have on the feedback and marking of your child's work. Please include the name of the subject area(s) in any feedback ?"></textarea> <br><br><br><br>
                   <textarea name="othercomments" class="feedback_form_textarea" id="othercomments" placeholder="Do you have any other comments ?"></textarea> <br><br><br><br>
                  <input type="submit" value="Submit" id="feedback_submit">

            </form>
        </div>















    
</main>
    <footer id="footers">
        <div class="left_footer">
            <p id="left_footer_para_main_1" class="left_footer_para_main">CONTACT US:</p>

            <p id="left_footer_para_main_2" class="left_footer_para_main">VISIT US:</p>
            <p class="left_footer_para_detail">9th Mile Stone,Fathehabad Road,Agra (U.P),India 282006</p>

            <p id="left_footer_para_main_3" class="left_footer_para_main">MAIL TO:</p>
            <a class="left_footer_para_detail" id="left_footer_para_detail_anchor"
                href="mailto:rk5227393@gmail.com">rk5227393@gmail.com</a>

            <p id="left_footer_para_main_4" class="left_footer_para_main">CONTACT US:</p>
            <span id="left_footer_span">

                <a class="left_footer_para_detail footer_number" id="left_footer_para_detail_number_1"
                    href="tel:+919939184712">+919939184712</a>

                <p class="left_footer_para_detail footer_number" id="left_footer_para_detail_number_2">,</p>
                <a class="left_footer_para_detail footer_number" id="left_footer_para_detail_number_3"
                    href="tel:+919939184712">+919939184712</a>

            </span>
            <div class="social_icon">

                <a href="#" class="social_icon_footer"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="social_icon_footer"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="social_icon_footer"><i class="fa-brands fa-youtube"></i></a>
                <a href="#" class="social_icon_footer"><i class="fa-brands fa-linkedin"></i></a>

            </div>


        </div>
        <div class="right_footer">
            <!-- <iframe src=" <a href="https://api.whatsapp.com/send?phone=919939184712&text=Hello" class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.095929804437!2d84.8089452!3d25.3345618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d4f744cb935f7%3A0xb91709a78d616733!2sAkhand%20Jyoti%20Eye%20Hospital%2C%20Paliganj!5e0!3m2!1sen!2sin!4v1721411343932!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.095929804437!2d84.8089452!3d25.3345618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d4f744cb935f7%3A0xb91709a78d616733!2sAkhand%20Jyoti%20Eye%20Hospital%2C%20Paliganj!5e0!3m2!1sen!2sin!4v1721411343932!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
</body>

</html>