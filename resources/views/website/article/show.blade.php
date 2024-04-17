@extends('website.layout')
@section('title')
    Artikel - {{ @$about->title }}
@stop

@section('content')
    <div class=" max-w-[1416px] flex mx-auto mt-14 justify-between px-4">

    
    <div class=" lg:w-[68%] w-full space-y-[30px] mb-[112px]">
        <div class="flex items-center gap-5">
            <a class="md:text-lg text-sm text-[#64748B] font-inter" href="{{ route('article.index') }}">Artikel</a>
            <img src="{{ asset('static/website/images/element/CaretDoubleRight.svg') }}" alt="">
            <a href="" class="md:text-lg text-sm text-[#5345E2] font-inter">{{ $model->title }}</a>
        </div>

        <img class="w-full rounded-2xl" src="{{ $model->image->md }}" alt="">
        <div>
            <h2 class="text-[30px] font-bold font-fairplay">{{ $model->title }}</h2>
            <h2 class="mt-2 text-sm text-[#64748B] font-inter">{{ tgl_indo($model->published_at) }}</h2>
        </div>
        <div class="text-lg font-inter text-[#64748B]"><span>{!! $model->description  !!}</span></div>
    </div>

    {{-- sidebar --}}
    <div class="lg:w-[28%] w-full hidden lg:block">
        <form action="{{ route('article.search') }}" method="GET" class="flex py-3 px-4 border-[1px] border-[#94A3B8] rounded-xl justify-between mb-6">
            <input class="w-[80%] outline-none input-search" type="search" name="cari" placeholder="Search">
            <button type="submit">
                <img src="{{ asset('static/website/images/element/search-normal.svg') }}" alt="">
            </button>
        </form>

        <div class="py-4 mt-[30px] px-6 border-[1px] border-[#94A3B8] rounded-2xl hidden md:block">
            <h2 class="text-2xl font-bold font-fairplay">Kategori</h2>

            <ul class="mt-2 text-lg text-[#475569] font-inter">
                @foreach ($category as $item)
                    <li class=" hover:text-[#5345E2] focus:text-[#5345E2]">
                        <a href="{{ route('article.category', $item->slug) }}">{{ $item->name }} ({{count($item->articles)}})</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="py-4 px-6 border-[1px] mt-[30px] border-[#94A3B8] rounded-2xl space-y-10 hidden md:block">
            <h2 class=" text-2xl font-bold font-fairplay">Terbaru</h2>
            @foreach ($recentPosts as $item)
            <a href="{{ route('article.show', $item->slug) }}" class=" flex justify-between items-center">
                    <img class=" w-[35%] h-[70px] object-cover rounded-lg" src="{{ $item->image->sm }}" alt="">
                    <div class="w-[60%]">
                        <h2 class="text-lg font-bold font-fairplay">{{ read_more($item->title, 45)}}</h2>
                        <h2 class="text-sm text-[#64748B] font-inter">{{ tgl_indo($item->published_at) }}</h2>
                    </div>
                </a>
                @endforeach
        </div>
    </div>
  </div>
@stop
