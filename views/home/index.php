<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Các thể loại tin tức</title>
</head>
<body>
    <main class="container" style="max-width: 70%">
        <h1 class="m-5 text-center text-danger text-uppercase">Danh sách các thể loại tin tức</h1>
        <table class="table text-center">
        <thead class="border border-secondary">
            <tr>
                <th class="border border-secondary">ID</th>
                <th class="border border-secondary">Thể loại</th>
            </tr>
        </thead> 
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr class="align-middle">
                <td class="border border-secondary"><?= $category->getId(); ?></td>
                <td class="border border-secondary"><?= $category->getName(); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>   
            
        </table>
    </main>
</body>
</html>