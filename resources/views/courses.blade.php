<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Courses</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

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

        label, thead, th, tbody, td{
            color: white;
        }

        thead th, tfoot td{
            color: darkred;
            background: cornsilk;
        }

        tfoot td{
            text-align: right;
            text-decoration: underline;
        }

        tr:nth-child(even) {
            background: cadetblue;
            color: palegoldenrod;
        }

        thead th, tbody td{
            text-align: center;
        }

        table tbody tr:hover{
            background: white;
            cursor: pointer;
        }

        table tbody tr:hover td{
            font-weight: bold;
            color: cadetblue;
        }


    </style>
</head>
<body>
<div class="container">
    <header>
        <div class="row">
            <div class="col-lg-offset-1">
                <a href="#"><img src="{{ asset('img/logo.png') }}" width="150" alt=""></a>
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
    </div>

    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-xs-offset-0" style="border: 1px dashed white; margin-top: 8px; background: #122b40; border-radius: 10px;">
            <h2 class="text-center" style="color: cornsilk; font-weight: 800">Courses <span class="glyphicon glyphicon-hand-down"></span> </h2>
            <hr class="dl-horizontal">

            <table class="table table-responsive">
                <thead>
                <th></th>
                <th>ID</th>
                <th>Course Name</th>
                <th>Hours</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
                </thead>
                <tbody>
                @foreach( $courses as $course )
                    <tr>
                        <td><span class="glyphicon glyphicon-user"></span></td>
                        <td> {{ $course->id }}</td>
                        <td> <b>{{ $course->name }} </b> </td>
                        <td> {{ $course->hours }} </td>
                        <td> {{ $course->price }} </td>
                        <td> {{ $course->description }} </td>
                        <td style="text-align: center;"><a href="course/{{$course->id}}/update" class="btn btn-info glyphicon glyphicon-eye-open"></a>
                            <a href="course/{{$course->id}}/delete" class="btn btn-danger glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">Created by: <strong><i>Daouda Sanogo</i></strong></td>
                    </tr>
                </tfoot>
            </table>
            <!-- <a href="register.php"><button type="button" class="btn btn-primary btn-block">Back to registration page</button></a>
             <a href="index.php"><button type="button" class="btn btn-primary btn-block">Back to Homepage</button></a>-->
        </div>
        <footer>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="background: gainsboro; text-align: center; margin-top: 10px; padding: 20px;"><p>Copyright Reserved 2019</p></div>
            </div>

        </footer>
    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>