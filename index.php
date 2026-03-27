<?php
// Данные для главной страницы
$pageTitle = 'Главная | Курс PHP-разработчик';

// Массив с уроками
$lessons = [
    [
        'title' => 'Введение в PHP',
        'description' => 'Основы языка: синтаксис, переменные, типы данных. Первый скрипт "Hello, World!"',
        'link' => 'lessons/01_lesson/01_lesson.php'
    ],
    [
        'title' => 'Переменные и типы данных',
        'description' => 'Изучаем переменные, строки, числа, массивы и объекты. Работа с типами данных.',
        'link' => 'lessons/02_lesson/02_lesson.php'
    ],
    [
        'title' => 'Условные операторы',
        'description' => 'if, else, elseif, switch. Учимся принимать решения в коде.',
        'link' => 'lessons/03_lesson/03_lesson.php'
    ],
    [
        'title' => 'Циклы',
        'description' => 'for, while, foreach. Итерация и работа с массивами данных.',
        'link' => 'lessons/04_lesson/04_lesson.php'
    ],
    [
        'title' => 'Функции',
        'description' => 'Создание и использование функций. Области видимости, параметры, возврат значений.',
        'link' => 'lessons/05_lesson.php'
    ],
    [
        'title' => 'Работа с формами',
        'description' => 'GET и POST запросы. Обработка данных из HTML-форм.',
        'link' => 'lessons/06_lesson.php'
    ],
    [
        'title' => 'Работа с базами данных',
        'description' => 'Подключение к MySQL, выполнение запросов, работа с результатами.',
        'link' => 'lessons/07_lesson.php'
    ]
];

// Подключаем шапку
include 'templates/header.php';
?>

<!-- Hero блок -->
<div class="hero">
    <h1>📚 Курс PHP-разработчик</h1>
    <p>Академия вёрстки и дизайна<br>Путь от новичка до профессионала</p>
    <div class="badge">Всего уроков: <?php echo count($lessons); ?></div>
</div>

<!-- Секция с уроками -->
<div class="lessons-section">
    <h2>📖 Содержание курса</h2>
    
    <div class="lessons-grid">
        <?php foreach ($lessons as $index => $lesson): ?>
        <div class="lesson-card">
            <div class="lesson-number"><?php echo $index + 1; ?></div>
            <h3><?php echo htmlspecialchars($lesson['title']); ?></h3>
            <p><?php echo htmlspecialchars($lesson['description']); ?></p>
            <a href="<?php echo $lesson['link']; ?>" class="lesson-link">Перейти к уроку →</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
// Подключаем подвал
include 'templates/footer.php';
?>