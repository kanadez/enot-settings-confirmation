@extends('welcome')

@section('title', '')

@section('description', '')

@section('header_style')

@endsection

@section("content")
    <div class="faceswap content">
        <div class="wrapper">
            <div class="faceswap__input card-box">
                <svg class="mx-auto" height="96" width="96" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="folder_svg__a" x1="50%" x2="50%" y1="0%" y2="100%">
                            <stop offset="0%" stop-color="#FFF"></stop>
                            <stop offset="66.192%" stop-color="#FDFDFD" stop-opacity="0.718"></stop>
                            <stop offset="100%" stop-color="#FFF" stop-opacity="0"></stop>
                        </linearGradient>
                        <linearGradient id="folder_svg__b" x1="50%" x2="50%" y1="0%" y2="100%">
                            <stop offset="0%" stop-color="#FFF"></stop>
                            <stop offset="100%" stop-color="#FFF" stop-opacity="0.477"></stop>
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <path d="M0 10.667C0 4.776 4.776 0 10.667 0h20c8.836 0 16 7.163 16 16H0v-5.333z"
                              fill="url(#folder_svg__a)" transform="translate(10.667 16)"></path>
                        <path d="M0 10.667h66.667a8 8 0 018 8V56a8 8 0 01-8 8H8a8 8 0 01-8-8V10.667z" fill="url(#folder_svg__b)"
                              transform="translate(10.667 16)"></path>
                    </g>
                </svg>
                <h1 class="jsx-520400279 title">Шаг 1: загрузить видео/GIF/фотографию</h1>
                <p class="jsx-520400279 desc">Видео<!-- --> : <!-- -->Макс.<!-- --> <!-- -->500<!-- --> <!-- -->МБ<!-- --> ,
                    <!-- -->10<!-- --> минут<br class="jsx-520400279"/>Фото<!-- --> : <!-- -->Макс.<!-- --> <!-- -->10<!-- -->
                    <!-- -->МБ<br class="jsx-520400279"/>GIF<!-- --> : <!-- -->Макс.<!-- --> <!-- -->15<!-- --> <!-- -->МБ</p>
                <div class="jsx-520400279 upload-btn">

                    <input type="file" name="file1" class="jsx-520400279 custom-button" onchange="uploadFile()" id="file_to_upload"><br>
                    <progress id="progressBar" value="0" max="100" style="width:300px;display:none"></progress>
                    <p id="loaded_n_total"></p>



                </div>
            </div>
            <div class="faceswap__step card-box">
                <h2 class="title">Шаг 2: Выберите видео, которое больше нравится</h2>
                <div class="steps-box" style="flex-direction: column;">
                    <div class="gallery-wrapper">
                        <div class="gallery">
                        </div>
                    </div>
                </div>
            </div>
            <div class="faceswap__step card-box">
                <h2 class="title">3 шага, чтобы сделать видео с обменом лица ai онлайн</h2>
                <div class="steps-box">
                    <div class="steps-items">
                        <div class="steps-item">
                            <h3 class=" steps-title">Step 1</h3>
                            <p class=" text">Загрузите качественное видео на faceswap</p></div>
                        <div class=" arrow">
                            <div class=" img-arrow"></div>
                        </div>
                    </div>
                    <div class=" steps-items">
                        <div class=" steps-item">
                            <h3 class=" steps-title">Step 2</h3>
                            <p class=" text">Выберите свое лицо или лицо знаменитости для обмена</p></div>
                        <div class=" arrow">
                            <div class=" img-arrow"></div>
                        </div>
                    </div>
                    <div class=" steps-items">
                        <div class=" steps-item">
                            <h3 class=" steps-title">Step 3</h3>
                            <p class=" text">Загрузите видео с вашим ai reface</p></div>
                    </div>
                </div>
            </div>
            <div class="faceswap__type tips">
                <p class="">Tips<!-- --> :</p>
                <p class="">1.Deep swap - это инструмент для замены лиц, с помощью которого можно сделать любое
                    видео с изменением лица онлайн, без необходимости скачивания!</p>
                <p class="">2.GIF face swap /Photo face swap также приветствуется в этом приложении ai face
                    swap.</p>
                <p class="">3.Обменивайтесь лицами с несколькими людьми онлайн, Deepswap может поменять 5 лиц на
                    видео за один раз.</p>
                <p class="">4.Чтобы получить лучшее видео с обменом лицами, пожалуйста, убедитесь в качестве
                    видео, которое вы хотите поменять местами в Интернете.</p>
            </div>
        </div>
    </div>
@endsection

@section("footer_script")

@endsection
