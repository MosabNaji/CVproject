
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="MyStyle.css">
</head>

<body>
    <!-- start header -->
    <header>
        <div class="container-1">
            <nav>
                <ul>
                    <li> <a class="active" href="Home.html">Personal Information</a></li>
                    <li> <a href="ViewCourses.html">Courses Information</a></li>
                    <li> <a href="ViewExperience.html"> Experiences Information</a> </li>
                    <li> <a href="AddCourse.html">Add Course</a></li>
                    <li> <a href="AddExperience.html">Add Experience</a></li>
                </ul>
            </nav>
            <div class="logo"><img src="Images/Azhar_WHITE_LOGO.png" alt="Azhar University"> </div>
        </div>
    </header>
    <!-- End header -->
    <div class="container-2">
        <b class="big-big">Personal Information</b>
    </div>
    <section id="Content-1">
        <div class="container-2">
            <div class="left-side">

                <div class="left-sup">
                    <p>Full name:</p>
                    <p>Gender:</p>
                    <p>Birth Date:</p>
                    <p>Nationality:</p>
                    <p>Place of Birth:</p>
                    <p>Jop title:</p>
                    <p>Year of experience:</p>
                </div>

                <?php
    $connection = new mysqli("localhost","root","","school");
    $stmt = $connection->prepare("select * from student_info");
    $stmt->execute();
    $result = $stmt->get_result();

                echo "<div class='right-sup'>";
                   echo " <p><strong>Mosab Osama Naji</strong></p>";
                   echo "<p><strong>Male</strong></p>";
                   echo "<p><strong>3 <sup>rd</sup> May 2002</strong></p>";
                   echo "<p><strong>Palestinian</strong></p>";
                   echo"<p><strong>Gaza</strong></p>";
                   echo "<p><strong>1.5 Years</strong></p>";
                "</div>" 
                ?>
            </div>
            <div class="right-side">
                <img src="Images/personal.jpg" alt="personal img">
            </div>
        </div>

    </section>
</body>

</html>