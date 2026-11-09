<?php require __DIR__ . '/app/offsetPhoto.php'; 
require __DIR__ . '/app/offsetActivity.php';

require __DIR__ . '/header.php'; ?>

    <section id="linkSection" class="lightMove">
        <div class="designWrap">

            <div class="pageTitle">
                <h1>各種URL<span>等</span></h1>
                <h3>Link</h3>
            </div>

            <hr>

            <div id="links">

                <div class="fixedLinks">
                    <h2>SNS</h2>
                    <hr>
                    <ul>
                        <li><a>Xアカウント 獅子神リオ</a></li>
                        <li><a href="https://github.com/kugashion7829-afk">Github</a></li>
                    </ul>
                    <hr>
                </div>

                <div class="photoLinks">
                    <h2>PhotoGraph</h2>
                    <hr>
                    <ul>
                    <?php foreach ($photos as $photo): ?>
                        <li><a href="<?= htmlspecialchars($photo['url'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($photo['title'], ENT_QUOTES, 'UTF-8') ?> &nbsp; <?= htmlspecialchars($photo['date'], ENT_QUOTES, 'UTF-8') ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                    <hr>
                </div>

                <div class="activityLinks">
                    <h2>Activity</h2>
                    <hr>
                    <ul>
                    <?php foreach ($activities as $activity): ?>
                        <li><a href="<?= htmlspecialchars($activity['url'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8') ?> &nbsp; <?= htmlspecialchars($activity['date'], ENT_QUOTES, 'UTF-8') ?></a></li>
                    <?php endforeach;?>
                    </ul>
                    <hr>
                </div>
            </div>

        </div>

    </section>

<?php require __DIR__ . '/footer.php'; ?>