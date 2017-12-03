<!DOCTYPE html>
<html>
<head>
	<title>CATSS API Sample Test</title>
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
</head>
<body>
	<br /><br />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="well">
					<p>TOKEN:  6b971eac2f876685b4ff2d07ffeb545c41B756F2DCAC80BFD910D1BED0633974</p>
				</div>
				<br />
				<div class="panel panel-info panel-heading">
					<h3>CATSS (Signup)</h3>
					<p><u>http://localhost:8000/api/catss/signup/</u></p>
					<table class="table">
						<thead>
							<tr>
								<th>Query</th>
								<th>Request</th>
								<th>Success</th>
								<th>Error</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Signup (POST)</td>
								<td><pre class="s_request"></pre></td>
								<td><pre class="s_response"></pre></td>
								<td><pre class="s_error"></pre></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="panel panel-info panel-heading">
					<h3>CATSS (Login)</h3>
					<p><u>http://localhost:8000/api/catss/login/</u></p>
					<table class="table">
						<thead>
							<tr>
								<th>Query</th>
								<th>Request</th>
								<th>Success</th>
								<th>Error</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Login (POST)</td>
								<td><pre class="l_request"></pre></td>
								<td><pre class="l_response"></pre></td>
								<td><pre class="l_error"></pre></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
			<div class="col-md-6">
				<!-- <div id="summernote"><p>Hello Summernote</p></div> -->
				<script>
				    $(document).ready(function() {
				        $('#summernote').summernote();
				    });
				</script>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		// API Request
		var sReq = {  
	        token: 'ACCESS_TOKEN',
			name: 'Ekpoto Liberty',
			email: 'ekpoto.liberty@gmail.com',
			password: 'secret'
		};

		// API Response
		var sRes = {
			status: 'success',
			message: 'user signup successful'
		};

		// API Response
		var sError = {
			status: 'error',
			message: 'Error incorrect access token'
		};

		$(".s_request").html(JSON.stringify(sReq, undefined, 2)); // For jQuery
		$(".s_response").html(JSON.stringify(sRes, undefined, 2));
		$(".s_error").html(JSON.stringify(sError, undefined, 2));

		// API Request
		var lReq = {  
	        token: 'ACCESS_TOKEN',
			email: 'ekpoto.liberty@gmail.com',
			password: 'secret'
		};

		// API Response
		var lRes = {
		    "status": "success",
		    "message": "login successful",
		    "data": {
		        "id": 1003,
		        "email": "ekpoto.liberty@gmail.com"
		    }
		};

		// API Response
		var lError = {
		    "status": "error",
		    "message": "login fail, invalid email/password"
		};

		$(".l_request").html(JSON.stringify(lReq, undefined, 2)); // For jQuery
		$(".l_response").html(JSON.stringify(lRes, undefined, 2));
		$(".l_error").html(JSON.stringify(lError, undefined, 2));
	</script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>