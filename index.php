<?php
// Данные для главной страницы
$pageTitle = 'Главная | Курс PHP-разработчик';

// Массив с уроками
$lessons = [
    [
        'title' => 'Урок 1',
        'description' => 'Переменные, операторы',
        'link' => 'lessons/01_lesson/01_lesson.php'
    ],
    [
        'title' => 'Урок 2',
        'description' => 'Типы данных, условия и циклы.',
        'link' => 'lessons/02_lesson/02_lesson.php'
    ],
    [
        'title' => 'Урок 3',
        'description' => 'Описание',
        'link' => 'lessons/03_lesson/03_lesson.php'
    ],
    [
        'title' => 'Урок 4',
        'description' => 'Описание',
        'link' => 'lessons/04_lesson/04_lesson.php'
    ],
    
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