<?php
// if(isset($_POST['b_reg'])){

/*$reg_data = $_POST;

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$password = $_POST['password'];*/

/*echo '<div class="alert alert-info">';
echo '<span class="glyphicon glyphicon-user text-center"></span> Your Information are: <br>';
echo '<ul>';
foreach ($reg_data as $dat => $regData ){
    echo '<li>Your <b>' . $dat . '</b> is <b> '. $regData . '</b></li>';
}
echo '</ul>';
echo '</div>';*/

/*try {
    $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO users (Name, Age, Address, Password) VALUES ('$name', $age, '$address', '$password')";
    $conn->exec($sql);

    echo "Successfully Added to the Database";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}*/


//  }
?>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            background: black;
        }

        label, div{
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <div class="row">
            <div class="col-lg-offset-1">
                <a href="#"><img src="img/logo.png" width="150" alt=""></a>
            </div>
        </div>

    </header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home"><span class="glyphicon glyphicon-home"></span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/about">About us</a></li>
                    <li><a href="/contact">Contact us</a></li>
                    <li><a href="/add">Add user</a></li>
                    <li><a href="/users">Users</a></li>
                    <li><a href="/course">Add Course</a></li>
                    <li><a href="/courses">Courses</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </ul>

            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3" style="border: 1px dashed white; margin-top: 8px; background: #122b40; border-radius: 10px;">
            <h2 class="text-center" style="color: white; font-weight: 800">About us <span class="glyphicon glyphicon-hand-down"></span> </h2>
            <p style="color: white; font-weight: bold;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi cupiditate dolorum est explicabo ipsam maiores molestiae mollitia recusandae temporibus. Amet aperiam eos labore maxime neque nostrum placeat temporibus vitae?</p>
            <hr class="dl-horizontal">

            <div>
                <h4>Lorem Ipsum</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque itaque officia possimus! Alias aliquam asperiores beatae delectus distinctio, dolores dolorum earum eius, est hic, illum ipsa iste quibusdam quod sint?
            </div>
            <hr>
            <div>
                <h4>Lorem Ipsum</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque itaque officia possimus! Alias aliquam asperiores beatae delectus distinctio, dolores dolorum earum eius, est hic, illum ipsa iste quibusdam quod sint?
            </div>
            <hr>
            <div>
                <h4>Lorem Ipsum</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque itaque officia possimus! Alias aliquam asperiores beatae delectus distinctio, dolores dolorum earum eius, est hic, illum ipsa iste quibusdam quod sint?
            </div>
            <hr>
            <div>
                <h4>Lorem Ipsum</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque itaque officia possimus! Alias aliquam asperiores beatae delectus distinctio, dolores dolorum earum eius, est hic, illum ipsa iste quibusdam quod sint?
            </div>
            <hr>
            <div>
                <h4>Lorem Ipsum</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque itaque officia possimus! Alias aliquam asperiores beatae delectus distinctio, dolores dolorum earum eius, est hic, illum ipsa iste quibusdam quod sint?
            </div>
            <hr>
            <div>
                <h4>Lorem Ipsum</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque itaque officia possimus! Alias aliquam asperiores beatae delectus distinctio, dolores dolorum earum eius, est hic, illum ipsa iste quibusdam quod sint?
            </div>
            <!--<a href="index.php"><button type="button" class="btn btn-primary btn-block">Home</button></a>-->
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="background: gainsboro; text-align: center; margin-top: 10px; padding: 20px;"><p>Copyright Reserved 2019</p></div>
        </div>

    </footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>