<html>
	<head>
		<title>Updates on Nilofar<?php if (isset($district) ) { echo ": " . ucfirst($district); }?></title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div id="head"><h1><a href="/">Updates on Nilofar</a><?php if (isset($district) ) { echo ": " . ucfirst($district); }?></h1></div>
			
			<div id="content">
				<?php  if (isset($updated)) { if ($updated == true) { echo '<h3 id="postUpdated">Your post as been added!</h3>'; } } ?>

				<h3 id="postUpdate">Post An Update</h3>

				<form action="update.php" id="updateForm" method="post" class="hidden">
					<?php echo '<input type="text" value="' . $distnum . '" name="distnum" id="distnum" style="display: none;">'; ?>
					<input type="text" name="updateContent" id="updateContent" maxlength="500">
					<div id="updateFormAssets">
						<span id="updateCharCount" class="white">500</span>
						<button id="updateSubmit" type="submit">Submit</button>
					</div>
					<br><br><br>
				</form>
				<hr>

				<div class="updates">
					
					<?php 
						if (isset($updates))
						{
							if (empty($updates))
							{
								echo '<h3 id="noUpdates">No updates yet.</h3>';
							}
							else
							{
								foreach ($updates as $update) {
									echo '<p class="update">' . $update["info"] . '</p>';
									echo '<p class="date">Posted on ' . date("d-m-Y H:i:s", strtotime($update["date"])) . '</p>';
									echo '<br><hr>';
								}
							}
						}
					?>

				</div>

			</div>
			<br>
			<br>
			<div id="rules">
				<ul id="rulesList">
					<li>Stay safe!</li>
					<li>Please do not spam.</li>
					<li>Please do not post false or misleading updates.</li>
				</ul>
			</div>

			<div id="footer">
				<p>Developed by <a href="http://umanggalaiya.in" target="_blank">Umang Galaiya</a> & Amit Kumar</p>
			</div>
		</div>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>