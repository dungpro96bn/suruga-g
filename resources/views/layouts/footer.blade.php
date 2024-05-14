@php
/** @var \App\Models\FEnt\FEntPage $page */
$frontendSettings = $page->fEntConfig->frontendSettings;
$corporations = $page->fEntConfig->corporations;

$imgSrc = '';
$imgSrcSP = '';
if(isset($frontendSettings['footer']['corpInfo']['type']) || isset($frontendSettings['logo'])){

    if(isset($frontendSettings['footer']['corpInfo']['type'])){
        $imgSrc = $frontendSettings['footer']['corpInfo']['pcImg'];
        $imgSrcSP = $frontendSettings['footer']['corpInfo']['spImg'];
    }elseif(isset($frontendSettings['logo'])){
        $imgSrc = $frontendSettings['logo'];
        $imgSrcSP = $frontendSettings['logo'];
    }

    $needle   = '/';
    $pos = strpos($imgSrc, $needle);
    if($pos === false){ // スラッシュを含まないURLは想定しないためURLなし
        $imgSrc = '';
    }elseif($pos === 0){ // システム内の相対パスのためURL生成
        $imgSrc = url($imgSrc);
    }
    $pos = strpos($imgSrcSP, $needle);
    if($pos === false){ // スラッシュを含まないURLは想定しないためURLなし
        $imgSrcSP = '';
    }elseif($pos === 0){ // システム内の相対パスのためURL生成
        $imgSrcSP = url($imgSrcSP);
    }
}
@endphp

