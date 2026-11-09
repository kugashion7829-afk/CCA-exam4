<?php require __DIR__ . '/app/offsetSkill.php';
require __DIR__ . '/header.php'; ?>

    <section id="skillSection">
        <div class="designWrap">
            
            <div class="pageTitle">
                <h1>できること</h1>
                <h3>skill</h3>
            </div>

            <hr>

            <div id="skills">

            <?php foreach($skills as $skill): ?>
                <div>
                    <h2><?= htmlspecialchars($skill['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <div>
                        <h4><?= htmlspecialchars($skill['subtitle'], ENT_QUOTES, 'UTF-8') ?></h4>
                        <p><?= htmlspecialchars($skill['text'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>

        </div>

    </section>

<?php require __DIR__ . '/footer.php'; ?>