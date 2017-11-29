<!DOCTYPE html>
<html>
<head>
	<title>Install Api Database</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<br /><br /> 
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-3">
				<button id="install" class="btn btn-primary">Install or Reset Database</button><br /><br />
				<div id="installation-status"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$("#install").click(function (e){
			e.preventDefault();
			// run reset and return response 
			$.get("../__factory/reset.php", function (data){
				console.log(data);
				$("#installation-status").html(data);
			});
		});
	</script>
</body>
</html>