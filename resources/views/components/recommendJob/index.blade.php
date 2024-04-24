<section id="recommendJob" class="recommendJob">
    <div class="recommendJobInner">
        <h2 class="heading-block">
            <span class="ttl-en pop">NEW JOBS</span>
            <span class="ttl-ja">新着の求人情報</span>
        </h2>
        <div class="recommendJobBox">

            <div id="recommendJobSlide" class="recommendJobSlide swiper-recommendJobSlide">

            </div>

            <button type="button" class="recommendJobButtonPrev">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="32.389" viewBox="0 0 20 32.389">
                    <path id="Icon_material-keyboard-arrow-right" data-name="Icon material-keyboard-arrow-right" d="M32.885,37.208,20.523,24.819,32.885,12.431,29.079,8.625,12.885,24.819,29.079,41.014Z" transform="translate(-12.885 -8.625)" fill="#fec400"/>
                </svg>
            </button>
            <button type="button" class="recommendJobButtonNext">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="32.389" viewBox="0 0 20 32.389">
                    <path id="Icon_material-keyboard-arrow-right" data-name="Icon material-keyboard-arrow-right" d="M12.885,37.208,25.247,24.819,12.885,12.431l3.806-3.806L32.885,24.819,16.691,41.014Z" transform="translate(-12.885 -8.625)" fill="#fec400"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    $(function() {

        searchRecommendJob();

        function searchRecommendJob() {

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('ajax.recommendJobs') }}",
                data: {},
            })
                .then((...args) => { // done
                    const [data, textStatus, jqXHR] = args;

                    let dataStr = data;

                    if(dataStr) {
                        let parent = document.getElementById('recommendJobSlide');
                        let div = document.createElement('div');
                        div.className = 'recommendJobList swiper-wrapper';
                        div.innerHTML = dataStr;

                        parent.append(div);
                        $('.recommendJob').show();

                        loadSwiperRecommend();
                    }

                })
                .catch((...args) => { // fail
                    const [jqXHR, textStatus, errorThrown] = args;
                });
        }

        function loadSwiperRecommend() {
            let mySwiperRecommend = new Swiper('.swiper-recommendJobSlide', {
                loop: true,
                effect: 'slide',
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 30,
                centeredSlides: false,
                autoplay: {
                    delay: 3000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                navigation: {
                    nextEl: '.recommendJobButtonNext',
                    prevEl: '.recommendJobButtonPrev'
                },
                breakpoints: {
                    767: {
                        slidesPerView: 1,
                        centeredSlides: true
                    }
                },
                simulateTouch: false,
                autoResize: true,
                autoHeight: false,
                resizeReInit: true,
                watchOverflow: true
            });
        }
    });
</script>
