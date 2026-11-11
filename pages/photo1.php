<?php

require_once __DIR__ . '/../app/session.php';
date_default_timezone_set('Asia/Tokyo');

$now = time();
$expireSeconds = 3 * 24 * 60 * 60;

if (isset($_SESSION['photo1_last_access'])) {
    $elapsed = $now - $_SESSION['photo1_last_access'];

    if ($elapsed >= $expireSeconds) {
        unset($_SESSION['photo1_viewed_at']);
    }
}

if (!isset($_SESSION['photo1_viewed_at'])) {
    $_SESSION['photo1_viewed_at'] = $now;
}

$_SESSION['photo1_last_access'] = $now;

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
                <img class="modalExTrigger buttonFrame" src="../images/foundMe.png">
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

                        <p>　元々カメラギミックIntegralを練習するために撮影した一枚でした。右の写真（スマホであれば下の写真）がレタッチ前です。<br>
                            そのため最初は16/9の比率で撮影していて、全体像を見せるには下半分があまりにも暗かったためトリミングをしてチェキ風に加工しました。
                        </p>

                        <p>　副題の「記録 = 'Y/m/d H:i:s';」は元からこうする予定でいたわけではありません。撮影後レタッチしている最中に思いつきました。<br>
                            他の方のチェキ風の写真を見ているとよく下部に文字やサインが書かれていることが多かったのでそれに倣う形ですね。<br>
                            私は自分のサインの持ち合わせがなかったため自分にできることで組み合わせたら面白いだろうと思いプログラミング言語を選択しました。<br>
                        </p>
                    </div>

                    <img class="modalTrigger buttonFrame" src="../images/foundMeBefore.jpg">
                    
                    <div>
                        <p>記録 = <span class="phrase"><?= date('Y/m/d H:i:s', $_SESSION['photo1_viewed_at']) ?></span></p>
                    </div>

                    <div>
                        <p>あなたが私を見つけた日、それは<?= date('Y年m月d日 H時i分s秒', $_SESSION['photo1_viewed_at']) ?>でした。<br>
                        この記録は、Webサイトの都合上時間が経てば変わってしまいます。<br>
                        記録がなくなってしまったら、忘れてしまったら、また私を見つけてください。それがまた私を見つけた日になります。</p>

                        <p>私が私自身を見つけた日、それは2026年10月7日でした。特別何かがあったわけではありません。けど私にとってここが原点だったのかなと思えます。<br>
                        学んできたプログラミング言語と写真が組み合わさったとき、私は私を見つけたように思いました。<br>
                        迷うことも多い関わり方かもしれません。ですが私はこれを好きだと思った。それだけでいいのかもしれません。</p>
                    </div>

                    <hr>

                </div>

                <div class="gridDesign miscDesign">

                    <div>
                        <h3>撮影環境</h3>
                        <ul class="misc">
                            <li><a class="underBar zoom" href="https://booth.pm/ja/items/4724145">【VRChat用】Integral カメラギミック</a></li>
                            <li><a class="underBar zoom" href="https://booth.pm/ja/items/5737352">【落ち影システム】ワールドにあなたの影を【Ochikage】</a></li>
                            <li><a class="underBar zoom" href="https://booth.pm/ja/items/5989814">【VRChatアバターギミック】AvatarPoseSystem</a></li>
                            <li><a class="underBar zoom" href="https://booth.pm/ja/items/4864776">【MA前提 ライティング調節ツール】 Light Limit Changer For MA v2</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3>撮影場所</h3>
                        <div class="misc">
                            <a class="underBar zoom" href="https://vrchat.com/home/launch?worldId=wrld_269fa2ee-33e6-4505-b44f-fd1b3e4b6262">小雨のあの日-A drizzly day</a>
                        </div>
                    </div>

                    <div>
                        <h3>撮影メモ</h3>
                        <div class="misc">
                            <p>アバターが陽光を受け影ができる方向に落ち影を設定。細かい設定はごめん覚えてない</p>
                            <p>この時はIntegralのAFの使い方がわかっていなかったためMFでどうにかApertureを設定してました。多分25%とか<br>
                            この時、落ち影システムとIntegralが相性悪いのに気づけてなくて露光はLightenかMovieしか使用できなかった。なのでMovieで露光しました。</p>
                        </div>
                    </div>

                    <div>
                        <h3>編集環境</h3>
                        <ul class="misc">
                            <li><a class="underBar zoom" href="https://www.clipstudio.net/ja/">ClipStudioPaintEX</a></li>
                            <li><a>Windows内蔵フォト</a></li>
                        </ul>
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