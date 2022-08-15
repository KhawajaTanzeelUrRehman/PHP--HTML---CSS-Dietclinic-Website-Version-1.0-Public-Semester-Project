<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Diet Clinic</title>
</head>


<body>
    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\navbar\navbar.php';
    $dg = "";
    $in = "";
    if (!empty($_REQUEST['dg'])) {
        $dg = $_REQUEST['dg'];
    }
    if (!empty($_REQUEST['in'])) {
        $in = $_REQUEST['in'];
    }
    if ($dg == "dg") {
    ?>
    <div class="alert alert-warning" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................Select the Designation in order to
            continue..............................................................
        </p>
    </div>
    <?php
    }
    if ($in == "invalid") {
    ?>
    <div class="alert alert-danger" role="alert">
        <p style="text-align: center; font-size: 18px;">
            ..............................................................INVALID
            CREDENTIALS..............................................................
        </p>
    </div>
    <?php
    }

    ?>


    <div id="container">
        <div class="container_login">

            <div>
                <h1 id="mylogo">Diet Clinic</h1>
            </div>
            <form id="login_credentials" action="logind.php" method="post">
                <div class="inputclass">
                    <label for="user_email" class="email"></label>
                    <input type="email" name="email" required="required" id="login_email" class="login_form">
                </div>

                <div>
                    <label for="user_password" class="password"></label>
                    <input type="password" name="password" required="required" id="login_password" class="login_form" />
                </div>
                <div class="login_form">
                    <select name="designation" id="des" onchange="changetextbox()">
                        <option value="designation">Designation</option>
                        <option value="client">Client</option>
                        <option value="admin">ADMIN</option>
                    </select>

                </div>
                <div>

                    <label for="login_check" class="log_butt"></label>
                    <input type="submit" id="login_button" value="Log In" class="login_form" />

                </div>

            </form>

        </div>

    </div>

    <?php
    include 'C:\xampp\htdocs\Database Semester Project\website\navbar\footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>