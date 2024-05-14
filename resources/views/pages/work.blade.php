@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
        {{--    Poppins--}}
        {{--    font-family: 'Poppins';--}}
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" media="all" href="./css/work.css"/>
        <script type="text/javascript" src="./js/work.js"></script>

        <main id="main_wrap">

            <div id="work-page">

                <div class="main-banner">
                    <div class="inner">
                        <h1 class="heading-main">
                            <span class="ttl-en pop">OUR WORK</span>
                            <span class="ttl-ja">部門紹介</span>
                        </h1>
                    </div>
                </div>

                <div class="work-tabs">
                    <div class="inner">
                        <ul class="workImage-list">
                            <li class="workImage-item js-fadein js-fadein">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_image01_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_image01_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_image01_pc.png')}}" alt="部品検査の写真">
                                </picture>
                            </li>
                            <li class="workImage-item js-fadein js-fadein">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_image02_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_image02_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_image02_pc.png')}}" alt="ミーティングの写真">
                                </picture>
                            </li>
                            <li class="workImage-item js-fadein js-fadein">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_image03_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_image03_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_image03_pc.png')}}" alt="従業員の写真">
                                </picture>
                            </li>
                            <li class="workImage-item js-fadein js-fadein">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_image04_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_image04_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_image04_pc.png')}}" alt="図面作成している社員">
                                </picture>
                            </li>
                        </ul>
                        <ul class="workTabs-list">
                            <li class="workTab-item js-fadein">
                                <a class="scroll" href="#work01">
                                    <div class="tab-info">
                                        <span class="number pop">01</span>
                                        <span class="t1">FA部品事業</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8.486" height="20.415" viewBox="0 0 8.486 20.415">
                                            <g id="Group_23148" data-name="Group 23148" transform="translate(-765.679 -1851.5)">
                                                <line id="Line_93" data-name="Line 93" x2="8" y2="0.001" transform="translate(772.75 1864.844) rotate(135)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                                <line id="Line_92" data-name="Line 92" y2="18" transform="translate(766.75 1830.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                            <li class="workTab-item js-fadein">
                                <a class="scroll" href="#work02">
                                    <div class="tab-info">
                                        <span class="number pop">02</span>
                                        <span class="t1">金型部品事業</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8.486" height="20.415" viewBox="0 0 8.486 20.415">
                                            <g id="Group_23148" data-name="Group 23148" transform="translate(-765.679 -1851.5)">
                                                <line id="Line_93" data-name="Line 93" x2="8" y2="0.001" transform="translate(772.75 1864.844) rotate(135)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                                <line id="Line_92" data-name="Line 92" y2="18" transform="translate(766.75 1830.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                            <li class="workTab-item js-fadein">
                                <a class="scroll" href="#work03">
                                    <div class="tab-info">
                                        <span class="number pop">03</span>
                                        <span class="t1">meviy部品事業</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8.486" height="20.415" viewBox="0 0 8.486 20.415">
                                            <g id="Group_23148" data-name="Group 23148" transform="translate(-765.679 -1851.5)">
                                                <line id="Line_93" data-name="Line 93" x2="8" y2="0.001" transform="translate(772.75 1864.844) rotate(135)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                                <line id="Line_92" data-name="Line 92" y2="18" transform="translate(766.75 1830.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                            <li class="workTab-item js-fadein">
                                <a class="scroll" href="#work04">
                                    <div class="tab-info">
                                        <span class="number pop">04</span>
                                        <span class="t1">製造サポート部</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8.486" height="20.415" viewBox="0 0 8.486 20.415">
                                            <g id="Group_23148" data-name="Group 23148" transform="translate(-765.679 -1851.5)">
                                                <line id="Line_93" data-name="Line 93" x2="8" y2="0.001" transform="translate(772.75 1864.844) rotate(135)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                                <line id="Line_92" data-name="Line 92" y2="18" transform="translate(766.75 1830.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="movie">
                    <div class="inner">
                        <h2 class="heading-block js-fadein js-fadein">
                            <span class="ttl-en pop">30 SECONDS MOVIE</span>
                            <span class="ttl-ja">動画で知る部門紹介</span>
                        </h2>
                        <div class="movieContent js-fadein">
                            <div class="image">
                                <script type="text/javascript">var Eviry=Eviry||{};Eviry.Player||(Eviry.Player={});Eviry.Player.embedkey="EK1MQBGRrcAmXOdJfm87DnxFsJbsSlKf9Ao_YBWcl09L1Z909bYM6OxSQ3jrFHOpQZ5YD0_qesFK3oYnb2bM4zZ-jQ5NjKlJpaShH6rd4BpCmTzr9oLq5l_7g..";</script>
                                <script type="text/javascript" src="https://d1euehvbqdc1n9.cloudfront.net/001/eviry/js/eviry.player.min.js"></script>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="work01" class="work-block">
                    <div class="inner">
                        <div class="work-banner">
                            <div class="bannerTitle">
                                <h2 class="heading-block js-fadein">
                                    <span class="ttl-en pop">Work 01</span>
                                    <span class="ttl-ja">FA部品事業</span>
                                </h2>
                            </div>
                            <div class="bannerImage js-fadein">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_01_image01_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_01_image01_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_01_image01_pc.png')}}" alt="部品検査の写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="workContent">
                        <div class="inner">
                            <div class="work-description">
                               <div class="work-info js-fadein">
                                   <h3 class="title">ファクトリーオートメーション向けの<br class="sp-br"/>部材をNC旋盤を使用して製作</h3>
                                   <p class="text">数年の現場勤務を経験し、ものづくりや製品に関する知識を身につけた後、製造間接部門にて生産管理・品質管理・在庫管理など業務を習得していただきます。</p>
                               </div>
                                <div class="work-info js-fadein">
                                    <h3 class="title">圧倒的な量産体制確立、<br class="sp-br"/>世界中の生産ラインを下支えする<br class="sp-br"/>ものづくり</h3>
                                    <p class="text">IM製造部は、FA（Factory Automation=ファクトリー・オートメーション：生産工程の自動化）など自動化関連部品の製造を担っています。あらゆる工場において、その構築の成否が競争力に直結するFA。IMユニットでは、そうした生産ラインを支える様々な部品を量産しています。<br/>主に、連結部品の支柱（円形・六角・四角）、機構部品の回転軸を製造、1日当たり10,000本を超える生産アウトプットを保持しています。培ってきた技術力の上に、デジタル、ICTを駆使し、継続的な進化を遂げています。各種追加工、鍍金ユニットでの表面処理にも対応しており、お客様のニーズに合わせた高品質、かつ確実短納期の量産体制は、グローバルスタンダードとして、世界各国に展開しています。</p>
                                </div>
                            </div>
                            <div class="workImage-list">
                                <picture class="workImage-item js-fadein">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_01_image02_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_01_image02_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_01_image02_pc.png')}}" alt="仕事中の写真">
                                </picture>
                                <picture class="workImage-item js-fadein">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_01_image03_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_01_image03_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_01_image03_pc.png')}}" alt="品質チェックの写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="work02" class="work-block">
                    <div class="inner">
                        <div class="work-banner">
                            <div class="bannerTitle">
                                <h2 class="heading-block js-fadein">
                                    <span class="ttl-en pop">Work 02</span>
                                    <span class="ttl-ja">金型部品事業</span>
                                </h2>
                            </div>
                            <div class="bannerImage js-fadein">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_02_image01_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_02_image01_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_02_image01_pc.png')}}" alt="ミーティングの写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="workContent">
                        <div class="inner">
                            <div class="work-description">
                                <div class="work-info js-fadein">
                                    <h3 class="title">金型に組付けられる<br class="sp-br"/>パンチ・ブッシュ等部品を<br class="sp-br"/>自動機・汎用機を使い製造</h3>
                                    <p class="text">数年の現場勤務を経験しものづくりや製品に関する知識を身につけた後、製造間接部門にて生産管理・品質管理・在庫管理など業務を習得していただきます。　</p>
                                </div>
                                <div class="work-info js-fadein">
                                    <h3 class="title">磨き込まれた<br class="sp-br"/>「精密加工技術」のものづくり</h3>
                                    <p class="text">金型製造部は、自動車や電子・電気機器などの金型用部品製造を担っています。身の回りにある多くのプラスチック製品は、金型（モールド）に流し込む射出成形で加工されます。</p>
                                    <p class="text">プレスユニットでは、金型成型に使用するパンチ＆ダイの国内トップクラスシェアを有し、半世紀を超え、精密加工技術（切削・研削・研磨）を培ってきた当社の土台です。</p>
                                    <p class="text">モールドユニットでは、主要部品となるコアピン、エジェクターピンなどを製造しており、世界各国の金型製造業、成形加工業を、幅広く縁の下で支えています。<br/>ミクロン単位の精度で、高品質な製品を、かつ短納期でお客様のニーズに対応しています。</p>
                                </div>
                            </div>
                            <div class="workImage-list">
                                <picture class="workImage-item js-fadein">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_02_image02_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_02_image02_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_02_image02_pc.png')}}" alt="機械操作の写真">
                                </picture>
                                <picture class="workImage-item js-fadein">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_02_image03_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_02_image03_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_02_image03_pc.png')}}" alt="機械設定の写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="work03" class="work-block">
                    <div class="inner">
                        <div class="work-banner">
                            <div class="bannerTitle">
                                <h2 class="heading-block js-fadein">
                                    <span class="ttl-en pop">Work 03</span>
                                    <span class="ttl-ja">meviy部品事業</span>
                                </h2>
                            </div>
                            <div class="bannerImage js-fadein">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_03_image01_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_03_image01_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_03_image01_pc.png')}}" alt="従業員の顔の写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="workContent">
                        <div class="inner">
                            <div class="work-description">
                                <div class="work-info js-fadein">
                                    <h3 class="title">ミスミの3Dものづくりプラットフォームmeviyにおける、<br class="pc-br"/>国内製造を担っています</h3>
                                    <p class="text">主に機械加工製品における特注品の切削加工を中心に製作しています。数年の現場勤務を経験しものづくりや製品に関する知識を身につけた後、製造間接部門にて生産管理・品質管理・在庫管理など業務を習得し管理者を目指していただきます。</p>
                                </div>
                                <div class="work-info js-fadein">
                                    <h3 class="title">機械部品調達のAIプラットフォーム「meviy」、国内製造拠点のマザー工場</h3>
                                    <p class="text">meviy製造部は、特注品（型番レス）デジタルものづくりを担っています。<br/>
                                        「第9回ものづくり日本大賞：2013年1月」において、最高峰「内閣総理大臣賞」を受賞したmeviyは、ミスミによって実現された、他に類を見ないものづくりDX（Digital Transformation）の姿です。<br/>
                                        金型・IM製造部の商品は標準品（型番カタログ品）、一方、meviyは特注品（型番レス）であり、受注・見積もり・加工プログラム生成まで、圧倒的な時間価値を創出する仕掛けとなっています。さらにこれらのDX革新に追従するmeviy製造部は、デジタルものづくりの体制を確立し、確実短納期、生産性向上、高品質を以ってmeviyの発展に貢献しています。<br/>
                                        meviyデジタルマニュファクチュアリングシステム（変種変量ものづくりの無人生産）の礎となり更なる進化を遂げるロードマップを歩み続けています。</p>
                                </div>
                            </div>
                            <div class="workImage-list">
                                <picture class="workImage-item js-fadein">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_03_image02_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_03_image02_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_03_image02_pc.png')}}" alt="パソコンで作業している">
                                </picture>
                                <picture class="workImage-item js-fadein">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_03_image03_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_03_image03_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_03_image03_pc.png')}}" alt="女性社員の写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="work04" class="work-block">
                    <div class="inner">
                        <div class="work-banner">
                            <div class="bannerTitle">
                                <h2 class="heading-block js-fadein">
                                    <span class="ttl-en pop">Work 04</span>
                                    <span class="ttl-ja">製造サポート部</span>
                                </h2>
                            </div>
                            <div class="bannerImage js-fadein">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_04_image01_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_04_image01_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_04_image01_pc.png')}}" alt="パソコンで作業している社員">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="workContent">
                        <div class="inner">
                            <div class="work-description">
                                <div class="work-info js-fadein">
                                    <h3 class="title">生産現場を裏から支える役割のチーム</h3>
                                    <p class="text">お客様が求める高品質・低コスト・確実短納期に応える生産現場を裏から支える役割のチームになります。主には在庫管理業務と機械の保全・開発業務を担います。在庫管理業務では自社開発したグローバル在庫管理方法により、確実短納期の実現ができています。機械保全・開発業務は機械に精通した技術者が保全業務で蓄えた経験を自動加工機開発、マテハン機器開発に活かし製造部の高品質、低コストに貢献しております。製造サポートチームでは専門的な作業が多いですが専門的・技術的なスキルを習得できます。</p>
                                </div>
                            </div>
                            <div class="workImage-list">
                                <picture class="workImage-item js-fadein">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_04_image02_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_04_image02_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_04_image02_pc.png')}}" alt="電話で連絡している社員">
                                </picture>
                                <picture class="workImage-item js-fadein">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/work/work_04_image03_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/work/work_04_image03_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/work/work_04_image03_pc.png')}}" alt="部品チェックの写真">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
