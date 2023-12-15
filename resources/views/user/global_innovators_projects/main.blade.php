@extends('layout.user.main')

@section('head')
    <title>{{ __('pages/programs/global_innovators_projects.meta_title') }}</title>
    <meta name="title" content="{{ __('pages/programs/global_innovators_projects.meta_title') }}" />
    <meta name="description" content="{{ __('pages/programs/global_innovators_projects.meta_description') }}" />
@endsection

@section('content')
    {{-- =============================================== Banner Section =============================================== --}}
    <section class="w-full">
        <img loading="lazy" src="{{ asset('assets/img/global_innovators_project/Banner summer program.webp') }}"
            alt="Allineduspace Global Innovators Project Banner"
            class="hidden w-full h-full object-contain object-left lg:block xl:object-center xl:h-screen xl:object-cover">
        <img loading="lazy" src="{{ asset('assets/img/global_innovators_project/2023_Summer Program_Banner_Mobile.webp') }}"
            alt="Allineduspace Global Innovators Project Banner" class="w-full h-full object-contain lg:hidden">
    </section>

    {{-- =============================================== Main Section =============================================== --}}
    <section class="py-16">
        <div class="main-container">
            <div class="flex flex-col items-center">
                {{-- Description --}}
                <div class="pb-10 flex flex-col items-center w-full max-w-5xl mx-auto">
                    <div class="font-primary font-medium text-xl text-[#576996] text-center md:font-semibold md:text-2xl">
                        {!! __('pages/programs/global_innovators_projects.description') !!}
                    </div>
                    <a href="#form"
                        class="mt-8 w-full max-w-xs px-4 py-2 rounded-md bg-primary font-primary font-medium text-base text-white text-center">
                        {{ __('pages/programs/global_innovators_projects.description_button') }}
                    </a>
                </div>

                {{-- Cultural Immersion Research Program --}}
                <div class="py-10 flex flex-col items-center gap-y-6 w-full max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/CEP Bali.webp') }}"
                        alt="Allineduspace Cultural Immersion Research Program Logo"
                        class="w-full max-w-xl mx-auto object-contain">
                    <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                        <span
                            class="inline-flex items-center gap-4 px-4 py-2 font-primary font-bold text-2xl text-yellow rounded-lg bg-[#f9cda6] shadow-xl">
                            <img src="{{ asset('assets/icon/global-innovators-project/summer.webp') }}" alt="Summer Icon"
                                class="h-8">
                            Summer
                        </span>
                        <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                            {{ __('pages/programs/global_innovators_projects.cultural_immersion_research_program_date') }}
                        </h3>
                    </div>
                    <p class="max-w-2xl mt-2 font-primary text-base text-primary text-center">
                        {{ __('pages/programs/global_innovators_projects.cultural_immersion_research_program_desc') }}
                    </p>
                    <div class="mt-4 w-full max-w-xl mx-auto">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/N2_p7gUaa_E?si=UUC6QMEVDXPZJq7c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <a href="https://cultural-research.all-inedu.com/" target="_blank"
                        class="mt-4 w-full max-w-[160px] px-4 py-2 rounded-md bg-yellow font-primary font-medium text-base text-white text-center">
                        {{ __('pages/programs/global_innovators_projects.cultural_immersion_research_program_btn') }}
                    </a>
                </div>

                {{-- Innovators In Residence Program --}}
                <div class="py-10 flex flex-col items-center gap-y-6 w-full max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/GIP Logo 2024.webp') }}"
                        alt="Allineduspace Innovators In Residence Program Logo"
                        class="w-full max-w-xl mx-auto object-contain">
                    <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                        <span
                            class="inline-flex items-center gap-4 px-4 py-2 font-primary font-bold text-2xl text-primary rounded-lg bg-[#BAD6FF] shadow-xl">
                            <img src="{{ asset('assets/icon/global-innovators-project/winter.webp') }}" alt="Winter Icon"
                                class="h-8">
                            Winter
                        </span>
                        <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                            {{ __('pages/programs/global_innovators_projects.innovators_in_residence_date') }}
                        </h3>
                    </div>
                    <p class="max-w-2xl mt-2 font-primary text-base text-primary text-center">
                        {{ __('pages/programs/global_innovators_projects.innovators_in_residence_desc') }}
                    </p>
                    <div class="mt-4 w-full max-w-xl mx-auto">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/qmxW3l3w1QE?si=HI0fVKNsoKAzBfg8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <a href="https://immersion-program.all-inedu.com/" target="_blank"
                        class="mt-4 w-full max-w-[160px] px-4 py-2 rounded-md bg-yellow font-primary font-medium text-base text-white text-center">
                        {{ __('pages/programs/global_innovators_projects.innovators_in_residence_btn') }}
                    </a>
                </div>

                {{-- Global Immersion Programs
                <div class="py-10 flex flex-col items-center gap-y-6 max-w-3xl mx-auto">
                    <img src="{{ asset('assets/img/global_innovators_project/Logo GIP.webp') }}"
                        alt="Allineduspace Global Immersion Programs Logo" class="w-full max-w-xs mx-auto object-contain">
                    <div class="flex gap-4">
                        <span
                            class="inline-flex items-center gap-4 px-4 py-2 font-primary font-bold text-2xl text-primary rounded-lg bg-[#BAD6FF] shadow-xl">
                            <img src="{{ asset('assets/icon/global-innovators-project/winter.webp') }}" alt="Winter Icon"
                                class="h-8">
                            Winter
                        </span>
                        <span
                            class="inline-flex items-center gap-4 px-4 py-2 font-primary font-bold text-2xl text-primary rounded-lg bg-[#FDEFE0] shadow-xl">
                            <img src="{{ asset('assets/icon/global-innovators-project/summer.webp') }}" alt="Summer Icon"
                                class="w-8 h-8">
                            Summer
                        </span>
                    </div>
                    <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                        {{ __('pages/programs/global_innovators_projects.global_immersion_program_date') }}
                    </h3>
                    <p class="max-w-2xl mt-2 font-primary text-base text-primary text-center">
                        {{ __('pages/programs/global_innovators_projects.global_immersion_program_desc') }}
                    </p>
                </div> --}}

                {{-- Science Research & Businness --}}
                {{-- <div class="flex flex-col items-center">
                    <div class="pb-10 w-full grid grid-cols-1 lg:grid-cols-2 lg:gap-16"> --}}
                        {{-- Science Research --}}
                        {{-- <div class="flex flex-col items-center gap-6 lg:items-end">
                            <img src="{{ asset('assets/img/global_innovators_project/Science research logo.webp') }}"
                                alt="Allineduspace Science Research Logo" class="w-full max-w-sm object-contain">
                            <div class="flex flex-col lg:items-end">
                                <h3
                                    class="font-primary font-black text-2xl text-yellow text-center md:text-3xl lg:text-right">
                                    {{ __('pages/programs/global_innovators_projects.science_research_physical_science_title') }}
                                </h3>
                                <h3
                                    class="font-primary font-black text-2xl text-primary text-center md:text-3xl lg:text-right">
                                    {{ __('pages/programs/global_innovators_projects.science_research_physical_science_date') }}
                                </h3>
                                <div class="mt-4 flex flex-wrap justify-center gap-2 lg:justify-end lg:max-w-md">
                                    @foreach (__('pages/programs/global_innovators_projects.science_research_physical_science_point') as $item)
                                        <div
                                            class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex flex-col lg:items-end">
                                <h3 class="font-primary font-black text-2xl text-yellow text-center md:text-3xl">
                                    {{ __('pages/programs/global_innovators_projects.science_research_life_science_title') }}
                                </h3>
                                <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                                    {{ __('pages/programs/global_innovators_projects.science_research_life_science_date') }}

                                </h3>
                                <div class="mt-4 flex flex-wrap justify-center gap-2 lg:justify-end lg:max-w-md">
                                    @foreach (__('pages/programs/global_innovators_projects.science_research_life_science_point') as $item)
                                        <div
                                            class="px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> --}}
                        {{-- Business --}}
                        {{-- <div class="mt-10 flex flex-col items-center gap-6 lg:items-start lg:mt-0">
                            <img src="{{ asset('assets/img/global_innovators_project/Business logo.webp') }}"
                                alt="Allineduspace Business Logo" class="w-full max-w-sm object-contain">
                            <div class="flex flex-col gap-4 lg:items-start">
                                <h3 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
                                    {{ __('pages/programs/global_innovators_projects.business_date') }}
                                </h3>
                                <div class="font-primary text-base text-primary text-center lg:text-left">
                                    {{ __('pages/programs/global_innovators_projects.business_desc') }}

                                </div>
                                <div class="flex flex-col gap-2">

                                    @foreach (__('pages/programs/global_innovators_projects.business_point') as $item)
                                        <div
                                            class="w-full px-4 py-2 bg-primary rounded-md font-primary text-base text-white text-center">
                                            {{ $item }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="w-full grid grid-cols-1 gap-8 lg:grid-cols-2">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/NinMHhLOYTg"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/hkkqinNCrsQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <a href="#"
                        class="mt-8 w-full max-w-[160px] px-4 py-2 rounded-md bg-yellow font-primary font-medium text-base text-white text-center">
                        {{ __('pages/programs/global_innovators_projects.global_immersion_program_btn') }}
                    </a>
                </div> --}}
            </div>
        </div>

    </section>

    {{-- =============================================== Bottom Section =============================================== --}}
    <section id="form" class="flex flex-col items-center py-16">
        <h2 class="font-primary font-black text-2xl text-primary text-center md:text-3xl">
            {{ __('pages/programs/global_innovators_projects.form_title') }}
        </h2>
        <div class="mt-2 w-full font-primary font-medium text-base text-[#F90C0C] text-center">
            {!! __('pages/programs/global_innovators_projects.form_desc') !!}
        </div>
        <div class="main-container w-full mt-12">
            <div class="w-full  rounded-lg overflow-hidden">
                <style type="text/css">
                    @import url("https://assets.mlcdn.com/fonts.css?version=1679399");
                </style>
                <style type="text/css">
                    /* LOADER */
                    .ml-form-embedSubmitLoad {
                        display: inline-block;
                        width: 20px;
                        height: 20px;
                    }

                    .g-recaptcha {
                        transform: scale(1);
                        -webkit-transform: scale(1);
                        transform-origin: 0 0;
                        -webkit-transform-origin: 0 0;
                        height: ;
                    }

                    .sr-only {
                        position: absolute;
                        width: 1px;
                        height: 1px;
                        padding: 0;
                        margin: -1px;
                        overflow: hidden;
                        clip: rect(0, 0, 0, 0);
                        border: 0;
                    }

                    .ml-form-embedSubmitLoad:after {
                        content: " ";
                        display: block;
                        width: 11px;
                        height: 11px;
                        margin: 1px;
                        border-radius: 50%;
                        border: 4px solid #fff;
                        border-color: #ffffff #ffffff #ffffff transparent;
                        animation: ml-form-embedSubmitLoad 1.2s linear infinite;
                    }

                    @keyframes ml-form-embedSubmitLoad {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    #mlb2-4053872.ml-form-embedContainer {
                        box-sizing: border-box;
                        display: table;
                        margin: 0 auto;
                        position: static;
                        width: 100% !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer h4,
                    #mlb2-4053872.ml-form-embedContainer p,
                    #mlb2-4053872.ml-form-embedContainer span,
                    #mlb2-4053872.ml-form-embedContainer button {
                        text-transform: none !important;
                        letter-spacing: normal !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper {
                        background-color: #1d274b;

                        border-width: 0px;
                        border-color: transparent;
                        border-radius: 0px;
                        border-style: solid;
                        box-sizing: border-box;
                        display: inline-block !important;
                        margin: 0;
                        padding: 0;
                        position: relative;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper.embedPopup,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper.embedDefault {
                        width: 100%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper.embedForm {
                        max-width: 100%;
                        width: 100%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-align-left {
                        text-align: left;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-align-center {
                        text-align: center;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-align-default {
                        display: table-cell !important;
                        vertical-align: middle !important;
                        text-align: center !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-align-right {
                        text-align: right;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedHeader img {
                        border-top-left-radius: 0px;
                        border-top-right-radius: 0px;
                        height: auto;
                        margin: 0 auto !important;
                        max-width: 100%;
                        width: undefinedpx;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody {
                        padding: 20px 20px 0 20px;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody.ml-form-embedBodyHorizontal {
                        padding-bottom: 0;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent {
                        text-align: left;
                        margin: 0 0 20px 0;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent h4,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent h4 {
                        color: #ffffff;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        font-size: 22px;
                        font-weight: 400;
                        margin: 0 0 10px 0;
                        text-align: center;
                        word-break: break-word;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p {
                        color: #fbfafa;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        font-size: 16px;
                        font-weight: 400;
                        line-height: 22px;
                        margin: 0 0 10px 0;
                        text-align: center;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ul,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ul,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol {
                        color: #fbfafa;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        font-size: 16px;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol {
                        list-style-type: lower-alpha;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent ol ol ol,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent ol ol ol {
                        list-style-type: lower-roman;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p a,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p a {
                        color: #000000;
                        text-decoration: underline;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group {
                        text-align: left !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-block-form .ml-field-group label {
                        margin-bottom: 5px;
                        color: #ffffff;
                        font-size: 18px;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        font-weight: bold;
                        font-style: normal;
                        text-decoration: none;
                        ;
                        display: inline-block;
                        line-height: 24px;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedContent p:last-child,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody .ml-form-successContent p:last-child {
                        margin: 0;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody form {
                        margin: 0;
                        width: 100%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow {
                        margin: 0 0 20px 0;
                        width: 100%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow {
                        float: left;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-formContent.horozintalForm {
                        margin: 0;
                        padding: 0 0 20px 0;
                        width: 100%;
                        height: auto;
                        float: left;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow {
                        margin: 0 0 10px 0;
                        width: 100%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-last-item {
                        margin: 0;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow.ml-formfieldHorizintal {
                        margin: 0;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input {
                        background-color: #ffffff !important;
                        color: #736767 !important;
                        border-color: #736767;
                        border-radius: 14px !important;
                        border-style: solid !important;
                        border-width: 1px !important;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px !important;
                        height: auto;
                        line-height: 21px !important;
                        margin-bottom: 0;
                        margin-top: 0;
                        margin-left: 0;
                        margin-right: 0;
                        padding: 10px 10px !important;
                        width: 100% !important;
                        box-sizing: border-box !important;
                        max-width: 100% !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-webkit-input-placeholder,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-webkit-input-placeholder {
                        color: #736767;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input::-moz-placeholder,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input::-moz-placeholder {
                        color: #736767;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-ms-input-placeholder,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-ms-input-placeholder {
                        color: #736767;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input:-moz-placeholder,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input:-moz-placeholder {
                        color: #736767;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow textarea,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow textarea {
                        background-color: #ffffff !important;
                        color: #736767 !important;
                        border-color: #736767;
                        border-radius: 14px !important;
                        border-style: solid !important;
                        border-width: 1px !important;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px !important;
                        height: auto;
                        line-height: 21px !important;
                        margin-bottom: 0;
                        margin-top: 0;
                        padding: 10px 10px !important;
                        width: 100% !important;
                        box-sizing: border-box !important;
                        max-width: 100% !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                        border-color: #736767 !important;
                        background-color: #ffffff !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input.custom-control-input[type="checkbox"] {
                        box-sizing: border-box;
                        padding: 0;
                        position: absolute;
                        z-index: -1;
                        opacity: 0;
                        margin-top: 5px;
                        margin-left: -1.5rem;
                        overflow: visible;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                        border-radius: 4px !important;
                    }


                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::after {
                        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::after {
                        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input:checked~.custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input:checked~.custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox input[type=checkbox]:checked~.label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox input[type=checkbox]:checked~.label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type=checkbox]:checked~.label-description::before {
                        border-color: #BE1E2D !important;
                        background-color: #BE1E2D !important;
                        color: #ffffff !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label::after {
                        top: 5px;
                        box-sizing: border-box;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                        top: 3px !important;
                        box-sizing: border-box !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                        top: 0px !important;
                        box-sizing: border-box !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after {
                        top: 0px !important;
                        box-sizing: border-box !important;
                        position: absolute;
                        left: -1.5rem;
                        display: block;
                        width: 1rem;
                        height: 1rem;
                        content: "";
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before {
                        top: 0px !important;
                        box-sizing: border-box !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::before {
                        position: absolute;
                        top: 4px;
                        left: -1.5rem;
                        display: block;
                        width: 16px;
                        height: 16px;
                        pointer-events: none;
                        content: "";
                        background-color: #ffffff;
                        border: #adb5bd solid 1px;
                        border-radius: 50%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-control-label::after {
                        position: absolute;
                        top: 5px !important;
                        left: -1.5rem;
                        display: block;
                        width: 1rem;
                        height: 1rem;
                        content: "";
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::before,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::before {
                        position: absolute;
                        top: 4px;
                        left: -1.5rem;
                        display: block;
                        width: 16px;
                        height: 16px;
                        pointer-events: none;
                        content: "";
                        background-color: #ffffff;
                        border: #adb5bd solid 1px;
                        border-radius: 50%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after {
                        position: absolute;
                        top: 3px !important;
                        left: -1.5rem;
                        display: block;
                        width: 1rem;
                        height: 1rem;
                        content: "";
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                        position: absolute;
                        top: 0px !important;
                        left: -1.5rem;
                        display: block;
                        width: 1rem;
                        height: 1rem;
                        content: "";
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-radio .custom-control-label::after {
                        background: no-repeat 50%/50% 50%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .custom-checkbox .custom-control-label::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedPermissions .ml-form-embedPermissionsOptionsCheckbox .label-description::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-interestGroupsRow .ml-form-interestGroupsRowCheckbox .label-description::after,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description::after {
                        background: no-repeat 50%/50% 50%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-control,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-control {
                        position: relative;
                        display: block;
                        min-height: 1.5rem;
                        padding-left: 1.5rem;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-input,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-input,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-input,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-input {
                        position: absolute;
                        z-index: -1;
                        opacity: 0;
                        box-sizing: border-box;
                        padding: 0;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-radio .custom-control-label,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-radio .custom-control-label,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-checkbox .custom-control-label,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-checkbox .custom-control-label {
                        color: #fbfafa;
                        font-size: 15px !important;
                        font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
                        line-height: 25px;
                        margin-bottom: 0;
                        position: relative;
                        vertical-align: top;
                        font-style: normal;
                        font-weight: 400;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow .custom-select,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow .custom-select {
                        background-color: #ffffff !important;
                        color: #736767 !important;
                        border-color: #736767;
                        border-radius: 14px !important;
                        border-style: solid !important;
                        border-width: 1px !important;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px !important;
                        line-height: 20px !important;
                        margin-bottom: 0;
                        margin-top: 0;
                        padding: 10px 28px 10px 12px !important;
                        width: 100% !important;
                        box-sizing: border-box !important;
                        max-width: 100% !important;
                        height: auto;
                        display: inline-block;
                        vertical-align: middle;
                        background: url('https://assets.mlcdn.com/ml/images/default/dropdown.svg') no-repeat right .75rem center/8px 10px;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        appearance: none;
                    }


                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow {
                        height: auto;
                        width: 100%;
                        float: left;
                    }

                    .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {
                        width: 70%;
                        float: left;
                    }

                    .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal {
                        width: 30%;
                        float: left;
                    }

                    .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-button-horizontal.labelsOn {
                        padding-top: 29px;
                    }

                    .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {
                        box-sizing: border-box;
                        float: left;
                        padding-right: 10px;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow input {
                        background-color: #ffffff;
                        color: #736767;
                        border-color: #736767;
                        border-radius: 14px;
                        border-style: solid;
                        border-width: 1px;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 16px;
                        line-height: 20px;
                        margin-bottom: 0;
                        margin-top: 0;
                        padding: 10px 10px;
                        width: 100%;
                        box-sizing: border-box;
                        overflow-y: initial;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button {
                        background-color: #BE1E2D !important;
                        border-color: #BE1E2D;
                        border-style: solid;
                        border-width: 1px;
                        border-radius: 4px;
                        box-shadow: none;
                        color: #ffffff !important;
                        cursor: pointer;
                        font-family: Verdana, Geneva, sans-serif;
                        font-size: 19px !important;
                        font-weight: 700;
                        line-height: 20px;
                        margin: 0 !important;
                        padding: 10px !important;
                        width: 100%;
                        height: auto;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-horizontalRow button:hover {
                        background-color: #333333 !important;
                        border-color: #333333 !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow input[type="checkbox"] {
                        box-sizing: border-box;
                        padding: 0;
                        position: absolute;
                        z-index: -1;
                        opacity: 0;
                        margin-top: 5px;
                        margin-left: -1.5rem;
                        overflow: visible;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow .label-description {
                        color: #000000;
                        display: block;
                        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
                        font-size: 12px;
                        text-align: left;
                        margin-bottom: 0;
                        position: relative;
                        vertical-align: top;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label {
                        font-weight: normal;
                        margin: 0;
                        padding: 0;
                        position: relative;
                        display: block;
                        min-height: 24px;
                        padding-left: 24px;

                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label a {
                        color: #000000;
                        text-decoration: underline;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p {
                        color: #000000 !important;
                        font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;
                        font-size: 12px !important;
                        font-weight: normal !important;
                        line-height: 18px !important;
                        padding: 0 !important;
                        margin: 0 5px 0 0 !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow label p:last-child {
                        margin: 0;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit {
                        margin: 0 0 20px 0;
                        float: left;
                        width: 100%;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button {
                        background-color: #BE1E2D !important;
                        border: none !important;
                        border-radius: 4px !important;
                        box-shadow: none !important;
                        color: #ffffff !important;
                        cursor: pointer;
                        font-family: Verdana, Geneva, sans-serif !important;
                        font-size: 19px !important;
                        font-weight: 700 !important;
                        line-height: 21px !important;
                        height: auto;
                        padding: 10px !important;
                        width: 100% !important;
                        box-sizing: border-box !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button.loading {
                        display: none;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button:hover {
                        background-color: #333333 !important;
                    }

                    .ml-subscribe-close {
                        width: 30px;
                        height: 30px;
                        background: url('https://assets.mlcdn.com/ml/images/default/modal_close.png') no-repeat;
                        background-size: 30px;
                        cursor: pointer;
                        margin-top: -10px;
                        margin-right: -10px;
                        position: absolute;
                        top: 0;
                        right: 0;
                    }

                    .ml-error input,
                    .ml-error textarea,
                    .ml-error select {
                        border-color: red !important;
                    }

                    .ml-error .custom-checkbox-radio-list {
                        border: 1px solid red !important;
                        border-radius: 0px;
                        padding: 10px;
                    }

                    .ml-error .label-description,
                    .ml-error .label-description p,
                    .ml-error .label-description p a,
                    .ml-error label:first-child {
                        color: #ff0000 !important;
                    }

                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p,
                    #mlb2-4053872.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-checkboxRow.ml-error .label-description p:first-letter {
                        color: #ff0000 !important;
                    }

                    @media only screen and (max-width: 460px) {

                        .ml-form-embedWrapper.embedDefault,
                        .ml-form-embedWrapper.embedPopup {
                            width: 100% !important;
                        }

                        .ml-form-formContent.horozintalForm {
                            float: left !important;
                        }

                        .ml-form-formContent.horozintalForm .ml-form-horizontalRow {
                            height: auto !important;
                            width: 100% !important;
                            float: left !important;
                        }

                        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal {
                            width: 100% !important;
                        }

                        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .ml-input-horizontal>div {
                            padding-right: 0px !important;
                            padding-bottom: 10px;
                        }

                        .ml-form-formContent.horozintalForm .ml-button-horizontal {
                            width: 100% !important;
                        }

                        .ml-form-formContent.horozintalForm .ml-button-horizontal.labelsOn {
                            padding-top: 0px !important;
                        }

                    }
                </style>


                <style type="text/css">
                    @media only screen and (max-width: 460px) {
                        .ml-form-formContent.horozintalForm .ml-form-horizontalRow .horizontal-fields {
                            margin-bottom: 10px !important;
                            width: 100% !important;
                        }
                    }
                </style>






























































































































































                <div id="mlb2-4053872" class="ml-form-embedContainer ml-subscribe-form ml-subscribe-form-4053872">
                    <div class="ml-form-align-center ">
                        <div class="ml-form-embedWrapper embedForm">




                            <div class="ml-form-embedBody ml-form-embedBodyHorizontal row-form">

                                <div class="ml-form-embedContent" style=" ">

                                    <h4></h4>
                                    <p><span style="font-size: 30px;">Global Innovators Project</span><span
                                            style="font-size: 28px;"><span style="font-size: 28px;"><span
                                                    style="font-size: 24px;"><br></span></span></span></p>
                                    <p><span style="font-size: 24px;">Let's kickstart your skill development and career
                                            exploration to make a positive impact in the future!<br></span></p>
                                    <p><span style="font-size: 18px;">Limited seat only!<br></span></p>
                                    <p><br></p>

                                </div>

                                <form class="ml-block-form"
                                    action="https://assets.mailerlite.com/jsonp/253019/forms/82774265184650402/subscribe"
                                    data-code="" method="post" target="_blank">
                                    <div class="ml-form-formContent">



                                        <div class="ml-form-fieldRow ">
                                            <div class="ml-field-group ml-field-name ml-validate-required">




                                                <!-- input -->
                                                <input aria-label="name" aria-required="true" type="text"
                                                    class="form-control" data-inputmask="" name="fields[name]"
                                                    placeholder="Name" autocomplete="name">
                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->

                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ">
                                            <div class="ml-field-group ml-field-nama_anak ml-validate-required">




                                                <!-- input -->
                                                <input aria-label="nama_anak" aria-required="true" type="text"
                                                    class="form-control" data-inputmask="" name="fields[nama_anak]"
                                                    placeholder="My Child's Name (if you are a student, then fill in this column with your name)"
                                                    autocomplete="">
                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->

                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ">
                                            <div
                                                class="ml-field-group ml-field-email ml-validate-email ml-validate-required">




                                                <!-- input -->
                                                <input aria-label="email" aria-required="true" type="email"
                                                    class="form-control" data-inputmask="" name="fields[email]"
                                                    placeholder="Email" autocomplete="email">
                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->

                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ">
                                            <div class="ml-field-group ml-field-phone ml-validate-required">




                                                <!-- input -->
                                                <input aria-label="phone" aria-required="true" type="text"
                                                    class="form-control" data-inputmask="" name="fields[phone]"
                                                    placeholder="Phone Number" autocomplete="">
                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->

                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ">
                                            <div class="ml-field-group ml-field-sekolah ml-validate-required">




                                                <!-- input -->
                                                <input aria-label="sekolah" aria-required="true" type="text"
                                                    class="form-control" data-inputmask="" name="fields[sekolah]"
                                                    placeholder="School" autocomplete="">
                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->

                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ">
                                            <div class="ml-field-group ml-field-graduation_year ml-validate-required">

                                                <label>Graduation Year</label>


                                                <!-- input -->

                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->
                                                <select class="custom-select" name="fields[graduation_year]"
                                                    aria-label="graduation_year" aria-required="true">
                                                    <option value="">-</option>
                                                    <!-- Visible if current or any next has value -->
                                                    <option>
                                                        2023
                                                    </option>

                                                    <option>
                                                        2024
                                                    </option>

                                                    <option>
                                                        2025
                                                    </option>

                                                    <option>
                                                        2026
                                                    </option>












                                                </select>
                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->

                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ">
                                            <div
                                                class="ml-field-group ml-field-participated_in_all_in_eventprogram ml-validate-required">

                                                <label>I want to know more about ...</label>


                                                <!-- input -->

                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->
                                                <div class="custom-checkbox-radio-list">
                                                    <!-- Visible if current or any next has value -->
                                                    <div class="custom-control custom-radio">
                                                        <input aria-label="participated_in_all_in_eventprogram"
                                                            aria-required="true"
                                                            name="fields[participated_in_all_in_eventprogram]"
                                                            class="custom-control-input" type="radio"
                                                            value="Community Empowerment Program (Summer Program Only)"
                                                            id="radio-4053872-63}-0">
                                                        <label class="custom-control-label" for="radio-4053872-63}-0">
                                                            Community Empowerment Program (Summer Program Only)
                                                        </label>
                                                    </div>

                                                    <div class="custom-control custom-radio">
                                                        <input aria-label="participated_in_all_in_eventprogram"
                                                            aria-required="true"
                                                            name="fields[participated_in_all_in_eventprogram]"
                                                            class="custom-control-input" type="radio"
                                                            value="Global Immersion Program" id="radio-4053872-63}-1">
                                                        <label class="custom-control-label" for="radio-4053872-63}-1">
                                                            Global Immersion Program
                                                        </label>
                                                    </div>
















                                                </div>
                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>
                                        <div class="ml-form-fieldRow ml-last-item">
                                            <div class="ml-field-group ml-field-session ml-validate-required">

                                                <label>I want to join the ...</label>


                                                <!-- input -->

                                                <!-- /input -->

                                                <!-- textarea -->

                                                <!-- /textarea -->

                                                <!-- select -->

                                                <!-- /select -->

                                                <!-- checkboxes -->

                                                <!-- /checkboxes -->

                                                <!-- radio -->
                                                <div class="custom-checkbox-radio-list">
                                                    <!-- Visible if current or any next has value -->
                                                    <div class="custom-control custom-radio">
                                                        <input aria-label="session" aria-required="true"
                                                            name="fields[session]" class="custom-control-input"
                                                            type="radio" value="Summer Program"
                                                            id="radio-4053872-73}-0">
                                                        <label class="custom-control-label" for="radio-4053872-73}-0">
                                                            Summer Program
                                                        </label>
                                                    </div>

                                                    <div class="custom-control custom-radio">
                                                        <input aria-label="session" aria-required="true"
                                                            name="fields[session]" class="custom-control-input"
                                                            type="radio" value="Winter Program"
                                                            id="radio-4053872-73}-1">
                                                        <label class="custom-control-label" for="radio-4053872-73}-1">
                                                            Winter Program
                                                        </label>
                                                    </div>
















                                                </div>
                                                <!-- /radio -->

                                                <!-- countries -->

                                                <!-- /countries -->





                                            </div>
                                        </div>

                                    </div>



                                    <!-- Privacy policy -->

                                    <!-- /Privacy policy -->













                                    <input type="hidden" name="ml-submit" value="1">

                                    <div class="ml-form-embedSubmit">

                                        <button type="submit" class="primary">Register Now</button>

                                        <button disabled="disabled" style="display: none;" type="button"
                                            class="loading">
                                            <div class="ml-form-embedSubmitLoad"></div>
                                            <span class="sr-only">Loading...</span>
                                        </button>
                                    </div>


                                    <input type="hidden" name="anticsrf" value="true">
                                </form>
                            </div>

                            <div class="ml-form-successBody row-success" style="display: none">

                                <div class="ml-form-successContent">

                                    <h4>Thanks!</h4>

                                    <p style="text-align: center;">Our team will contact you very soon</p>
                                    <p><br></p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>





                <script>
                    function ml_webform_success_4053872() {
                        try {
                            window.top.location.href = '{{ route('thank_page', app()->getLocale()) }}';
                        } catch (e) {
                            window.location.href = '{{ route('thank_page', app()->getLocale()) }}';
                        }
                    }
                </script>


                <script src="https://groot.mailerlite.com/js/w/webforms.min.js?v300817f630ad0e957914d0b28a2b6d78"
                    type="text/javascript"></script>
                <script>
                    fetch("https://assets.mailerlite.com/jsonp/253019/forms/82774265184650402/track-view")
                </script>
            </div>
        </div>
    </section>
@endsection
