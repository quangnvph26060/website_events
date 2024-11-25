<div class="main-slider">
    <div class="overlay"></div>
    <div id="slide">
        @if ($sliderHome->isNotEmpty())
            @foreach ($sliderHome as $slider)
                <div class="item" style="background-image: url({{ showImage($slider->path_image) }})">
                </div>
            @endforeach
        @endif
    </div>
    <div class="dot-container"></div>

    <div class="button">
        <button id="prev">Prev</button>
        <button id="next">Next</button>
    </div>
</div>



@push('scripts')
    <script>
       document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".item");
    const slideContainer = document.getElementById("slide");
    const dotContainer = document.querySelector(".dot-container");

    // Tạo các dấu chấm
    slides.forEach((_, index) => {
        const dot = document.createElement("div");
        dot.classList.add("dot");
        if (index === 0) dot.classList.add("active");
        dot.addEventListener("click", () => goToSlide(index));
        dotContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll(".dot");

    let currentIndex = 0;

    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle("active", index === currentIndex);
        });
    }

    function goToSlide(index) {
        if (index === currentIndex) return;

        const totalSlides = slides.length;
        const offset = index - currentIndex;

        if (offset > 0) {
            // Chuyển đến slide tiếp theo
            for (let i = 0; i < offset; i++) {
                slideContainer.appendChild(slideContainer.firstElementChild);
            }
        } else {
            // Quay lại slide trước
            for (let i = 0; i < Math.abs(offset); i++) {
                slideContainer.prepend(slideContainer.lastElementChild);
            }
        }

        currentIndex = index;
        updateDots();
    }

    function nextSlide() {
        goToSlide((currentIndex + 1) % slides.length);
    }

    function prevSlide() {
        goToSlide((currentIndex - 1 + slides.length) % slides.length);
    }

    document.getElementById("next").onclick = nextSlide;
    document.getElementById("prev").onclick = prevSlide;

    // Tự động chạy slider mỗi 3 giây
    // let autoSlideInterval = setInterval(nextSlide, 3000);

    // Dừng tự động khi người dùng tương tác
    const slider = document.querySelector(".main-slider");
    slider.addEventListener("mouseover", () => clearInterval(autoSlideInterval));
    slider.addEventListener("mouseout", () => {
        autoSlideInterval = setInterval(nextSlide, 3000);
    });
});

    </script>
@endpush


@push('styles')
    <style>
        @media only screen and (max-width: 768px) {
            .main-slider {
                height: 26vh !important;
            }

            .item:nth-child(1), .item:nth-child(2) {
                height: 26vh !important;
            }
        }
        .dot-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 20;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .dot.active {
            background-color: #fff;
        }

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

        /* .overlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: linear-gradient(to left, rgba(0, 0, 0, 0.3), transparent 50%, transparent 50%, rgba(0, 0, 0, 0.3)),
                        linear-gradient(to right, rgba(0, 0, 0, 0.3), transparent 50%, transparent 50%, rgba(0, 0, 0, 0.3));
                    pointer-events: none;
                    z-index: 1;
                } */

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
            opacity: 0;

        }

        .item:nth-child(4) {
            left: calc(50% + 220px);
            opacity: 0;
        }

        .item:nth-child(5) {
            left: calc(50% + 440px);
            opacity: 0;

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
            background: rgba(21, 75, 163, 0.8);
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

        @media (max-width: 768px) {
            .button {
                display: none;
            }
        }

        @media (max-width: 400px) {
            .button {
                display: none;
            }

            .item .content {
                top: 70%;
                left: 188px;
            }

            .item:nth-child(3) {
                left: 40%;
            }
        }

        .button {
            position: absolute;
            width: 100%;
            text-align: center;
            z-index: 20;

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
