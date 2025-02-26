<?php
// Получаем текущий день недели (например, "Monday", "Tuesday" и т. д.)
$dayOfWeek = date("l");

// Определяем расписание для сотрудников
$schedule = [
    "John Styles" => in_array($dayOfWeek, ["Monday", "Wednesday", "Friday"]) ? "8:00-12:00" : "Нерабочий день",
    "Jane Doe" => in_array($dayOfWeek, ["Tuesday", "Thursday", "Saturday"]) ? "12:00-16:00" : "Нерабочий день"
]; ?>

// Генерация HTML-таблицы с расписанием 
<table border='1' cellpadding='5' cellspacing='0'>
    <tr>
        <th>№</th>
        <th>Фамилия Имя</th>
        <th>График работы</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo ("John Styles"); ?></td>
        <td><?php echo ($schedule["John Styles"]); ?></td>
    </tr>

    <tr>
        <td>2</td>
        <td><?php echo ("Jane Doe"); ?></td>
        <td><?php echo ($schedule["Jane Doe"]); ?></td>
    </tr>

</table><br>;
<?php
// Инициализация переменных
$a = 0;
$b = 0;

// Цикл for
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
}
echo "<strong>End of the loop:</strong> a = $a, b = $b<br><br>";

// Добавляем вывод промежуточных значений в for
$a = 0;
$b = 0;
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
}
echo "<strong>Конец цикла:</strong> a = $a, b = $b<br><br>";

// Переписываем с использованием while
$a = 0;
$b = 0;
$i = 0;
while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
    $i++;
}
echo "<strong>Конец цикла:</strong> a = $a, b = $b<br><br>";

// Переписываем с использованием do-while
$a = 0;
$b = 0;
$i = 0;
do {
    $a += 10;
    $b += 5;
    echo "Шаг $i: a = $a, b = $b<br>";
    $i++;
} while ($i <= 5);
echo "<strong>Конец цикла:</strong> a = $a, b = $b<br>";
?>
