<?php

// Получаем текущий день недели
$dayOfWeek = date('N'); // 1 (понедельник) - 7 (воскресенье)

// Определяем график работы
$johnSchedule = in_array($dayOfWeek, [1, 3, 5]) ? '8:00-12:00' : 'Нерабочий день';
$janeSchedule = in_array($dayOfWeek, [2, 4, 6]) ? '12:00-16:00' : 'Нерабочий день';

// Выводим таблицу
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>№</th><th>Фамилия Имя</th><th>График работы</th></tr>";
echo "<tr><td>1</td><td>John Styles</td><td>$johnSchedule</td></tr>";
echo "<tr><td>2</td><td>Jane Doe</td><td>$janeSchedule</td></tr>";
echo "</table>";


$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
   $a += 10;
   $b += 5;
}

echo "End of the loop: a = $a, b = $b"; 


$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
   $a += 10;
   $b += 5;
   
   echo "Step $i: a = $a, b = $b<br>";
}

echo "End of the loop: a = $a, b = $b";


$a = 0;
$b = 0;
$i = 0;

while ($i <= 5) {
   $a += 10;
   $b += 5;
   
   echo "Step $i: a = $a, b = $b<br>";
   
   $i++;
}

echo "End of the loop: a = $a, b = $b";


$a = 0;
$b = 0;
$i = 0;

do {
   $a += 10;
   $b += 5;
   
   echo "Step $i: a = $a, b = $b<br>";
   
   $i++;
} while ($i <= 5);

echo "End of the loop: a = $a, b = $b";
?>
