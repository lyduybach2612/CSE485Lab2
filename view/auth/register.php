<?php
    require_once "../../config/config.php";

$message = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (trim($_POST['username']) && trim($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $existingUser = $userService->getUserByUserName($username);
        if ($existingUser) {
            $message = 'Tên tài khoản đã tồn tại!';
        } else {
            $user = new User($username, $password);
            try {
                $userService->saveUser($user);
                header('Location:' . BASE_URL . '/view/auth/login.php?isRegistered=1');
                exit();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container">
        <h1 class="text-primary text-center mb-3">Đăng kí tài khoản</h1>
        <?php if ($message): ?>
            <div class="text-danger"><?= $message ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Tài khoản</label>
                <input type="text" class="form-control" name="username" required id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" required class="form-control" id="password">
            </div>
            <div class="mb-3">Nếu đã có tài khoản, xin vui lòng đăng nhập <a class="text-primary" href="<?= BASE_URL ?>/view/auth/login.php">tại đây</a></div>
            <button name="submit" type="submit" class="btn btn-primary">Đăng kí</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>