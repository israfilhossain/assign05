<?php

require_once "core.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $person->setName($_POST['name']);
    $person->setEmail($_POST['email']);
    $name = $person->getName();
    $email = $person->getEmail();
} else {
    $name = "";
    $email = "";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign 05</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>

    <section>
        <!-- HTML Basics -->
        <div class="wrapper">
            <h2 class="question-title">HTML Basics</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div>
                    <label for="name">Full Name</label><br>
                    <input type="text" name="name" required>
                </div>
                <div>
                    <label for="email">Email Address</label><br>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>


        <!-- Basic OOP in PHP -->
        <div class="wrapper">
            <h2>Basic OOP in PHP</h2>
            <p>Name: <?php echo $personName; ?></p>
            <p>Email: <?php echo $personEmail; ?></p>
        </div>


        <!-- Superglobal Variables in PHP -->
        <div class="wrapper">
            <h2>Superglobal Variables in PHP</h2>
            <p>Name: <?php echo $name; ?></p>
            <p>Email: <?php echo $email; ?></p>
        </div>
    </section>
</body>

</html>