@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
        {{--    Poppins--}}
        {{--    font-family: 'Poppins';--}}
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" media="all" href="./css/welfare.css"/>
        <script type="text/javascript" src="./js/welfare.js"></script>

        <main id="main_wrap">

            <div id="welFare-page">

                <div class="main-banner">
                    <div class="inner">
                        <h1 class="heading-main">
                            <span class="ttl-en pop">WELFARE</span>
                            <span class="ttl-ja">福利厚生</span>
                        </h1>
                    </div>
                </div>

                <div class="welfare-image">
                    <div class="inner">
                        <ul class="welfareImage-list js-fadein">
                            <li class="welfareImage-item">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_image01_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_image01_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_image01_pc.png')}}" alt="話している従業員">
                                </picture>
                            </li>
                            <li class="welfareImage-item">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_image02_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_image02_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_image02_pc.png')}}" alt="従業員の笑顔写真">
                                </picture>
                            </li>
                            <li class="welfareImage-item">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_image03_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_image03_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_image03_pc.png')}}" alt="従業員の様子写真">
                                </picture>
                            </li>
                        </ul>
                        <p class="description js-fadein">従業員の健康と働きやすい環境を考え、様々な福利厚生を用意しております。<br/>あわせて、仕事と家庭の両立を支援する制度や、継続した業務改善による生産性向上などで、従業員のワークライフバランスを充実させ、これら福利厚生を利用しやすい環境作りに力を入れています。</p>
                    </div>
                </div>

                <div class="movie">
                    <div class="inner">
                        <h2 class="heading-block js-fadein">
                            <span class="ttl-en pop">30 SECONDS MOVIE</span>
                            <span class="ttl-ja">動画で知るサクセスストーリー</span>
                        </h2>
                        <div class="movieContent js-fadein">
                            <div class="image">
                                <script type="text/javascript">var Eviry=Eviry||{};Eviry.Player||(Eviry.Player={});Eviry.Player.embedkey="EK1d-n8AByQmR9VSq2rwhKAvP-hJZe0STFHebOiYuxH__7JQxQ5drFonY5Bv7VvXJrvQtzlW6ISlTo_qlnOkv7oqoVFeTfuvbLj3L1sbHCgc_jFzl8NJM7JuQ..";</script>
                                <script type="text/javascript" src="https://d1euehvbqdc1n9.cloudfront.net/001/eviry/js/eviry.player.min.js"></script>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="welfare-block welfare-bg">
                    <div class="inner">
                        <h2 class="heading-block js-fadein">
                            <picture class="ttl-icon">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_title_01_icon_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_title_01_icon_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_title_01_icon_pc.png')}}" alt="豚のアイコン">
                            </picture>
                            <div class="info-title">
                                <span class="ttl-en pop">For Your Future</span>
                                <span class="ttl-ja">将来への備え</span>
                            </div>
                        </h2>
                        <ul class="welfareList-info">
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_01_01_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_01_01_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_01_01_icon_pc.png')}}" alt="コインのアイコン">
                                </picture>
                                <p class="ttl">財形貯蓄制度</p>
                                <p class="text">給料やボーナスから天引きして積み立てる貯蓄です。<br/>「一般財形」「住宅財形」「年金財形」3つのコースがあります。</p>
                            </li>
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_01_02_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_01_02_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_01_02_icon_pc.png')}}" alt="ビールのアイコン">
                                </picture>
                                <p class="ttl">社員持株会制度</p>
                                <p class="text">従業員持株会の会員になることで、少額資金を継続的に拠出することにより、ミスミグループ本社の株式を容易に取得できます。</p>
                            </li>
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_01_03_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_01_03_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_01_03_icon_pc.png')}}" alt="ちびのアイコン">
                                </picture>
                                <p class="ttl">生命保険団体契約</p>
                                <p class="text">会社が契約者となり、役員・従業員を被保険者（保険の対象となる方）とする契約で、一般の生命保険より保険料が安くなります。</p>
                            </li>
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_01_04_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_01_04_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_01_04_icon_pc.png')}}" alt="花のアイコン">
                                </picture>
                                <p class="ttl">退職金制度</p>
                                <p class="text">【正社員】<br/>
                                    確定給付企業年金より老齢給付金・脱退一時金・遺族給付金の給付を行います。<br/>
                                    【契約社員・準社員・嘱託社員】<br/>
                                    退職時に規程による退職一時金をお支払いします。</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="welfare-block">
                    <div class="inner">
                        <h2 class="heading-block js-fadein">
                            <picture class="ttl-icon">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_title_02_icon_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_title_02_icon_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_title_02_icon_pc.png')}}" alt="ハートのアイコン">
                            </picture>
                            <div class="info-title">
                                <span class="ttl-en pop">For Your Health</span>
                                <span class="ttl-ja">健康管理</span>
                            </div>
                        </h2>
                        <ul class="welfareList-info col-item3">
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_02_01_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_02_01_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_02_01_icon_pc.png')}}" alt="健康診断">
                                </picture>
                                <p class="ttl">定期健康診断・特殊検診</p>
                                <p class="text">常時雇用されている従業員に対し、所定の項目について医師による定期健康診断を毎年実施しています。また、一定の有害な業務に従事する従業員に対しては、特殊健康診断を実施しています。</p>
                            </li>
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_02_02_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_02_02_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_02_02_icon_pc.png')}}" alt="接種のアイコン">
                                </picture>
                                <p class="ttl">インフルエンザ予防接種</p>
                                <p class="text">インフルエンザ予防接種の希望者は、インフルエンザ予防接種を無償で受けることができます。</p>
                            </li>
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_02_03_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_02_03_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_02_03_icon_pc.png')}}" alt="表のアイコン">
                                </picture>
                                <p class="ttl">人間ドック・がん検診等の<br/>
                                    補助金制度</p>
                                <p class="text">人間ドック・がん検診等の受診希望者は、健康保険組合の補助（利用金額の一部を負担）を受けることができます。</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="welfare-block welfare-bg">
                    <div class="inner">
                        <h2 class="heading-block js-fadein">
                            <picture class="ttl-icon">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_title_03_icon_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_title_03_icon_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_title_03_icon_pc.png')}}" alt="階段のアイコン">
                            </picture>
                            <div class="info-title">
                                <span class="ttl-en pop">For Your Career Up</span>
                                <span class="ttl-ja">キャリアアップ制度</span>
                            </div>
                        </h2>
                        <ul class="welfareList-info col-item3">
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_03_01_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_03_01_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_03_01_icon_pc.png')}}" alt="カップのアイコン">
                                </picture>
                                <p class="ttl ttl-small">各種表彰制度<br/>
                                    特殊奨励金・社長賞・永年勤続表彰等</p>
                                <p class="text">業務上の目標達成、改善の成果を評価された者、業務外で貢献のあった者および永年勤続社員に賞が贈られます。</p>
                            </li>
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_03_02_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_03_02_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_03_02_icon_pc.png')}}" alt="ノートのアイコン">
                                </picture>
                                <p class="ttl">教育研修費用補助制度</p>
                                <p class="text">社員の自己啓発による能力開発とスキルの向上を支援し、一定の資金を援助します。</p>
                            </li>
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_03_03_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_03_03_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_03_03_icon_pc.png')}}" alt="資格のアイコン">
                                </picture>
                                <p class="ttl">資格取得支援制度</p>
                                <p class="text">会社が指定する公的資格について社員の取得を支援し、一定の資金を援助します。</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="welfare-block">
                    <div class="inner">
                        <h2 class="heading-block js-fadein">
                            <picture class="ttl-icon">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_title_04_icon_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_title_04_icon_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_title_04_icon_pc.png')}}" alt="旅行のアイコン">
                            </picture>
                            <div class="info-title">
                                <span class="ttl-en pop">For Your Pleasure</span>
                                <span class="ttl-ja">休暇制度など</span>
                            </div>
                        </h2>
                        <ul class="welfareList-info col-item3">
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_04_01_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_04_01_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_04_01_icon_pc.png')}}" alt="ベッドのアイコン">
                                </picture>
                                <p class="ttl">誕生日休暇</p>
                                <p class="text">本人の誕生日に、誕生日休暇を取得できます。<br/>
                                    また、業務の都合で該当する日に休暇が取得できない場合は、誕生日以降1カ月以内であれば振り替えて取得できます。</p>
                            </li>
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_04_02_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_04_02_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_04_02_icon_pc.png')}}" alt="ディズニーのアイコン">
                                </picture>
                                <p class="ttl">ラフォーレ俱楽部<br/>
                                    優待サービスと補助金制度</p>
                                <p class="text">ラフォーレ倶楽部対象の宿泊施設をベストレートの会員価格で利用可能です。<br/>
                                    年度ごとに1人当たり4泊まで宿泊料金を補助します。</p>
                            </li>
                            <li class="welfareItem-info js-fadein">
                                <picture class="icon">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_04_03_icon_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_04_03_icon_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_04_03_icon_pc.png')}}" alt="">
                                </picture>
                                <p class="ttl">ディズニーリゾート補助制度</p>
                                <p class="text">東京ディズニーランド・東京ディズニーシーのパークチケット購入時、ディズニーホテル宿泊時に使用できるコーポレートプログラム利用券を、年度ごとに1人当たり8枚まで配布します。</p>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>

        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
