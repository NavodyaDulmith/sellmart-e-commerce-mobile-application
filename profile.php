<?php include 'header.php' ?>

<body>
	<div id="page" data-role="page">
		<div data-role="header">
			<?php include("header.php"); ?>
			<h2 class="page-title" style="color: white">Profile</h2>
			<div Style="background-color:#EEEEEE;">
				<div align="center">
					<img src="images/menu/user-profile@2x.png" class="profilePic" />
				</div>
			</div>
		</div>
		<div data-role="content" class="profile-content">
			<div id="static">
				<ul data-role="listview" style="margin:0px;">
					<li><i class="fa fa-user " Style="font-size:20px;margin-right:10px"></i>Charaka Andaraeera</li>
					<li><i class="fas fa-envelope" Style="font-size:20px;margin-right:10px"></i>charakasahira@gmail.com</li>
				</ul>
				<div class="edit-btn">
					<button id="edit" style="">Edit Details</button>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>

		</div>
		<div>

			<div data-role="footer">
				<?php include("footer.php"); ?>
			</div>
		</div>

	</div>