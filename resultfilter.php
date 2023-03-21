   <!doctype html>
<html lang="ru">
<head>
  <title>ТаблицаSQL</title>
</head>
<body>
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
            </tr>
      <?php
      $row=mysqli_query($link,"SELECT * FROM `er` ORDER BY result DESC ");
            while ($stroka=mysqli_fetch_array($row))
            {
                echo "<tr>";
                echo "<td>".$stroka['name']."</td>";
                echo "<td>".$stroka['text']."</td>";
                echo "<td>".$stroka['contacts']."</td>";
                 echo "<td>".$stroka['sendtime']."</td>";
                 echo "<td>".$stroka['result']."</td>";
                echo "<td><a href='edit.php'id=".$stroka['id']."'>Редактировать</a></td>";
               echo "</tr>";
            }
            mysqli_close($link);
            ?>
      </table>
    <br><a href="index.html">На сайт</a>
    <a href="edit.php">Обратно</a>
    <a href="timefilter.php">Сортировка по времени</a>

</body>
</html>
