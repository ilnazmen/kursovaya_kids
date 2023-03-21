
<?php
    $link=mysqli_connect("localhost","id13700634_admin","0(l?TFLvaI(zJ2ES","id13700634_clients");
    if (!link)
    {
        echo "ошибка: невозможно устанавить соединение с БД.".PHP_EOL;
        exit;
    }

    mysqli_query($link, "INSERT INTO customers SET
    phone='".$_POST['phone']."',
    comments='".$_POST['comments']."',
    name='".$_POST['name']."'");
if (mysqli_affected_rows($link)>=0){
    echo "Сохранено";
}
else
{
    echo "Ошибка сохранения";
}
