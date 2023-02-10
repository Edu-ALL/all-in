@extends('layout.user.main')

@section('content')
    {{-- ================================== Top Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <h2 class="font-body font-bold text-4xl text-[#6696E2] text-center">What Our Students Say</h2>
        </div>
    </section>

    {{-- ================================== Testimony Section  ================================== --}}
    <section class="py-16">
        <div class="main-container">
            <div class="flex flex-col gap-y-28">
                {{-- Admission Mentoring --}}
                <div class="flex flex-col md:flex-row">
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img src="{{ asset('assets/logo/quote-big.svg') }}">
                        </div>
                        <h2 class="mt-16 font-body font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Admission <br> Mentoring</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows"></div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($admission_mentoring as $item)
                                            <li class="splide__slide">
                                                <div class="splide__slide__container h-full py-6">
                                                    <div
                                                        class="flex flex-col justify-between h-full mx-2.5 p-4 rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                        <p
                                                            class="font-body font-semibold text-sm text-primary text-justify leading-[18px]">
                                                            {{ $item->testi_desc }}
                                                        </p>
                                                        <div class="flex justify-between mt-6">
                                                            <h5 class="font-body font-bold text-sm text-yellow">
                                                                {{ $item->testi_name }}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Experiential Learning --}}
                <div class="flex flex-col md:flex-row">
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img src="{{ asset('assets/logo/quote-big.svg') }}">
                        </div>
                        <h2 class="mt-16 font-body font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Experiential <br> Learning</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows"></div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($experiential_learning as $item)
                                            <li class="splide__slide">
                                                <div class="splide__slide__container py-6 h-full">
                                                    <div
                                                        class="flex flex-col justify-between mx-2.5 p-4 h-full rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                        <p
                                                            class="font-body font-semibold text-sm text-primary text-justify leading-[18px]">
                                                            {{ $item->testi_desc }}
                                                        </p>
                                                        <div class="flex justify-between items-center mt-12">
                                                            <div class="flex flex-col">
                                                                <h5
                                                                    class="font-body font-bold text-sm text-yellow leading-4">
                                                                    {{ $item->testi_name }}
                                                                </h5>
                                                                <span
                                                                    class="font-body font-bold text-sm text-primary leading-4">
                                                                    {{ $item->testi_subcategory }}
                                                                </span>
                                                            </div>
                                                            <div class="w-20 h-20 rounded-full  bg-red-300">
                                                                <img src="{{ $item->testi_thumbnail }}"
                                                                    alt="{{ $item->testi_thumbnail }}"
                                                                    class="w-full h-full object-cover object-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Academic Preparation --}}
                <div class="flex flex-col md:flex-row">
                    <div class="relative w-full md:w-1/3">
                        <div class="absolute left-0 top-0">
                            <img src="{{ asset('assets/logo/quote-big.svg') }}">
                        </div>
                        <h2 class="mt-16 font-body font-bold text-6xl text-[#6696E2] text-center md:ml-16 md:text-left">
                            Academic <br> Preparation</h2>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="splide" aria-labelledby="carousel-heading">
                            <div style="position: relative">
                                <div class="splide__arrows"></div>
                                <div class="splide__track md:mx-14">
                                    <ul class="splide__list">
                                        @foreach ($academic_preparation as $item)
                                            <li class="splide__slide">
                                                <div class="splide__slide__container py-6">
                                                    <div
                                                        class="flex flex-col mx-2.5 p-4 rounded-3xl shadow-[0_4px_8px_rgba(0,0,0,0.25)]">
                                                        <p
                                                            class="font-body font-semibold text-sm text-primary text-justify leading-[18px]">
                                                            {{ $item->testi_desc }}
                                                        </p>
                                                        <div class="flex justify-between mt-12">
                                                            <div class="flex flex-col">
                                                                <h5
                                                                    class="font-body font-bold text-sm text-yellow leading-4">
                                                                    {{ $item->testi_name }}
                                                                </h5>
                                                                <span
                                                                    class="font-body font-bold text-sm text-primary leading-4">
                                                                    {{ $item->testi_subtitle }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ================================== Bottom Section ================================== --}}
    <section class="py-16">
        <div class="main-container flex flex-col items-center">
            <h2 class="font-body font-extrabold text-primary text-center text-3xl mb-4 md:w-1/2">
                SIGN UP FOR A FREE INITIAL CONSULTATION
            </h2>
            <a href="{{ route('sign_me', ['locale' => app()->getLocale()]) }}" class="my-btn">More</a>
        </div>

    </section>
@endsection

@section('script')
    <script>
        var isSmallDevice = window.matchMedia("(max-width: 640px)").matches

        var splides = document.querySelectorAll('.splide');

        for (var i = 0; i < splides.length; i++) {
            new Splide(splides[i], {
                type: 'loop',
                perPage: isSmallDevice ? 1 : 2,
                focus: 0,
                pagination: false,
                autoplay: true,
                lazyload: true,
                interval: 5000,
            }).mount();
        }
    </script>
@endsection
