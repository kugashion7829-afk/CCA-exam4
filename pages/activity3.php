<?php require __DIR__ . '/../header.php'; ?>
<section id="activitiesSection">
    <div id="portfolio" class="designWrap">

        <!-- 額縁 -->
        <div class="activeTitle borderDesign">
            <!-- フレーム -->
            <div>
                <!-- この中にタイトルを追加 -->

                <h2>架空の旅行案内サイト</h2>
                <h3>2026/08/10</h3>
            </div>
        </div>

        <!-- 額縁 -->
        <div class="activeInfo borderDesign">
            <!-- フレーム -->
            <div class="canvasTexture">
                
                <!-- 下地 -->
                <div class="active3">
                    <!-- この中に要素を追加 -->

                    <div class="projectFacts media">
                        <h4>使用言語：HTML,CSS,JavaScript</h4>
                        <h4>制作時間：80時間</h4>
                        <h4>制作：グループ制作</h4>
                        <h4>URL：<a class="underBar" href="https://liolion.s325.xrea.com/works/taiwanKanko/index.html">TaiwanKanko</a></h4>
                    </div>
                    
                    <div class="projectIntro media">
                        <p>
                            職業訓練を通してJavaScriptを習い、2回目の制作演習です。前回のDesignHouseRenovationでは、個人での制作でしたが今回の演習ではグループでの制作でした。
                        </p>
                        <p>
                            グループ演習にあたり、私がリーダーを務めました。矢面に立つのが得意な質では決してないのですが、これも経験かなと思い挑戦してみることにしました。不甲斐ないリーダーであったかもしれませんがそれでも、メンバーと協力して無事演習を終える事ができたと思います。
                        </p>
                    </div>

                    <div class="structureHeading flex media">
                        <h3>制作工程１</h3>
                        <h4>ページ制作の大本</h4>
                    </div>

                    <div class="structureDescription designAttach">
                        <h4>JavaScriptをどう用いるのか</h4>
                        <div>
                            <p>
                                チームでの制作を行うにあたり、私は初めにどういったことをしておけばチーム全体として効率がいいのかを考えました。<br>
                                そこで私が考えたのはJavaScriptを用いて共通部分をDOM操作で個々人のページに作成するというものでした。PHPを習った後から考えると、この仕様にしたのはある程度理にかなっていたのかなと思っています。<br>
                                PHPと違ってJavaScriptのDOM操作で生成される分保守のしにくさは大いにありました。多分チームの中でちゃんと保守できてたのは開発者の私だけだったのではないかと思います。
                                ですが結果として全体のペースは上がったのかなと感じました。メンバー個人がそれぞれのページにあるものに集中できていたと思います。
                            </p>
                        </div>
                    </div>

                    <div class="structureImage">
                        <img class="image modalTrigger cornerFrame" src="../images/taiwan1.jpg" alt="観光案内サイトのTOPページが掲載されています">
                    </div>

                    <div class="scriptCode">
                        <h4>JavaScriptのコード</h4>
                        <pre class="cornerFrame">
                            <code>
// 必要な定数の宣言
const footer = document.querySelector('footer');
const header = document.querySelector('header');
const body = document.querySelector('body');
const navi = ['TOP', '台北', '台中', '台南', '当サイトのポリシー', 'お問い合わせ'];
const navi2 = ['TOPへもどる', '台北', '台中', '台南', '当サイトのポリシー', 'お問い合わせ'];
const gation = ['index.html', 'taipei/index.html', 'taichu/index.html', 'tainan/index.html']
const notGation = ['topPage', 'taipei', 'taichu', 'tainan']
const topPage = document.getElementById('topPage');
const taipeiPage = document.getElementById('taipei');
const taichuPage = document.getElementById('taichu');
const tainanPage = document.getElementById('tainan');
const headerInner = document.createElement('div');
const separateDiv = document.createElement('div');
const pageTop = document.createElement("button");
const buttonImage = document.createElement('img');
pageTop.id = ('pageTop');
header.appendChild(headerInner);
headerInner.classList.add('headerInner');
headerInner.appendChild(separateDiv);
separateDiv.classList.add('separateDiv');

