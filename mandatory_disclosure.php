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
    <style>
        table, th, td {
          border:1px solid black;
        }
        table{
            width: 90%;
            text-align: center;
            font-size: 25px;
        }
        tr{
            width: 10px;
            width: 100px;
            height: 50px;
        }
        th{
            background-color: darkturquoise;
        }
        .mandatory{
            margin-left: 8%;
            
        }
        table tr td a{
            padding: 50px;
            text-decoration: none;
            color:blue;
        }
        table tr td{
            background-color: rgb(246, 244, 244);
            color:rgb(82, 81, 81);
        }
        table tr th{
            color: white;
        }
        .mandatory li{
          font-size: 25px;
          margin: 1%  0;
          text-decoration: underline ;
          font-weight: bold;
        }
        </style>
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
        <a href="index.php">HOME</a>
    
        <div class="dropdown">
            <button class="dropbtn">OUR SCHOOL
                ▼
            </button>
            <div class="dropdown-content">
                <a href="about.php">About School</a>
                <a href="statement&philosphy.php">Statement & Philosophy</a>
                <a href="leadershipteam.php">Our Leadership Team</a>
                <a href="#">The Advisory Board</a>
                <a href="cbse_guidelines_philoshpy.php">CBSE Guideline And Philosophy </a>
                <a href="sports_academy.php">Sports Academy</a>
                <a href="mandatory_disclosure.php">Mandatory Disclosures</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">ADMISSION
                ▼
            </button>
            <div class="dropdown-content">
                <a href="admission_process.php">Admission Process</a>
                <a href="#">Online Registration</a>
                <a href="#">Payments</a>
                <a href="schooltransport.php">School Transport</a>
                <a href="entrancetestsyllabus.php">Entrance Test Syllabus
                    2024-2025
                </a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">OUR CAMPUS
                ▼
            </button>
            <div class="dropdown-content">
                <a href="overview.php">Overview</a>
                <a href="infrastructure.php">Infrastructure</a>
                <a href="facilities.php">Facilities</a>
                <a href="photo_gallery.php">Photo Gallery</a>
                <a href="virtual_video_tour.php">Virtual Tour</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">OUR CURRICULUM
                ▼
            </button>
            <div class="dropdown-content">
                <a href="curriculam-and-assessment.php">Curriculum And Assessment</a>
                <a href="bestacadimicpractices.php">Academic Practice</a>
                <a href="academic-calendar.php">Academic Calendar</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">FOR PARENTS
                ▼
            </button>
            <div class="dropdown-content">
                <a href="student-activities.php">Students Activities</a>
                <a href="guidelines-and-policies.php">Guidelines And Policies</a>
                <a href="health-and-medicine.php">Health Guideline And Policy</a>
                <a href="feedback.php">Feedback</a>
                <a href="curriculam-and-assessment.php">Circulars</a>

            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">FOR STUDENT
                ▼
            </button>
            <div class="dropdown-content">
                <a href="#">Student Council</a>
                <a href="student-responsibility-and-rights.php">Responsibilities And Rights</a>
                <a href="student_rules_and_policies.php">Rules And Policies</a>
                <a href="#">Disipline Incharges</a>
                <a href="#">TC Issued</a>

            </div>
        </div>
        <a class="dropbtn_anchor" href="#">BLOG</a>

        <a class="dropbtn_anchor" href="contact.php">CONTACT</a>



    </div>

