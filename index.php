<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Tela de Login</title>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
		/>
		<link
			rel="stylesheet"
			href="css\login.css"
		/>
	</head>

	<body>
		<img
			src="img\logo.png"
			alt="logo scot"
			width="400"
			height="400"
		/>
		<div class="login-container">
			<h2 class="text-center">Login</h2>
			<form
				action="portal.php"
				method="POST"
				onsubmit="return validateForm()"
			>
				<div class="mb-3">
					<label
						for="email"
						class="form-label"
						>E-mail</label
					>
					<input
						type="email"
						class="form-control"
						id="email"
						name="email"
						required
						placeholder="Digite seu e-mail"
					/>
				</div>
				<div class="mb-3">
					<label
						for="password"
						class="form-label"
						>Senha</label
					>
					<input
						type="password"
						class="form-control"
						id="password"
						name="password"
						placeholder="Digite sua senha"
						required
					/>
				</div>
				<button
					type="submit"
					class="btn w-100 btn-login"
				>
					Entrar
				</button>
				<p
					id="password-error"
					class="text-danger mt-2"
				></p>
			</form>
		</div>
		<div
			class="toast-login"
			style="z-index: 11"
		>
			<div
				id="toast-container"
				class="toast align-items-center text-white bg-danger border-0 p-2"
				role="alert"
				aria-live="assertive"
				aria-atomic="true"
			>
				<div class="d-flex">
					<div
						class="toast-body"
						id="toast-message"
					></div>
					<button
						type="button"
						class="btn-close btn-close-white me-2 m-auto ms-3"
						data-bs-dismiss="toast"
						aria-label="Close"
					></button>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>
