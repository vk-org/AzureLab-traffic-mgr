<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $_SERVER['SERVER_NAME']; ?></title>
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2><?php echo $_SERVER['SERVER_NAME']; ?></h2>
					<p><?php echo getenv("REGION_NAME", true); ?></p> 
				</div>
			</div>
		</div>
	</body>
</html>
