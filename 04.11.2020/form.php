<link rel="stylesheet" href="style.css" type="text/css">
<form style="display: flex" action="/handler.php" method="post">
    <h3>Введите текст:</h3>
    <input type="text" placeholder="Текст" name="randomText" class="text">
    <h3>Выберите № функции:</h3>
    <input type="text" placeholder="1" name="numberOfFunction" class="functions">
    <button type="submit">Отправить</button>
    <div class="description">
        <h3>Описание функций:</h3>
        <p>1) Убирает пробелы в тексте.</p>
        <p>2) Выводит на экран все слова длина которых не менее трёх символов и не более пяти.</p>
        <p>3) Является ли текст палиндромом.</p>
        <p>4) Находит самое длинное слово и выводит его на экран. Случай, когда самых длинных слов может быть несколько,
            не обрабатывает.
        </p>
        <p>5) Считает количество строчных и прописных букв в строке.</p>
    </div>
</form>