// header,footerを作る関数
function menu() {
    if (header) {
        const nav = document.createElement('nav');
        const ul = document.createElement('ul');
        header.appendChild(nav);
        nav.appendChild(ul);
        nav.classList.add('menu');
        if (taipeiPage) {
            nav.classList.add('taipeiMenu')
        } else if (taichuPage) {
            nav.classList.add('taichuMenu')
        } else if (tainanPage) {
            nav.classList.add('tainanMenu')
        }
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.remove(('moveDis'));
                nav.classList.add('move');
            } else {
                nav.classList.remove('move');
                nav.classList.add('moveDis');
            }
        });
        ul.classList.add('menuUl');
        const menuList = document.createElement('li');
        const picture = document.createElement('picture');
        const source = document.createElement('source');
        picture.appendChild(source);
        ul.appendChild(menuList);
        menuList.textContent = 'MENU';
        menuList.classList.add('menuList');

        //headerの背景画像を作成
        if (topPage) {
            const heroImage = document.createElement('img');
            header.appendChild(picture);
            picture.appendChild(source);
            picture.appendChild(heroImage);
            source.media = '(min-width:376px)';
            source.srcset = './images/heroImg2.jpg';
            heroImage.src = './images/heroImg.jpg';
        } else if (taipeiPage) {
            const heroImage = document.createElement('img');
            header.appendChild(picture);
            picture.appendChild(source);
            picture.appendChild(heroImage);
            source.media = '(min-width:376px)';
            source.srcset = '../common/images/heroTaipei2.jpg';
            heroImage.src = '../common/images/heroTaipei.jpg';
            const p = document.createElement('p')
            separateDiv.appendChild(p);
            p.classList.add('flavor')
            p.textContent = '台北市は台湾の中心地です。活気にあふれる街台北ではさまざまな建物、台北を生きる人の美しい風景を見ることができます。';
        } else if (taichuPage) {
            const heroImage = document.createElement('img');
            header.appendChild(picture);
            picture.appendChild(source);
            picture.appendChild(heroImage);
            source.media = '(min-width:376px)';
            source.srcset = '../common/images/heroTaichu2.jpg';
            heroImage.src = '../common/images/heroTaichu.jpg';
            const p = document.createElement('p')
            separateDiv.appendChild(p);
            p.classList.add('flavor')
            p.textContent = '台湾で2番目の大都市を誇る台中市。台中市は台湾中部の台中盆地にあり、いくつもの河川が台中市の中心地を貫いています。'
        } else if (tainanPage) {
            const heroImage = document.createElement('img');
            header.appendChild(picture);
            picture.appendChild(source);
            picture.appendChild(heroImage);
            source.media = '(min-width:376px)';
            source.srcset = '../common/images/heroTainan2.jpg';
            heroImage.src = '../common/images/heroTainan.jpg';
            const p = document.createElement('p')
            separateDiv.appendChild(p);
            p.classList.add('flavor')
            p.textContent = '台湾の古都「台南」台南はお寺などの史跡巡りや、リノベエリアの散策が楽しめる、新旧の魅力が交わる街です。'
        }

        const logoImage = document.createElement('img');
        separateDiv.before(logoImage);

        //headerのロゴ画像を作成
        if (topPage) {
            logoImage.src = './common/images/logoTitle.png';
            logoImage.classList.add('logoTitleTaiwan');
        } else if (taipeiPage) {
            logoImage.src = '../common/images/logoTitle.png';
            logoImage.classList.add('logoSubTitleTaipei');
            const logoImage3 = document.createElement('img');
            separateDiv.before(logoImage3);
            logoImage3.src = '../common/images/taipeiLogo.png';
            logoImage3.classList.add('logoTitleTaipei');
        } else if (taichuPage) {
            logoImage.src = '../common/images/logoTitle.png';
            logoImage.classList.add('logoSubTitleTaichung');
            const logoImage3 = document.createElement('img');
            separateDiv.before(logoImage3);
            logoImage3.src = '../common/images/taichuLogo.png';
            logoImage3.classList.add('logoTitleTaichung');
        } else if (tainanPage) {
            logoImage.src = '../common/images/logoTitle.png';
            logoImage.classList.add('logoSubTitleTainan');
            const logoImage3 = document.createElement('img');
            separateDiv.before(logoImage3);
            logoImage3.src = '../common/images/tainanLogo.png';
            logoImage3.classList.add('logoTitleTainan');
        }

        const logoImage2 = logoImage.cloneNode(true);
        ul.before(logoImage2);
        logoImage2.classList.add('logoSubTitleSettings');
        logoImage2.classList.toggle('logoTitleTaiwan');
        if (taipeiPage) {
            logoImage2.classList.toggle('logoSubTitleTaipei')
            logoImage2.classList.toggle('logoTitleTaiwan');
        } else if (taichuPage) {
            logoImage2.classList.toggle('logoSubTitleTaichung')
            logoImage2.classList.toggle('logoTitleTaiwan');
        } else if (tainanPage) {
            logoImage2.classList.toggle('logoSubTitleTainan')
            logoImage2.classList.toggle('logoTitleTaiwan');
        }

        //宣言した配列から他ページへのリンクを作成
        navi.forEach(function (menu, index) {
            const li = document.createElement('li');
            const a = document.createElement('a');
            ul.appendChild(li);
            li.classList.add('menuLi' + index);
            li.appendChild(a);
            a.textContent = menu;
            if (index === 0 && topPage) {
                a.href = '#' + notGation[index];
            } else if (index === 1 && taipeiPage) {
                a.href = '#' + notGation[index];
            } else if (index === 2 && taichuPage) {
                a.href = '#' + notGation[index];
            } else if (index === 3 && tainanPage) {
                a.href = '#' + notGation[index];
            } else if (topPage) {
                a.href = './' + gation[index];
            } else {
                a.href = '../' + gation[index];
            }
        });

        //ドロワーメニューのデザイン
        const button = document.createElement('button');
        button.classList.add('hamburger');
        for (let i = 0; i < 3; i++) {
            const span = document.createElement('span');
            button.append(span);
            span.classList.add('bar' + i);
        }

        //ボタンをクリックした際にCSSを適用
        header.append(button);
        button.onclick = function () {
            nav.classList.toggle('Menuopen');
            button.classList.toggle('active');
            nav.classList.add('animate');
            pageTop.classList.toggle('hide');

            window.addEventListener('resize', () => {
                nav.classList.remove('animate');
            });
        };

        //SNSのロゴを作成
        const imageDiv = document.createElement('div');
        separateDiv.appendChild(imageDiv);
        const logoFacebook = document.createElement('img');
        imageDiv.appendChild(logoFacebook);
        if (taichuPage) {
            imageDiv.classList.add('imageDivDifference');
        } else {
            imageDiv.classList.add('imageDiv')
        }

        logoFacebook.classList.add('logoFacebook');
        const logoInstagram = document.createElement('img');
        imageDiv.appendChild(logoInstagram);
        logoInstagram.classList.add('logoInstagram');

        const logoX = document.createElement('img');
        imageDiv.appendChild(logoX);
        logoX.classList.add('logoX');

        if (topPage) {
            logoX.src = './common/images/logoX.svg';
            logoInstagram.src = './common/images/logoInstagram.svg';
            logoFacebook.src = './common/images/logoFacebook.svg';
        } else {
            logoX.src = '../common/images/logoX.svg';
            logoInstagram.src = '../common/images/logoInstagram.svg';
            logoFacebook.src = '../common/images/logoFacebook.svg';
        }
    }

    // 戻るボタン

    if (topPage) {
        buttonImage.src = './common/images/top.png'
    } else {
        buttonImage.src = '../common/images/top.png'
    }

    body.appendChild(pageTop);
    pageTop.appendChild(buttonImage);

    if (pageTop) {

        // スクロールしたら表示
        window.addEventListener("scroll", () => {

            if (window.scrollY > 300) {
                pageTop.classList.add("show");
            } else {
                pageTop.classList.remove("show");
            }

        });

        // ボタンを押したら一番上へ
        pageTop.addEventListener("click", function () {

            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        });
    }

    if (footer) {
        const footerInner = document.createElement('div');
        const nav = document.createElement('nav');
        const ul = document.createElement('ul');
        const nationalImgae = document.createElement('img');
        footer.appendChild(footerInner);
        footerInner.classList.add('footerInner');
        footerInner.appendChild(nationalImgae);

        const flexDiv = document.createElement('div');
        footerInner.appendChild(flexDiv);
        flexDiv.classList.add('footerFlexDiv');

        if (topPage) {
            nationalImgae.src = './common/images/nationalFlag.png';
        } else {
            nationalImgae.src = '../common/images/nationalFlag.png';
        }

        nationalImgae.classList.add('nationalFlag');
        flexDiv.appendChild(nav);
        nav.appendChild(ul);
        nav.classList.add('menuFooter');

        //footerのリンクを作成
        navi2.forEach(function (menu, index) {
            const li = document.createElement('li');
            const a = document.createElement('a');
            ul.appendChild(li);
            li.classList.add('menuLi');
            li.appendChild(a);
            a.textContent = menu;
            if (index === 0 && topPage) {
                a.href = '#' + notGation[index];
            } else if (index === 1 && taipeiPage) {
                a.href = '#' + notGation[index];
            } else if (index === 2 && taichuPage) {
                a.href = '#' + notGation[index];
            } else if (index === 3 && tainanPage) {
                a.href = '#' + notGation[index];
            } else if (topPage) {
                a.href = './' + gation[index];
            } else {
                a.href = '../' + gation[index];
            }
            li.classList.add('listItem' + [index]);
        })

        //SNSのロゴを複数指定
        const footerSubTitle = document.createElement('img');
        flexDiv.appendChild(footerSubTitle);
        footerSubTitle.classList.add('footerSubTitle');
        if (topPage) {
            footerSubTitle.src = './common/images/logoTitle.png';
        } else {
            footerSubTitle.src = '../common/images/logoTitle.png';
        }
        const imageDiv2 = document.createElement('div');
        imageDiv2.classList.add('imageDiv2');
        flexDiv.appendChild(imageDiv2);
        const hr = document.createElement('hr');
        footerInner.after(hr);
        hr.classList.add('footerHr');

        const logoFacebook = document.createElement('img');
        imageDiv2.appendChild(logoFacebook);
        logoFacebook.classList.add('logoFacebook');

        const logoInstagram = document.createElement('img');
        imageDiv2.appendChild(logoInstagram);
        logoInstagram.classList.add('logoInstagram');

        const logoX = document.createElement('img');
        imageDiv2.appendChild(logoX);
        logoX.classList.add('logoX');


        if (topPage) {
            logoInstagram.src = './common/images/logoInstagram.svg';
            logoFacebook.src = './common/images/logoFacebook.svg';
            logoX.src = './common/images/logoX.svg';

        } else {
            logoInstagram.src = '../common/images/logoInstagram.svg';
            logoFacebook.src = '../common/images/logoFacebook.svg';
            logoX.src = '../common/images/logoX.svg';
        }

        const small = document.createElement('small');
        hr.after(small);
        small.textContent = 'Copyright (c) 2023 TAIWAN.traveler.cc';
    }
};

