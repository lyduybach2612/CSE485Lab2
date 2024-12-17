<?php
$message = '';
if(isset($_GET['isRegistered'])){
    $message = 'Đăng kí thành công, vui lòng đăng nhập';
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (trim($_POST['username']) && trim($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $existingUser = $userService->getUserByUserName($username);
        if (!$existingUser || !password_verify($password, $existingUser->getPassword())) {
            $message = 'Tên tài khoản hoặc mật khẩu không đúng!';
        } else {
            $existingUser->getRole() == 1 ? $_SESSION['admin'] = true : $_SESSION['user'] = true;
            $message='Bạn đã đăng nhập thành công';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container">
        <h1 class="text-primary text-center mb-3">Đăng nhập</h1>
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
            <div class="mb-3">Nếu chưa có tài khoản, xin vui lòng đăng kí <a href="<?= BASE_URL ?>/register">tại đây</a></div>
            <button name="submit" type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>