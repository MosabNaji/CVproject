<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../STYLE/style2.css">
    <title>CV Input</title>
    <?php
    function test_input($data): string
    {
        $data = trim($data);
        $data = stripcslashes($data);
        return htmlspecialchars($data);
    }

    $entered_name = "";
    $entered_age = "";
    $entered_email = "";
    $entered_phone = "";
    $entered_address = "";
    $error_message_for_name_field = "";

    if($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST)){
        $entered_name = test_input($_POST['name']);
        $entered_age = test_input($_POST['age']);
        $entered_email = test_input($_POST['email']);
        $entered_phone = test_input($_POST['phone']);
        $entered_address = test_input($_POST['address']);

        if(empty($entered_name)){
            $error_message_for_name_field = "This field is required!";
        }
        else {
            // no errors, redirect to process-form.php
            $url = "index.php?name=" . urlencode($entered_name) . "&age=" . urlencode($entered_age) . "&email=" . urlencode($entered_email) . "&phone=" . urlencode($entered_phone) . "&address=" . urlencode($entered_address);
            header("Location: $url");
            exit;
        }
    }
    ?>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <div>
            <label for="name">Enter Your Name: </label>
            <input id="name" type="text" name="name">
        </div>
        <span class="error"><?php echo $error_message_for_name_field; ?></span>
        <div>
            <label for="age">Enter Your Age: </label>
            <input id="age" type="number" name="age">
        </div>
        <div>
            <label for="email">Enter Your Email: </label>
            <input id="email" type="email" name="email">
        </div>
        <div>
            <label for="phone">Enter Your Phone: </label>
            <input id="phone" type="text" name="phone">
        </div>
        <div>
            <label for="address">Enter Your Address: </label>
            <input id="address" type="text" name="address">
        </div>
        <div class="submit-field">
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>