menu();
                            </code>
                        </pre>
                    </div>

                 
                    <div class="scriptHeading flex">
                        <h3>制作工程２</h3>
                        <h4>JavaScriptによるギミック</h4>
                    </div>

                    <div class="scriptDescription designAttach">
                        <h4>カルーセル</h4>
                        <div>
                            <p>
                                私の担当した範囲には、カルーセルという複数の画像をスライド形式で切り替えて表示する部分がありました。正直ここだけの話すごい苦戦しました。何度ChatGPTに助けてもらったかわからないくらいには…
                            </p>
                            <p>
                                それでもなんとか構造を理解して、どうにか説明ができるくらいには持っていきましたがもう一度同じものを作れと言われたら現状は無理かなと思います。無念…
                            </p>
                            <p>
                                AIの使用についても結構考えさせられる演習だったかもしれません。どの程度使っていいのかチームで先に決めておけばよかったかな
                            </p>
                        </div>
                    </div>

                    <div class="scriptImage">
                        <img class="image cornerFrame modalTrigger" loading="lazy" src="../images/taiwan2.jpg" alt="画像をスライドさせながら表示するカルーセルが掲載されています">
                    </div>

                    <div class="flex teamHeading">
                        <h3>制作工程３</h3>
                        <h4>チームとして</h4>
                    </div>

                    <div class="readerDescription designAttach ">
                        <h4>リーダーが考えるべきこと</h4>
                        <div>
                            <p>
                                私は、制作を行う以前にリーダーです。同じ歩幅、同じペースでもメンバーより少し前にいなければいけないと考えました。そのため何よりもまず指示を出すこと目標や期日、これから何をするのかそういったことを明確にしました。
                            </p>
                            <p>
                                なんていうんでしょうか、出来るだけ創意工夫に脳のリソースを使ってほしかったというのがその時思っていたことかもしれません。次何をしたらいいのか考えてもらうよりも、こういうやり方をしたらいい形に纏まるんじゃないかなど。<br>
                                まあ私はド素人なので、それがどこまで理にかなっていたかはわかりません。それでも私が次はこれをやっていこう。それが終わったらこれを進めよう。もし迷ったら意見を聞いてなど、そうしたことで露頭に迷うことはなかったのかなという印象でした。<br>
                                かなり自画自賛という形になってしまいましたが、これ自体はこれからまたリーダーなどをやる際に覚えておきたいなと感じました。
                            </p>
                        </div>
                    </div>

                    <div class="teamDescription designAttach">
                        <h4>反省点</h4>
                        <div>
                            <p>
                                リーダーを務めるに当たっていろいろ背負い込みすぎたかなと感じました。自分の制作する範囲を始め、全体の共通部分の作成、クライアントとのやりとりや、全体の舵取り、ぶっちゃけ私のキャパ小さくて追いつかなかったですね。<br>
                                学校が終わったあと家での作業もかなりしましたし、作業時間内に収めきれなかったのは結構リーダーとしてはどうなんだろうな～っていうのはあります。まあ社会的には残業してなんぼかもしれませんか…<br>
                                次があればメンバー間のキャパの折り合いも付けたいですね。言い方があんまりよくないな…分担をちゃんとバランス取れたらいいなと思います。
                            </p>
                        </div>
                    </div>

                    <div class="afterHeading flex">
                        <h3>総評</h3>
                    </div>

                    <div class="afterWord">
                        <p>
                           初めてのグループ制作ということもあり不安はありましたが、非常に楽しく制作できたと思います。確かに上述したように大変なこともありましたが、それでも経験としてはとても貴重でした。
                        </p>
                        <p>
                            不甲斐ないリーダーではありましたが、それでもついてきてくれたメンバーのお二人には感謝しかありません。
                        </p>
                        <p>
                            お二人のおかげもあり、Webサイト自体の完成度はかなり高くなったのではないかと感じています。個人的にはあのタスク量をこなしながら全体共有のJavaScriptを１から構想して組み上げられたことが本当に嬉しかったです。
                            <br>この経験は、これからもずっと活きてくると思うので忘れずに覚えておきたいですね。
                        </p>
                    </div>

                    <div class="pageLimit designAttach">
                        <h4>画像の公開期間について</h4>
                        <div>
                            <p>実際のWebページに掲載されている画像は、職業訓練でWebページを制作するためにお借りしている素材であり、就職活動のために卒業後３カ月まで利用を許可されています。画像の掲載は2027年2月17日をもって公開を終了する予定です。URLも同様です。</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

</section>
<?php require __DIR__ . '/../footer.php'; ?>