</header>





  <div class="cbse_guideline" >
        <p>
            MANDATORY DISCLOSURES
        </p>
    </div>
    <div class="mandatory">
        <li style="list-style: upper-latin;"> GENERAL INFORMATION:- </li>
        <table>
            <tr>
              <th>S.NO.</th>
              <th>INFORMATION</th>
              <th>DETAILS</th>
            </tr>
            <tr>
              <td>1</td>
              <td>NAME OF THE SCHOOL</td>
              <td>BIHAR PUBLIC SCHOOL</td>
            </tr>
            <tr>
              <td>2</td>
              <td>AFFILIATION NUMBER </td>
              <td>123456</td>
            </tr>
            <tr>
                <td>3</td>
                <td>SCHOOL CODE </td>
                <td>123456</td>
              </tr>
              <tr>
                <td>4</td>
                <td>COMPLETE ADDRESS WITH PIN CODE</td>
                <td>9TH MILE STONE, BAMRAULI KATARA, FATEHABAD ROAD, AGRA - 282 006</td>
              </tr>
              <tr>
                <td>5</td>
                <td>PRINCIPAL NAME & QUALIFICATION </td>
                <td>RINA SINHA</td>
              </tr>
              <tr>
                <td>6</td>
                <td>SCHOOL EMAIL ID </td>
                <td>rk5227393@gmail.com</td>
              </tr>
              <tr>
                <td>7</td>
                <td>CONTACT DETAIL</td>
                <td>+91 9939184712</td>
              </tr>
              
          </table>
       
    </div>

    <div class="mandatory":->
        <li style="list-style: upper-latin;"> DOCUMENT/INFORMATION:- </li>
        <table>
            <tr>
              <th>S.NO.</th>
              <th >DOCUMENT/INFORMATION</th>
              <th>VIEW DOCUMENT</th>
             
            </tr>
            <tr>
              <td>1</td>
              <td>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY</td>
              <td><a href="#">View</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE </td>
              <td><a href="#">View</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT </td>
                <td><a href="#">View</a></td>
              </tr>
              <tr>
                <td>4</td>
                <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009, AND IT’S RENEWAL IF APPLICABLE</td>
                <td><a href="#">View</a></td>
              </tr>
              <tr>
                <td>5</td>
                <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE </td>
                <td><a href="#">View</a></td>

              </tr>
              <tr>
                <td>6</td>
                <td>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY </td>
                <td><a href="#">View</a></td>
              </tr>
              <tr>
                <td>7</td>
                <td>COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATIONOR SELF CERTIFICATION BY SCHOOL</td>
                <td><a href="#">View</a></td>
              </tr>
              <tr>
                <td>8</td>
                <td>COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES</td>
                <td><a href="#">View</a></td>
              </tr>
              
          </table>
       
    </div>

    <div class="mandatory":->
        <li style="list-style: upper-latin;"> RESULT AND ACADEMICS:- </li>
        <table>
            <tr>
              <th>S.NO.</th>
              <th >DOCUMENT/INFORMATION</th>
              <th> VIEW DOCUMENT </th>
             
            </tr>
            <tr>
              <td>1</td>
              <td>FEE STRUCTURE OF THE SCHOOL</td>
              <td><a href="#">View</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>ANNUAL ACADEMIC CALENDAR </td>
              <td><a href="#">View</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>LIST OF PARENT-TEACHER ASSOCIATION MEMBERS</td>
                <td><a href="#">View</a></td>
              </tr>
              <tr>
                <td>4</td>
                <td>LIST OF THREE-YEARS RESULT OF THE BOARD EXAMINATION AS PER APPLICABLILITY</td>
                <td><a href="#">View</a></td>
              </tr>
   
          </table>
       
    </div>

    <div class="mandatory">
        <li style="list-style: upper-latin;"> STAFF(TEACHING):-</li>
        <table>
            <tr>
              <th>S.NO.</th>
              <th >INFORMATION</th>
              <th> VIEW DOCUMENT </th>
             
            </tr>
            <tr>
              <td>1</td>
              <td>DETAILS OF TEACHING STAFF</td>
              <td><a href="#">View</a></td>
            </tr>
            
   
          </table>
       
    </div>

    <div class="mandatory" style="margin-bottom: 2%;">
        <li style="list-style: upper-latin;"> RESULT AND ACADEMICS :- </li>
        <table>
            <tr>
              <th>S.NO.</th>
              <th >INFORMATION</th>
              <th> VIEW DOCUMENT </th>
             
            </tr>
            <tr>
              <td>1</td>
              <td>TOTAL CAMPUS AREA OF THE SCHOOL(IN SQUARE MTR)</td>
              <td>5000</td>
            </tr>
            <tr>
              <td>2</td>
              <td>NO. AND SIZE OF THE CLASS ROOM </td>
              <td>100(25)</td>
            </tr>
            <tr>
                <td>3</td>
                <td>NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR)</td>
                <td>25(50-SQR)</td>
              </tr>
              <tr>
                <td>4</td>
                <td>INTERNET FACILITY(Y/N)</td>
                <td>Y</td>
              </tr>
              <tr>
                <td>5</td>
                <td>NUMBER OF TOILET</td>
                <td>8</td>
              </tr>
              <tr>
                <td>5</td>
                <td>LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</td>
                <td><a href="https://youtu.be/hVa2ldy1LrE?si=oe8--4EL4SlIUOh8"></a>VIEW</td>
                
              </tr>
   
          </table>
       
    </div>





























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