<div class="main-slider">
    <div id="slide">
        @if ($sliderHome->isNotEmpty())
            @foreach ($sliderHome as $slider)
                <div class="item" style="background-image: url({{ showImage($slider->path_image) }})">
                    <div class="content">
                        <div class="name">{{ $slider->title }}</div>
                        <div class="des">
                             {{ $slider->short_content }}
                        </div>
                        <button>See more</button>
                    </div>
                </div>
            @endforeach
        @endif



        {{-- <div class="item" style="background-image: url({{ asset('frontend/assets/image/RI_Sliders_37.jpg') }})">
            <div class="content">
                <div class="name">Hà Nội</div>
                <div class="des">
                    Khong co khinh, khong phải vì xe khong co kinh. Boom
                    giật boom rung kính vỡ đi rồi.
                </div>
                <button>See more</button>
            </div>
        </div>
        <div class="item" style="background-image: url({{ asset('frontend/assets/image/RI_Sliders_37.jpg') }})">
            <div class="content">
                <div class="name">Hà Nội</div>
                <div class="des">
                    Khong co khinh, khong phải vì xe khong co kinh. Boom
                    giật boom rung kính vỡ đi rồi.
                </div>
                <button>See more</button>
            </div>
        </div>
        <div class="item" style="background-image: url({{ asset('frontend/assets/image/RI_Sliders_37.jpg') }})">
            <div class="content">
                <div class="name">Hà Nội</div>
                <div class="des">
                    Khong co khinh, khong phải vì xe khong co kinh. Boom
                    giật boom rung kính vỡ đi rồi.
                </div>
                <button>See more</button>
            </div>
        </div>
        <div class="item" style="background-image: url({{ asset('frontend/assets/image/RI_Sliders_37.jpg') }})">
            <div class="content">
                <div class="name">Hà Nội</div>
                <div class="des">
                    Khong co khinh, khong phải vì xe khong co kinh. Boom
                    giật boom rung kính vỡ đi rồi.
                </div>
                <button>See more</button>
            </div>
        </div>
        <div class="item" style="background-image: url({{ asset('frontend/assets/image/RI_Sliders_37.jpg') }})">
            <div class="content">
                <div class="name">Hà Nội</div>
                <div class="des">
                    Khong co khinh, khong phải vì xe khong co kinh. Boom
                    giật boom rung kính vỡ đi rồi.
                </div>
                <button>See more</button>
            </div>
        </div> --}}
    </div>

</div>
<div class="button">
    <button id="prev" class="btn btn-primary">
        <i class="fa-solid fa-angle-left"></i>
    </button>
    <button id="next">
        <i class="fa-solid fa-angle-right"></i>
    </button>
</div>


@push('scripts')
    <script>
        let isSliding = false;

        document.getElementById("next").onclick = function() {
            if (isSliding) return; // Chặn nếu đang trong quá trình chuyển slide
            isSliding = true; // Bắt đầu quá trình chuyển slide

            let lists = document.querySelectorAll(".item");
            document.getElementById("slide").appendChild(lists[0]);

            setTimeout(() => {
                isSliding = false; // Cho phép click lại sau khi quá trình chuyển slide hoàn tất
            }, 500); // 500ms là thời gian chuyển đổi, điều chỉnh theo nhu cầu
        };

        document.getElementById("prev").onclick = function() {
            if (isSliding) return;
            isSliding = true;

            let lists = document.querySelectorAll(".item");
            document.getElementById("slide").prepend(lists[lists.length - 1]);

            setTimeout(() => {
                isSliding = false;
            }, 500);
        };

        // Thêm phần này để tự động chạy
        let autoSlide = setInterval(function() {
            document.getElementById("next").click();
        }, 3000);
    </script>
@endpush


@push('styles')
    <style>
        .main-slider {
            width: 100%;
            height: 100vh;
            padding: 50px;
            background-color: #f5f5f5;
            box-shadow: 0 30px 50px #dbdbdb;
        }

        #slide {
            width: 100%;
            margin-top: 15%;
            height: 100%;
        }

        .item {
            width: 200px;
            height: 300px;
            background-position: 50% 50%;
            display: inline-block;
            transition: 0.5s;
            background-size: cover;
            position: absolute;
            border-radius: 20px;
            box-shadow: 0 30px 50px #505050;
        }

        .item:nth-child(1),
        .item:nth-child(2) {
            left: 0;
            top: 0;
            transform: translate(0, 0);
            border-radius: 0;
            width: 100%;
            height: 100vh;
            box-shadow: none;
        }

        .item:nth-child(3) {
            left: 50%;
        }

        .item:nth-child(4) {
            left: calc(50% + 220px);
        }

        .item:nth-child(5) {
            left: calc(50% + 440px);
        }

        .item:nth-child(n + 6) {
            left: calc(50% + 660px);
            opacity: 0;
        }

        .item .content {
            font-family: system-ui;
            position: absolute;
            top: 50%;
            left: 100px;
            width: 300px;
            text-align: left;
            padding: 0;
            color: #eee;
            transform: translate(0, -50%);
            display: none;
        }

        .item:nth-child(2) .content {
            display: block;
            z-index: 10;
        }

        .item .name {
            font-size: 40px;
            font-weight: bold;
            opacity: 0;
            animation: showcontent 1s ease-in-out 1 forwards;
        }

        .item .des {
            margin: 20px 0;
            opacity: 0;
            animation: showcontent 1s ease-in-out 0.3s 1 forwards;
        }

        .item button {
            padding: 10px 20px;
            border: 0;
            opacity: 0;
            animation: showcontent 1s ease-in-out 0.6s 1 forwards;
        }

        @keyframes showcontent {
            from {
                opacity: 0;
                transform: translate(0, 100px);
                filter: 33px;
            }

            to {
                opacity: 1;
                transform: translate(0, 0);
                filter: 0;
            }
        }

        .button {
            position: absolute;
            /* Đảm bảo nó nằm trong khung nhìn của slider */
            /* Đặt nút ở giữa chiều dọc của slider */
            /* Bạn có thể tùy chỉnh vị trí của nút 'prev' */
            /* Bạn có thể tùy chỉnh vị trí của nút 'next' */
            width: 100%;
            text-align: center;
            z-index: 20;
            /* Đảm bảo nút nằm phía trên các ảnh */
        }

        .button button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid #555;
            transition: 0.5s;
            background-color: rgba(255, 255, 255, 0.5);
            /* Làm cho nút nổi bật trên ảnh */
            position: relative;
            z-index: 21;
            /* Đảm bảo nút nằm phía trên ảnh */
        }

        .button button:hover {
            background-color: #bac383;
        }

        #prev {
            position: absolute;
            left: 45%;
            /* Tùy chỉnh khoảng cách so với mép trái */
            top: 50%;
            transform: translateY(-100%);
            z-index: 21;
        }

        #next {
            position: absolute;
            right: 45%;
            /* Tùy chỉnh khoảng cách so với mép phải */
            top: 50%;
            transform: translateY(-100%);
            z-index: 21;
        }
    </style>
@endpush
