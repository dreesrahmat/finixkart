@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/owl.theme.default.min/css')}}">
@endpush

@push('scripts')
<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                }
            }
        });
    });

</script>
@endpush

@section('body_content')
<div>
    <div class="owl-carousel">
        <a href=""><img src="{{asset('/images/banner/banner-4.png')}}" alt=""></a>
        <a href=""><img src="{{asset('/images/banner/banner-4.png')}}" alt=""></a>
        <a href=""><img src="{{asset('/images/banner/banner-4.png')}}" alt=""></a>
        <a href=""><img src="{{asset('/images/banner/banner-4.png')}}" alt=""></a>
        <a href=""><img src="{{asset('/images/banner/banner-4.png')}}" alt=""></a>
    </div>
</div>

<section class="px-8 md:px-20 mt-6">

    <section class="mt-6 grid grid-cols-1 md:grid-cols-5 gap-6">

        {{-- Filters --}}
        <div>
            <div class="w-full md:w-auto rounded p-3 border border-slate-300 ">
                <h3 class="text-xl font-bold text-violet-600 uppercase">Filters</h3>

                {{-- Price --}}
                <div>
                    <h4 class="text-gray-800 font-medium mb-1">Price</h4>
                    <div class="flex justify-between items-center gap-4 text-sm">
                        <div class="flex justify-between items-center bg-gray-300 rounded p-1 gap-2">
                            <span class="text-gray-400">From</span>
                            <div class="flex">
                                <input type="text" class="w-7 bg-transparent focus:outline-none text-right" value="0">
                                <span class="text-gray-400">$</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center bg-gray-300 rounded p-1 gap-3">
                            <span class="text-gray-400">Up To</span>
                            <div class="flex">
                                <input type="text" class="w-7 bg-transparent focus:outline-none text-right" value="0">
                                <span class="text-gray-400">$</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-2">

                {{-- Size --}}
                <div>
                    <h4 class="text-gray-800 font-medium mb-1">Size</h4>
                    <ul class="text-gray-400 text-sm">
                        <li><input type="checkbox" name="" id="small"><label for="small">Small</label></li>
                        <li><input type="checkbox" name="" id="medium"><label for="medium">Medium</label></li>
                        <li><input type="checkbox" name="" id="large"><label for="large">Large</label></li>
                    </ul>
                </div>
                <hr class="mt-2">

                {{-- Color --}}
                <div>
                    <h4 class="text-gray-800 font-medium mb-1">Color</h4>
                    <ul class="text-gray-400 text-sm flex flex-col gap-2">
                        <li class="flex gap-2">
                            <input type="checkbox" name="" id="color1">
                            <label for="color1"><span style="background-color: #acacac"
                                    class="flex w-4 h-4 rounded-full">&nbsp;</span></label>
                        </li>
                        <li class="flex gap-2">
                            <input type="checkbox" name="" id="color2">
                            <label for="color2"><span style="background-color: #cc00ff"
                                    class="flex w-4 h-4 rounded-full">&nbsp;</span></label>
                        </li>
                        <li class="flex gap-2">
                            <input type="checkbox" name="" id="color3">
                            <label for="color3"><span style="background-color: #0048a7"
                                    class="flex w-4 h-4 rounded-full">&nbsp;</span></label>
                        </li>
                    </ul>
                </div>
                <hr class="my-2">

                <div class="flex items-center justify-between">
                    <button class="bg-violet-600 rounded-md text-white uppercase text-center py-0.5 px-4">Apply
                        Filter</button>
                    <span class="w-7 h-7"><i class="bi bi-recycle"></i></span>
                </div>

            </div>
        </div>

        {{-- Product --}}
        <div class="md:col-span-4 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2 flex items-center px-1.5 text-sm border rounded border-slate-300">
                <span class="w-7 border-r border-slate-300 h-full flex items-center">
                    <i class="bi bi-search text-gray-400"></i>
                </span>
                <input type="search" name="" id="" placeholder="Search 1000+ Products"
                    class="py-1 pl-1.5 w-full bg-transparent focus:outline-none">
            </div>
            <div class="flex items-center px-1.5 text-sm border rounded border-slate-300">
                <span class="w-7 border-r border-slate-300 h-full flex items-center">
                    <i class="bi bi-filter text-gray-400"></i>
                </span>
                <select class="py-1 pl-1.5 w-full bg-transparent focus:outline-none" name="" id="">
                    <option value="" selected>Popular</option>
                </select>
            </div>


            @foreach (range(1,12) as $item)
            <x-product.card1 />
            @endforeach
        </div>
    </section>
</section>
@endsection
