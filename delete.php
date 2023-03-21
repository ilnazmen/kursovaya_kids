   <?php
    $link=mysqli_connect("127.0.0.1","mysql","mysql","qwerty");
    if (!link)
    {
        echo "ошибка: невозможно устанавить соединение с БД.".PHP_EOL;
        exit;
    }
?>

   <br>
     <table border = 2>
            <tr>
                <td> Имя</td>
                <td> Пожелание</td>
                <td> Контакты</td>
                <td> Время отправки</td>
                <td> Результат заявки</td>
                <td> Действия</td>
                <td> Удаление</td>
            </tr>
      <?php
     $sql = mysqli_query($link, 'SELECT * FROM `er`');
      while ($result = mysqli_fetch_array($sql)) {
        echo
        '<tr>' .
             "<td>{$result['name']}</td>" .
             "<td>{$result['text']}</td>" .
            "<td>{$result['contacts']}</td>" .
             "<td>{$result['sendtime']}</td>" .
            "<td>{$result['result']}</td>" .
            "<td><a href='?red_id={$result['id']}'>Изменить</a></td>" .
             "<td><a href='delete.php'id=".$result['id']."'>Удалить</a></td>" .

             '</tr>';
      }
?>
      </table>

<?php
  if (isset($_GET['del_id'])) {
    $sql = mysqli_query($link, "DELETE FROM `er` WHERE `id` = {$_GET['del_id']}");
    if ($sql) {
      echo "<p>Строка удалена.</p>";
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
?>
<br><a href="i.php">Вернуться к списку книг</a>
