<?php
$elements = [];
while (FALSE !== ($line = fgets(STDIN))) {
  $elements[] = trim($line);
}
$elements = [
    'John' => ['math' => 90, 'english' => 95, 'science' => 85],
    'Jane' => ['math' => 80, 'english' => 85, 'science' => 90],
    'Jim'  => ['math' => 95, 'english' => 80, 'science' => 85]
];
foreach ($elements as $name => $scores) {
    echo "<p>{$name}: ";
    foreach ($scores as $subject => $grade) {
        echo "{$subject} = {$grade}, ";
    }
    $average = array_sum($scores) / count($scores);
    $average = (int) $average;
    echo "</p><p>average = {$average}</p>";
}
?>