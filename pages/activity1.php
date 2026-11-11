<?php require __DIR__ . '/../header.php'; ?>
<section id="activitiesSection">
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

                    <div class="projectFacts">
                        <h4>使用言語：HTML,CSS,JavaScript</h4>
                        <h4>制作時間：60時間</h4>
                        <h4>制作：個人制作</h4>
                        <h4>URL：<a class="underBar" href="https://liolion.s325.xrea.com">liolion.s325.xrea.com</a></h4>
                    </div>

                    <p class="projectIntro flex">2026年8月18日から同年8月24日にかけて制作したポートフォリオサイトです。<br>
                    初めてのポートフォリオ作成ということもあり、何を実装するべきなのかとても迷った記憶があります。<br>
                    その際に、Web上に公開されている人が作成したポートフォリオサイトを拝見させていただき、感銘を受けたものを参考にし、自分なりにアレンジを加え作成しました。</p>

                    <div class="structureHeading flex">
                        <h3>制作工程１</h3>
                        <h4>ページ制作の大本</h4>
                    </div>

                    <div class="transitionImages">
                        <div class="imageWrap">
                            <img class="image modalTrigger" src="../images/portfolio2.jpg">
                        </div>

                        <p class="flex">&rarr;</p>

                        <div class="imageWrap">
                            <img class="image modalTrigger" src="../images/portfolio2-2.jpg">
                        </div>

                        <p class="flex">&rarr;</p>

                        <div class="imageWrap">
                            <img class="image modalTrigger" src="../images/portfolio3.jpg">
                        </div>
                    </div>
                    
                    <div class="structureDescription">
                        <p>このサイトでは、基本的にページの遷移なしで見れることを目標に制作しました。そのためページ上で表示するものを切り替える必要がありました。<br>
                        上に並んでいる画像はページ内で表示するものを切り替える際に発生するアニメーションです。ページを格子状に分割し、順番に切り替わるようにしています。<br>
                        要素の出し入れやアニメーションはどちらもJavaScriptで制御を行っています。右にソースコードを一部掲載しておきます。</p>

                        <p>内容ごとに異なる名称を付与し、JavaScriptでそれを呼び出すことでページの切り替えをしています。また現在のページの管理なども同時に行っていて意図しない遷移が発生しないようにしています。</p>

                        <p>またページに掲載されるものが多い場合はその場でスクロールできるようにしています。そのためページのレイアウト自体はずっと同じですが違う掲載物が見れるという感じになっています。</p>
                    </div>

                    <div class="transitionCode">
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
                    
                    <div class="pagesHeading flex">
                        <h3>制作工程２</h3>
                        <h4>ページごとの掲載物</h4>
                    </div>

                    <div class="aboutImage imageWrap">
                        <img class="image modalTrigger" src="../images/portfolio1.jpg">
                    </div>

                    <div class="aboutDescription">
                        <h4>1.ABOUT ME</h4>
                        <div class="textLayout">
                            <p>1ぺージ目では軽い自己紹介をしています。<br>
                            本名、趣味、VRChatで活動していることなど</p>
                            <p>自身がどういったことを培ったのか自身がどういった信条を持っているのかも少し書いています。</p>
                            <p>デザインはできるだけシンプルに目線を自然とタイトルから文章へ、余計な誘導をせずただ下へ見てもらうだけでよいように意識しています。</p>
                        </div>
                    </div>

                    <div class="galleryImages">
                        <div class="imageWrap">
                            <img class="image modalTrigger" src="../images/portfolio2.jpg">
                        </div>

                        <p>&rarr;</p>

                        <div class="imageWrap">
                            <img class="image modalTrigger" src="../images/portfolio2-3.jpg">
                        </div>
                    </div>

                    <div class="galleryDescription">
                        <h4>2.GALLERY</h4>
                        <div class="textLayout">
                            <p>
                                VRChatで撮影した写真を６つ掲載しています。本当であれば、より多くを掲載したかったのですが当時の技術力と制作時間ではそこまで手を回しきれませんでした。
                            </p>
                            <p>
                                写真はクリックするとモーダルウィンドウが開き、拡大表示することができます。モーダルウィンドウはJavaScriptで制作しています。<br>
                                モーダルウィンドウは職業訓練を通して以前の演習で作成したことがあったのでそれを再度使用してみました。
                            </p>
                        </div>
                    </div>

                    <div class="skillImages">
                        <div class="imageWrap">
                            <img class="image modalTrigger" src="../images/portfolio3.jpg">
                        </div>

                        <div class="imageWrap">
                            <img class="image modalTrigger" src="../images/portfolio3-2.jpg">
                        </div>
                    </div>

                    <div class="skillDescription">
                        <h4>3.SKILL</h4>
                        <div class="textLayout">
                            <p>
                                私がこういうことができると自負しているもの、それについての考えをまとめています。<br>
                                HTML,CSS,JavaScript,ClipStudio,Unity,Blenderの６つについて記載しています。<br>
                                このサイトを作成した時よりも、能力が伸びているので今ならより書けることがあると思います。
                            </p>

                            <p>
                                ページの仕様上、画面のスクロールをさせたくなかったので画面中央の能力について記載している部分だけスクロールするように調整しました。<br>
                                結局スクロールすることになってしまっているので、次似たデザインを行うときはボタン形式で見れるものが切り替わる仕様にしたいです。<br>
                                また、今のデザインでは視覚的にスクロールできるのかどうかわからなくなってしまっていてユーザビリティに欠けるのでそこも改善したいです。
                            </p>
                        </div>
                    </div>

                    <div class="linkImages">
                        <div class="imageWrap">
                            <img class="image" src="../images/portfolio4.jpg">
                        </div>

                    </div>

                    <div class="linkDescription">
                        <h4>4.LINK</h4>
                        <div class="textLayout">
                            <p>
                                過去に職業訓練などで制作したWebサイトのリンクが載っています。こちらもSKILLと同様にスクロールできるようになっていますが、わかりづらいため次回以降そこは改善を行いたいと考えています。<br>
                                画像をクリックすることで該当のサイトへ遷移することができます。それに加えて小さく各サイトのソースコードを見れるGitHubの遷移URLも付属させています。
                            </p>
                        </div>
                    </div>

                    <div class="afterHeading flex">
                        <h3>総評</h3>
                    </div>

                    <div class="afterWord">
                        <p>
                            このポートフォリオサイトを制作して感じたのはデザインを追求するあまり、ユーザビリティや視認性を蔑ろにしてしまったなという感想でした。当初、ページが切り替わるデザインがかっこいいからという単純な動機で作り始めたはいいものの思った以上に難しくレスポンシブ対応など対応できなくなってしまった部分が大いにありました。<br>
                            それでも望んだデザインを追求することはやはり面白いと感じました。シンプルかつ出来るだけデザインを損なわないよう考え制作を行った経験はとても素晴らしいものだったと思っています。<br>
                            この経験は次回以降、新しいWebサイトを制作する際に活かしていけたらいいなと考えています。
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>

</section>
<?php require __DIR__ . '/../footer.php'; ?>