
<?php
  $limit = 5;
  $page = isset($_GET['page']) ? (int)$_GET['page'] :1;
  $page = max($page, 1); 
  $offset = ($page - 1) * $limit; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
</head>
<body>
<button  class = "btn btn-primary my-2" name = "add-news"><a style ="text-decoration:none" href = "index.php?controller=news&action=create" class = "text-light">Add a news</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tilte</th>
      <th scope="col">Image</th>
      <th scope="col">Created_at</th>
      <th scope="col">Category</th>
      <th scope="col">Detail</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>

  <?php
    $id = 1;
    foreach ($newsList as $news) {
  ?>
  <tbody> 
    <tr>
      <th scope="row"><?=$id?></th>
      <td><?=$news->getTitle()?></td>
      <td><img src="/CSE485Lab2/images/<?=$news->getImage()?>" width="100" height = "50"></td>

      <td><?=$news->getCreatedAt()?></td>
      <td><?=$news->getCategoryName()?></td>
      
      <td><a href="index.php?controller=news&action=show&id=<?=$news->getId()?>"><i class="bi bi-eye"></i></a></td>
      <td><a href = "index.php?controller=news&action=edit&id=<?=$news->getId()?>"><i class="bi bi-pencil"></i></a></td>
      <td><a href = "index.php?controller=news&action=destroy&id=<?=$news->getId()?>"><i class="bi bi-trash-fill"></i></b></td>
    </tr>
    <?php
    $id+=1;
    }
    ?>
  </tbody>
</table>

      <nav aria-label="Page navigation example d-flex" >
            <ul class="pagination justify-content-center ">
                <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $page-1; ?>">Previous</a></li>
                <li class="page-item"><a style = "background-color: #007bff;color:white;" class="page-link" href="index.php?page=<?=$page?>"><?=$page?></a></li>
                <li class="page-item"><a class="page-link" href="index.php?page=<?=$page+1?>"><?=$page+1?></a></li>
                <li class="page-item"><a class="page-link" href="index.php?page=<?=$page+2?>"><?=$page+2?></a></li>
                <li class="page-item"><a class="page-link" href="index.php?page=<?=$page+1?>">Next</a></li>
            </ul>
        </nav>
</body>
</html>