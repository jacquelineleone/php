<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Demo</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0px;
    }
  </style>
</head>

<body>
  <h1>Recommended Books</h1>

  <?php
  $books = [
    "Orgullo y prejuicio",
    "Cementerio de animales"
  ];
  ?>

  <ul>
    <?php foreach ($books as $book) {
      //otras opciones
      //echo "<li>" . $book . "</li>
      //echo "<li>$book</li>"
      echo "<li>{$book}</li>";
    }
    ?>
  </ul>
</body>

</html>