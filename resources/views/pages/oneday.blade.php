@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
        {{--    Poppins--}}
        {{--    font-family: 'Poppins';--}}
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" media="all" href="./css/oneday.css"/>
        <script type="text/javascript" src="./js/oneday.js"></script>

        <main id="main_wrap">

            <div id="oneday-page">

                <div class="main-banner">
                    <div class="inner">
                        <h1 class="heading-main">
                            <span class="ttl-en pop">ONEDAY</span>
                            <span class="ttl-ja">社員の1日</span>
                        </h1>
                    </div>
                </div>

                <div class="oneday-tabs">
                    <div class="inner">
                        <ul class="onedayImage-list js-fadein">
                            <li class="onedayImage-item">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_image_01_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_image_01_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_image_01_pc.png')}}" alt="">
                                </picture>
                            </li>
                            <li class="onedayImage-item">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_image_02_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_image_02_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_image_02_pc.png')}}" alt="">
                                </picture>
                            </li>
                        </ul>
                        <ul class="onedayTabs-list js-fadein">
                            <li class="onedayTab-item">
                                <a class="scroll" href="#oneday01">
                                    <div class="tab-info">
                                        <span class="number pop">01</span>
                                        <span class="t1">製造管理者</span>
                                        <span class="t2">松田 裕太</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8.486" height="20.415" viewBox="0 0 8.486 20.415">
                                            <g id="Group_23148" data-name="Group 23148" transform="translate(-765.679 -1851.5)">
                                                <line id="Line_93" data-name="Line 93" x2="8" y2="0.001" transform="translate(772.75 1864.844) rotate(135)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                                <line id="Line_92" data-name="Line 92" y2="18" transform="translate(766.75 1830.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                            <li class="onedayTab-item">
                                <a class="scroll" href="#oneday02">
                                    <div class="tab-info">
                                        <span class="number pop">02</span>
                                        <span class="t1">在庫管理・総務</span>
                                        <span class="t2">石橋 成悦</span>
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
                        <h2 class="heading-block js-fadein">
                            <span class="ttl-en pop">30 SECONDS MOVIE</span>
                            <span class="ttl-ja">動画で知るサクセスストーリー</span>
                        </h2>
                        <div class="movieContent js-fadein">
                            <picture class="image">
                                <source srcset="{{asset('images/contentBox/welfare/welfare_image04_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/contentBox/welfare/welfare_image04_pc.png')}}" alt="">
                            </picture>
                        </div>
                    </div>
                </div>

                <div id="oneday01" class="oneday-block">
                    <div class="oneday-banner js-fadein">
                        <div class="banner-info">
                            <div class="info-inner">
                                <p class="number pop">01</p>
                                <p class="t1">製造管理者</p>
                                <p class="name">松田 裕太<span>（2012年入社）</span></p>
                                <p class="name-en pop">Yuta Matsuda</p>
                                <p class="t2">駿河プラットフォーム&nbsp;&nbsp;IM関西工場</p>
                                <p class="text">入社11年目。ものづくりが好きで機械オペレーターとして入社しました。今ではマネジャーとして現場管理を担当。様々な課題にメンバーと挑戦し、やりがいのある日々を過ごしています。</p>
                            </div>
                        </div>
                        <div class="bannerImage">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_01_image01_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_01_image01_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_01_image01_pc.png')}}" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="oneday-time">
                            <ul class="oneday-list">
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">9:00</span>出勤</p>
                                        <p class="text">家からたった約15分で会社に到着。出勤後、前日の生産実績・受注量を確認し生産の準備をします。</p>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">9:30</span>朝礼</p>
                                        <p class="text">各エリア管理者が集まり、昨日の生産実績と今日の予定や安全・品質状況について共有しています。</p>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">10:00</span>生産管理</p>
                                        <p class="text">各エリアのミーティングに参加し、メンバーの体調を確認しながら必要な情報を共有します。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_01_image02_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_01_image02_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_01_image02_pc.png')}}" alt="">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">12:00</span>お昼休憩</p>
                                        <p class="text">お昼ご飯を食べて、車の中で仮眠を取り、ゆったりとした時間を過ごします。</p>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">13:00</span>上司との打ち合わせ</p>
                                        <p class="text">日常の業務だけではなく、生産や改善活動の進捗を共有し指導・アドバイスを受け計画の見直しを行います。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_01_image03_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_01_image03_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_01_image03_pc.png')}}" alt="">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">15:00</span>技術担当者と打ち合わせ</p>
                                        <p class="text">新しい工具の選定・方法の見直し、改善活動に繋がる打ち合わせをします。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_01_image04_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_01_image04_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_01_image04_pc.png')}}" alt="">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">17:00</span>生産進捗確認</p>
                                        <p class="text">当日納期の進捗状況を確認し、翌日の計画を各エリア管理者と協議しています。メンバーとのコミュニケーションを取るように意識しています。</p>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">18:00</span>退勤</p>
                                        <p class="text">夜勤出勤メンバーに必要な情報を共有し退勤。その後は<br/>フィットネスジムにてトレーニングを行いパンプアップするのが日課です。</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div id="oneday02" class="oneday-block">
                    <div class="oneday-banner">
                        <div class="banner-info">
                            <div class="info-inner">
                                <p class="number pop">02</p>
                                <p class="t1">在庫管理・総務</p>
                                <p class="name">石橋 成悦<span>（2010年入社）</span></p>
                                <p class="name-en pop">Masayoshi Ishibashi</p>
                                <p class="t2">駿河プラットフォーム&nbsp;&nbsp;関西金型製造部&nbsp;&nbsp;管理グループ</p>
                                <p class="text">入社13年目。過去の職務経歴を生かすべく、間接的な業務をしたいと思い入社しました。現在、在庫管理から総務関係まで手広く作業しており、工場を支えている実感とやりがいを感じています。</p>
                            </div>
                        </div>
                        <div class="bannerImage">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image01_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image01_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_02_image01_pc.png')}}" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="oneday-time">
                            <ul class="oneday-list">
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">9:00</span>出勤</p>
                                        <p class="text">家から約20分で会社に到着。出勤後、業務メールのチェックを行います。<br/>その後本社からの貨物確認・仕分けをして配布します。</p>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">9:30</span>在庫補充</p>
                                        <p class="text">各作業現場の欠品がないかを確認。<br/>材料が入荷されるので受入作業と同時に補充に専念します。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image02_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image02_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_02_image02_pc.png')}}" alt="">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">11:30</span>ミーティング</p>
                                        <p class="text">在庫管理グループのメンバーがそろうので、メンバーの体調を確認しながら当日の作業内容をお互いに確認と必要な情報を周知します。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image03_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image03_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_02_image03_pc.png')}}" alt="">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">12:00</span>お昼休憩</p>
                                        <p class="text">お昼ご飯を食べて、車の中で仮眠を取り、ゆったりとした時間を過ごします。</p>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">13:00</span>発注業務</p>
                                        <p class="text">購入依頼のあるデータに対して、システムにて発注作業をします。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image04_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image04_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_02_image04_pc.png')}}" alt="">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">14:00</span>受入業務</p>
                                        <p class="text">海外から届いた材料を受入し、在庫に補充・バックヤードに入庫をしていきます。</p>
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image05_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/oneday/oneday_02_image05_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/contentBox/oneday/oneday_02_image05_pc.png')}}" alt="">
                                        </picture>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">17:00</span>出荷完了確認</p>
                                        <p class="text">当日の出荷に対して、100％完了しているかデータで突き合わせしながら現場への確認をします。</p>
                                    </div>
                                </li>
                                <li class="oneday-item">
                                    <div class="onedayItem-info js-fadein">
                                        <p class="title"><span class="number pop">18:00</span>退勤</p>
                                        <p class="text">出荷が完了していない商品について担当者へ完了予想時刻を共有し、退勤します。時折、コンビニへ行ってデザートを買って食べることが楽しみです。</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>

        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
