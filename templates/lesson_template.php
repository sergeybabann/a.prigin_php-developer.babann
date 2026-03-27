<?php
// Этот файл - шаблон для всех уроков
// Переменные, которые должны быть определены перед подключением:
// $pageTitle - заголовок страницы
// $lessonNumber - номер урока
// $lessonTitle - название урока
// $lessonContent - содержимое урока (HTML)
// $prevLesson - ссылка на предыдущий урок (или null)
// $nextLesson - ссылка на следующий урок (или null)

// Подключаем шапку (используем __DIR__ для правильного пути)
include __DIR__ . '/header.php';
?>

<div class="lesson-container">
    <h1>📘 Урок <?php echo $lessonNumber; ?>: <?php echo htmlspecialchars($lessonTitle); ?></h1>
    
    <div class="lesson-content">
        <?php echo $lessonContent; ?>
    </div>
    
    <div class="lesson-nav">
        <!-- Кнопка "На главную" слева -->
        <a href="/index.php" class="nav-home">🏠 На главную</a>
        
        <!-- Группа кнопок навигации по урокам (прижаты друг к другу) -->
        <div class="nav-lessons-group">
            <?php if ($prevLesson): ?>
                <a href="<?php echo $prevLesson; ?>" class="nav-prev">← Предыдущий урок</a>
            <?php endif; ?>
            
            <?php if ($nextLesson): ?>
                <a href="<?php echo $nextLesson; ?>" class="nav-next">Следующий урок →</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
// Подключаем подвал (используем __DIR__ для правильного пути)
include __DIR__ . '/footer.php';
?>