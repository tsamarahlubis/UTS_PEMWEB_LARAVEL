@extends('website.layout')
@section('title')
    Galeri Foto - {{ @$about->title }}
@stop

@section('content')

<style>
     @media (min-width:1910px){
        .image-sm{
            width: 22%;
        }

        .image-big{
            width: 46%
        }
     }
</style>
    <div class="mt-20 max-w-[1416px] px-3 mx-auto">
        <h3
            class=" text-sm text-[#0EA5E9] py-2 bg-[#049CB6] bg-opacity-10 px-5 border-[1px] w-fit border-[#0EA5E9] rounded-full mb-7 mx-auto font-inter">
            GALERI AULIYAA'</h3>

        <h2 class=" text-[48px] font-semibold text-center font-fairplay">Dokumentasi <span class="text-[#EAB308]">Kegiatan</span> Kami
        </h2>
        <p class="md:w-[65%] text-center text-[#64748B] mt-2 mx-auto font-inter">Galeri bisa berisi dokumentasi visual dari berbagai
            kegiatan keagamaan yang diadakan di pesantren, seperti shalat berjamaah, kajian kitab, atau kegiatan-kegiatan
            sosial dan keagamaan lainnya.</p>

        <div class=" flex flex-wrap justify-center mt-[34px] gap-6 isotope-btn font-inter">
            <button
                class="py-3 px-6 focus:bg-[#5345E2] focus:text-white focus:border-[#5345E2] hover:bg-[#5345E2]
        hover:text-white text-[#9295F3] border-2 border-[#9295F3] rounded-xl active"
                data-filter="*"><span>Semua </span></button>
            @foreach ($category as $item)
                <button
                    class="py-3 px-6 focus:bg-[#5345E2] focus:text-white focus:border-[#5345E2] hover:bg-[#5345E2]
                hover:text-white text-[#9295F3] border-2 border-[#9295F3] rounded-xl"
                    data-filter="#{{ Illuminate\Support\Str::slug($item->name) }}"><span>{{ $item->name }}</span></button>
            @endforeach
        </div>



        <div class=" mt-[34px] font-inter">
            <div class="isotope-wrapper">

                @if (@$gallery[0] ?? null)
                <div class="group isotope-item lg:w-[23%] relative image-sm w-[45%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[0]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[0]->url) }}">
                        <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[0]->url) }}" alt=""> </a>
                    <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                        {{ str_limit(strip_tags(@$gallery[0]->title), 65, ' ...') }}
                    </h2>
                </div>
                    
                @endif

                @if (@$gallery[1] ?? null)
                <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[1]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[1]->url) }}">
                        <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[1]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[1]->title), 65, ' ...') }}
                            </h2>
                </div>
                    
                @endif

                @if (@$gallery[2] ?? null)
                <div class="group isotope-item lg:w-[47%] image-big w-[94%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[2]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[2]->url) }}">
                        <img class="h-[350px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[2]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[2]->title), 65, ' ...') }}
                            </h2>
                </div>
                    
                @endif


                @if (@$gallery[3] ?? null)
                <div class="group isotope-item lg:w-[47%] image-big w-[94%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[3]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[3]->url) }}">
                        <img class="h-[350px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[3]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[3]->title), 65, ' ...') }}
                            </h2>
                </div>
                    
                @endif

                @if (@$gallery[4] ?? null)
                <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[4]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[4]->url) }}">
                        <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            class="w-full h-[200px] object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[4]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[4]->title), 65, ' ...') }}
                            </h2>
                </div>
                @endif

                @if (@$gallery[5] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[5]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[5]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[5]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[5]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[6] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[6]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[6]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[6]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[6]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[7] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[7]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[7]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[7]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[7]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[8] ?? null)
                <div class="group isotope-item lg:w-[47%] image-big w-[94%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[8]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[8]->url) }}">
                        <img class="h-[350px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[8]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[8]->title), 65, ' ...') }}
                            </h2>
                </div>
                    
                @endif

                @if (@$gallery[9] ?? null)
                <div class="group isotope-item lg:w-[47%] image-big w-[94%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[9]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[9]->url) }}">
                        <img class="h-[350px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[9]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[9]->title), 65, ' ...') }}
                            </h2>
                </div>
                    
                @endif

                @if (@$gallery[10] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[10]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[10]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[10]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[10]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[11] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[11]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[11]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[11]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[11]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[12] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[12]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[12]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[12]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[12]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[13] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[13]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[13]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[13]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[13]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[14] ?? null)
                <div class="group isotope-item lg:w-[47%] image-big w-[94%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[14]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[14]->url) }}">
                        <img class="h-[350px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[14]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[14]->title), 65, ' ...') }}
                            </h2>
                </div>
                    
                @endif

                @if (@$gallery[15] ?? null)
                <div class="group isotope-item lg:w-[47%] image-big w-[94%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[15]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[15]->url) }}">
                        <img class="h-[350px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[15]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[15]->title), 65, ' ...') }}
                            </h2>
                </div>
                    
                @endif

                @if (@$gallery[16] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[16]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[16]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[16]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[16]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[17] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[17]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[17]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[17]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[17]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[18] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[18]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[18]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[18]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[18]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[19] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[19]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[19]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[19]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[19]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[20] ?? null)
                <div class="group isotope-item lg:w-[47%] image-big w-[94%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[20]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[20]->url) }}">
                        <img class="h-[350px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[20]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[20]->title), 65, ' ...') }}
                            </h2>
                </div>
                    
                @endif

                @if (@$gallery[21] ?? null)
                <div class="group isotope-item lg:w-[47%] image-big w-[94%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl"
                    id="{{ Illuminate\Support\Str::slug(@$gallery[21]->Category->name) }}">
                    <a class="popup-image" href="{{ asset('storage/' . @$gallery[21]->url) }}">
                        <img class="h-[350px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ asset('storage/' . @$gallery[21]->url) }}" alt=""> </a>
                            <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                                {{ str_limit(strip_tags(@$gallery[21]->title), 65, ' ...') }}
                            </h2>
                </div>
                    
                @endif

                @if (@$gallery[22] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item font-inter"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[22]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[22]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[22]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[22]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif

                @if (@$gallery[23] ?? null)
                    <div class="group lg:w-[23%] image-sm md:mb-[3vh] mb-[2vh] lg:mx-[1.5vh] overflow-hidden rounded-2xl w-[45%] isotope-item"
                        id="{{ Illuminate\Support\Str::slug(@$gallery[23]->Category->name) }}">
                        <a class="popup-image" href="{{ asset('storage/' . @$gallery[23]->url) }}">
                            <img class="h-[200px] w-full object-cover rounded-2xl hover:scale-105 duration-500"
                                src="{{ asset('storage/' . @$gallery[23]->url) }}" alt="">
                        </a>
                        <h2 class="mt-[10px] text-[#1E293B] absolute bottom-0 px-3 bg-slate-200 w-full hidden group-hover:block font-inter py-1 text-sm">
                            {{ str_limit(strip_tags(@$gallery[23]->title), 65, ' ...') }}
                        </h2>
                    </div>
                @endif



            </div>

            <div class="isotope-video-wrapper">
                @foreach ($video as $key => $data)
                <div id="{{ Illuminate\Support\Str::slug($data->Category->name) }}"
                    class="group isotope-video-item lg:w-[23%] w-[45%] md:mx-[1.5vh] md:mb-[3vh] mb-[2vh] mx-[1vh] overflow-hidden rounded-2xl relative">
                    <a class="popup-video" href="{{ $data->url }}" style="position: relative; display: block;">
                        <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 group-hover:scale-110 duration-300 z-30"
                            src="{{ asset('static/website/images/element/play-circle.svg') }}" alt="">
                        <div
                            class="absolute w-full h-[200px] rounded-2xl bg-slate-900 group-hover:bg-opacity-70 bg-opacity-50 z-10">
                        </div>
                        <img class="w-full h-[200px] object-cover rounded-2xl hover:scale-105 duration-500"
                            src="{{ $data->showPreview() }}" alt="">
                        {{-- <h2 class="mt-[10px] text-[#1E293B]">
                            {{ str_limit(strip_tags($data->description), 78, ' ...') }}
                        </h2> --}}
                    </a>
                </div>
                @endforeach

            </div>



        </div>
    </div>
    <!--=================================
                grid -->
@stop
