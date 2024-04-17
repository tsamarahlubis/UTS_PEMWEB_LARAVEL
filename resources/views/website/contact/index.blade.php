@extends('website.layout')

@section('title')
    Hubungi Kami - {{ @$about->title }}
@stop




@section('content')

    <style>
        iframe {
            width: 100%;
            height: 397px;
        }

        @media (min-width:1024px) {
            iframe {
                width: 50%;
            }
        }
    </style>

    <script>
       
    </script>

    <div>
        {{-- @if(Session::has('status'))
        <div id="message" class="absolute left-1/2 bg-green-400 text-white py-2 rounded-xl px-6 transform -translate-x-1/2 top-16 w-1/3">
            <h2 class="text-center">{{ session('message') }}</h2>
            
        </div>
    @endif
     --}}

     {{-- @if (Session::has('status'))
     <div class="alert alert-{{ session('status') }}" role="alert">{{ session('message') }}</div>
 @endif --}}
        {{-- Hubungi Kami Section --}}
        <div class="px-4 py-24 bg-[#1D1768] max-w-[1416px] rounded-2xl mx-auto mt-10 relative overflow-hidden">
            <div>
                <img class="absolute -right-6 top-0 floating3"
                    src="{{ asset('static/website/images/element/Rectangle 6711.png') }}" alt="">
                <img class="absolute left-12 bottom-12 w-8 h-8 rectangleMovement3"
                    src="{{ asset('static/website/images/element/Rectangle 6711.png') }}" alt="">
                <img class="absolute lg:left-32 left-0 top-0 rectangleMovement "
                    src="{{ asset('static/website/images/element/Rectangle 6715.png') }}" alt="">
                <img class="absolute right-16 bottom-10 rectangleMovement2"
                    src="{{ asset('static/website/images/element/Rectangle 6715.png') }}" alt="">
                <img class="absolute w-7 h-7 right-16 bottom-64"
                    src="{{ asset('static/website/images/element/Rectangle 6710.png') }}" alt="">
                <img class="absolute -left-10 bottom-64"
                    src="{{ asset('static/website/images/element/Rectangle 6710.png') }}" alt="">

            </div>
            <div class=" max-w-[1156px] mx-auto flex gap-4 relative z-10 flex-wrap lg:flex-nowrap">
                <div class="lg:w-1/2 w-full">
                    <h2 class=" lg:text-[56px] text-[45px] leading-[84px] text-white font-bold font-fairplay">Hubungi Kami
                    </h2>
                    <p class=" text-lg text-[#B9BDF9] mt-3">Jika Anda memiliki saran, pertanyaan, atau komentar, jangan ragu
                        untuk mengisi formulir di bawah ini. Tim kami akan dengan senang hati merespons secepat mungkin.</p>

                    <ul class=" mt-8 space-y-4 font-inter">
                        <li class=" flex gap-3 items-center">
                            <img class="w-fit h-fit" src="{{ asset('static/website/images/element/MapPinWht.png') }}"
                                alt="">
                            <h2 class=" text-lg text-[#CBD5E1]">{{ @$contact[0]->location }}</h2>
                        </li>
                        <li class=" flex gap-3 items-center">
                            <img class="w-fit h-fit" src="{{ asset('static/website/images/element/PhoneCallWht.png') }}"
                                alt="">
                            <h2 class=" text-lg text-[#CBD5E1]">{{ @$contact[0]->phone_number }}</h2>
                        </li>
                        <li class=" flex gap-3 items-center">
                            <img class="w-fit h-fit"
                                src="{{ asset('static/website/images/element/sms-notification.png') }}" alt="">
                            <a href="mailto:{!! @$setting->firstWhere('key', 'email')->value !!}"
                                class=" text-lg text-[#CBD5E1] hover:text-blue-700">{{ @$contact[0]->email }}</a>

                        </li>
                        <li class=" flex gap-3 items-center">
                            <img class="w-fit h-fit" src="{{ asset('static/website/images/element/calendar-tick.png') }}"
                                alt="">
                            <h2 class=" text-lg text-[#CBD5E1]">{{ @$contact[0]->status }}</h2>
                        </li>
                    </ul>
                </div>

                <div class="lg:w-1/2 w-full">
                    @if (Session::has('status'))
                    <div class=" py-3 px-6 rounded-lg bg-green-500 text-white" role="alert">{{ session('message') }}</div>
                @endif
                    <form action="{{ route('contact.store') }}" method="post" class=" space-y-3 flex flex-wrap">
                        {{ csrf_field() }}
                        <input class="p-3 w-full rounded-lg outline-none" placeholder="Nama" type="text" name="name"
                            value="{{ old('name') }}">
                        <input class="p-3 w-full rounded-lg outline-none" placeholder="Email" type="text" name="email"
                            type="email" value="{{ old('email') }}">
                        <textarea class="w-full h-[170px] outline-none rounded-lg p-3" value="{{ old('description') }}" placeholder="Pesan"
                            name="message"></textarea>
                        <button id="submit" name="submit" type="submit" value="send"
                            class=" py-3 px-8 bg-[#01D7EF] rounded-2xl text-white ml-auto">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Map Section --}}
        <div class="mt-[130px] lg:space-y-[112px] space-y-10 mb-[112px]">
            @foreach ($contact as $key => $item)
                <div class="max-w-[1176px] mx-auto gap-5 flex lg:flex-nowrap flex-wrap even:flex-row-reverse p-4 lg:p-0">
                    {!! $item->google_maps_link !!}
                    <div class="lg:w-1/2 w-full">
                        <h2 class=" font-semibold text-[40px] font-fairplay">{{ $item->title }}</h2>
                        <ul class="mt-3 space-y-[14px] font-inter">
                            <li class="flex items-center gap-2">
                                <img class="" src="{{ asset('static/website/images/element/MapPin.png') }}"
                                    alt="">
                                <h2 class="text-lg text-[#64748B]">{{ $item->location }}</h2>
                            </li>
                            <li class="flex items-center gap-2">
                                <img src="{{ asset('static/website/images/element/PhoneCallBlack.png') }}" alt="">
                                <h2 class="text-lg text-[#64748B]">{{ $item->phone_number }}</h2>
                            </li>
                            <li class="flex items-center gap-2">
                                <img src="{{ asset('static/website/images/element/sms-notificationBlack.png') }}"
                                    alt="">
                                <h2 class="text-lg text-[#64748B]">{{ $item->email }}</h2>
                            </li>
                            <li class="flex items-center gap-2">
                                <img src="{{ asset('static/website/images/element/calendar-tickBlack.png') }}"
                                    alt="">
                                <h2 class="text-lg text-[#64748B]">{{ $item->status }}</h2>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
