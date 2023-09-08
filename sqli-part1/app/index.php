<?php
session_start();
include('config.php');
ob_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <title>Admin Panel</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    //Username and Password sent from Form
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $password = md5($password);
                    $query = "select id from admin where username = '$username' and password = '$password'";
                    echo $query;
                    $data = mysqli_query($conn,  $query) or die(mysqli_error($conn));
                    $ret = mysqli_fetch_array($data, MYSQLI_ASSOC);
                    if (isset($ret) && $ret) {
                        $_SESSION['login'] = true;
                        header("location: hello.php");
                    } else {
                        echo "<p> <font color=whitesmoke>Invalid Username or Password</font> </p>";
                    }
                }
                ?>
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <h5>AcRtf Team</h5>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
</body>

</html>