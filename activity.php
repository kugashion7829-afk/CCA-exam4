<?php 
require __DIR__ . '/app/offsetActivity.php';
require __DIR__ . '/header.php'; ?>

    <section id="activitySection" class="lightMove">
        <div class="designWrap">

            <div class="pageTitle">
                <h1>活動<span>報</span>告</h1>
                <h3>Activity</h3>
            </div>

            <hr>

            <div class="activity">

            <?php foreach ($activities as $activity): ?>
                <div class="activeWrap borderDesign">
                    <a href="<?= htmlspecialchars($activity['url'], ENT_QUOTES, 'UTF-8') ?>">
                        <div class="activeMisc">
                            <h4><?= htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8') ?></h4>
                            <div>
                                <?php foreach ($activity['description'] as $paragraph): ?>
                                    <p><?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8') ?></p>
                                <?php endforeach; ?>
                            </div>
                            <div>
                                <p>制作時間：<?= htmlspecialchars($activity['duration'], ENT_QUOTES, 'UTF-8' ) ?></p>
                            </div>
                        </div>

                        <div class="photoWrap">
                            <img src="<?= htmlspecialchars($activity['image'], ENT_QUOTES, 'UTF-8') ?>">
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

            </div>

            <div class="lighting"></div>

        </div>

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
    </section>

<?php require __DIR__ . '/footer.php'; ?>