<div class="main-comments">
    <?php if ($dbQuery->rowCount() > 0) { 
        while ( $row = $dbQuery->fetch(PDO::FETCH_LAZY)) {
    ?>
    <div class="main-comment-block">
        <div class="main-comment-block-header">
            <div class="main-comment-block-header-name">
                <?=$row['name']?>
            </div>
            <div class="main-comment-block-header-info">
                <div class="main-comment-block-header-info-time">
                    <?=date("H:i", strtotime($row['date']))?>
                </div>
                <div class="main-comment-block-header-info-date">
                    <?=date("d.m.Y", strtotime($row['date']))?>
                </div>
            </div>
        </div>
        <div class="main-comment-block-text">
            <?=$row['comment']?>
        </div>
    </div>
    <?php } 
    } else { ?>
    <div class="main-comment-block">
        <h2>Комментариев не найдено...</h2>
    </div>
    <?php } ?>
</div>