<html>
	<head>
		<!---------- css include ---------->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/index.css">
	</head>

	<body>

		<!---------- Login Form ---------->
		<div class="container">
			<div class="row login">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
					<form role="form" method="post" action="/">
						<div class="form-group text-center">
							<div class="logo">
								<span class="glyphicon glyphicon-flash set-logo"></span>
							</div>
						</div>

						<div class="form-group">
                            <input type="text" class="form-control input-lg" name="network" id="network" />
                            <input type="text" class="form-control input-lg" name="account" id="account" />
                            <input type="text" class="form-control input-lg" name="balance" id="balance" />
							<input type="text" class="form-control input-lg" id="userid" name="userid" placeholder="Enter email or username">
						</div>

						<div class="form-group">
							<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default btn-lg btn-block btn-success">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>


		<!---------- script include ---------->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js/dist/web3.min.js"></script>
        <script src="/js/index.js"></script>
	</body>

</html>
