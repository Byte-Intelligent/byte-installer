<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>@yield('title') | Byte Web Installer</title>
    <meta name="description" content="Byte Web Installer"/>
    <meta name="keywords"
          content="Byte Web Installer"/>
    <meta name="author" content="Byte Web Installer"/>
    <link rel="shortcut icon" href="{{asset("vendor/assets/images/favicon.png")}}" type="image/x-icon"/>
    <!-- css file  -->
    <link rel="stylesheet" href="{{asset("vendor/assets/css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("vendor/assets/scss/style.css")}}"/>
</head>

<body>
@yield('preloader')
<!-- Main Content -->
<div class="zMain-wrap">
    <div class="">
        <!-- Content -->
        <div data-aos="fade-up" data-aos-duration="1000" class="p-sm-30 p-15">
            <div class="row rg-20 justify-content-center">
                <div class="col-xl-4">
                    <div class="" style="margin-top: 105px;">
                        <!-- Top -->
                        <div class="bd-one bd-c-stroke bd-ra-20 bd-bl-ra-0 bd-br-ra-0 pt-25 px-sm-25 px-10 bg-white">
                            <ul class="d-flex flex-wrap rg-20 zList-four justify-content-center">
                                <li>
                                    <a href="#"
                                       class="d-flex align-items-center g-10 flex-wrap px-sm-30 px-15 pb-15 {{ Route::is('BiInstaller::check.configuration') ? 'active' : '' }}">
                                        <div class="flex-shrink-0">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16" cy="16" r="15.5" stroke="#5D697A"/>
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M17.485 9.85794C17.4881 9.87916 17.4905 9.90377 17.4954 9.953C17.5047 10.0459 17.5094 10.0924 17.5145 10.1234C17.6345 10.8556 18.4821 11.2066 19.0847 10.7738C19.1102 10.7555 19.1463 10.7259 19.2186 10.6668L19.2186 10.6668L19.2187 10.6667C19.2569 10.6354 19.276 10.6198 19.2932 10.6069C19.6783 10.3185 20.2143 10.3452 20.5688 10.6706C20.5846 10.6851 20.6021 10.7026 20.6371 10.7375L21.2625 11.363C21.2975 11.398 21.315 11.4154 21.3295 11.4313C21.6548 11.7858 21.6816 12.3217 21.3931 12.7068C21.3803 12.724 21.3646 12.7431 21.3333 12.7814L21.3333 12.7815C21.2741 12.8538 21.2445 12.89 21.2262 12.9155C20.7933 13.5181 21.1444 14.3656 21.8765 14.4857C21.9076 14.4908 21.9541 14.4954 22.047 14.5047C22.0962 14.5096 22.1208 14.5121 22.1421 14.5151C22.6184 14.5835 22.9785 14.9814 22.9991 15.4621C23 15.4835 23 15.5083 23 15.5578V16.4424C23 16.4917 23 16.5164 22.9991 16.5378C22.9785 17.0186 22.6184 17.4166 22.142 17.4849C22.1208 17.4879 22.0962 17.4904 22.0471 17.4953C21.9543 17.5046 21.9079 17.5092 21.877 17.5143C21.1447 17.6343 20.7936 18.4819 21.2265 19.0846C21.2448 19.1101 21.2743 19.1461 21.3334 19.2183L21.3334 19.2183C21.3647 19.2565 21.3803 19.2756 21.3931 19.2927C21.6816 19.6779 21.6549 20.214 21.3295 20.5685C21.315 20.5843 21.2976 20.6017 21.2628 20.6365L21.2627 20.6366L20.6371 21.2622C20.6022 21.2971 20.5847 21.3146 20.5689 21.3291C20.2143 21.6545 19.6784 21.6812 19.2932 21.3927C19.2761 21.3799 19.2569 21.3642 19.2187 21.3329L19.2186 21.3328C19.1463 21.2737 19.1102 21.2442 19.0847 21.2258C18.4821 20.793 17.6346 21.1441 17.5145 21.8762C17.5094 21.9073 17.5048 21.9538 17.4955 22.0468L17.4955 22.0469C17.4905 22.0962 17.4881 22.1209 17.485 22.1422C17.4166 22.6184 17.0188 22.9784 16.5381 22.9991C16.5166 23 16.4919 23 16.4423 23H15.5579C15.5084 23 15.4837 23 15.4622 22.9991C14.9815 22.9784 14.5836 22.6184 14.5153 22.1421C14.5122 22.1209 14.5098 22.0962 14.5048 22.047C14.4955 21.954 14.4909 21.9074 14.4858 21.8764C14.3657 21.1443 13.5182 20.7933 12.9157 21.226C12.8901 21.2444 12.8539 21.274 12.7816 21.3332C12.7432 21.3645 12.7241 21.3802 12.7069 21.3931C12.3218 21.6815 11.7858 21.6548 11.4313 21.3295C11.4155 21.315 11.398 21.2975 11.363 21.2625L11.363 21.2624L10.7376 20.637C10.7026 20.602 10.6851 20.5846 10.6706 20.5687C10.3453 20.2142 10.3185 19.6783 10.607 19.2931C10.6199 19.276 10.6355 19.2568 10.6669 19.2185L10.6669 19.2185C10.726 19.1462 10.7556 19.1101 10.7739 19.0845C11.2067 18.4819 10.8557 17.6344 10.1236 17.5143C10.0925 17.5093 10.046 17.5046 9.95304 17.4953C9.90378 17.4904 9.87915 17.4879 9.85791 17.4849C9.38162 17.4165 9.02156 17.0186 9.00092 16.5379C9 16.5165 9 16.4917 9 16.4422V15.5579C9 15.5083 9 15.4835 9.00092 15.462C9.0216 14.9814 9.38161 14.5835 9.85783 14.5152C9.87911 14.5121 9.90378 14.5096 9.95312 14.5047C10.0463 14.4954 10.0929 14.4907 10.124 14.4856C10.856 14.3655 11.207 13.5181 10.7743 12.9156C10.7559 12.89 10.7263 12.8537 10.667 12.7813L10.667 12.7813L10.667 12.7812C10.6356 12.7429 10.6199 12.7237 10.607 12.7065C10.3186 12.3214 10.3453 11.7855 10.6706 11.431C10.6851 11.4152 10.7027 11.3976 10.7377 11.3626L10.7377 11.3626L11.3631 10.7372C11.3981 10.7022 11.4156 10.6847 11.4314 10.6702C11.7859 10.3449 12.3218 10.3182 12.7069 10.6066C12.7241 10.6195 12.7433 10.6352 12.7817 10.6665L12.7817 10.6665C12.8539 10.7257 12.8901 10.7553 12.9156 10.7736C13.5182 11.2065 14.3658 10.8554 14.4858 10.1231C14.4909 10.0922 14.4956 10.0458 14.5048 9.95295L14.5048 9.95292L14.5049 9.95288C14.5098 9.90375 14.5122 9.87918 14.5153 9.85799C14.5836 9.38164 14.9815 9.02152 15.4623 9.00092C15.4837 9 15.5084 9 15.5578 9H16.4424C16.4919 9 16.5166 9 16.538 9.00092C17.0188 9.02155 17.4167 9.38163 17.485 9.85794ZM16 18.8C17.5464 18.8 18.8 17.5464 18.8 16C18.8 14.4536 17.5464 13.2 16 13.2C14.4536 13.2 13.2 14.4536 13.2 16C13.2 17.5464 14.4536 18.8 16 18.8Z"
                                                    fill="#5D697A"
                                                />
                                            </svg>
                                        </div>
                                        <span class="fs-14 fw-600 lh-25 text-para-text">Configuration</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="d-flex align-items-center g-10 flex-wrap px-sm-30 px-15 pb-15 {{ Route::is('BiInstaller::installation.process') ? 'active' : '' }}">
                                        <div class="flex-shrink-0">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="16" cy="16" r="15.5" stroke="#5D697A"/>
                                                <path
                                                    fill-rule="evenodd"
                                                    clip-rule="evenodd"
                                                    d="M17.485 9.85794C17.4881 9.87916 17.4905 9.90377 17.4954 9.953C17.5047 10.0459 17.5094 10.0924 17.5145 10.1234C17.6345 10.8556 18.4821 11.2066 19.0847 10.7738C19.1102 10.7555 19.1463 10.7259 19.2186 10.6668L19.2186 10.6668L19.2187 10.6667C19.2569 10.6354 19.276 10.6198 19.2932 10.6069C19.6783 10.3185 20.2143 10.3452 20.5688 10.6706C20.5846 10.6851 20.6021 10.7026 20.6371 10.7375L21.2625 11.363C21.2975 11.398 21.315 11.4154 21.3295 11.4313C21.6548 11.7858 21.6816 12.3217 21.3931 12.7068C21.3803 12.724 21.3646 12.7431 21.3333 12.7814L21.3333 12.7815C21.2741 12.8538 21.2445 12.89 21.2262 12.9155C20.7933 13.5181 21.1444 14.3656 21.8765 14.4857C21.9076 14.4908 21.9541 14.4954 22.047 14.5047C22.0962 14.5096 22.1208 14.5121 22.1421 14.5151C22.6184 14.5835 22.9785 14.9814 22.9991 15.4621C23 15.4835 23 15.5083 23 15.5578V16.4424C23 16.4917 23 16.5164 22.9991 16.5378C22.9785 17.0186 22.6184 17.4166 22.142 17.4849C22.1208 17.4879 22.0962 17.4904 22.0471 17.4953C21.9543 17.5046 21.9079 17.5092 21.877 17.5143C21.1447 17.6343 20.7936 18.4819 21.2265 19.0846C21.2448 19.1101 21.2743 19.1461 21.3334 19.2183L21.3334 19.2183C21.3647 19.2565 21.3803 19.2756 21.3931 19.2927C21.6816 19.6779 21.6549 20.214 21.3295 20.5685C21.315 20.5843 21.2976 20.6017 21.2628 20.6365L21.2627 20.6366L20.6371 21.2622C20.6022 21.2971 20.5847 21.3146 20.5689 21.3291C20.2143 21.6545 19.6784 21.6812 19.2932 21.3927C19.2761 21.3799 19.2569 21.3642 19.2187 21.3329L19.2186 21.3328C19.1463 21.2737 19.1102 21.2442 19.0847 21.2258C18.4821 20.793 17.6346 21.1441 17.5145 21.8762C17.5094 21.9073 17.5048 21.9538 17.4955 22.0468L17.4955 22.0469C17.4905 22.0962 17.4881 22.1209 17.485 22.1422C17.4166 22.6184 17.0188 22.9784 16.5381 22.9991C16.5166 23 16.4919 23 16.4423 23H15.5579C15.5084 23 15.4837 23 15.4622 22.9991C14.9815 22.9784 14.5836 22.6184 14.5153 22.1421C14.5122 22.1209 14.5098 22.0962 14.5048 22.047C14.4955 21.954 14.4909 21.9074 14.4858 21.8764C14.3657 21.1443 13.5182 20.7933 12.9157 21.226C12.8901 21.2444 12.8539 21.274 12.7816 21.3332C12.7432 21.3645 12.7241 21.3802 12.7069 21.3931C12.3218 21.6815 11.7858 21.6548 11.4313 21.3295C11.4155 21.315 11.398 21.2975 11.363 21.2625L11.363 21.2624L10.7376 20.637C10.7026 20.602 10.6851 20.5846 10.6706 20.5687C10.3453 20.2142 10.3185 19.6783 10.607 19.2931C10.6199 19.276 10.6355 19.2568 10.6669 19.2185L10.6669 19.2185C10.726 19.1462 10.7556 19.1101 10.7739 19.0845C11.2067 18.4819 10.8557 17.6344 10.1236 17.5143C10.0925 17.5093 10.046 17.5046 9.95304 17.4953C9.90378 17.4904 9.87915 17.4879 9.85791 17.4849C9.38162 17.4165 9.02156 17.0186 9.00092 16.5379C9 16.5165 9 16.4917 9 16.4422V15.5579C9 15.5083 9 15.4835 9.00092 15.462C9.0216 14.9814 9.38161 14.5835 9.85783 14.5152C9.87911 14.5121 9.90378 14.5096 9.95312 14.5047C10.0463 14.4954 10.0929 14.4907 10.124 14.4856C10.856 14.3655 11.207 13.5181 10.7743 12.9156C10.7559 12.89 10.7263 12.8537 10.667 12.7813L10.667 12.7813L10.667 12.7812C10.6356 12.7429 10.6199 12.7237 10.607 12.7065C10.3186 12.3214 10.3453 11.7855 10.6706 11.431C10.6851 11.4152 10.7027 11.3976 10.7377 11.3626L10.7377 11.3626L11.3631 10.7372C11.3981 10.7022 11.4156 10.6847 11.4314 10.6702C11.7859 10.3449 12.3218 10.3182 12.7069 10.6066C12.7241 10.6195 12.7433 10.6352 12.7817 10.6665L12.7817 10.6665C12.8539 10.7257 12.8901 10.7553 12.9156 10.7736C13.5182 11.2065 14.3658 10.8554 14.4858 10.1231C14.4909 10.0922 14.4956 10.0458 14.5048 9.95295L14.5048 9.95292L14.5049 9.95288C14.5098 9.90375 14.5122 9.87918 14.5153 9.85799C14.5836 9.38164 14.9815 9.02152 15.4623 9.00092C15.4837 9 15.5084 9 15.5578 9H16.4424C16.4919 9 16.5166 9 16.538 9.00092C17.0188 9.02155 17.4167 9.38163 17.485 9.85794ZM16 18.8C17.5464 18.8 18.8 17.5464 18.8 16C18.8 14.4536 17.5464 13.2 16 13.2C14.4536 13.2 13.2 14.4536 13.2 16C13.2 17.5464 14.4536 18.8 16 18.8Z"
                                                    fill="#5D697A"
                                                />
                                            </svg>
                                        </div>
                                        <span class="fs-14 fw-600 lh-25 text-para-text">Installation</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Bottom -->
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- js file  -->
<script src="{{asset("vendor/assets/js/jquery-3.7.0.min.js")}}"></script>
<script src="{{asset("vendor/assets/js/bootstrap.min.js")}}"></script>
@stack('script')
</body>
</html>
