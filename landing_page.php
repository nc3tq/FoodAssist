<head>
    <html lang="en">
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='style.css' rel='stylesheet'>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Lato:400,700');

    *,
    *:before,
    *:after {
        -webkit-box-sizing: inherit;
        -moz-box-sizing: inherit;
        box-sizing: inherit;
    }

    ::-webkit-input-placeholder {
        color: #696969;
    }

    ::-moz-placeholder {
        color: #696969;
    }

    :-moz-placeholder {
        color: #696969
    }

    html {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }


    body {
        font-family: 'Lato', sans-serif;
        margin: 0;
        background: url('shop.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        color: #696969;
        overflow: hidden;
        opacity: 1;
    }

    ul,
    nav {
        list-style: none;
        padding: 0;
    }

    a {
        color: #696969;
        text-decoration: none;
        cursor: pointer;
        opacity: 1;
    }

    a:hover {
        opacity: 1;
    }

    h1 {
        font-size: 3rem;
        font-weight: 700;
        color: white;
        margin: 0 0 1.5rem;
    }

    i {
        font-size: 1.3rem;
    }

    header {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #696969;
        padding: 10px 100px 0;
    }

    header nav ul {
        display: flex;
    }

    header nav li {
        margin: 0 15px;
    }

    header nav li:first-child {
        margin-left: 0;
    }

    header nav li:last-child {
        margin-right: 0;
    }

    a.btn {
        color: #696969;
        padding: 10px;
        border: 1px solid #696969;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        transition: all 0.2s;
    }

    a.btn:hover {
        background: white;
        border: 1px solid #696969;
        color: #696969;
    }

    .cover {
        height: 100vh;
        width: 100%;
        background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.05)), to(rgba(0, 0, 0, 0)));
        background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.05) 0%, rgba(0, 0, 0, 0) 100%);
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.05) 0%, rgba(0, 0, 0, 0) 100%);
        padding: 20px 50px;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
    }

    .flex-form input[type="submit"] {
        background: #556B2F;
        border: 1px solid #556B2F;
        color: #fff;
        padding: 0 30px;
        cursor: pointer;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        transition: all 0.2s;
    }

    .flex-form input[type="submit"]:hover {
        background: rgb(83, 105, 45);
        border: 1px solid rgb(83, 105, 45);
    }

    .flex-form {
        display: -webkit-box;
        display: flex;
        z-index: 10;
        position: relative;
        width: 500px;
        box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.3);
    }

    .flex-form>* {
        border: 0;
        padding: 0 0 0 10px;
        background: #fff;
        line-height: 50px;
        font-size: 1rem;
        border-radius: 0;
        outline: 0;
        -webkit-appearance: none;
    }

    input[type="search"] {
        flex-basis: 500px;
    }

    #madeby {
        position: absolute;
        bottom: 0;
        right: 0;
        padding: 25px 100px;
        color: #696969;
    }

    @media all and (max-width:800px) {
        body {
            font-size: 0.9rem;
        }

        .flex-form {
            width: 100%;
        }

        input[type="search"] {
            flex-basis: 100%;
        }

        .flex-form>* {
            font-size: 0.9rem;
        }

        header {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            padding: 10px !important;
        }

        header h2 {
            margin-bottom: 15px;
        }

        h1 {
            font-size: 2rem;
        }

        .cover {
            padding: 20px;
        }

        #madeby {
            padding: 30px 20px;
        }
    }

    @media all and (max-width:360px) {
        header nav li {
            margin: 0 10px;
        }

        .flex-form {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
        }

        input[type="search"] {
            flex-basis: 0;
        }

        label {
            display: none;
        }
    }

    .modal-login {
        color: #636363;
        width: 350px;
    }

    .modal-login .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }

    .modal-login .modal-header {
        border-bottom: none;
        position: relative;
        justify-content: center;
    }

    .modal-login h4 {
        text-align: center;
        font-size: 26px;
    }

    .modal-login .form-group {
        position: relative;
    }

    .modal-login i {
        position: absolute;
        left: 13px;
        top: 11px;
        font-size: 18px;
    }

    .modal-login .form-control {
        padding-left: 40px;
    }

    .modal-login .form-control:focus {
        border-color: #00ce81;
    }

    .modal-login .form-control,
    .modal-login .btn {
        min-height: 40px;
        border-radius: 3px;
    }

    .modal-login .hint-text {
        text-align: center;
        padding-top: 10px;
    }

    .modal-login .close {
        position: absolute;
        top: -5px;
        right: -5px;
    }

    .modal-login .btn {
        background: #556B2F;
        border: none;
        line-height: normal;
    }

    .modal-login .btn:hover,
    .modal-login .btn:focus {
        background: #556B2F;
    }

    .modal-login .modal-footer {
        background: #ecf0f1;
        border-color: #dee4e7;
        text-align: center;
        margin: 0 -20px -20px;
        border-radius: 5px;
        font-size: 13px;
        justify-content: center;
    }

    .modal-login .modal-footer a {
        color: #696969;
    }
