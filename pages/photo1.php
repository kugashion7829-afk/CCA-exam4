<?php require_once __DIR__ . '/../app/session.php';

date_default_timezone_set('Asia/Tokyo');

if (!isset($_SESSION['photo1_viewed_at'])) {
    $_SESSION['photo1_viewed_at'] = time();
}

require __DIR__ . '/../header.php'; ?>
<section id="photoSection" class="lightMove">
    <div id="foundMe" class="designWrap">

        <div class="photoTitle borderDesign">
            <div>
                <h2>私を見つけた日</h2>
                <h4>2026/10/07</h4>
            </div>
        </div>

        <div class="photoWrap borderDesign">
            <div>
                <img src="../images/foundMe.png">
            </div>
            <h2>記録 = <?= date('Y/m/d H:i:s', $_SESSION['photo1_viewed_at']) ?></h2>
        </div>

        <div class="photoInfo borderDesign">
            <div>
                <div class="gridDesign photo1">
                    <div>
                        <p>　私を見つけた日。それはあなたが私を見つけた日であり、私が私自身を見つけた日でもあります。<br>
                            下部に書かれた「記録 = 'Y/m/d H:i:s';」は記録という空の箱に日時を代入するというプログラミング言語と私独自の解釈を混ぜた副題です。<br>
                        </p>

                        <p>　元々カメラギミックIntegralを練習するために撮影した一枚でした。右の写真がレタッチ前です。<br>
                            そのため最初は16/9の比率で撮影していて、全体像を見せるには下半分があまりにも暗かったためトリミングをしてチェキ風に加工しました。
                        </p>

                        <p>　副題の「記録 = 'Y/m/d H:i:s';」は元からこうする予定でいたわけではありません。撮影後レタッチしている最中に思いつきました。<br>
                            他の方のチェキ風の写真を見ているとよく下部に文字やサインが書かれていることが多かったのでそれに倣う形ですね。<br>
                            私は自分のサインの持ち合わせがなかったため自分にできることで組み合わせたら面白いだろうと思いプログラミング言語を選択しました。<br>
                        </p>
                    </div>

                    <img src="../images/about.png">
                    
                    <div>
                        <p>記録 = <?= date('Y/m/d H:i:s', $_SESSION['photo1_viewed_at']) ?></p>
                    </div>

                    <div>
                        <p>あなたが私を見つけた日、それは<?= date('Y年m月d日 H時i分s秒', $_SESSION['photo1_viewed_at']) ?>でした。<br>
                        この記録は、Webサイトの都合上時間が経てば変わってしまいます。<br>
                        記録がなくなってしまったら、忘れてしまったら、また私を見つけてください。それがまた私を見つけた日になります。</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lighting"></div>

    </div>

    <div class="spotLight">
        <div></div>
        <div class="spotLightWrap">
            <div>
                <img src="../images/spotLight.png">
            </div>
            <div>
                <img src="../images/spotLight.png">
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . '/../footer.php'; ?>