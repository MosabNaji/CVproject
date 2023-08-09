<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>My CV Website</title>
	<link rel="stylesheet" href="../STYLE/style.css">
    <?php
    $name = $_GET['name'] ?? "NOT SET";

    $age = $_GET['age'] ?? "NOT SET";

    $email = $_GET['email'] ?? "NOT SET";

    $phone = $_GET['phone'] ?? "NOT SET";

    $address = $_GET['address'] ?? "NOT SET";
    ?>
</head>
<body>
	<header>
		<h1>(Your Name)'s CV</h1>
		<nav>
			<ul>
				<li><a href="#personal-info">Personal Info</a></li>
				<li><a href="#education">Education</a></li>
				<li><a href="#work-experience">Work Experience</a></li>
				<li><a href="#skills">Skills</a></li>
				<li><a href="#projects">Projects</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<section id="personal-info">
        <div class="info-div">
            <?php
                echo "<h2>Personal Information</h2>";
                echo "<p>Name: $name</p>";
                echo "<p>Age: $age</p>";
                echo "<p>Email: <a href='mailto:$email'>$email</a></p>";
                echo "<p>Phone: $phone</p>";
                echo "<p>Address: $address</p>";
             ?>
        </div>
	</section>
</body>
</html>
