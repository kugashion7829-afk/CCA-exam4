        </main>
        
        <footer>
            <div class="designWrap">
                <ul class="footerMenu">
                    <li><a class="zoom" href="<?= $basePath ?>/index.php">About Me</a></li>
                    <li><a class="zoom" href="<?= $basePath ?>/photograph.php">Photograph</a></li>
                    <li><a class="zoom" href="<?= $basePath ?>/activity.php">Activity</a></li>
                    <li><a class="zoom" href="<?= $basePath ?>/skill.php">Skill</a></li>
                    <li><a class="zoom" href="<?= $basePath ?>/link.php">Link</a></li>
                </ul>

                <div class="footerLogo"><img src="<?= $basePath ?>/images/ukatou.png"></div>

                <div class="SNS">
                    <a class="zoom" href="https://x.com/LioShishigami"><img src="<?= $basePath ?>/images/X.svg"></a>
                    <a class="zoom" href="https://github.com/kugashion7829-afk"><img src="<?= $basePath ?>/images/GitHubLogo.svg"></a>
                </div>
            
            </div>

            <div>
                <small>
                    本サイトに掲載する文章・写真・制作物のうち、私が権利を有するものの権利は私に帰属します。<br>
                    VRChat内で撮影した写真に含まれるワールド・アバター・その他のアセットの権利は、それぞれの権利者に帰属します。
                </small>
            </div>

        </footer>
        <?php require __DIR__ . '/app/imageModal.php'; ?>
        <script src="<?= $basePath ?>/scripts/script.js"></script>
    </body>

</html>