<?php

$schedule = array(
    array("Математика", "Русский язык", "Физика"),
    array("Литература", "Английский язык", "Химия"),
    array("Физкультура", "История", "Биология"),
    array("География", "Информатика", "Изобразительное искусство"),
    array("Обществознание", "Технология", "Музыка")
);

$days_of_week = array("Понедельник", "Вторник", "Среда", "Четверг", "Пятница");

foreach ($days_of_week as $day_index => $day) {
    echo $day . "\n";
    foreach ($schedule[$day_index] as $lesson_index => $lesson) {
        echo "  Урок " . ($lesson_index + 1) . ": " . $lesson . "\n";
    }
}

?>