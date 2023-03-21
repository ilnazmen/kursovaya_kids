<!doctype html>
<html lang="ru">
<head>
  <title>ТаблицаSQL</title>
</head>
<body>
   <?php
    $link=mysqli_connect("localhost","id13700634_admin","0(l?TFLvaI(zJ2ES","id13700634_clients");
    if (!$link)
    {
        echo "ошибка: невозможно устанавить соединение с БД.".PHP_EOL;
        exit;
    }


    if (isset($_POST["result"])) {

      if (isset($_GET['red_id'])) {
          $sql = mysqli_query($link, "UPDATE `customers` SET `result` = '{$_POST['result']}',`name` = '{$_POST['name']}' WHERE `id`={$_GET['red_id']}");
      }
      if ($sql) {
        echo '<p>Успешно!</p>';
      } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      }
    }


  if (isset($_GET['del_id'])) {
    $sql = mysqli_query($link, "DELETE FROM `customers` WHERE `id` = {$_GET['del_id']}");
    if ($sql) {
      echo "<p>Строка удалена.</p>";
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
?>
    <?php

  ?>

    <br>
     <table border = 2>
            <tr>
                <td> Имя</td>
                <td> Телефон</td>
                <td> Комментарии</td>
                <td> Удаление</td>
            </tr>
      <?php
     $sql = mysqli_query($link, 'SELECT * FROM `customers`');
      while ($result = mysqli_fetch_array($sql)) {
        echo
        '<tr>' .
             "<td>{$result['name']}</td>" .
             "<td>{$result['phone']}</td>" .
            "<td>{$result['comments']}</td>" .
             "<td><a href='?del_id={$result['id']}'>Удалить</a></td>" .

             '</tr>';
      }
    ?>
      </table>
    <br><a href="index.html">На сайт</a>

</body>
</html>
