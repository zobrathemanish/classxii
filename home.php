<!DOCTYPE html>
<html>
<head>
	<title>My Homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		.container {
			margin: 20px auto;
			max-width: 800px;
			padding: 0 20px;
			position: relative;
		}
		.profile-pic {
			float: left;
			margin: 0 20px 20px 0;
			width: 200px;
		}
		h1 {
			margin-top: 0;
		}
		p {
			line-height: 1.5;
		}


		.edit-profile {
		  position: absolute;
		  bottom: 0;
		  right: 0;
		  margin-bottom: 70px;
		  margin-right: 20px;
		}

		 .delete-account {
		  position: absolute;
		  bottom: 0;
		  right: 0;
		  margin: 20px;

		}

		 .edit-profile a, .delete-account a {
			display: block;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			text-decoration: none;
			border-radius: 5px;
			margin-right: 10px;
		}



		.edit-profile a:hover, .delete-account a:hover {
			background-color: #555;
		}

	</style>
</head>
<body>
	<header>
		<h1>Manish Dangi</h1>
		<p>Computer Department - Professor</p>
	</header>
	<div>
	<div class = "delete-account">
		<a href="delete.php">Delete Account</a>
	</div>
	
	<div class = "edit-profile">
		<a href="edit.php">Edit this Profile</a>
	</div>
	</div>

	<div class="container">
		<img class="profile-pic" src="pic.jpg" alt="Profile Picture">
		<h2>About Me</h2>
		<p>I am a software engineer with over 5 years of experience working on softwares and Machine Learning Applications. I specialize in front-end development using HTML, CSS, and JavaScript, but I am also experienced with back-end development using Python and Java.</p>
		<p> I am a teacher at National School of Sciences (NIST) and I have a passion in teaching too. </p>
		<p>In my free time, I enjoy hiking and camping in the great outdoors, and I am also an avid reader of science fiction and fantasy novels.</p>
		<h2>My Skills</h2>
		<ul>
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
			<li>PHP</li>
			<li>MySQL</li>
			<li>Python</li>
			<li><?php session_start(); echo $_SESSION['username']; ?> </li>
		</ul>
		<h2>Connect With Me?</h2>
		<ul>
			<li><a href="https://github.com/zobrathemanish">Github</a></li>
			<li><a href="https://www.linkedin.com/in/manish-dangi-658762109/">LinkedIn</a></li>
			<li><a href="https://twitter.com/manishdangii">Twitter</a></li>
		</ul>
	</div>

</body>
</html>
