<?php
$page_title = "Login - ArcadeHub";
include '../includes/header.php'; // Ajuste o caminho conforme a estrutura do seu projeto
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Login</h2>
            <form action="login-process.php" method="POST"> <!-- Ajuste o caminho conforme a estrutura do seu projeto -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; // Ajuste o caminho conforme a estrutura do seu projeto ?>