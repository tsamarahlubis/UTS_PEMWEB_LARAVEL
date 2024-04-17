<!--=================================
     footer -->
     <div class=" relative z-10">
    <div class="bg-[#0F172A] pt-16 pb-32 px-8">
        <div class="grid grid-cols-6 gap-2">
            <div class=" col-span-6 md:col-span-3">
                <a href="{{ route('article.index') }}"><img src="{{ asset(@$setting->firstWhere('key', 'logo_gray')->value) }}"
                        alt=""></a>
                <div class="flex items-center mt-3 gap-4 w-[90%]">
                    <img class="w-6" src="{{ asset('static/website/images/element/map-pin.png') }}" alt="">
                    <h2 class="text-[#E2E8F0] font-inter">{!! @$setting->firstWhere('key', 'address')->value !!}</h2>
                </div>
                <div class="flex items-center mt-3 gap-4 w-[90%]">
                    <img class="w-6 " src="{{ asset('static/website/images/element/icon (1).png') }}" alt="">
                    <h2 class="text-[#E2E8F0] font-inter">{!! @$setting->firstWhere('key', 'email')->value !!}</h2>
                </div>
                <div class="flex items-center mt-3 gap-4 w-[90%]">
                    <img class="w-6 " src="{{ asset('static/website/images/element/phone.png') }}" alt="">
                    <h2 class="text-[#E2E8F0] font-inter">+{!! @$setting->firstWhere('key', 'phone')->value !!}</h2>
                </div>
            </div>

            <div class=" col-span-6 md:col-span-3 mt-4 md:mt-0">
                <h2 class=" text-3xl font font-semibold text-white font-fairplay">Akses </h2>
                <ul class="mt-4">
                    <li class="flex gap-1 mt-2">
                        <img src="{{ asset('static/website/images/element/_Carousel arrow.png') }}" alt="">
                        <a class="text-[#E2E8F0] hover:text-slate-500 font-inter" href="{{ route('auth.login') }}">Login</a>
                    </li>
                </ul>
            </div>

            {{-- <div class="col-span-3 md:col-span-2 mt-4 md:mt-0">
                <h2 class=" text-3xl font font-semibold text-white font-fairplay">Quick Links</h2>
                <ul class="mt-4">
                    <li class="flex gap-1 mt-2">
                        <img src="{{ asset('static/website/images/element/_Carousel arrow.png') }}" alt="">
                        <a class="text-[#E2E8F0] hover:text-slate-500 font-inter" href="">Privacy Policy</a>
                    </li>
                    <li class="flex gap-1 mt-2">
                        <img src="{{ asset('static/website/images/element/_Carousel arrow.png') }}" alt="">
                        <a class="text-[#E2E8F0] hover:text-slate-500 font-inter" href="">Terms Of Service</a>
                    </li>
                    <li class="flex gap-1 mt-2">
                        <img src="{{ asset('static/website/images/element/_Carousel arrow.png') }}" alt="">
                        <a class="text-[#E2E8F0] hover:text-slate-500 font-inter" href="">Disclaimer</a>
                    </li>
                    <li class="flex gap-1 mt-2">
                        <img src="{{ asset('static/website/images/element/_Carousel arrow.png') }}" alt="">
                        <a class="text-[#E2E8F0] hover:text-slate-500 font-inter" href="">Credits</a>
                    </li>
                    <li class="flex gap-1 mt-2">
                        <img src="{{ asset('static/website/images/element/_Carousel arrow.png') }}" alt="">
                        <a class="text-[#E2E8F0] hover:text-slate-500 font-inter" href="">FAQ</a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>

    <div class="flex flex-wrap justify-between bg-[#020617] py-5 px-8 items-center">
        <h2 class="text-[#64748B] font-inter">Copyright © 2023. All right reserved. </h2>
        <ul class="flex justify-center items-center gap-4 mt-4 md:mt-0">
            @foreach ($SocialMedia as $key => $data)
            <li class="w-11 h-11 flex justify-center items-center bg-[#0F172A] rounded-xl">
                <a href="{{ $data->url }}"><i class="fab text-2xl text-white fa-{{ $data->type }}"></i></a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<!--=================================
 footer -->