<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

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
                        <a href="index.php">#OpIceISIS</b>
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
                        <h1>Search IS Enthusiast</h1><br>Only search function currently available.<br>Search a blank value for a complete dump in human readable format<br>
			<br>
			<table style="width:100%;min-width:1000px;">
				<tr style="width:100%;">
					<td style="width:50%;border-style:solid;border-width:1px;padding:10px;vertical-align:top;">
						<form action="searchdb.php" target="results"method="post">
							Search IS enthusiast by
							<select name="cat">
								 <option value="Realname">Real name</option>
								 <option value="Location">Location</option>
								 <option value="Twitter">Twitter</option>
								 <option value="Facebook">Facebook</option>
								 <option value="Youtube">Youtube</option>
								 <option value="Other">Other</option>
							</select>
							<input type="text" style="width:200px;" name="text"> <input type="submit" value="Search">
						</form>
						<br><iframe frameborder="0" scrolling="no" onload='javascript:resizeIframe(this);' name="results" src="searchdb.php"></iframe>
				<!--		<table  style="width:100%;">
							<tr>
								<th>Real Name</th>
								<th>Location</th>
								<th>Twitter</th>
								<th>Facebook</th>
								<th>Youtube</th>
							</tr>
						</table>
					</td>
					<td style="width:50%;">
						<table style="width:100%;">
							<tr style="width:100%;">
								<td style="width:60%;padding-left:30px;">
									<h1>Intel</h1>
									<br>Real name:
									<br>Location:
									<br>Twitter:
									<br>Facebook:
									<br>Youtube:
									<br>Other
								</td>
								<td style="width:50%;">
									<img style="width:200px;height:200px;margin-top:50px;" src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Hausziege_04.jpg"></img>
									<br><br><input type="submit" value="Edit">
								</td>
							</tr>
						</table> -->
					</td>
				<tr>
			</table>
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
