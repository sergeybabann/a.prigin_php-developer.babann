<?php
// Данные для урока
$pageTitle = 'Урок 1: Переменные и операторы';
$lessonNumber = 1;
$lessonTitle = 'Переменные и операторы';

// Навигация
$prevLesson = null;
$nextLesson = '../02_lesson/02_lesson.php';

// Содержимое урока (HTML)
$lessonContent = '
    <div class="container">
    <ul>
    <li>Переменные</li>
    <li>Операторы</li>
    </ul>
    </div>
    
    <h2>Практическое  выполнение кода</h2>
    <a href="01_variables-practice.php" target="_blank">🔗 Переменные →</a>
    <a href="01_operators-practice.php" target="_blank">🔗 Операторы →</a>
';

// Подключаем шаблон урока
include '../../templates/lesson_template.php';
?>