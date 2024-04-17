@extends('website.layout')
@section('title')
    Artikel - {{ @$about->title }}
@stop

@section('content')
    <style>
        .input-search::placeholder{
            font-family: "Playfair Display", serif;
        }
    </style>

  <div class="flex flex-col-reverse md:flex-row justify-between max-w-[1416px] mx-auto px-4 mt-14 mb-28">
    <div class=" md:w-[68%] w-full space-y-[60px]">
        @foreach ($article as $key => $item)
            <div class="w-full p-4 border-[1px] border-[#94A3B8] rounded-3xl ">
                <img class="w-full md:h-[300px] lg:h-[450px] h-[200px] object-cover rounded-2xl" src="{{ $item->image->lg}}" alt="{{ $item->title }}">
                <a href="{{ route('article.show', $item->slug) }}">
                    <h2 class=" font-bold md:text-[30px] text-[25px] font-fairplay mt-4">{{ $item->title }}</h2>
                    <h2 class=" text-sm text-[#64748B] font-inter">{{ tgl_indo($item->published_at) }}</h2>
                    <p class=" md:text-lg text-[#64748B] font-inter mt-4">{{ read_more($item->description, 400)}}</p>
                </a>
            </div>
        @endforeach
    </div>

    {{-- sidebar --}}
    <div class="md:w-[28%] w-full">
        <form action="{{ route('article.search') }}" method="GET" class="flex py-3 px-4 border-[1px] border-[#94A3B8] rounded-xl justify-between mb-6">
            <input class="w-[80%] outline-none input-search" type="search" name="cari" placeholder="Search">
            <button type="submit">
                <img src="{{ asset('static/website/images/element/search-normal.svg') }}" alt="">
            </button>
        </form>

        <div class="py-4 mt-[30px] px-6 border-[1px] border-[#94A3B8] rounded-2xl hidden md:block">
            <h2 class="text-2xl font-bold font-fairplay">Kategori</h2>
            <ul class="mt-2 text-lg text-[#475569] font-inter">
              @foreach ($categories as $item)
                <li class=" hover:text-[#5345E2] focus:text-[#5345E2]">
                    <a href="{{ route('article.category', $item->slug) }}">{{ $item->name }} ({{count($item->articles)}}) </a>
                </li>
              @endforeach
            </ul>
        </div>

        <div class="py-4 px-6 border-[1px] mt-[30px] border-[#94A3B8] rounded-2xl space-y-10 hidden md:block">
            <h2 class=" text-2xl font-bold font-fairplay space-y-4 lg:space-y-0">Terbaru</h2>
            @foreach ($recentPosts as $item)
            <a href="{{ route('article.show', $item->slug) }}" class=" flex justify-between items-center flex-wrap ">
                    <img class=" lg:w-[35%] w-full h-[70px] object-cover rounded-lg" src="{{ $item->image->sm }}" alt="">
                    <div class="lg:w-[60%] w-full">
                        <h2 class="text-lg font-bold font-fairplay">{{ read_more($item->title, 45)}}</h2>
                        <h2 class="text-sm text-[#64748B] font-inter">{{ tgl_indo($item->published_at) }}</h2>
                    </div>
                </a>
                @endforeach
        </div>
    </div>
  </div>
@stop
