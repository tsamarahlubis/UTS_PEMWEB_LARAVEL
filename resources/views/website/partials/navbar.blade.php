<nav class=" flex justify-between px-12 py-3 items-center bg-white shadow-sm">


    <div>
        <a href="{{ route('article.index') }}"><img src="{{ asset(@$setting->firstWhere('key', 'logo')->value) }}"
                alt=""></a>
    </div>

    <ul class="lg:gap-9 lg:flex items-center hidden">
        
        <li class=""><a class="" href="{{ route('auth.login') }}"><button
                    class="text-sm px-[18px] rounded-lg py-3  bg-[#5345E2] text-white hover:bg-blue-800 font-inter">Login
                    Sekarang <i class="far fa-arrow-right ml-1"></i></button></a></li>

    </ul>

    <ul id="dropdownList" class="absolute bg-white shadow-lg w-full left-0 px-8 top-0 pt-10 z-50 pb-7 hidden">
        <li class="flex justify-end">
                <button id="closeBtn"><img class="w-4 h-4" src="{{ asset('static/website/images/element/cross.png') }}" alt=""></button>
        </li>
        <li class="flex justify-center mt-5">
                <a class="mx-auto" href="{{ route('article.index') }}"><img src="{{ asset(@$setting->firstWhere('key', 'logo')->value) }}" alt=""></a>
        </li>
        <li class="mt-4 flex items-center gap-2">
                <img class="w-4 h-4" src="{{ asset('static/website/images/element/plus-sign.png') }}" alt="">
                <a class="font-inter font-semibold text-slate-500 hover:text-slate-600" href="{{ route('auth.login') }}">Donasi Sekarang</a>
        </li>
    </ul>
    <div id="dropdownBtn" class="relative lg:hidden">
        <input type="checkbox" class="absolute opacity-0 w-5 h-5">
        <span class=" text-xl"><i class="fal fa-bars"></i></span>
    </div>
</nav>

<script></script>
