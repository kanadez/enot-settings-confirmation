@extends('welcome')

@section('title', '')

@section('description', '')

@section('header_style')

@endsection

@section("content")
    <div class="home content">
        <div class="w-full mx-auto">
            <div class="home__container container-box">
                <div class=" content">
                    <h1 class=" title">Deepswap – Faceswap создатель для онлайн - замена лиц</h1>
                    <div class=" subtitle">Deepswap - это онлайн-приложение faceswap для создания видео,
                        фотографии и GIF по замену лиц. Более 150 миллионов пользователей используют здесь deepfakes, включая
                        deepfakes знаменитостей, смену пола, мемы и т.д. Обмани своих друзей прямо сейчас
                    </div>
                    <div class=" footer-box">
                        <div class=" footer-inner">
                            <a class=" btn-box" href="/ru/faceswap">
                                <span class=" btn-text">Faceswap сейчас</span>
                                <svg height="24" width="25" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.573 6.94l4 4 .02.02c.022.022.043.045.063.068l-.083-.089a1.516 1.516 0 01.275.376 1.495 1.495 0 01-.16 1.616 1.32 1.32 0 01-.115.13l-4 4a1.5 1.5 0 01-2.12-2.122L15.89 13.5H5.513a1.5 1.5 0 010-3h10.379l-1.44-1.44a1.5 1.5 0 01-.103-2.007l.103-.114a1.5 1.5 0 012.121 0z"
                                          fill="#FFF" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a class=" link" href="/ru/pricing">Получите премию<!-- -->  </a>
                        </div>
                    </div>
                </div>
                <div class="video-container-box">
                    <div class="video-bg">
                        <svg viewBox="0 0 606 606" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <linearGradient id="video-bg_svg__a" x1="0%" x2="100%" y1="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FF2A87"></stop>
                                    <stop offset="100%" stop-color="#FF9D2E"></stop>
                                </linearGradient>
                                <linearGradient id="video-bg_svg__c" x1="0%" x2="100%" y1="50%" y2="50%">
                                    <stop offset="0%" stop-color="#FF2A87" stop-opacity="0.04"></stop>
                                    <stop offset="49.683%" stop-color="#FF615D" stop-opacity="0.32"></stop>
                                    <stop offset="100%" stop-color="#FF9D2E" stop-opacity="0.04"></stop>
                                </linearGradient>
                                <linearGradient id="video-bg_svg__d" x1="0%" x2="100%" y1="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FF9D2E"></stop>
                                    <stop offset="100%" stop-color="#FF2A87"></stop>
                                </linearGradient>
                                <linearGradient id="video-bg_svg__e" x1="0%" x2="100%" y1="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FF2A87"></stop>
                                    <stop offset="30.891%" stop-color="#FF9D2E"></stop>
                                    <stop offset="70.389%" stop-color="#EE52E6"></stop>
                                    <stop offset="100%" stop-color="#5E99FC"></stop>
                                </linearGradient>
                                <linearGradient id="video-bg_svg__g" x1="0%" x2="100%" y1="0%" y2="100%">
                                    <stop offset="0%" stop-color="#FF2A87"></stop>
                                    <stop offset="100%" stop-color="#FF9D2E" stop-opacity="0.156"></stop>
                                </linearGradient>
                                <radialGradient cx="50%" cy="50%" fx="50%" fy="50%" id="video-bg_svg__b" r="96.401%">
                                    <stop offset="0%" stop-color="#FF2A87"></stop>
                                    <stop offset="100%" stop-color="#FF9D2E"></stop>
                                </radialGradient>
                                <path
                                    d="M482 57c22.091 0 40 17.909 40 40s-17.909 40-40 40-40-17.909-40-40 17.909-40 40-40zm.5 26c-7.456 0-13.5 6.044-13.5 13.5s6.044 13.5 13.5 13.5 13.5-6.044 13.5-13.5S489.956 83 482.5 83z"
                                    id="video-bg_svg__f"></path>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <circle cx="76" cy="128" fill="url(#video-bg_svg__a)" r="4"></circle>
                                <circle cx="58" cy="480" fill="url(#video-bg_svg__b)" r="6"></circle>
                                <path
                                    d="M303 0c167.342 0 303 135.658 303 303S470.342 606 303 606 0 470.342 0 303 135.658 0 303 0zm0 3C137.315 3 3 137.315 3 303s134.315 300 300 300 300-134.315 300-300S468.685 3 303 3zm0 12c159.058 0 288 128.942 288 288S462.058 591 303 591 15 462.058 15 303 143.942 15 303 15zm0 3C145.599 18 18 145.599 18 303s127.599 285 285 285 285-127.599 285-285S460.401 18 303 18zm0 9c152.43 0 276 123.57 276 276S455.43 579 303 579 27 455.43 27 303 150.57 27 303 27zm0 3C152.226 30 30 152.226 30 303s122.226 273 273 273 273-122.226 273-273S453.774 30 303 30zm0 9c145.803 0 264 118.197 264 264S448.803 567 303 567 39 448.803 39 303 157.197 39 303 39zm0 3C158.854 42 42 158.854 42 303c0 144.146 116.854 261 261 261 144.146 0 261-116.854 261-261 0-144.146-116.854-261-261-261zm0 9c139.176 0 252 112.824 252 252S442.176 555 303 555 51 442.176 51 303 163.824 51 303 51zm0 3C165.481 54 54 165.481 54 303s111.481 249 249 249 249-111.481 249-249S440.519 54 303 54zm0 9c132.548 0 240 107.452 240 240S435.548 543 303 543 63 435.548 63 303 170.452 63 303 63zm0 3C172.109 66 66 172.109 66 303c0 130.891 106.109 237 237 237 130.891 0 237-106.109 237-237 0-130.891-106.109-237-237-237zm0 9c125.92 0 228 102.08 228 228S428.92 531 303 531 75 428.92 75 303 177.08 75 303 75zm0 3C178.736 78 78 178.736 78 303s100.736 225 225 225 225-100.736 225-225S427.264 78 303 78zm0 9c119.294 0 216 96.706 216 216s-96.706 216-216 216S87 422.294 87 303 183.706 87 303 87zm0 3C185.363 90 90 185.363 90 303s95.363 213 213 213 213-95.363 213-213S420.637 90 303 90zm0 9c112.666 0 204 91.334 204 204s-91.334 204-204 204S99 415.666 99 303 190.334 99 303 99zm0 3c-111.01 0-201 89.99-201 201s89.99 201 201 201 201-89.99 201-201-89.99-201-201-201zm0 9c106.039 0 192 85.961 192 192s-85.961 192-192 192-192-85.961-192-192 85.961-192 192-192zm0 3c-104.382 0-189 84.618-189 189s84.618 189 189 189 189-84.618 189-189-84.618-189-189-189zm0 9c99.411 0 180 80.589 180 180s-80.589 180-180 180-180-80.589-180-180 80.589-180 180-180zm0 3c-97.754 0-177 79.246-177 177s79.246 177 177 177 177-79.246 177-177-79.246-177-177-177zm0 9c92.784 0 168 75.216 168 168s-75.216 168-168 168-168-75.216-168-168 75.216-168 168-168zm0 3c-91.127 0-165 73.873-165 165s73.873 165 165 165 165-73.873 165-165-73.873-165-165-165zm0 9c86.156 0 156 69.844 156 156s-69.844 156-156 156-156-69.844-156-156 69.844-156 156-156zm0 3c-84.5 0-153 68.5-153 153s68.5 153 153 153 153-68.5 153-153-68.5-153-153-153zm0 9c79.529 0 144 64.471 144 144s-64.471 144-144 144-144-64.471-144-144 64.471-144 144-144zm0 3c-77.872 0-141 63.128-141 141s63.128 141 141 141 141-63.128 141-141-63.128-141-141-141zm0 9c72.902 0 132 59.098 132 132s-59.098 132-132 132-132-59.098-132-132 59.098-132 132-132zm0 3c-71.245 0-129 57.755-129 129s57.755 129 129 129 129-57.755 129-129-57.755-129-129-129zm0 9c66.274 0 120 53.726 120 120s-53.726 120-120 120-120-53.726-120-120 53.726-120 120-120zm0 3c-64.617 0-117 52.383-117 117 0 64.617 52.383 117 117 117 64.617 0 117-52.383 117-117 0-64.617-52.383-117-117-117zm0 9c59.647 0 108 48.353 108 108s-48.353 108-108 108-108-48.353-108-108 48.353-108 108-108zm0 3c-57.99 0-105 47.01-105 105s47.01 105 105 105 105-47.01 105-105-47.01-105-105-105zm0 9c53.02 0 96 42.98 96 96s-42.98 96-96 96-96-42.98-96-96 42.98-96 96-96zm0 3c-51.362 0-93 41.638-93 93s41.638 93 93 93 93-41.638 93-93-41.638-93-93-93zm0 9c46.392 0 84 37.608 84 84s-37.608 84-84 84-84-37.608-84-84 37.608-84 84-84zm0 3c-44.735 0-81 36.265-81 81s36.265 81 81 81 81-36.265 81-81-36.265-81-81-81zm0 9c39.765 0 72 32.235 72 72s-32.235 72-72 72-72-32.235-72-72 32.235-72 72-72zm0 3c-38.108 0-69 30.892-69 69 0 38.108 30.892 69 69 69 38.108 0 69-30.892 69-69 0-38.108-30.892-69-69-69zm0 9c33.137 0 60 26.863 60 60s-26.863 60-60 60-60-26.863-60-60 26.863-60 60-60zm0 3c-31.48 0-57 25.52-57 57s25.52 57 57 57 57-25.52 57-57-25.52-57-57-57zm0 9c26.51 0 48 21.49 48 48s-21.49 48-48 48-48-21.49-48-48 21.49-48 48-48zm0 3c-24.853 0-45 20.147-45 45s20.147 45 45 45 45-20.147 45-45-20.147-45-45-45zm0 9c19.882 0 36 16.118 36 36s-16.118 36-36 36-36-16.118-36-36 16.118-36 36-36zm0 3c-18.225 0-33 14.775-33 33s14.775 33 33 33 33-14.775 33-33-14.775-33-33-33zm0 9c13.255 0 24 10.745 24 24s-10.745 24-24 24-24-10.745-24-24 10.745-24 24-24zm0 3c-11.598 0-21 9.402-21 21s9.402 21 21 21 21-9.402 21-21-9.402-21-21-21zm0 9c6.627 0 12 5.373 12 12s-5.373 12-12 12-12-5.373-12-12 5.373-12 12-12zm0 3a9 9 0 100 18 9 9 0 000-18z"
                                    fill="url(#video-bg_svg__c)"></path>
                                <circle cx="553" cy="416" fill="url(#video-bg_svg__d)" r="6"></circle>
                                <g opacity="0.16">
                                    <use fill="url(#video-bg_svg__e)" xlink:href="#video-bg_svg__f"></use>
                                    <use fill="url(#video-bg_svg__d)" xlink:href="#video-bg_svg__f"></use>
                                </g>
                                <path
                                    d="M119 324c17.673 0 32 14.327 32 32 0 17.673-14.327 32-32 32-17.673 0-32-14.327-32-32 0-17.673 14.327-32 32-32zm.5 21c-5.799 0-10.5 4.701-10.5 10.5s4.701 10.5 10.5 10.5 10.5-4.701 10.5-10.5-4.701-10.5-10.5-10.5z"
                                    fill="url(#video-bg_svg__g)" opacity="0.16"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="video-border">
                        <div class="video">
                            <video
                                autoplay=""
                                class=""
                                loop="" muted="" playsinline=""
                                poster="./img/home_4_4_poster.png"
                                preload="auto" src="./img/home_4_4.mp4">

                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-info">

                <div class="home-content">
                    <div class="top-ribbons"></div>
                    <div class="content">
                        <div class="infos">
                            <h2 class="title xl:whitespace-pre-line">Может ли Deepswap создавать любые Faceswaps, которые вы хотите?</h2>
                            <p class="sub-desc">С помощью Deepswap вы может создавать любые faceswaps онлайн без установки, без рекламы и без водяных знаков. Это также интегрированный видеоредактор, фоторедактор и создатель GIF - файлов для быстрой замены лица. Создайте свою магию лица с помощью удобного и безопасного для данных приложения Deepswap.</p>
                        </div>
                        <div class="content-item video__content" style="flex-direction:row">
                            <div class="mr120 content">
                                <h2 class="title">Видеоредактор с ролевой игрой в кино</h2>
                                <div class="text">
                                    <div class="mt-3 xl:mt-4">
                                        <p class="mt-2 "> <!-- -->Приложение
                                            Deepswap предоставит вам самую передовую технологию AI faceswap. Потенциал для создания видео и
                                            изменения персонажей неограничен.</p>
                                    </div>
                                    <div class="mt-3 xl:mt-4">
                                        <p class="mt-2 "> <!-- -->Создавайте любые
                                            высококачественные видеоролики Faceswap с лицами этих знаменитых киноролей и получайте потрясающе
                                            реалистичные результаты. Попробуйте вставить свое лицо в Wednesday Addams или больше!</p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="btn-box">
                                        <a class="btns" href="/ru/faceswap">
                                            <span class="btn-text">Создайте Faceswap видео</span>
                                        </a>
                                        <a class="link" href="/ru/ai-video-generator">Учить	больше</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lazyload-wrapper ">
                                <video alt="home_desc_1_title"
                                       class="home-content-video" loop="" muted=""
                                       playsinline=""
                                       poster="./img/desc-1-img.jpg" preload="auto" src="./img/desc-1-video.mp4">

                                </video>
                            </div>
                        </div>
                        <div class="content-item video__content" style="flex-direction:row-reverse">
                            <div class="ml120 content ">
                                <h2 class="title">Фоторедактор Face Swap за одну секунду</h2>
                                <div class="text">
                                    <div class="mt-3 xl:mt-4">
                                        <p class="mt-2 "> <!-- -->Если вы хотите
                                            отредактировать faceswap фотографию без особых усилий, DeepSwap является вашим оптимальным
                                            вариантом.</p>
                                    </div>
                                    <div class="mt-3 xl:mt-4">
                                        <p class="mt-2 "> <!-- -->Онлайн -
                                            приложение face swap также является вашим лучшим фоторедактором для создания совершенно новой
                                            faceswap ID фотографии, вадебной фотографии, фотографии путешествия и других изображений. Люди
                                            едва заметят, что это подделка в связи с безупречным качеством на базе искусственного
                                            интеллекта.</p>
                                    </div>
                                </div>
                                <div class="jsx-2288959181 footer">
                                    <div class="jsx-2288959181 btn-box"><a class="jsx-2288959181 btns" href="/ru/faceswap"><span
                                                class="jsx-2288959181 btn-text">Заменяйте фотографию прямо сейчас</span></a><a
                                            class="jsx-2288959181 link" href="/ru/ai-photo-generator">Учить больше</a></div>
                                </div>
                            </div>
                            <div class="lazyload-wrapper ">
                                <video
                                    alt="home_desc_2_title"
                                    autoplay=""
                                    class="home-content-video"
                                    loop=""
                                    playsinline=""
                                    poster="img/desc-2-img.jpg"
                                    src="img/desc-2-video.mp4"
                                    x5-playsinline="true">

                                </video>
                            </div>
                        </div>
                        <div class="content-item video__content" style="flex-direction:row">
                            <div class="mr120 content">
                                <h2 class="title">Создатель самых смешных мемов и GIF - файлов</h2>
                                <div class="text">
                                    <div class="mt-3 xl:mt-4">
                                        <p class="mt-2 "> <!-- -->GIF - файлы и мемы
                                            могут помочь повысить эффективность ваших усилий в социальных сетях и контент - маркетинге. И
                                            больше не сложно создать забавные и уникальные faceswap GIF</p>
                                    </div>
                                    <div class="mt-3 xl:mt-4">
                                        <p class="mt-2 "> <!-- -->С помощью Deepswap
                                            GIF создателя, вы можете создавать трендовые мемы и получать огромный трафик на своих социальных
                                            платформах. Почему бы не попробовать это сейчас и не насладиться ощущением того, что вы в центре
                                            внимания?</p>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="btn-box"><a class="btns" href="/ru/faceswap">
                                            <span class="btn-text">Сделайте Faceswap GIF - файлов</span></a>
                                        <a class="link" href="/ru/ai-gif-meme-maker">Учить больше</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lazyload-wrapper ">
                                <video
                                    alt="home_desc_3_title"
                                    autoplay=""
                                    class="home-content-video"
                                    loop=""
                                    playsinline=""
                                    poster="https://www.faceplay.me/ds/images/home/desc-3-img.jpg?imageMogr2/thumbnail/396x"
                                    src="https://www.faceplay.me/ds/videos/home/desc-3-video.mp4" x5-playsinline="true">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-warpper">
                    <div class="top-ribbons"></div>
                    <div class="steps-box">
                        <div class="title-content">
                            <h2 class="title">3 Простые шаги для создания Faceswap видео</h2>
                            <p class="desc">Приложение Deepswap поставляется с удобным и простым в использовании
                                интерфейсом. Вот как изменить лицо всего за 3 шага:</p>
                        </div>
                        <div class="step-item">
                            <div class="item-box">
                                <div class="item">
                                    <div class="lazyload-wrapper ">
                                        <svg height="96" width="96" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient id="step-1_svg__a" x1="0%" x2="100%" y1="24.17%" y2="75.83%">
                                                    <stop offset="0%" stop-color="#FF9D2E"></stop>
                                                    <stop offset="100%" stop-color="#FF2A87"></stop>
                                                </linearGradient>
                                            </defs>
                                            <path
                                                d="M48 17.333c13.887 0 25.295 10.615 26.552 24.174C83.653 42.75 90.667 50.556 90.667 60c0 10.17-8.133 18.44-18.25 18.662l-.417.005h-5.333a2.667 2.667 0 01-.2-5.326l.2-.008H72c7.364 0 13.333-5.97 13.333-13.333 0-7.364-5.97-13.333-13.333-13.333A2.667 2.667 0 0169.333 44v-.024l-.003-.329c-.188-11.62-9.666-20.98-21.33-20.98-11.782 0-21.333 9.55-21.333 21.333a2.667 2.667 0 01-2.498 2.661l-.169.006c-7.364 0-13.333 5.97-13.333 13.333 0 7.239 5.769 13.13 12.96 13.328l.373.005h5.333a2.667 2.667 0 01.2 5.326l-.2.008H24C13.69 78.667 5.333 70.309 5.333 60c0-9.444 7.013-17.25 16.116-18.494C22.705 27.948 34.113 17.333 48 17.333zm.132 34.67h-.017l.094.005.066.006c.042.004.084.01.125.016l.036.006c.041.006.082.014.122.023l.064.014a2.2 2.2 0 01.163.045c.099.03.195.066.29.107l.025.011c.054.025.104.05.153.076l.034.018a2.902 2.902 0 01.33.216l.06.048.039.031.012.011c.051.043.1.088.147.135l8.01 8.01a2.667 2.667 0 01-3.601 3.927l-.17-.156-3.448-3.447V76a2.667 2.667 0 01-5.325.199L45.333 76V61.105l-3.447 3.447a2.667 2.667 0 01-3.602.156l-.17-.156a2.667 2.667 0 01-.155-3.601l.155-.17 8.012-8.012.058-.056-.058.056.093-.088.066-.057a2.831 2.831 0 01.298-.217l.066-.04a2.2 2.2 0 01.222-.117c.15-.07.308-.127.472-.169l.025-.005a2.669 2.669 0 01.158-.034l.05-.008.132-.018.032-.003a2.532 2.532 0 01.218-.013h.06l.057.001h.026L48 52l.115.002h-.009l.026.001z"
                                                fill="url(#step-1_svg__a)" fill-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <h3 class=" i-title">Шаг 1</h3>
                                    <p class=" i-desc">загрузите видео / фото/ gif, на котором вы хотите поменять
                                        лицо.</p></div>
                                <div class=" next">
                                    <svg height="5" width="68" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <linearGradient id="setp-next_svg__a" x1="0%" x2="100%" y1="0%" y2="0%">
                                                <stop offset="0%" stop-color="#FFF" stop-opacity="0"></stop>
                                                <stop offset="100%" stop-color="#FFF"></stop>
                                            </linearGradient>
                                        </defs>
                                        <path d="M434 106.5a2 2 0 010 4h-64a2 2 0 010-4h64z" fill="url(#setp-next_svg__a)"
                                              transform="translate(-368 -106)"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class=" item-box">
                                <div class=" item">
                                    <div class="lazyload-wrapper ">
                                        <svg height="96" width="96" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient id="step-2_svg__a" x1="0%" x2="100%" y1=".007%" y2="99.993%">
                                                    <stop offset="0%" stop-color="#FF9D2E"></stop>
                                                    <stop offset="100%" stop-color="#FF2A87"></stop>
                                                </linearGradient>
                                            </defs>
                                            <path
                                                d="M40 0c22.091 0 40 17.909 40 40a2.667 2.667 0 01-5.333 0C74.667 20.854 59.146 5.333 40 5.333S5.333 20.854 5.333 40 20.854 74.667 40 74.667A2.667 2.667 0 1140 80C17.909 80 0 62.091 0 40S17.909 0 40 0zm37.333 72a2.667 2.667 0 01.2 5.326l-.2.007h-5.336v.108a2.657 2.657 0 01-.622 1.608l-.156.17a2.667 2.667 0 01-3.602.156l-.17-.156-2.666-2.667c-1.63-1.63-.558-4.384 1.68-4.545l.206-.007h10.666zm-.95-12.708l.17.156 2.666 2.666c1.63 1.63.558 4.385-1.68 4.545l-.206.008H66.667a2.667 2.667 0 01-.2-5.326l.2-.008H72l.001-.107c.023-.575.23-1.143.623-1.609l.156-.17a2.667 2.667 0 013.602-.155zM53.052 52.14a2.667 2.667 0 01-1.193 3.577 26.518 26.518 0 01-23.718 0 2.667 2.667 0 012.385-4.77 21.185 21.185 0 0018.948 0 2.667 2.667 0 013.578 1.193zM26.667 26.667a5.333 5.333 0 110 10.666 5.333 5.333 0 010-10.666zm26.666 0a5.333 5.333 0 110 10.666 5.333 5.333 0 010-10.666z"
                                                fill="url(#step-2_svg__a)" fill-rule="evenodd" transform="translate(8 8)"></path>
                                        </svg>
                                    </div>
                                    <h3 class=" i-title">Шаг 2</h3>
                                    <p class=" i-desc">Выберите лицо, которое вы хотите сгенерировать.</p></div>
                                <div class=" next">
                                    <svg height="5" width="68" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <linearGradient id="setp-next_svg__a" x1="0%" x2="100%" y1="0%" y2="0%">
                                                <stop offset="0%" stop-color="#FFF" stop-opacity="0"></stop>
                                                <stop offset="100%" stop-color="#FFF"></stop>
                                            </linearGradient>
                                        </defs>
                                        <path d="M434 106.5a2 2 0 010 4h-64a2 2 0 010-4h64z" fill="url(#setp-next_svg__a)"
                                              transform="translate(-368 -106)"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class=" item-box">
                                <div class=" item">
                                    <div class="lazyload-wrapper ">
                                        <svg height="96" width="96" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient id="step-3_svg__a" x1="6.888%" x2="93.112%" y1="0%" y2="100%">
                                                    <stop offset="0%" stop-color="#FF9D2E"></stop>
                                                    <stop offset="100%" stop-color="#FF2A87"></stop>
                                                </linearGradient>
                                            </defs>
                                            <path
                                                d="M80 58.667a2.667 2.667 0 012.66 2.467l.007.2V72c0 7.239-5.77 13.13-12.96 13.328l-.374.005H26.667c-7.24 0-13.13-5.769-13.329-12.96L13.333 72V61.333a2.667 2.667 0 015.326-.199l.008.2V72a8 8 0 007.7 7.994l.3.006h42.666a8 8 0 007.995-7.7l.005-.3V61.333A2.667 2.667 0 0180 58.667zm-31.333-48a2 2 0 012 2v42.227l11.447-11.446a2.667 2.667 0 013.602-.156l.17.156a2.667 2.667 0 01.155 3.601l-.155.17-16 16a2.667 2.667 0 01-3.602.156l-.17-.156-16-16a2.667 2.667 0 013.602-3.927l.17.156 11.446 11.446.001-42.227a2 2 0 012-2h1.334z"
                                                fill="url(#step-3_svg__a)" fill-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <h3 class=" i-title">Шаг 3</h3>
                                    <p class=" i-desc">Скачать faceswap видео / фото / gif. </p></div>
                            </div>
                        </div>
                        <div class=" footer">
                            <div class=" btn-box"><span class="btn-text">Создайте Faceswap видео</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step2-warpper step-warpper">
                    <div class="top-ribbons"></div>
                    <div class="steps-box">
                        <div class="title-content">
                            <h2 class="title">Превосходная сила бренда Deepswap</h2>
                        </div>
                        <div class="">
                            <div class=" step-item">
                                <div class=" item">
                                    <div class="lazyload-wrapper ">
                                        <div class="" style="">
                                            <svg height="240" width="240" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <rect height="240" id="strength-1_svg__a" rx="120" width="240" x="0" y="0"></rect>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <mask fill="#fff" id="strength-1_svg__b">
                                                        <use xlink:href="#strength-1_svg__a"></use>
                                                    </mask>
                                                    <use fill="#FF5001" fill-opacity="0.12" xlink:href="#strength-1_svg__a"></use>
                                                    <g fill="#FF5001" mask="url(#strength-1_svg__b)">
                                                        <path
                                                            d="M146 54a6 6 0 016 6v6c12.15 0 22 9.85 22 22h6a6 6 0 010 12h-6v14h6a6 6 0 010 12h-6v14h6a6 6 0 010 12h-6c0 12.15-9.85 22-22 22v6a6 6 0 01-12 0v-6h-14v6a6 6 0 01-12 0v-6h-14v6a6 6 0 01-12 0v-6c-12.15 0-22-9.85-22-22h-6a6 6 0 010-12h6v-14h-6a6 6 0 110-12h6v-14h-6a6 6 0 110-12h6c0-12.15 9.85-22 22-22v-6a6 6 0 1112 0v6h14v-6a6 6 0 1112 0v6h14v-6a6 6 0 016-6zm6 24H88c-5.523 0-10 4.477-10 10v64c0 5.523 4.477 10 10 10h64c5.523 0 10-4.477 10-10V88c0-5.523-4.477-10-10-10zm-4 10a4 4 0 014 4v56a4 4 0 01-4 4H92a4 4 0 01-4-4V92a4 4 0 014-4h56zm-39.76 19.633l-8 22a4 4 0 002.393 5.126l.195.066a4 4 0 004.931-2.458L112 120.705l4.24 11.662a4 4 0 107.52-2.734l-8-22c-1.277-3.51-6.243-3.51-7.52 0zM136 105a4 4 0 00-4 4v22a4 4 0 108 0v-22a4 4 0 00-4-4z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class=" i-title">1 миллион входных данных</h3>
                                    <p class="i-desc">Мы инвестируем 1 миллион долларов в год в алгоритме AI faceswap и
                                        поиске моделей, вы можете легко воспользоваться потрясающим генератором лиц, который мы
                                        предлагаем.</p></div>
                                <div class=" item">
                                    <div class="lazyload-wrapper ">
                                        <div class="" style="">
                                            <svg height="240" width="240" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <path
                                                        d="M120 0c66.274 0 120 53.726 120 120s-53.726 120-120 120S0 186.274 0 120 53.726 0 120 0z"
                                                        id="strength-2_svg__a"></path>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <mask fill="#fff" id="strength-2_svg__b">
                                                        <use xlink:href="#strength-2_svg__a"></use>
                                                    </mask>
                                                    <use fill="#FF5001" fill-opacity="0.12" xlink:href="#strength-2_svg__a"></use>
                                                    <g fill="#FF5001" mask="url(#strength-2_svg__b)">
                                                        <path
                                                            d="M96 54c3.61 0 7.126.398 10.508 1.154-10.84 8.686-18.599 21.055-21.38 35.21a8 8 0 10-1.063 8.855c-.044.92-.065 1.848-.065 2.781v36c0 18.951 8.786 35.85 22.507 46.846A48.113 48.113 0 0196 186c-26.51 0-48-21.49-48-48v-36c0-26.51 21.49-48 48-48zm48 0c26.51 0 48 21.49 48 48v36c0 4.92-.74 9.666-2.115 14.134C186.121 143.8 177.738 138 168 138c-13.255 0-24 10.745-24 24 0 9.738 5.8 18.121 14.133 21.885A47.96 47.96 0 01144 186c-26.51 0-48-21.49-48-48v-36c0-26.51 21.49-48 48-48zm33.008 111a4 4 0 110 8h-10a4 4 0 01-6.828 2.828l-4-4c-2.52-2.52-.736-6.828 2.828-6.828h18zm-1.18-16.828l4 4c2.52 2.52.736 6.828-2.828 6.828h-18a4 4 0 110-8h10a4 4 0 016.828-2.828zM128 86a8 8 0 100 16 8 8 0 000-16zm32 0a8 8 0 100 16 8 8 0 000-16z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class=" i-title">500 миллионов свопов</h3>
                                    <p class=" i-desc">У нас есть глобальная база пользователей, насчитывающая более 150
                                        миллионов. Все пользователи поменялись лицами более 500 миллионов раз в приложении Deepswap.</p>
                                </div>
                                <div class="item">
                                    <div class="lazyload-wrapper ">
                                        <div class="" style="">
                                            <svg height="240" width="240" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <path
                                                        d="M120 0c66.274 0 120 53.726 120 120s-53.726 120-120 120S0 186.274 0 120 53.726 0 120 0z"
                                                        id="strength-3_svg__a"></path>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <mask fill="#fff" id="strength-3_svg__b">
                                                        <use xlink:href="#strength-3_svg__a"></use>
                                                    </mask>
                                                    <use fill="#FF5001" fill-opacity="0.12" xlink:href="#strength-3_svg__a"></use>
                                                    <g mask="url(#strength-3_svg__b)">
                                                        <path d="M170 122h8a8 8 0 018 8v48a8 8 0 11-16 0v-56z" fill="#AD3601"></path>
                                                        <path
                                                            d="M154 54c8.837 0 16 7.163 16 16v108a8 8 0 007.75 7.996l.25.004H78c-8.837 0-16-7.163-16-16V70c0-8.837 7.163-16 16-16h76zm-2 104H80a6 6 0 000 12h72a6 6 0 000-12zm0-24H80a6 6 0 000 12h72a6 6 0 000-12zm-2-68H82a8 8 0 00-8 8v40a8 8 0 008 8h68a8 8 0 008-8V74a8 8 0 00-8-8zm-7.366 21.195a14.5 14.5 0 012.837.279c.934.185 1.743.418 2.426.698v3.35h-.4c-.586-.47-1.304-.862-2.153-1.177a7.416 7.416 0 00-2.603-.474 6.87 6.87 0 00-.932.064c-.31.042-.608.122-.894.239a1.709 1.709 0 00-.654.444.976.976 0 00-.274.679c0 .384.147.679.44.884.293.205.846.392 1.66.561.534.11 1.046.218 1.538.322.492.105 1.02.248 1.587.43 1.113.365 1.935.861 2.466 1.49.53.628.796 1.443.796 2.446 0 1.432-.607 2.596-1.822 3.49-1.214.896-2.863 1.344-4.946 1.344-1.204 0-2.254-.106-3.15-.318a16.243 16.243 0 01-2.514-.805v-3.487h.41a8.687 8.687 0 002.603 1.426c.96.332 1.883.498 2.768.498.228 0 .528-.02.899-.058a3.59 3.59 0 00.908-.196c.286-.117.522-.263.708-.44.185-.175.278-.435.278-.78 0-.32-.135-.595-.405-.826-.27-.23-.666-.408-1.187-.532a36.428 36.428 0 00-1.733-.366 13.306 13.306 0 01-1.714-.435c-1.224-.397-2.104-.936-2.641-1.616-.538-.68-.806-1.525-.806-2.534 0-1.354.607-2.46 1.821-3.316 1.214-.856 2.775-1.284 4.683-1.284zm-54.483.264l5.303 8.33v-8.33h3.438V102h-3.614l-6.172-9.98V102H83.67V87.459h4.482zm22.97 0v2.812h-6.788v2.51h6.299v2.813h-6.299v3.594h6.787V102h-10.517V87.459h10.517zm5.849 0l2.236 10.01 2.676-10.01h3.74l2.549 10.01 2.344-10.01h3.818L130.417 102h-4.15l-2.608-9.473L121.12 102h-4.15l-3.916-14.541h3.916z"
                                                            fill="#FF5001"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="i-title">100 Медиа - платформ</h3>
                                    <p class="i-desc">Более 100 авторитетных медиа сообщили о нашем приложении замены
                                        лиц, например, Techcrunch, Theverge, Lifewire, Digitaljournal, и т.д..</p></div>
                            </div>
                            <div class="footer">
                                <div class="btn-box"><span
                                        class="btn-text">Создайте Faceswap видео</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-about container-box">
                <div class="top-ribbons"></div>
                <div class=" content"><h2 class=" title">Что люди говорят о нас?</h2>
                    <div class=" desc">Более 5000 пользователей оценили наших создателей faceswap на всех основных
                        платформах.
                    </div>
                    <div class=" mySwiper swiper-container">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide" data-swiper-slide-index="0">
                                    <div class="jsx-1530804750 card-box">
                                        <img alt="deepswap-face-swap-app-review-1"
                                             class="jsx-1530804750 avatar"
                                             loading="lazy"
                                             src="https://www.faceplay.me/ds/images/home/avatar/BrizZeR.jpg?imageMogr2/thumbnail/40x"
                                             srcSet="https://www.faceplay.me/ds/images/home/avatar/BrizZeR.jpg?imageMogr2/thumbnail/80x 2x"/>
                                        <div class="jsx-1530804750 name">BrizZeR</div>
                                        <div class="jsx-1530804750 star">
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="jsx-1530804750 words">Amazing face swap site! fast easy and works great! defiantly
                                            recommend for people that search for an easy deep face option!! worth the price.
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="1">
                                    <div class="jsx-1530804750 card-box">
                                        <img alt="deepswap-face-swap-app-review-2"
                                             class="jsx-1530804750 avatar"
                                             loading="lazy"
                                             src="https://www.faceplay.me/ds/images/home/avatar/Frank_Price.jpg?imageMogr2/thumbnail/40x"
                                             srcSet="https://www.faceplay.me/ds/images/home/avatar/Frank_Price.jpg?imageMogr2/thumbnail/80x 2x"/>
                                        <div class="jsx-1530804750 name">Frank Price</div>
                                        <div class="jsx-1530804750 star">
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="jsx-1530804750 words">When I stumbled across this AI face morph website I was
                                            dumbfound on hoe easy it was to be able to deep swap I have really enjoyed using this face swap
                                            app and would recommend it to friends.
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="2">
                                    <div class="jsx-1530804750 card-box"><img alt="deepswap-face-swap-app-review-3"
                                                                              class="jsx-1530804750 avatar"
                                                                              loading="lazy"
                                                                              src="https://www.faceplay.me/ds/images/home/avatar/Ilithiel_XD.jpg?imageMogr2/thumbnail/40x"
                                                                              srcSet="https://www.faceplay.me/ds/images/home/avatar/Ilithiel_XD.jpg?imageMogr2/thumbnail/80x 2x"/>
                                        <div class="jsx-1530804750 name">Ilithiel XD</div>
                                        <div class="jsx-1530804750 star">
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="jsx-1530804750 words">This face swap online app is so advanced. Anything I swapped so
                                            far look like the person good quality. Fast process, no queues and the fact that u can use any
                                            video and face makes it the best. Change faces on videos and pictures make all much better but
                                            again the quality is top.
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="3">
                                    <div class="jsx-1530804750 card-box"><img alt="deepswap-face-swap-app-review-4"
                                                                              class="jsx-1530804750 avatar"
                                                                              loading="lazy"
                                                                              src="https://www.faceplay.me/ds/images/home/avatar/Dan_L.jpg?imageMogr2/thumbnail/40x"
                                                                              srcSet="https://www.faceplay.me/ds/images/home/avatar/Dan_L.jpg?imageMogr2/thumbnail/80x 2x"/>
                                        <div class="jsx-1530804750 name">Dan L</div>
                                        <div class="jsx-1530804750 star">
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="jsx-1530804750 words">My expectations were blown away. I mean, good god. Easy to use,
                                            surprisingly effective AI face swap app, the pictures came out clean. Would use again.
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="4">
                                    <div class="jsx-1530804750 card-box"><img alt="deepswap-face-swap-app-review-5"
                                                                              class="jsx-1530804750 avatar"
                                                                              loading="lazy"
                                                                              src="https://www.faceplay.me/ds/images/home/avatar/george_george.jpg?imageMogr2/thumbnail/40x"
                                                                              srcSet="https://www.faceplay.me/ds/images/home/avatar/george_george.jpg?imageMogr2/thumbnail/80x 2x"/>
                                        <div class="jsx-1530804750 name">george george</div>
                                        <div class="jsx-1530804750 star">
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="jsx-1530804750 words">great product to swap faces at your leisure and get funny
                                            results from these swaps highly recommend trying out for yourself it is super fun yes.
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="5">
                                    <div class="jsx-1530804750 card-box"><img alt="deepswap-face-swap-app-review-6"
                                                                              class="jsx-1530804750 avatar"
                                                                              loading="lazy"
                                                                              src="https://www.faceplay.me/ds/images/home/avatar/Andrew_Wiggins.jpg?imageMogr2/thumbnail/40x"
                                                                              srcSet="https://www.faceplay.me/ds/images/home/avatar/Andrew_Wiggins.jpg?imageMogr2/thumbnail/80x 2x"/>
                                        <div class="jsx-1530804750 name">Andrew Wiggins</div>
                                        <div class="jsx-1530804750 star">
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="jsx-1530804750 words">The deepswap ai is so good and I enjoy using it and I will use
                                            it forever! Hope more people use this!
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="6">
                                    <div class="jsx-1530804750 card-box"><img alt="deepswap-face-swap-app-review-7"
                                                                              class="jsx-1530804750 avatar"
                                                                              loading="lazy"
                                                                              src="https://www.faceplay.me/ds/images/home/avatar/Aughust_Cole.jpg?imageMogr2/thumbnail/40x"
                                                                              srcSet="https://www.faceplay.me/ds/images/home/avatar/Aughust_Cole.jpg?imageMogr2/thumbnail/80x 2x"/>
                                        <div class="jsx-1530804750 name">Aughust Cole</div>
                                        <div class="jsx-1530804750 star">
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="jsx-1530804750 words">This site is truly a remarkable and amazing experience, i would
                                            definitely recommend it to people whom like praying pranks on their friends and have creative
                                            faceswaps that can make things more interesting and intriguing. highly recommended this Site.
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="7">
                                    <div class="jsx-1530804750 card-box"><img alt="deepswap-face-swap-app-review-8"
                                                                              class="jsx-1530804750 avatar"
                                                                              loading="lazy"
                                                                              src="https://www.faceplay.me/ds/images/home/avatar/HoorGeegie.jpg?imageMogr2/thumbnail/40x"
                                                                              srcSet="https://www.faceplay.me/ds/images/home/avatar/HoorGeegie.jpg?imageMogr2/thumbnail/80x 2x"/>
                                        <div class="jsx-1530804750 name">HoorGeegie</div>
                                        <div class="jsx-1530804750 star">
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                            <svg height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none">
                                                    <path d="M0 0h24v24H0z" fill="#00B67A"></path>
                                                    <path
                                                        d="M12 16.175l3.65-.925 1.525 4.7L12 16.175zm8.4-6.075h-6.425L12 4.05l-1.975 6.05H3.6l5.2 3.75-1.975 6.05 5.2-3.75 3.2-2.3L20.4 10.1z"
                                                        fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="jsx-1530804750 words">Good quality AI deepfake app. It&#x27;s constantly improving,
                                            and the company doesn&#x27;t really brag or let you know. You just notice it as time goes on.
                                            Website isn&#x27;t fancy looking, but everything you need is there and organized nicely.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <span class=" swiper-button-prev"></span><span
                            class=" swiper-button-next"></span>
                    </div>
                    <div class="footer">
                        <div class="btn-box"><span class="btn-text">Создайте Faceswap видео</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" home-bottom container-box">
                <div class="top-ribbons"></div>
                <div class=" decorate-circles decorate-left">
                    <svg height="80" width="54" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path d="M0 0h54v80H0z" id="try-circles-l_svg__a"></path>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <mask fill="#fff" id="try-circles-l_svg__b">
                                <use xlink:href="#try-circles-l_svg__a"></use>
                            </mask>
                            <use fill="#000" fill-opacity="0" xlink:href="#try-circles-l_svg__a"></use>
                            <path
                                d="M0-12.5c28.995 0 52.5 23.505 52.5 52.5S28.995 92.5 0 92.5-52.5 68.995-52.5 40-28.995-12.5 0-12.5zm0 1c-28.443 0-51.5 23.057-51.5 51.5S-28.443 91.5 0 91.5 51.5 68.443 51.5 40 28.443-11.5 0-11.5zm0 3c26.786 0 48.5 21.714 48.5 48.5S26.786 88.5 0 88.5-48.5 66.786-48.5 40-26.786-8.5 0-8.5zm0 1c-26.234 0-47.5 21.266-47.5 47.5S-26.234 87.5 0 87.5 47.5 66.234 47.5 40 26.234-7.5 0-7.5zm0 3c24.577 0 44.5 19.923 44.5 44.5S24.577 84.5 0 84.5-44.5 64.577-44.5 40-24.577-4.5 0-4.5zm0 1c-24.024 0-43.5 19.476-43.5 43.5S-24.024 83.5 0 83.5 43.5 64.024 43.5 40 24.024-3.5 0-3.5zm0 3C22.368-.5 40.5 17.632 40.5 40S22.368 80.5 0 80.5-40.5 62.368-40.5 40-22.368-.5 0-.5zm0 1C-21.815.5-39.5 18.185-39.5 40S-21.815 79.5 0 79.5 39.5 61.815 39.5 40 21.815.5 0 .5zm0 3c20.158 0 36.5 16.342 36.5 36.5S20.158 76.5 0 76.5-36.5 60.158-36.5 40-20.158 3.5 0 3.5zm0 1c-19.606 0-35.5 15.894-35.5 35.5S-19.606 75.5 0 75.5 35.5 59.606 35.5 40 19.606 4.5 0 4.5zm0 3c17.95 0 32.5 14.55 32.5 32.5S17.95 72.5 0 72.5-32.5 57.95-32.5 40-17.95 7.5 0 7.5zm0 1c-17.397 0-31.5 14.103-31.5 31.5S-17.397 71.5 0 71.5 31.5 57.397 31.5 40 17.397 8.5 0 8.5zm0 3c15.74 0 28.5 12.76 28.5 28.5S15.74 68.5 0 68.5-28.5 55.74-28.5 40-15.74 11.5 0 11.5zm0 1c-15.188 0-27.5 12.312-27.5 27.5S-15.188 67.5 0 67.5 27.5 55.188 27.5 40 15.188 12.5 0 12.5zm0 3c13.531 0 24.5 10.969 24.5 24.5S13.531 64.5 0 64.5-24.5 53.531-24.5 40-13.531 15.5 0 15.5zm0 1c-12.979 0-23.5 10.521-23.5 23.5S-12.979 63.5 0 63.5 23.5 52.979 23.5 40 12.979 16.5 0 16.5zm0 3c11.322 0 20.5 9.178 20.5 20.5S11.322 60.5 0 60.5-20.5 51.322-20.5 40-11.322 19.5 0 19.5zm0 1c-10.77 0-19.5 8.73-19.5 19.5S-10.77 59.5 0 59.5 19.5 50.77 19.5 40 10.77 20.5 0 20.5zm0 3c9.113 0 16.5 7.387 16.5 16.5S9.113 56.5 0 56.5-16.5 49.113-16.5 40-9.113 23.5 0 23.5zm0 1c-8.56 0-15.5 6.94-15.5 15.5 0 8.56 6.94 15.5 15.5 15.5 8.56 0 15.5-6.94 15.5-15.5 0-8.56-6.94-15.5-15.5-15.5zm0 3c6.904 0 12.5 5.596 12.5 12.5S6.904 52.5 0 52.5-12.5 46.904-12.5 40-6.904 27.5 0 27.5zm0 1c-6.351 0-11.5 5.149-11.5 11.5S-6.351 51.5 0 51.5 11.5 46.351 11.5 40 6.351 28.5 0 28.5zm0 3a8.5 8.5 0 110 17 8.5 8.5 0 010-17zm0 1a7.5 7.5 0 100 15 7.5 7.5 0 000-15zm0 3a4.5 4.5 0 110 9 4.5 4.5 0 010-9zm0 1a3.5 3.5 0 100 7 3.5 3.5 0 000-7z"
                                fill="#FFF" fill-rule="nonzero" mask="url(#try-circles-l_svg__b)" opacity="0.12"></path>
                        </g>
                    </svg>
                </div>
                <div class=" decorate-circles decorate-right">
                    <svg height="80" width="54" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path d="M0 0h54v80H0z" id="try-circles-r_svg__a"></path>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <mask fill="#fff" id="try-circles-r_svg__b">
                                <use xlink:href="#try-circles-r_svg__a"></use>
                            </mask>
                            <use fill="#000" fill-opacity="0" xlink:href="#try-circles-r_svg__a"></use>
                            <path
                                d="M54-12.5c28.995 0 52.5 23.505 52.5 52.5S82.995 92.5 54 92.5 1.5 68.995 1.5 40 25.005-12.5 54-12.5zm0 1C25.557-11.5 2.5 11.557 2.5 40S25.557 91.5 54 91.5s51.5-23.057 51.5-51.5S82.443-11.5 54-11.5zm0 3c26.786 0 48.5 21.714 48.5 48.5S80.786 88.5 54 88.5 5.5 66.786 5.5 40 27.214-8.5 54-8.5zm0 1C27.766-7.5 6.5 13.766 6.5 40S27.766 87.5 54 87.5s47.5-21.266 47.5-47.5S80.234-7.5 54-7.5zm0 3c24.577 0 44.5 19.923 44.5 44.5S78.577 84.5 54 84.5 9.5 64.577 9.5 40 29.423-4.5 54-4.5zm0 1C29.976-3.5 10.5 15.976 10.5 40S29.976 83.5 54 83.5 97.5 64.024 97.5 40 78.024-3.5 54-3.5zm0 3C76.368-.5 94.5 17.632 94.5 40S76.368 80.5 54 80.5 13.5 62.368 13.5 40 31.632-.5 54-.5zm0 1C32.185.5 14.5 18.185 14.5 40S32.185 79.5 54 79.5 93.5 61.815 93.5 40 75.815.5 54 .5zm0 3c20.158 0 36.5 16.342 36.5 36.5S74.158 76.5 54 76.5 17.5 60.158 17.5 40 33.842 3.5 54 3.5zm0 1C34.394 4.5 18.5 20.394 18.5 40S34.394 75.5 54 75.5 89.5 59.606 89.5 40 73.606 4.5 54 4.5zm0 3c17.95 0 32.5 14.55 32.5 32.5S71.95 72.5 54 72.5 21.5 57.95 21.5 40 36.05 7.5 54 7.5zm0 1C36.603 8.5 22.5 22.603 22.5 40S36.603 71.5 54 71.5 85.5 57.397 85.5 40 71.397 8.5 54 8.5zm0 3c15.74 0 28.5 12.76 28.5 28.5S69.74 68.5 54 68.5 25.5 55.74 25.5 40 38.26 11.5 54 11.5zm0 1c-15.188 0-27.5 12.312-27.5 27.5S38.812 67.5 54 67.5 81.5 55.188 81.5 40 69.188 12.5 54 12.5zm0 3c13.531 0 24.5 10.969 24.5 24.5S67.531 64.5 54 64.5 29.5 53.531 29.5 40 40.469 15.5 54 15.5zm0 1c-12.979 0-23.5 10.521-23.5 23.5S41.021 63.5 54 63.5 77.5 52.979 77.5 40 66.979 16.5 54 16.5zm0 3c11.322 0 20.5 9.178 20.5 20.5S65.322 60.5 54 60.5 33.5 51.322 33.5 40 42.678 19.5 54 19.5zm0 1c-10.77 0-19.5 8.73-19.5 19.5S43.23 59.5 54 59.5 73.5 50.77 73.5 40 64.77 20.5 54 20.5zm0 3c9.113 0 16.5 7.387 16.5 16.5S63.113 56.5 54 56.5 37.5 49.113 37.5 40 44.887 23.5 54 23.5zm0 1c-8.56 0-15.5 6.94-15.5 15.5 0 8.56 6.94 15.5 15.5 15.5 8.56 0 15.5-6.94 15.5-15.5 0-8.56-6.94-15.5-15.5-15.5zm0 3c6.904 0 12.5 5.596 12.5 12.5S60.904 52.5 54 52.5 41.5 46.904 41.5 40 47.096 27.5 54 27.5zm0 1c-6.351 0-11.5 5.149-11.5 11.5S47.649 51.5 54 51.5 65.5 46.351 65.5 40 60.351 28.5 54 28.5zm0 3a8.5 8.5 0 110 17 8.5 8.5 0 010-17zm0 1a7.5 7.5 0 100 15 7.5 7.5 0 000-15zm0 3a4.5 4.5 0 110 9 4.5 4.5 0 010-9zm0 1a3.5 3.5 0 100 7 3.5 3.5 0 000-7z"
                                fill="#FFF" fill-rule="nonzero" mask="url(#try-circles-r_svg__b)" opacity="0.12"></path>
                        </g>
                    </svg>
                </div>
                <div class=" content"><span class=" text">Получите скидку <span
                            class=" text-strong">50%</span> на премию DeepSwap</span><a class=" btn-box"
                                                                                        href="/ru/pricing">Начать</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer_script")

@endsection
