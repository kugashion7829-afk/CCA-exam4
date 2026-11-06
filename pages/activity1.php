<?php require __DIR__ . '/../header.php'; ?>
<section id="acitivitiesSection" class="lightMove">
    <div id="portfolio" class="designWrap">

        <div class="activeTitle borderDesign">
            <div>
                <!-- この中にタイトルを追加 -->

                <h2>ポートフォリオサイト</h2>
                <h3>2026/08/24</h3>
            </div>
        </div>

        <div class="activeInfo borderDesign">
            <div>
                <div class="gridDesign active1">
                    <!-- この中に要素を追加 -->

                    <div>
                        <h4>使用言語：HTML,CSS,JavaScript</h4>
                        <h4>制作時間：60時間</h4>
                        <h4>制作：個人制作</h4>
                        <h4>URL：<a class="underBar" href="https://liolion.s325.xrea.com">liolion.s325.xrea.com</a></h4>
                    </div>

                    <p class="flex">2026年8月18日から同年8月24日にかけて制作したポートフォリオサイトです。<br>
                    初めてのポートフォリオ作成ということもあり、何を実装するべきなのかとても迷った記憶があります。<br>
                    その際に、Web上に公開されている人が作成したポートフォリオサイトを拝見させていただき、感銘を受けたものを参考にし、自分なりにアレンジを加え作成しました。</p>

                    <div class="flex">
                        <h3>制作工程１</h3>
                        <h4>ページ制作の大本</h4>
                    </div>

                    <div>
                        <img class="image" src="../images/portfolio2.png">
                    </div>

                    <p class="flex">&rarr;</p>

                    <div>
                        <img class="image" src="../images/portfolio2-2.png">
                    </div>

                    <p class="flex">&rarr;</p>

                    <div>
                        <img class="image" src="../images/portfolio3.png">
                    </div>
                    
                    <div>
                        <p>このサイトでは、基本的にページの遷移なしで見れることを目標に制作しました。そのためページ上で表示するものを切り替える必要がありました。<br>
                        上に並んでいる画像はページ内で表示するものを切り替える際に発生するアニメーションです。ページを格子状に分割し、順番に切り替わるようにしています。<br>
                        要素の出し入れやアニメーションはどちらもJavaScriptで制御を行っています。右にソースコードを一部掲載しておきます。</p>

                        <p>内容ごとに異なる名称を付与し、JavaScriptでそれを呼び出すことでページの切り替えをしています。また現在のページの管理なども同時に行っていて意図しない遷移が発生しないようにしています。</p>

                        <p>またページに掲載されるものが多い場合はその場でスクロールできるようにしています。そのためページのレイアウト自体はずっと同じですが違う掲載物が見れるという感じになっています。</p>
                    </div>

                    <div>
                        <pre><code>
function pageVisible (pageNumber) {

    const about = document.querySelector('.aboutSection');
    const gallery = document.querySelector('.gallerySection');
    const link = document.querySelector('.linkSection');
    const skill = document.querySelector('.skillSection');
    const section = [about,gallery,skill,link];

    // 非表示処理
    section.forEach(function (item , index) {
        item.classList.add('unVisible');
        setTimeout(function () {
            item.classList.remove('displayNone');
        }, 100);

    // 表示処理
        if (pageNumber === index) {
            setTimeout(function () {
            item.classList.remove('unVisible');
            }, 300);
        } ;
    });

    setTimeout(function () {
        
    if (currentIndex !== null) {
        section.forEach(function (item, index) {
            if(pageNumber !== index){
                item.classList.add('displayNone');
            }
        })
    } else {
        section.forEach(function (item,index) {
            if(index !== 0) {
                item.classList.add('displayNone');
            };
        });
    };

    }, 400)

    // 現在表示しているページを管理
    setTimeout(function () {
        currentIndex = pageNumber;
    }, 450)
}
                        </code></pre>
                    </div>
                    
                    <div class="flex">
                        <h3>制作工程２</h3>
                        <h4>ページごとの掲載物</h4>
                    </div>

                    <div>
                        <img class="image" src="../images/portfolio1.png">
                    </div>

                    <div>
                        <h4>1.ABOUT ME</h4>
                        <div class="textLayout">
                            <p>1ぺージ目では軽い自己紹介をしています。<br>
                            本名、趣味、VRChatで活動していることなど</p>
                            <p>自身がどういったことを培ったのか自身がどういった信条を持っているのかも少し書いています。</p>
                            <p>デザインはできるだけシンプルに目線を自然とタイトルから文章へ、余計な誘導をせずただ下へ見てもらうだけでよいように意識しています。</p>
                        </div>
                    </div>

                    <div>
                        <img class="image" src="../images/portfolio2.png">
                    </div>

                    <p class="flex">&rarr;</p>

                    <div>
                        <img class="image" src="../images/portfolio2-3.png">
                    </div>

                    <div>
                        <h4>2.GALLERY</h4>
                        <div class="textLayout">
                            <p>
                                VRChatで撮影した写真を６つ掲載しています。
                            </p>
                        </div>
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