<div id="cmnFooter">
    <footer id="footer" class="footer">
        <div id="pageTop" class="pageTop">
            <a href="#" class="pageTopAnchor">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.672" height="14" viewBox="0 0 22.672 14">
                    <path id="Icon_material-keyboard-arrow-right" data-name="Icon material-keyboard-arrow-right" d="M12.885,28.633l8.653-8.672-8.653-8.672,2.664-2.664L26.885,19.961,15.549,31.3Z" transform="translate(-8.625 26.885) rotate(-90)" fill="#1b1d22"/>
                </svg>
                <span class="pop">PAGE<br/>TOP</span>
            </a>
        </div><!-- #pageTop -->
        <div id="searchJobsBtn" class="SPdisp">
            <p class="searchJobsBtn-bnr">
                <a href="{{route('search')}}">
                    <span class="en">SEARCH JOBS</span>
                    <span class="ja">お仕事検索</span>
                </a>
            </p>
        </div><!-- #searchJobsBtn -->
        <div class="footerLayout">
            @if(isset($frontendSettings['footer']['corpInfo']) || isset($corporations[0]))
            <div class="footerCorpInfo">
                @if(isset($frontendSettings['footer']['displayTitle']) && $frontendSettings['footer']['displayTitle'])
                <div class="footerTitle">
                @if(isset($frontendSettings['footer']['corpInfo']['type']) || isset($frontendSettings['logo']))
                    @if(isset($frontendSettings['footer']['corpInfo']['type']))
                        @if($frontendSettings['footer']['corpInfo']['type'] == 'text')
                            <span>
                            {{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}
                            </span>
                        @endif
                        @if($frontendSettings['footer']['corpInfo']['type'] == 'image' && isset($frontendSettings['footer']['corpInfo']['pcImg']))
{{--                            <img src="{{$imgSrc ?? ''}}" alt="{{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}">--}}
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{$imgSrcSP ?? ''}} 2x">
                                <source media="(min-width: 768px)" srcset="{{$imgSrc ?? ''}} 2x">
                                <img class="sizes" src="{{$imgSrc ?? ''}}" alt="{{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}">
                            </picture>
                        @endif
                    @elseif(isset($frontendSettings['logo']))
                        <img src="{{$frontendSettings['logo'] ?? ''}}" alt="{{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}">
                    @endif
                @endif
                </div>
                @endif
                @if(isset($frontendSettings['footer']['displayAddress']) && $frontendSettings['footer']['displayAddress'])
                <div class="footerAddress">
                    @php
                        $footerZipCode = $frontendSettings['footer']['corpInfo']['zipCode'] ?? $corporations[0]['zip'] ?? '';
                        $footerAddress = $frontendSettings['footer']['corpInfo']['address'] ?? $corporations[0]['address'] ?? '';
                        $footerTel = $frontendSettings['footer']['corpInfo']['tel'] ?? $corporations[0]['tel'] ?? '';
                        $footerFax = $frontendSettings['footer']['corpInfo']['fax'] ?? $corporations[0]['fax'] ?? '';
                    @endphp
                    @if($footerZipCode)
                        <p>{{$footerZipCode}}</p>
                    @endif
                    <p>兵庫県神戸市北区赤松台2-3-2</p>
                    <p>ミスミ生産パーク内</p>
{{--                    @if($footerAddress)--}}
{{--                        <p>{!! nl2br(e($footerAddress)) !!}</p>--}}
{{--                    @endif--}}
{{--                    @if($footerTel)--}}
{{--                        <p>TEL：{{$footerTel}}</p>--}}
{{--                    @endif--}}
{{--                    @if($footerFax)--}}
{{--                        <p>FAX：{{$footerFax}}</p>--}}
{{--                    @endif--}}

                    <div class="corpTelBox">
                        <p><span class="ttl corpNm-im">IM製造部</span><span class="corpTel-im txt">TEL：078-940-0113 / FAX：078-940-0114</span></p>
                        <p><span class="ttl corpNm-kane">金型製造部</span><span class="corpTel-kane txt">TEL：078-940-0281 / FAX：078-986-6590</span></p>
                        <p><span class="ttl corpNm-meviy">meviy製造部</span><span class="corpTel-meviy txt">TEL：078-986-0652 / FAX：078-986-0653</span></p>
                    </div>
                </div>
                @endif
                @if(isset($frontendSettings['footer']['displayCopyright']) && $frontendSettings['footer']['displayCopyright'])
                <p class="copyright">
                        <small>&#169; {{$corporations[0]['corpFullName']??$frontendSettings['title'] ?? ''}} All rights reserved.</small>
                </p>
                @endif
            </div>
            @endif

            @if((isset($frontendSettings['footer']['displayNavigation']) && $frontendSettings['footer']['displayNavigation']) && isset($frontendSettings['footer']['nav']))
            <nav class="footerRemoteNav">
                @php
                $blankRemoteNavTargetList = array();
                @endphp
                <ul class="footerRemoteNavList">
                    @foreach($frontendSettings['footer']['nav'] as $item)
                        @if(isset($item['class']) && $item['class'] === 'remoteNav')
                            @php
                                $blankRemoteNavTargetList[] = $item;
                            @endphp
                            @continue
                        @endif
                        <x-navigation.footerNavItem :navItem="$item" />
                    @endforeach
                </ul>
                <ul class="company-footer">
                    <li class="img-company">
                        <a target="_blank" href="https://dev.tenriku.jp/misumi-kansai-park/">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/footer_img01_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/footer_img01_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/contentBox/footer_img01_pc.png')}}" alt="">
                            </picture>
                            <div class="info-company">
                                <p class="ttl"><span>ミスミ関西生産パーク<br/>
                                    採用サイト</span><svg xmlns="http://www.w3.org/2000/svg" width="26.743" height="8.485" viewBox="0 0 26.743 8.485">
                                        <g id="Group_23148" data-name="Group 23148" transform="translate(-765.5 -1835.258)">
                                            <line id="Line_92" data-name="Line 92" x2="23.5" transform="translate(0 1842.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                                            <line id="Line_93" data-name="Line 93" x2="8" transform="translate(785.172 1836.672) rotate(45)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                                        </g>
                                    </svg>
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
                @if(count($blankRemoteNavTargetList) > 0)
                <ul class="footerBlankRemoteNavList">
                @foreach($blankRemoteNavTargetList as $item)
                    <x-navigation.footerNavItem :navItem="$item" />
                @endforeach
                </ul>
                @endif
            </nav>
            @endif
        </div>
    </footer>
</div>
