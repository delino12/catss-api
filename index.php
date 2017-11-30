<!DOCTYPE html>
<html>
<head>
	<title>CATSS API Sample Test</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
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
					<h3>CATSS PARAMS(SIGNUP)</h3>
					<p><u>http://localhost/catss-pairs/signup</u></p>
					<table class="table">
						<thead>
							<tr>
								<th>Query</th>
								<th>Request</th>
								<th>Response</th>
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


	</script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>