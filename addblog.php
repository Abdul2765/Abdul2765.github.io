<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>ABW</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                    <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/138128398_239694297538455_5127799083176225731_o.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Abw_0l0</span></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>


        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blog.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Blogs</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addblog.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Add Blog</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="message.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Messages</span>
                            </a>
                        </li>
                                                

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>



        <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid">


            
                        <!--abw-->


                        <div class="container">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Add Blog</h4>
            <p class="card-category">Add Content to your Blog</p>
        </div>
        <div class="card-body">
            <form action="addblog.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Blog Content</label>
                            <div class="form-group bmd-form-group">
                                <textarea class="form-control" name="content" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Add Image</label>
                    <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1" enctype="multipart/form-data">
                </div>
                <input action="POST" type="submit" name="enter">
                <!--<button type="submit" class="btn btn-primary pull-right" name="enter">Add</button>-->
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
                                            
                                                
                        <!--abw-->
                            
                      


                <footer class="footer text-center"><h3 class="card-title"><a href="logout.php" class="btn btn-danger">Logout</a></h3>
            </footer>

        </div>

    </div>


    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>

<?php

include_once('connection.php');

if(isset($_POST['enter'])){

    $title = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['title']));
    $name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['name']));
    $content = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['content']));    
//
if (isset($_FILES['img']))
    {
        $img_name = $_FILES['img']['name'];
        $img_size = $_FILES['img']['size'];
        $img_type = $_FILES['img']['type'];
        $img_temp = $_FILES['img']['tmp_name'];
        $tmp = explode('.', $_FILES['img']['name']);
        $img_ext = strtolower(end($tmp));
        $extension = array(
            "jpeg",
            "png",
            "jpg"
        );
        if (in_array($img_ext, $extension) === false)
        {
            header("Location: user.php");
        }
        if ($img_size > 5 * 1024 * 1024)
        {
            echo "image size is to large";
        }
        if (empty($errors) == true)
        {
            $img = "./upload/" . uniqid("img_") . "." . $img_ext;
            move_uploaded_file($img_temp, $img);
        }
    }
//
    $sql = "INSERT INTO blog (title,name,content,img) VALUES ('$title','$name','$content','$img')";

    $result = mysqli_query($conn,$sql);

    if($result > 0){
        echo "<br><br>done";
    }else{
        echo "<br><br>not";
    }
}
?>