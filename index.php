<?php
if(!file_exists("config.php")){
	echo "Rename <strong>config.php-sample</strong> to <strong>config.php</strong> and edit settings in config.php!";
	die();
}

$do = $_GET['do'];
?>
<!DOCTYPE html>
<html lang="fi">
<head>
	<meta charset="utf-8">
	<title>PersonalHomepage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span8">
				<ul class="thumbnails">
					<li class="span2">
						<a href="#" class="thumbnail">
							<img src="http://placehold.it/160x120" alt="" />
							<h5 style="text-align:center;">Thumbnail label</h5>
						</a>
					</li>
					<li class="span2">
						<a href="#" class="thumbnail">
							<img src="http://placehold.it/160x120" alt="" />
							<h5 style="text-align:center;">Thumbnail label</h5>
						</a>
					</li>
					<li class="span2">
						<a href="#" class="thumbnail">
							<img src="http://placehold.it/160x120" alt="" />
							<h5 style="text-align:center;">Thumbnail label</h5>
						</a>
					</li>
					<li class="span2">
						<a href="#" class="thumbnail">
							<img src="http://placehold.it/160x120" alt="" />
							<h5 style="text-align:center;">Thumbnail label</h5>
						</a>
					</li>
					<li class="span2">
						<a href="#" class="thumbnail">
							<img src="http://placehold.it/160x120" alt="" />
							<h5 style="text-align:center;">Thumbnail label</h5>
						</a>
					</li>
					<li class="span2">
						<a href="#" class="thumbnail">
							<img src="http://placehold.it/160x120" alt="" />
							<h5 style="text-align:center;">Thumbnail label</h5>
						</a>
					</li>
				</ul>
			</div>
			<div class="span4">
				<?php if($pocket_api != "" && $pocket_user != "" && $pocket_pass != ""){ ?>
					<div class="well" style="padding: 8px 0;">
						<ul class="nav nav-list">			
							<li class="nav-header">LUE N&Auml;M&Auml;!!</li>
							<?php 
							$roina = file_get_contents("https://readitlaterlist.com/v2/get?apikey=$pocket_api&username=$pocket_user&password=$pocket_pass&state=unread");
							$roina = json_decode($roina, TRUE);
							$avaimet = array_keys($roina['list']);
							for($i = 0; $i < count($avaimet); $i++){
								echo '<li><a href="'.$roina['list'][$avaimet[$i]]['url'].'" target="_blank"><i class="icon-globe"></i> '.$roina['list'][$avaimet[$i]]['title'].'</a></li>';
							}
							?>
						</ul>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>
<?php
if($do == "thumbnails"){
}
?>