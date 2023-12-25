<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charSet="utf-8"/>
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="@yield('description')" name="description"/>
    <link as="image" class="jsx-2354623386" href="img/home_4_4_poster.png" rel="preload"/>
    <link href="{{ mix('css/gallery.css') }}" rel="stylesheet"/>
    <link href="{{ mix('css/style1.css') }}" rel="stylesheet"/>
    <link href="{{ mix('css/style2.css') }}" rel="stylesheet"/>
    <link href="{{ mix('css/header-footer.css') }}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ mix('css/style.css') }}" rel="stylesheet"/>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="{{ mix('js/all.combined.js') }}"></script>
</head>
<body>
<div id="__next">
    <div class="main container-box">
        <div class="fixed header">
            <div class="wrapper">
                <a aria-label="Deepswap logo - AI changes the face in the picture or video and outputs a new finished product"
                   class="logo" href="/ru">
                    <svg height="24" viewBox="0 0 216 48" width="108" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M93.923 15.542c6.287 0 11.385 5.097 11.385 11.385l-.004.294c-.156 6.152-5.192 11.09-11.38 11.09h-4.982a.712.712 0 00-.711.712v4.98a2.846 2.846 0 01-2.846 2.847H83.25a.712.712 0 01-.712-.712v-27.75a2.846 2.846 0 012.847-2.846zm109.577 0c6.287 0 11.385 5.097 11.385 11.385l-.004.294c-.156 6.152-5.192 11.09-11.381 11.09h-4.98a.712.712 0 00-.712.712v4.98a2.846 2.846 0 01-2.846 2.847h-2.135a.712.712 0 01-.712-.712v-27.75a2.846 2.846 0 012.847-2.846zm-157.962 0a8.539 8.539 0 018.539 8.539v2.846a2.846 2.846 0 01-2.846 2.846H37a2.849 2.849 0 002.846 2.846h13.52c.392 0 .71.319.71.712v2.134a2.846 2.846 0 01-2.845 2.847H39.846a8.539 8.539 0 01-8.538-8.539v-5.692a8.539 8.539 0 018.538-8.539zm25.616 0a8.539 8.539 0 018.538 8.539v2.846a2.846 2.846 0 01-2.846 2.846h-14.23a2.849 2.849 0 002.846 2.846H78.98c.393 0 .711.319.711.712v2.134a2.846 2.846 0 01-2.846 2.847H65.462a8.539 8.539 0 01-8.539-8.539v-5.692a8.539 8.539 0 018.539-8.539zm64.038-5.692c.393 0 .712.319.712.712v2.134a2.846 2.846 0 01-2.846 2.846h-15.654a2.846 2.846 0 00-2.833 3.126c.141 1.48 1.469 2.567 2.955 2.567h9.84a8.539 8.539 0 018.536 8.698c-.086 4.7-4.119 8.379-8.82 8.379h-17.505a.712.712 0 01-.712-.712v-2.135a2.846 2.846 0 012.847-2.846h15.653a2.846 2.846 0 002.833-3.126c-.14-1.48-1.469-2.566-2.955-2.566h-9.84a8.539 8.539 0 01-8.536-8.699c.086-4.7 4.119-8.378 8.82-8.378zm9.25 5.692c.393 0 .712.32.712.712v15.654c0 .392.319.711.711.711H148a.712.712 0 00.712-.711V16.254c0-.393.318-.712.711-.712h4.27c.392 0 .71.32.71.712v15.654c0 .392.32.711.712.711h2.135a.712.712 0 00.712-.711V16.254c0-.393.318-.712.711-.712h2.135a2.846 2.846 0 012.846 2.846V32.62a5.693 5.693 0 01-5.692 5.693h-12.808a5.693 5.693 0 01-5.692-5.693V18.39a2.846 2.846 0 012.846-2.847zM14.231 9.85c7.86 0 14.23 6.371 14.23 14.23l-.003.314c-.167 7.715-6.472 13.918-14.227 13.918H2.846A2.846 2.846 0 010 35.465V12.696A2.846 2.846 0 012.846 9.85zm172.192 5.692a2.846 2.846 0 012.846 2.846v17.077a2.846 2.846 0 01-2.846 2.847h-2.135a.712.712 0 01-.711-.712v-.824a11.318 11.318 0 01-5.692 1.536c-6.288 0-11.385-5.097-11.385-11.385 0-6.288 5.097-11.385 11.385-11.385 2.076 0 4.016.565 5.692 1.536v-.824c0-.393.319-.712.711-.712zm-172.192 0H6.404a.712.712 0 00-.712.712v15.654c0 .392.32.711.712.711h7.827a8.539 8.539 0 000-17.077zm79.692 5.693h-4.98a.712.712 0 00-.712.711v9.962c0 .392.319.711.711.711h4.981a5.693 5.693 0 000-11.384zm109.577 0h-4.98a.712.712 0 00-.712.711v9.962c0 .392.318.711.711.711h4.981a5.693 5.693 0 000-11.384zm-25.615 0a5.693 5.693 0 100 11.385 5.693 5.693 0 000-11.385zm-132.347 0h-5.692A2.849 2.849 0 0037 24.08h11.385a2.849 2.849 0 00-2.847-2.846zm25.616 0h-5.692a2.849 2.849 0 00-2.847 2.846H74a2.849 2.849 0 00-2.846-2.846z"
                            fill="currentColor" fill-opacity="0.94" fill-rule="evenodd">
                        </path>
                    </svg>
                </a>
                <div class="center">
                    <ul class="nav">
                        <li class="nav__li"><a class="" href="/ru/faceswap">Подмена лиц</a></li>
                        <li class="nav__li"><a class="" href="/ru/pricing">Цены</a></li>
                    </ul>
                </div>
                <div class="pc-action-list">

                    <div class="locale-block">
                        <div class="locale-text">Pусский</div>
                        <span class="local-arrow">
							<svg height="16" width="17" xmlns="http://www.w3.org/2000/svg">
								<path
                                    d="M6.332 8.707l1.586 1.586a1 1 0 001.414 0l1.586-1.586A1 1 0 0010.21 7H7.039a1 1 0 00-.707 1.707z"
                                    fill="currentColor" fill-rule="evenodd" opacity="0.8"></path>
							</svg>
						</span>
                        <div class="lang" style="display:none">
                            <div class="wrapper">
                                <a class="nav-item" href="/">
                                    <div class=" nav-item-tp">English</div>
                                </a><a class="nav-item" href="/ja">
                                    <div class=" nav-item-tp">日本語</div>
                                </a><a class="nav-item" href="/fr">
                                    <div class=" nav-item-tp">Français</div>
                                </a><a class="nav-item" href="/ru">
                                    <div class=" nav-item-tp">Pусский</div>
                                </a><a class="nav-item" href="/de">
                                    <div class=" nav-item-tp">Deutsch</div>
                                </a><a class="nav-item" href="/ko">
                                    <div class=" nav-item-tp">한국어</div>
                                </a><a class="nav-item" href="/es">
                                    <div class=" nav-item-tp">Español</div>
                                </a><a class="nav-item" href="/pt">
                                    <div class=" nav-item-tp">Português</div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="mob-nav__btn action-list">
                    <div class="form_button-primary__21xta cloud">
                        <a class="" href="/ru/faceswap">Подмена лиц н</a>
                    </div>
                    <div class="mob-nav__link menu-box">
                        <svg height="24" viewBox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="#FFF" fill-rule="evenodd">
                                <rect height="3" rx="1.5" width="32" x="8" y="9"></rect>
                                <rect height="3" rx="1.5" width="24" x="16" y="22.5"></rect>
                                <rect height="3" rx="1.5" width="32" x="8" y="36"></rect>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-wrapper">
            <div class="wrapper">
                <div class="header-bottom__item">
                    <svg height="19" width="281" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M.824 19h4.728v-7.176h5.784V7.816H5.552V4.888h6.552V1H.824zm15.24 0h4.728V1h-4.728zm24.84 0l-3.816-6.528a6.612 6.612 0 002.136-4.848C39.224 3.976 36.248 1 32.6 1h-7.584v18h4.728v-4.776h2.928L35.456 19h5.448zM29.744 4.984h2.928a2.581 2.581 0 012.592 2.592c0 1.44-1.152 2.568-2.592 2.568h-2.928v-5.16zM54.632 6.52c0-3.072-2.472-5.52-5.544-5.52-3.072 0-5.52 2.472-5.52 5.544a5.49 5.49 0 005.52 5.52c.744 0 1.368.624 1.368 1.368 0 .744-.624 1.344-1.368 1.344-.744 0-1.344-.6-1.344-1.368h-4.2c0 3.168 2.472 5.592 5.544 5.592 3.072 0 5.544-2.448 5.544-5.52 0-1.32-.432-2.52-1.2-3.48a5.516 5.516 0 00-4.344-2.136c-.744 0-1.344-.6-1.344-1.344 0-.744.6-1.368 1.344-1.368.744 0 1.368.624 1.368 1.368h4.176zm3.576-.84h4.68V19h4.728V5.68h4.776V.976H58.208zm40.248.84c0-3.072-2.472-5.52-5.544-5.52-3.072 0-5.52 2.472-5.52 5.544a5.49 5.49 0 005.52 5.52c.744 0 1.368.624 1.368 1.368 0 .744-.624 1.344-1.368 1.344-.744 0-1.344-.6-1.344-1.368h-4.2c0 3.168 2.472 5.592 5.544 5.592 3.072 0 5.544-2.448 5.544-5.52 0-1.32-.432-2.52-1.2-3.48a5.516 5.516 0 00-4.344-2.136c-.744 0-1.344-.6-1.344-1.344 0-.744.6-1.368 1.344-1.368.744 0 1.368.624 1.368 1.368h4.176zM107.144 1h-4.752v10.896A7.058 7.058 0 00109.496 19a7.088 7.088 0 007.104-7.104V1h-4.752v10.824a2.356 2.356 0 01-2.352 2.352 2.356 2.356 0 01-2.352-2.352V1zm18.384 14.112v-3.12h3.168c.816 0 1.56.696 1.56 1.56 0 .864-.696 1.56-1.56 1.56h-3.168zm0-7.08v-3.12h2.28c.864 0 1.56.696 1.56 1.56 0 .864-.696 1.56-1.56 1.56h-2.28zM129.68 19c2.856 0 5.28-2.424 5.28-5.28 0-1.632-.816-3.144-2.04-4.128.696-.888 1.152-2.016 1.152-3.24 0-2.88-2.448-5.352-5.328-5.352H120.8v18h8.88zm19.512-12.48c0-3.072-2.472-5.52-5.544-5.52-3.072 0-5.52 2.472-5.52 5.544a5.49 5.49 0 005.52 5.52c.744 0 1.368.624 1.368 1.368 0 .744-.624 1.344-1.368 1.344-.744 0-1.344-.6-1.344-1.368h-4.2c0 3.168 2.472 5.592 5.544 5.592 3.072 0 5.544-2.448 5.544-5.52 0-1.32-.432-2.52-1.2-3.48a5.516 5.516 0 00-4.344-2.136c-.744 0-1.344-.6-1.344-1.344 0-.744.6-1.368 1.344-1.368.744 0 1.368.624 1.368 1.368h4.176zm18.624-2.904A8.904 8.904 0 00161.48 1c-4.968 0-9 4.032-9 9s4.032 9 9 9c2.496 0 4.752-1.032 6.384-2.664l-3.36-3.312c-.744.768-1.8 1.2-3.024 1.2-2.448 0-4.224-1.776-4.224-4.224 0-2.448 1.776-4.224 4.224-4.224 1.224 0 2.28.432 3.024 1.176l3.312-3.336zM187.952 19l-3.816-6.528a6.612 6.612 0 002.136-4.848c0-3.648-2.976-6.624-6.624-6.624h-7.584v18h4.728v-4.776h2.928L182.504 19h5.448zm-11.16-14.016h2.928a2.581 2.581 0 012.592 2.592c0 1.44-1.152 2.568-2.592 2.568h-2.928v-5.16zM190.856 19h4.728V1h-4.728zm13.68-14.016h2.928a2.581 2.581 0 012.592 2.592c0 1.44-1.152 2.568-2.592 2.568h-2.928v-5.16zM199.808 19h4.728v-4.776h2.952c3.576 0 6.528-2.976 6.528-6.6 0-3.648-2.976-6.624-6.624-6.624h-7.584v18zm16.968-13.32h4.68V19h4.728V5.68h4.776V.976h-14.184zM234.8 19h4.728V1H234.8zm8.592-8.976A8.962 8.962 0 00252.368 19c4.968 0 9-4.008 9-8.976 0-4.968-4.032-9.024-9-9.024s-8.976 4.056-8.976 9.024zM256.664 10a4.307 4.307 0 01-4.296 4.296c-2.352 0-4.272-1.944-4.272-4.296 0-2.376 1.92-4.296 4.272-4.296A4.292 4.292 0 01256.664 10zm23.76 9V1h-4.728v8.496L267.176 1h-1.92v18h4.728v-8.52L278.48 19z"></path>
                    </svg>
                </div>
                <div class="header-bottom__item panel">
                    <svg viewBox="0 0 246 48" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                            <rect fill="#000" height="48" rx="24" width="246"></rect>
                            <path
                                d="M112.056 29.336l4.608-.704a3.37 3.37 0 001.04 1.84c.544.501 1.264.752 2.16.752 1.067 0 1.915-.341 2.544-1.024.63-.683.944-1.59.944-2.72 0-1.13-.315-2.037-.944-2.72-.63-.683-1.477-1.024-2.544-1.024-.683 0-1.285.15-1.808.448-.523.299-.88.597-1.072.896l-.288.48h-4.224l1.888-13.28h12.224v4.288h-8.704l-.64 4.48c.341-.341.848-.645 1.52-.912s1.37-.4 2.096-.4c1.28 0 2.405.23 3.376.688.97.459 1.723 1.077 2.256 1.856a8.365 8.365 0 011.168 2.48c.245.875.368 1.781.368 2.72 0 2.325-.752 4.24-2.256 5.744-1.504 1.504-3.472 2.256-5.904 2.256-2.133 0-3.893-.555-5.28-1.664-1.387-1.11-2.23-2.603-2.528-4.48zm32.576 2.912c-1.408 2.155-3.456 3.232-6.144 3.232s-4.736-1.083-6.144-3.248c-1.408-2.165-2.112-5.03-2.112-8.592 0-3.563.704-6.427 2.112-8.592 1.408-2.165 3.456-3.248 6.144-3.248s4.736 1.083 6.144 3.248c1.408 2.165 2.112 5.03 2.112 8.592 0 3.563-.704 6.432-2.112 8.608zm-3.488-14.24c-.576-1.195-1.461-1.792-2.656-1.792s-2.08.597-2.656 1.792c-.576 1.195-.864 3.072-.864 5.632 0 2.56.288 4.437.864 5.632.576 1.195 1.461 1.792 2.656 1.792s2.08-.597 2.656-1.792c.576-1.195.864-3.072.864-5.632 0-2.56-.288-4.437-.864-5.632zM155.288 35l12.544-22.72h3.296L158.584 35h-3.296zm-1.12-18.784c-.277.576-.416 1.621-.416 3.136 0 1.515.144 2.555.432 3.12.288.565.741.848 1.36.848.619 0 1.072-.283 1.36-.848.288-.565.432-1.605.432-3.12 0-1.515-.144-2.56-.432-3.136-.288-.576-.741-.864-1.36-.864-.619 0-1.077.288-1.376.864zm-2.656 8.448c-.853-1.301-1.28-3.072-1.28-5.312s.432-4.01 1.296-5.312c.864-1.301 2.203-1.952 4.016-1.952 1.813 0 3.152.65 4.016 1.952.864 1.301 1.296 3.072 1.296 5.312s-.432 4.005-1.296 5.296c-.864 1.29-2.203 1.936-4.016 1.936-1.813 0-3.157-.64-4.032-1.92zm17.984.16c-.277.576-.416 1.621-.416 3.136 0 1.515.144 2.555.432 3.12.288.565.741.848 1.36.848.619 0 1.072-.283 1.36-.848.288-.565.432-1.605.432-3.12 0-1.515-.144-2.56-.432-3.136-.288-.576-.741-.864-1.36-.864-.619 0-1.077.288-1.376.864zm-2.656 8.448c-.853-1.301-1.28-3.072-1.28-5.312s.432-4.01 1.296-5.312c.864-1.301 2.203-1.952 4.016-1.952 1.813 0 3.152.65 4.016 1.952.864 1.301 1.296 3.072 1.296 5.312s-.432 4.005-1.296 5.296c-.864 1.29-2.203 1.936-4.016 1.936-1.813 0-3.157-.64-4.032-1.92zm36.288-.416c-1.621 1.685-3.744 2.528-6.368 2.528s-4.747-.848-6.368-2.544c-1.621-1.696-2.432-3.77-2.432-6.224 0-2.453.81-4.528 2.432-6.224 1.621-1.696 3.744-2.544 6.368-2.544s4.747.848 6.368 2.544c1.621 1.696 2.432 3.77 2.432 6.224 0 2.453-.81 4.533-2.432 6.24zm-9.44-9.728c-.79.853-1.184 2.016-1.184 3.488s.4 2.635 1.2 3.488c.8.853 1.819 1.28 3.056 1.28s2.256-.427 3.056-1.28c.8-.853 1.2-2.016 1.2-3.488s-.4-2.635-1.2-3.488c-.8-.853-1.819-1.28-3.056-1.28s-2.261.427-3.072 1.28zm20.16-4.896h2.592v3.584h-2.592V35h-4.544V21.816h-2.4v-3.584h2.4v-1.344c0-1.963.507-3.435 1.52-4.416C211.837 11.491 213.229 11 215 11l1.344.064v3.904a5.075 5.075 0 00-.704-.032c-1.195 0-1.792.619-1.792 1.856v1.44zm10.432 0h2.592v3.584h-2.592V35h-4.544V21.816h-2.4v-3.584h2.4v-1.344c0-1.963.507-3.435 1.52-4.416 1.013-.981 2.405-1.472 4.176-1.472l1.344.064v3.904a5.075 5.075 0 00-.704-.032c-1.195 0-1.792.619-1.792 1.856v1.44z"
                                fill="#FFE3CE" fill-rule="nonzero"></path>
                            <path
                                d="M30.192 25.864V15.136h5.112V34h-4.716v-2.304c-.984 1.824-2.832 2.736-5.544 2.736-2.208 0-3.906-.678-5.094-2.034-1.188-1.356-1.782-3.186-1.782-5.49V15.136h5.112v11.196c0 2.472 1.044 3.708 3.132 3.708 1.248 0 2.19-.36 2.826-1.08.636-.72.954-1.752.954-3.096zm14.904 6.12v9.504h-5.112V15.136H44.7v2.304c1.248-1.824 3.24-2.736 5.976-2.736 2.664 0 4.776.936 6.336 2.808 1.56 1.872 2.34 4.224 2.34 7.056s-.78 5.184-2.34 7.056c-1.56 1.872-3.672 2.808-6.336 2.808-1.248 0-2.358-.234-3.33-.702-.972-.468-1.722-1.05-2.25-1.746zm1.116-11.268c-.84 1.008-1.26 2.292-1.26 3.852s.426 2.844 1.278 3.852c.852 1.008 1.974 1.512 3.366 1.512 1.392 0 2.514-.504 3.366-1.512.852-1.008 1.278-2.292 1.278-3.852s-.426-2.844-1.278-3.852c-.852-1.008-1.974-1.512-3.366-1.512-1.392 0-2.52.504-3.384 1.512zm34.848 8.748v4.428c-.576.144-1.38.216-2.412.216-3.864 0-5.796-1.92-5.796-5.76v-9.18h-2.556v-4.032h2.556v-4.68h5.112v4.68h3.132v4.032h-3.132v8.64c0 1.224.636 1.836 1.908 1.836l1.188-.18zm19.044 2.124c-1.824 1.896-4.212 2.844-7.164 2.844s-5.34-.954-7.164-2.862c-1.824-1.908-2.736-4.242-2.736-7.002s.912-5.094 2.736-7.002c1.824-1.908 4.212-2.862 7.164-2.862s5.34.954 7.164 2.862c1.824 1.908 2.736 4.242 2.736 7.002s-.912 5.1-2.736 7.02zm-10.62-10.944c-.888.96-1.332 2.268-1.332 3.924 0 1.656.45 2.964 1.35 3.924.9.96 2.046 1.44 3.438 1.44 1.392 0 2.538-.48 3.438-1.44.9-.96 1.35-2.268 1.35-3.924 0-1.656-.45-2.964-1.35-3.924-.9-.96-2.046-1.44-3.438-1.44-1.392 0-2.544.48-3.456 1.44z"
                                fill="#FF8221" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                </div>
                <div class="header-bottom__item countdown-box countedown">


                    <div class="count-down counter">
                        <div class="date">
                            <span class="time days">95</span>
                            <h3 class="name">Day</h3>
                        </div>
                        <span class="text">:</span>
                        <div class="date">
                            <span class="time time hours">00</span>
                            <h3 class="name">Hrs</h3>
                        </div>
                        <span class="text">:</span>
                        <div class="date">
                            <span class="time minutes">55</span>
                            <h3 class="name">Min</h3>
                        </div>
                        <span class="text">:</span>
                        <div class="date">
                            <span class="time seconds">12</span>
                            <h3 class="name ms">Sec</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="close">
                <svg height="32" width="32" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#FFF" fill-rule="evenodd">
                        <path d="M0 0h32v32H12C5.373 32 0 26.627 0 20V0z" fill-opacity="0.16"></path>
                        <path
                            d="M12.707 11.293L16 14.585l3.293-3.292a1 1 0 011.414 1.414L17.415 16l3.292 3.293a1 1 0 01-1.414 1.414L16 17.415l-3.293 3.292a1 1 0 01-1.414-1.414L14.585 16l-3.292-3.293a1 1 0 011.414-1.414z"
                            fill-opacity="0.88" fill-rule="nonzero"></path>
                    </g>
                </svg>
            </div>
        </div>
        <div class="mob-nav__drop">
            <div class="adm-mask" style="background: rgba(0, 0, 0, 0.55);">
                <div class="adm-mask-content">
                    <div class="wrapper " style="right: 0">
                        <div class="top">
                            <div class="placeholder"></div>
                            <div class="close">
                                <svg height="24" viewBox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.287 12.469l.127.117L24 21.17l8.586-8.585a2 2 0 012.945 2.701l-.117.127L26.83 24l8.585 8.586a2 2 0 01-2.701 2.945l-.127-.117L24 26.83l-8.586 8.585a2 2 0 01-2.945-2.701l.117-.127L21.17 24l-8.585-8.586a2 2 0 012.701-2.945z"
                                        fill="#FFF" fill-rule="evenodd" opacity="0.94"></path>
                                </svg>
                            </div>
                        </div>

                        <div class=" nav-block">

                            <a class=" nav-item" href="#">
								<span class=" icon">
									<svg height="16" viewBox="0 0 32 32" width="16" xmlns="http://www.w3.org/2000/svg">
										<g fill="none" fill-rule="evenodd" opacity="0.94" stroke="#FFF" stroke-width="2">
											<rect height="26" rx="13" width="26" x="3" y="3"></rect>
											<path d="M11.757 16L16 11.757 20.243 16 16 20.243z" stroke-linejoin="round"></path>
										</g>
									</svg>
								</span>
                                <span class=" text">Цены</span>
                                <div class=" arrow">
                                    <svg height="16" viewBox="0 0 32 32" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 8l8 8-8 8" fill="none" opacity="0.48" stroke="#FFF" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class=" nav-block">
                            <div class="drop-mob-lang__link nav-item">
                                <div class=" icon">
                                    <svg height="16" viewBox="0 0 32 32" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 8H6a2 2 0 00-2 2v12a2 2 0 002 2h6m-8-8.5h8m6 8.5V8l10 15.5V8" fill="none"
                                              fill-rule="evenodd" opacity="0.94" stroke="#FFF" stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"></path>
                                    </svg>
                                </div>
                                <div class=" text">
                                    <div class="">Pусский</div>
                                </div>
                                <div class=" arrow rotate-90 transition-all">
                                    <svg height="16" viewBox="0 0 32 32" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 8l8 8-8 8" fill="none" opacity="0.48" stroke="#FFF"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="drop-mob-lang__list">
                                <a class=" nav-item" href="/pricing"><span class=" localeText">English</span></a>
                                <a class=" nav-item" href="/ja/pricing"><span class=" localeText">日本語</span></a>
                                <a class=" nav-item" href="/fr/pricing"><span class=" localeText">Français</span></a>
                                <a class=" nav-item" href="/ru/pricing"><span class=" localeText">Pусский</span></a>
                                <a class=" nav-item" href="/de/pricing"><span class=" localeText">Deutsch</span></a>
                                <a class=" nav-item" href="/ko/pricing"><span class=" localeText">한국어</span></a>
                                <a class=" nav-item" href="/es/pricing"><span class=" localeText">Español</span></a>
                                <a class=" nav-item" href="/pt/pricing"><span class=" localeText">Português</span></a>
                            </div>

                        </div>

                        <div class=" links">
                            <div class="">
                                <a class="" href="/ru/terms-of-service" target="_blank">Условия обслуживания</a>
                            </div>
                            <span class="">|</span>
                            <div class="">
                                <a class="" href="/ru/privacy" target="_blank">Политика конфиденциальности</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <div class="footer-n wrapper">
            <div class=" links">
                <div class=" zone">
                    <div class=" cu-title">Связаться с нами</div>
                    <div class=" cu"><a aria-label="deepswap email" class=" hover-icon"
                                        href="mailto:feedback@deepswap.ai"
                                        rel="noreferrer nofollow" target="_blank">
                            <svg height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <circle cx="12" cy="12" fill-opacity="0.16" r="12"></circle>
                                    <path
                                        d="M17 7a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2V9a2 2 0 012-2h10zM7.176 9.532a.5.5 0 00-.482.864l.049.033 5 3 .082.04a.5.5 0 00.374-.01l.058-.03 5-3 .073-.053a.5.5 0 00-.536-.832l-.051.027L12 12.417 7.257 9.571l-.081-.04z"
                                        opacity="0.94"></path>
                                </g>
                            </svg>
                        </a><a aria-label="deepswap Discord" class=" hover-icon"
                               href="https://discord.gg/deepswap-983634584619061279"
                               rel="noreferrer nofollow" target="_blank">
                            <svg height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <circle cx="12" cy="12" fill-opacity="0.16" r="12"></circle>
                                    <path
                                        d="M12 7.04c-2.68 0-4.56 1.15-4.56 1.15 1.03-.92 2.83-1.45 2.83-1.45l-.17-.17c-1.69.03-3.22 1.2-3.22 1.2-1.72 3.59-1.61 6.69-1.61 6.69 1.4 1.81 3.48 1.68 3.48 1.68l.71-.9c-1.25-.27-2.04-1.38-2.04-1.38S9.3 15.14 12 15.14s4.58-1.28 4.58-1.28-.79 1.11-2.04 1.38l.71.9s2.08.13 3.48-1.68c0 0 .11-3.1-1.61-6.69 0 0-1.53-1.17-3.22-1.2l-.17.17s1.8.53 2.83 1.45c0 0-1.88-1.15-4.56-1.15m-2.07 3.79c.65 0 1.18.57 1.17 1.27 0 .69-.52 1.27-1.17 1.27-.64 0-1.16-.58-1.16-1.27 0-.7.51-1.27 1.16-1.27m4.17 0c.65 0 1.17.57 1.17 1.27 0 .69-.52 1.27-1.17 1.27-.64 0-1.16-.58-1.16-1.27 0-.7.51-1.27 1.16-1.27z"
                                        fill-opacity="0.94"></path>
                                </g>
                            </svg>
                        </a></div>
                </div>
                <div class=" zone">
                    <div class=" sm-title">Социальные СМИ</div>
                    <div class=" sm">
                        <a aria-label="deepswap facebook" class=" hover-icon" href="https://www.facebook.com/DeepSwap"
                           rel="noreferrer nofollow" target="_blank">
                            <svg height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <circle cx="12" cy="12" fill-opacity="0.16" r="12"></circle>
                                    <path
                                        d="M8.777 12V9.704h1.408v-1.39c0-1.872.56-3.222 2.61-3.222h2.44v2.291h-1.718c-.86 0-1.056.572-1.056 1.17v1.15h2.647L14.747 12H12.46v6.926h-2.276V12H8.777z"
                                        fill-opacity="0.94"></path>
                                </g>
                            </svg>
                        </a>
                        <a aria-label="deepswap instagram" class=" hover-icon" href="https://www.instagram.com/deepswap_web/"
                           rel="noreferrer nofollow" target="_blank">
                            <svg height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <circle cx="12" cy="12" fill-opacity="0.16" r="12"></circle>
                                    <path
                                        d="M11.95 8.84a3.188 3.188 0 100 6.375 3.188 3.188 0 000-6.375zm0 5.262a2.074 2.074 0 110-4.149 2.074 2.074 0 010 4.149zm6.18-4.78a3.444 3.444 0 00-3.475-3.474s-1.375-.044-2.705-.044-2.66.044-2.66.044a3.518 3.518 0 00-3.52 3.519s-.043 1.244-.043 2.529c0 1.372.044 2.792.044 2.792a3.518 3.518 0 003.518 3.519s1.244.044 2.529.044c1.373 0 2.837-.044 2.837-.044a3.444 3.444 0 003.474-3.475s.044-1.404.044-2.749c0-1.315-.044-2.66-.044-2.66zm-1.113 5.195c0 1.594-.984 2.577-2.577 2.577 0 0-1.472.036-2.598.036-1.054 0-2.338-.036-2.338-.036-1.593 0-2.621-1.027-2.621-2.62 0 0-.036-1.429-.036-2.555 0-1.053.036-2.381.036-2.381 0-1.594 1.028-2.578 2.621-2.578 0 0 1.355-.036 2.446-.036 1.09 0 2.49.036 2.49.036 1.593 0 2.577.984 2.577 2.578 0 0 .036 1.375.036 2.453 0 1.103-.036 2.526-.036 2.526zM15.29 7.955a.772.772 0 00-.77.774c0 .427.345.774.77.774.426 0 .77-.347.77-.774a.772.772 0 00-.77-.774z"
                                        fill-opacity="0.94"></path>
                                </g>
                            </svg>
                        </a>
                        <a aria-label="deepswap twitter" class=" hover-icon" href="https://twitter.com/deepswapweb"
                           rel="noreferrer nofollow" target="_blank">
                            <svg height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <circle cx="12" cy="12" fill-opacity="0.16" r="12"></circle>
                                    <path
                                        d="M17.767 9.046c.008.125.008.257.008.385 0 3.932-2.995 8.462-8.467 8.462a8.437 8.437 0 01-4.57-1.334c.241.027.472.037.718.037a5.968 5.968 0 003.694-1.27 2.976 2.976 0 01-2.78-2.062c.458.067.87.067 1.342-.053a2.973 2.973 0 01-2.382-2.92v-.037c.394.222.857.359 1.342.377a2.977 2.977 0 01-.921-3.975 8.445 8.445 0 006.134 3.11c-.42-2.022 1.09-3.659 2.906-3.659a2.97 2.97 0 012.172.938 5.877 5.877 0 001.889-.716 2.961 2.961 0 01-1.307 1.637c.6-.064 1.178-.23 1.714-.463a6.235 6.235 0 01-1.492 1.543z"
                                        fill-opacity="0.94"></path>
                                </g>
                            </svg>
                        </a><a aria-label="deepswap tiktok" class=" hover-icon"
                               href="https://www.tiktok.com/@deepswap_official"
                               rel="noreferrer nofollow" target="_blank">
                            <svg height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <circle cx="12" cy="12" fill-opacity="0.16" r="12"></circle>
                                    <path d="M14.719 10.32l.285.145-.285-.174z" fill-rule="nonzero"></path>
                                    <path
                                        d="M12.513 14.628a.62.62 0 000-.154V6.05h1.71c0-.083 0-.17-.03-.257h-2.152v8.43a.524.524 0 010 .148 1.783 1.783 0 01-2.28 1.324 1.742 1.742 0 002.765-1.067h-.013zm-5.454.968a3.782 3.782 0 01-.236-1.498 3.94 3.94 0 012.827-3.629c.216-.071.44-.121.666-.149v-.265a3.691 3.691 0 00-1.138.157 3.948 3.948 0 00-2.586 5.127 4.047 4.047 0 002.147 2.284 4.03 4.03 0 01-1.68-2.027zm10.126-6.832a2.851 2.851 0 01-1.076-.215c.327.21.693.35 1.076.414v-.199z"
                                        fill-rule="nonzero" opacity="0.7"></path>
                                    <path
                                        d="M15.108 7.879a3.11 3.11 0 001.001.67 3.434 3.434 0 01-.517-.414 3.157 3.157 0 01-.898-2.069h-.455c.073.686.38 1.326.869 1.813zm2.077 1.096v1.978a4.862 4.862 0 01-2.18-.484c.801.49 1.724.748 2.664.745V9.02a3.1 3.1 0 01-.484-.046zm-2.95 1.246v3.782a3.964 3.964 0 01-3.31 3.898 3.848 3.848 0 01-2.194-.278c.798.497 1.75.687 2.677.534a3.968 3.968 0 003.31-3.902V10.32a7.93 7.93 0 01-.484-.286v.187zM9.98 12.236c-.78.128-1.38.758-1.47 1.543a1.812 1.812 0 001.238 1.92 1.771 1.771 0 01.716-3.202c.107 0 .215-.03.323-.046v-2.152a3.724 3.724 0 00-.485.021v1.874c-.107.013-.215.021-.322.042z"
                                        fill-rule="nonzero" opacity="0.4"></path>
                                    <path
                                        d="M17.185 10.953V8.975a2.839 2.839 0 01-1.076-.414 3.108 3.108 0 01-1.001-.67 3.004 3.004 0 01-.87-1.829H12.53v8.425a.62.62 0 010 .153 1.742 1.742 0 01-2.764 1.068 1.241 1.241 0 01-.203-.083 1.808 1.808 0 01-1.051-1.846A1.767 1.767 0 019.98 12.24c.107-.02.215-.029.322-.041V10.32a3.48 3.48 0 00-.653.137 3.94 3.94 0 00-2.827 3.64c-.023.511.057 1.02.236 1.499a4.03 4.03 0 001.655 2.027 3.852 3.852 0 002.194.278 3.964 3.964 0 003.31-3.898v-3.948c.163.105.324.2.484.286v-.03l.286.175a4.862 4.862 0 002.197.467z"
                                        fill-opacity="0.94"></path>
                                </g>
                            </svg>
                        </a><a aria-label="deepswap youtube" class=" hover-icon"
                               href="https://www.youtube.com/channel/UCbQ4oHlsS5CuCjYczkyBaHA" rel="noreferrer nofollow"
                               target="_blank">
                            <svg height="36" width="36" xmlns="http://www.w3.org/2000/svg">
                                <g fill="#FFF" fill-rule="evenodd">
                                    <circle cx="12" cy="12" fill-opacity="0.16" r="12"></circle>
                                    <path
                                        d="M16.908 7.38c.937.108 1.153.625 1.428 1.56 0 0 .252 1.573.252 3.096 0 1.428-.252 2.82-.252 2.82-.252.937-.563 1.392-1.428 1.56 0 0-2.091.157-4.342.168h-.242c-2.58 0-5.292-.168-5.292-.168-.876-.108-1.284-.684-1.475-1.56 0 0-.252-1.512-.252-3.012 0-1.452.252-2.903.252-2.903.252-.9.491-1.453 1.474-1.561 0 0 2.277-.123 4.651-.132h.246c2.485 0 4.98.132 4.98.132zm-6.374 1.953v4.97l3.84-2.484-3.84-2.486z"
                                        fill-opacity="0.94"></path>
                                </g>
                            </svg>
                        </a></div>
                </div>
                <div class=" zone zone-h5">
                    <div class=" tp-title">Юридические разъяснения</div>
                    <div class=" tos"><a class="" href="/ru/terms-of-service" target="_blank">Условия
                            обслуживания</a></div>
                    <div class=" split-line"></div>
                    <div class=" tos"><a class="" href="/ru/privacy" target="_blank">Политика
                            конфиденциальности</a></div>
                    <div class=" split-line"></div>
                    <div class=" privacy"><a class="" href="/ru/refund-policy" target="_blank">Политика
                            возврата средств</a></div>
                </div>
                <div class=" zone zone-h5">
                    <div class=" tp-title">Помощь</div>
                    <div class=" tos"><a class="" href="/ru/resources" target="_blank">Ресурсы</a>
                    </div>
                    <div class=" tos"><a class="" href="https://blog.deepswap.ai/"
                                         rel="noreferrer nofollow"
                                         target="_blank">Блог</a></div>
                    <div class=" tos api"><a class=""
                                             href="https://blog.deepswap.ai/deepswap-api-service/"
                                             rel="noreferrer nofollow" target="_blank">API</a></div>
                    <div class=" tos"><a class=""
                                         href="https://blog.deepswap.ai/affiliate-program-deepswap/ "
                                         rel="noreferrer nofollow"
                                         target="_blank">Affiliate</a></div>
                    <div class=" tos"><a class="" href="https://blog.deepswap.ai/tutorial-guide/"
                                         rel="noreferrer nofollow" target="_blank">Руководство</a></div>
                    <div class=" tos"><a class=""
                                         href="https://blog.deepswap.ai/frequently-asked-questions/"
                                         rel="noreferrer nofollow" target="_blank">FAQ</a></div>
                </div>
            </div>
            <div class=" company">© deepswap Все права защищены.</div>
        </div>
        <div class="contactUs-fixed container-box">
            <div class="contact-us-menu">
                <div class="wrapper">
                    <a class="nav-item" href="mailto:feedback@deepswap.ai" rel="noreferrer nofollow" target="_blank">
                        <div class="nav-item-tp">Эл. почта</div>
                    </a>
                    <a class="nav-item" href="https://discord.gg/deepswap-983634584619061279" rel="noreferrer nofollow"
                       target="_blank">
                        <div class="nav-item-tp">Discord</div>
                    </a>
                </div>
            </div>
            <div class="question">Связаться с нами</div>
        </div>
    </div>
</div>

</body>

</html>
