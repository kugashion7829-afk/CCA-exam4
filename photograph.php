<?php require __DIR__ . '/app/offsetPhoto.php'; ?>

<?php require __DIR__ . '/header.php'; ?>

<section id="photographSection">
    <div>
        <div class="shadows titleLighting">
            <div class="pageTitle">
                <h1>写<span>真</span>一覧</h1>
                <h3>photograph</h3>
            </div>

            <nav aria-label="写真一覧のページ切り替え">
                <?php if ($page > 1): ?>
                    <a href="?page=<?= $page - 1 ?>">前へ</a>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <?php if ($i === $page): ?>
                        <span aria-current="page"><?= $i ?></span>
                    <?php else: ?>
                        <a href="?page=<?= $i ?>"><?= $i ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
                <?php if ($page < $totalPages): ?>
                    <a href="?page=<?= $page + 1 ?>">次へ</a>
                <?php endif; ?>
            </nav>
            
            <hr>
        </div>

        <div class="photograph">
            <?php foreach ($visiblePhotos as $photo): ?>
                <div class="exhibit <?= htmlspecialchars($photo['css'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                    <div class="fixtureTrack">
                        <div class="spotLight">
                            <div></div>
                            <div class="spotLightWrap">
                                <div>
                                    <img src="./images/spotLight.png">
                                </div>
                                <div>
                                    <img src="./images/spotLight.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="exhibitSurface">
                        <div class="borderDesign photoWrap"><a href="<?= htmlspecialchars($photo['url'], ENT_QUOTES, 'UTF-8') ?>"><img class="buttonFrame" src="<?= htmlspecialchars($photo['image'], ENT_QUOTES, 'UTF-8') ?>"></a></div>
                        <div class="borderDesign photoTitle"><a href="<?= htmlspecialchars($photo['url'], ENT_QUOTES, 'UTF-8') ?>"><h4 class="zoom"><?= htmlspecialchars($photo['title'], ENT_QUOTES, 'UTF-8') ?></h4></a></div>
                        <div class="lighting"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="shadows">
            <nav aria-label="写真一覧のページ切り替え">
                <?php if ($page > 1): ?>
                    <a href="?page=<?= $page - 1 ?>">前へ</a>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <?php if ($i === $page): ?>
                        <span aria-current="page"><?= $i ?></span>
                    <?php else: ?>
                        <a href="?page=<?= $i ?>"><?= $i ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
                <?php if ($page < $totalPages): ?>
                    <a href="?page=<?= $page + 1 ?>">次へ</a>
                <?php endif; ?>
            </nav>
        </div>

    </div>

</section>

<?php require __DIR__ . '/footer.php'; ?>