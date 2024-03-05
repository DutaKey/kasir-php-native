<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Login Kasir</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="height: 100vh; width: 100%" class="d-flex justify-content-center align-items-center bg-success-subtle flex-column">
	<h3>Hai Admin</h3>
	<p>Silahkan dasukkan data anda untuk login!</p>
	<div class="card p-4" style="width: 20rem">
		<img src="./img/banner.jpeg" alt="" class="mb-3" />
		<form method="POST" action="./function/login.php">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Username</label>
				<input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Username" />
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukkan Password" />
			</div>
			<button type="submit" class="btn btn-primary mb-2">
				Submit
			</button>
			<br />
			<a href="./index.php" rel="noopener noreferrer" class="">Login Sebagai Cashier</a>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>