</style>

<div class="container">

    <header>
        <h2><a href="#"><i class="ion-plane"></i> FoodAssist</a></h2>
        <nav>
            <ul>

                <li>
                    <a class="btn" href="#" title="AboutUs">About Us</a>
                </li>
                <li>
                    <a class="btn" href="register.php" title="Register">Register</a>
                </li>
                <li>
                    <!-- <div class="text-right"> -->
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="#myModal" class="btn" data-toggle="modal">Login</a>
                    <!-- </div> -->
                    <!-- <a class="login-trigger" href="#" data-target="#login">Log In</a> -->
                </li>
            </ul>
        </nav>
    </header>

    <div class="cover">
        <h1>Your next meal awaits.</h1>
        <form class="flex-form">
            <label for="from">
                <i class="ion-location"></i>
            </label>
            <input type="search" placeholder="Where do you live">
            <input type="submit" value="Search">
        </form>
        <div id="madeby">
            <span>
                Photo by <a href="https://unsplash.com/@misssinterpreted" target="_blank">Sylvie Tittel </a>
            </span>
        </div>
    </div>

</div>



<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Welcome to FoodAssist</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="landing_page.php" method="post">
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input type="text" class="form-control" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock"></i>
                        <input type="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
                    </div>

                    <div> <?php $hostname = "localhost";
                            $database = "foodassist";
                            $username = "foodassist";
                            $password = "FoodAssist101";
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                $email = $_POST["email"];
                                $pwd = $_POST["pwd"];

                                $conn = new mysqli($hostname, $username, $password, $database);
                                if (isset($_POST['login'])) {
                                    $select = mysqli_query($conn, "SELECT * FROM User WHERE email = '$email' AND user_password = '$pwd'");
                                    if (mysqli_num_rows($select) == 0) {
                                        echo '<div>Either email or password is incorrect </div>';
                                    }
                                }
                            } ?></div>

                </form>

            </div>
            <div class="modal-footer">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>


<?php
// Starts a session with the localhost, database, username, and password
session_start();
$hostname = "localhost";
$database = "foodassist";
$username = "foodassist";
$password = "FoodAssist101";


$conn = new mysqli($hostname, $username, $password, $database);


function reject($entry)
{
    echo 'Please <a href="landing_page.php">Log in </a>';
    exit();    // exit the current script, no value is returned
}


// sees if the connection has failed or has been successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// This allows the user to signin to the account. It checks to see if the user is in the database and
// if she or he is then they would be redirected to the dashboard. If not, then they will get an error that 
// the email or password is incorrect and would need to sign up. 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    // $name = $_POST["name"];

    echo $pwd;
    echo $email;

    if (isset($_POST['login'])) {
        $select = mysqli_query($conn, "SELECT * FROM User WHERE email = '$email' AND user_password = '$pwd'");
        if (mysqli_num_rows($select) > 0) {
            $row = mysqli_fetch_array($select);
            $username = $row['first_name'];
            // This sets a cookie for the new user and also starts a session based on the email and
            // redirects the user to the dashboard page. 

            $_SESSION['email'] = $email;
            setcookie('first_name', $username, time() + 3600);
            setcookie('email', $email, time() + 3600);
            setcookie('pwd', $pwd, time() + 3600);
            header('Location: dashboard.php');
        } else {
            // This validates to see if the username was typed in correctly. 
            echo '<div Either email or password is incorrect </div>';
        }
    }
}
?>