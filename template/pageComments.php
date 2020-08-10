<main class="main">
    <div class="wrapper">
        <?php showComments($dbConnect) ?>
        <hr>
        <div class="main-form">
            <form action="/" method="POST">
                <h2>Оставить комментарий</h2>
                <label for="name">Ваше имя</label>
                <input id="name" type="text" name="name" required>
                <label for="comment">Ваш комментарий</label>
                <textarea name="comment" id="comment" required></textarea>
                <input type="submit" name="send" value="Отправить">
            </form>
        </div>
    </div>
</main>