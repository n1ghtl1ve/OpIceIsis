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
                        <a href="index.php">#OpIceISIS</a>
                </li>
                <li>
                    <a href="add.php">Add IS Enthusiast</a>
                </li>
                <li>
                    <a href="search.php">Search IS Enthusiast</a>
                </li>
                <li>
                    <a href="rules.php">Rules</a>
                </li>
                <li>
                <a href="archive.txt">Archive</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Add IS Enthusiast</h1>
			<br><p>Please provide ATLEAST 2 fields. Get more info if not</p>
			<img style="width:200px;height:200px;margin-top:50px;" src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Hausziege_04.jpg"></img>
                        <form action="submit.php" method="post">
				 Real Name:
				<br><input type="text" style="width:100%; max-width:600px;" name="realname"><br>
				<br>Link to picture:
				<br><input type="text" style="width:100%; max-width:600px;" name="pic"><br>
				<br>Location:
				<br><input type="text" style="width:100%; max-width:600px;" name="loc"><br>
				<br>Twitter account:
				<br><input type="text" style="width:100%; max-width:600px;" name="twitter"><br>
				<br>Facebook account:
				<br><input type="text" style="width:100%; max-width:600px;" name="facebook"><br>
				<br>Youtube account:
				<br><input type="text" style="width:100%; max-width:600px;" name="youtube"><br>
				<br>Other:
				<br><textarea name="other"  style="width:100%; max-width:600px;" ></textarea>
				<br><input type="submit" value="Add">
        <br><img src="/captcha/captcha.php" alt="Captcha" title="Captcha - Please Fill In The Signs!" width=140 height=40 /><br>
        <input type="text" name="captcha_code" size=10 />
			</form>
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

</html>
