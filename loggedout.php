<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="loggedout.css">

	<title>SPHINX</title>
</head>
<body>
	<!-- you are loggedout.... -->
	<a href="login.php">Login</a>

	<!--navbar to be used here
		home
		contact
		help
		quizes
		leaderboard
	-->

	<nav id="mainNavbar" class="navbar navbar-dark bg-dark navbar-expand-md py-0 fixed-top">
        <a href="#" class="navbar-brand">
        	<img src="image1.jpg" width="40" height="40" alt="">
        SPHINX</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="homepage.php" class="nav-link">HOME</a>
                </li>
                
                <li class="nav-item">
                    <a href="leaderboard.php" class="nav-link">LEADERBOARD</a>
                </li>
                 
                <li class="nav-item">
                    <a href="homepage.php#quizzes1" class="nav-link">QUIZZES</a>
                </li>
                <li class="nav-item">
                    <a href="team.php" class="nav-link">TEAM</a>
                </li>
            </ul>


            



             <ul class="nav navbar-nav ml-auto">
      			<li class="nav-item">
       			 <a class="nav-link" href="register.php"><span class="fas fa-user"></span> SIGN UP</a>
     			 </li>
      			<li class="nav-item">
      				  <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> LOGIN</a>
      			</li>
      		</ul>
        </div>


    </nav>

	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>