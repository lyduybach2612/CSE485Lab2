<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tilte</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col">Created_at</th>
      <th scope="col">Category</th>
    </tr>
  </thead>

  <?php
    foreach ($newsList as $news) {

  ?>
  <tbody>
    <tr>
      <th scope="row"><?=$news->getId()?></th>
      <td><?=$news->getTitle()?></td>
      <td><?=$news->getContent()?></td>
      <td><?=$news->getImage()?></td>
      <td><?=$news->getCreatedAt()?></td>
      <td><?=$news->getCategoryId()?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</body>
</html>