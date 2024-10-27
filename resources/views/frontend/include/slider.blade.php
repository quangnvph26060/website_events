<div class="main-slider">
    <div class="overlay"></div>
    <div id="slide">
        @if ($sliderHome->isNotEmpty())
            @foreach ($sliderHome as $slider)
                <div class="item" style="background-image: url({{ showImage($slider->path_image) }})">
                    <div class="content">
                        <div class="name">{{ $slider->title }}</div>

                    </div>
                </div>
            @endforeach
        @endif
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
        let autoSlide;

        // Function to start or restart the auto-slide
        function startAutoSlide() {
            // Clear the existing interval
            clearInterval(autoSlide);
            // Start a new interval
            autoSlide = setInterval(function() {
                document.getElementById("next").click();
            }, 5000);
        }

        // Initialize the auto-slide when the page loads
        startAutoSlide();

        document.getElementById("next").onclick = function() {
            if (isSliding) return; // Block if a slide transition is in progress
            isSliding = true; // Begin slide transition

            let lists = document.querySelectorAll(".item");
            document.getElementById("slide").appendChild(lists[0]);

            setTimeout(() => {
                isSliding = false; // Allow click again after slide transition is complete
                startAutoSlide(); // Restart the auto-slide interval after user interaction
            }, 500); // 500ms is the transition time, adjust as needed
        };

        document.getElementById("prev").onclick = function() {
            if (isSliding) return;
            isSliding = true;

            let lists = document.querySelectorAll(".item");
            document.getElementById("slide").prepend(lists[lists.length - 1]);

            setTimeout(() => {
                isSliding = false;
                startAutoSlide(); // Restart the auto-slide interval after user interaction
            }, 500);
        };
    </script>
@endpush


@push('styles')
    <style>
        .main-slider {
            position: relative;
            /* Đảm bảo lớp phủ nằm trên slider */
            width: 100%;
            height: 100vh;
            padding: 50px;
            background-color: #f5f5f5;
            box-shadow: 0 30px 50px #dbdbdb;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
    background: linear-gradient(to left, rgba(0, 0, 0, 0.3), transparent 50%, transparent 50%, rgba(0, 0, 0, 0.3)),
        linear-gradient(to right, rgba(0, 0, 0, 0.3), transparent 50%, transparent 50%, rgba(0, 0, 0, 0.3));
            pointer-events: none;
            z-index: 1;
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
            box-shadow: 0 30px 50px #b06e6e;
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
            left: 200px;
            width: 300px;
            text-align: left;
            padding: 10px;
            color: #ffffff;
            transform: translate(0, -10%);
            display: none;
            animation: flyIn 1.5s ease-in-out forwards, fadeIn 1.2s ease-in-out forwards;
            background: rgba(255, 165, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            z-index: 20;
        }

        @keyframes flyIn {
            from {
                transform: translate(-10%, -100px);
                /* Start above with slide-in effect */
            }

            to {
                transform: translate(-50%, -50%);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .item:nth-child(2) .content {
            display: block;
            z-index: 10;
        }

        .item .name {
            font-size: 18px;
            font-weight: bold;
            opacity: 0;
            animation: showcontent 1s ease-in-out 1 forwards;
            text-shadow: 0 0 10px #ffffff;
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
