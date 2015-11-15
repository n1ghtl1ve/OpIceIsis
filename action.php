<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>#OpIceISIS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
		<br><center><img src="./img/face.png"/></center>
                <li class="sidebar-brand">
                        <a href="index.html">#OpIceISIS</a>
                </li>
                <li>
                    <a href="add.html">Add IS enthousiast</a>
                </li>
                <li>
                    <a href="search.html">Search/Edit IS enthousiast</a>
                </li>
                <li>
                    <a href="rules.html">Rules</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
            <p><?php

                    //POSTS for DB
                    $name = strip_tags($_POST['rname']);
                            $name = htmlspecialchars($name);
                            echo "Name: $name <br />";
                    $pic = strip_tags($_POST['pic']);
                            $pic = htmlspecialchars($pic);
                            echo "Picture: $pic <br />";
                    $loc = strip_tags($_POST['loc']);
                            $loc = htmlspecialchars($loc);
                            echo "Location: $loc <br />";
                    $twitter = strip_tags($_POST['twitter']);
                            $twitter = htmlspecialchars($twitter);
                            echo "Twitter: $twitter <br />";
                     $fb = strip_tags($_POST['fb']);
                            $fb = htmlspecialchars($fb);
                           echo "Facebook: $fb <br />";
                     $yt = strip_tags($_POST['yt']);
                            $yt = htmlspecialchars($yt);
                            echo "Youtube: $yt <br />";
                    //$others = strip_tags($_POST['others']);
                    //        $others = htmlspecialchars($yt);
                    //        echo "Youtube: " . $others;

                    //Timestamp for DB
                    date_default_timezone_set("UTC");
                    $timestamp = time();
                    $adate = date("d.m.Y - H:i", $timestamp);
                    echo "Time: $adate <br />";

                //DB-Connection
                $db = mysqli_connect("127.0.0.1", "root", "hallo");
                                $selected = mysqli_select_db("opiceisis",$db);

                //DB
                $dbform = mysqli_query($db, "INSERT INTO isismembers (realname, location, twitter, facebook, youtube, dateadd)
                                            VALUES('$name', '$loc', '$twitter', '$fb', '$yt','$adate')");
            ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

            </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
