@extends('layouts.app')

@push('scripts')
<script>
    let currentImage = 0;

    const viewImage = (e, index) => {
        currentImage = index;
        document.getElementById('bigImage').src = e.querySelector('img').src;
    }

    const nextPrevious = (index) => {
        i = currentImage + index;

        let images = document.getElementById('images').querySelectorAll('img');

        if (i >= images.length || i < 0) return;

        currentImage = i;

        let arr = [];

        images.forEach(element => arr.push(element.src));

        document.getElementById('bigImage').src = arr[currentImage];
    }

</script>
@endpush

@section('body_content')
<section class="px-8 md:px-20 mt-6">
    <div class="flex flex-wrap md:flex-nowrap gap-6">
        {{-- Left --}}
        <div class="shrink-0 w-full md:w-auto flex flex-col-reverse md:flex-row gap-4">
            <div id="images" class="flex md:flex-col gap-3 max-h-96 overflow-y-auto">
                @foreach (range(1,4) as $item)
                <div onclick="viewImage(this, {{ $loop->index }})"
                    class="bg-white rounded-md shadow p-1 cursor-pointer">
                    <img src="{{asset('/images/shop/product-' . $loop->iteration .  '-1.jpg')}}" alt="" class="w-20">
                </div>
                @endforeach
            </div>
            <div class="relative w-72 bg-white rounded-md shadow-md p-3 h-96">
                <img id="bigImage" src="{{asset('/images/shop/product-1-1.jpg')}}" alt=""
                    class=" w-full aspect-[2/3] h-full">
                <span onclick="nextPrevious(-1)"
                    class="absolute top-1/2 left-1 bg-white rounded-full w-5 h-5 shadow flex items-center justify-center">
                    <i
                        class="bi bi-chevron-left text-xl text-gray-400 hover:text-violet-500 duration-200 cursor-pointer"></i>
                </span>
                <span onclick="nextPrevious(1)"
                    class="absolute top-1/2 right-1 bg-white rounded-full w-5 h-5 shadow flex items-center justify-center">
                    <i
                        class="bi bi-chevron-right text-xl text-gray-400 hover:text-violet-500 duration-200 cursor-pointer"></i>
                </span>
            </div>
        </div>
        {{-- Left End --}}

        {{-- Right --}}
        <div class="w-full flex flex-col gap-4 md:ml-10">
            <div class="flex gap-3">
                <span class="bg-red-500 text-white rounded px-2 text-sm">25% Off</span>
                <span class="text-gray-400 text-sm"><i class="bi bi-star"></i>4.5</span>
            </div>

            {{-- Name, SKU, Brand --}}
            <h2 class="text-lg font-medium text-gray-800">Mens Blue Shirt</h2>
            <div class="text-sm text-gray-800">
                <p><span class="text-gray-400">SKU :</span> FK-0001</p>
                <p><span class="text-gray-400">Brand :</span> Brandname</p>
            </div>

            {{-- Price --}}
            <div>
                <span class="text-rose-500 font-bold text-xl">$500</span>
                <sub class="text-gray-400"><strike>$599</strike></sub>
            </div>

            {{-- Colors --}}
            <div>
                <p class="text-gray-400">Colors :</p>
                <div class="flex gap-1">
                    <span style="background-color: #acacac" class="w-5 h-5 rounded-full">&nbsp;</span>
                    <span style="background-color: #cc00ff" class="w-5 h-5 rounded-full">&nbsp;</span>
                    <span style="background-color: #0048a7" class="w-5 h-5 rounded-full">&nbsp;</span>
                </div>
            </div>

            {{-- Size --}}
            <div>
                <p class="text-gray-400">Size :</p>
                <div class="flex gap-1 text-gray-400 text-sm">
                    <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">S</span>
                    <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">M</span>
                    <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">L</span>
                </div>
                <a href="#" class="text-gray-400 text-xs">Size Guide</a>
            </div>

            {{-- Quantity --}}
            <div>
                <p class="text-gray-400">Quantity :</p>
                <div class="flex items-center gap-2">
                    <input type="text" value="1"
                        class="bg-slate-200 border border-gray-300 rounded focus:outline-none px-2 text-lg font-medium w-20"
                        readonly>
                    <button class="border rounded border-gray-300 w-7 h-7"><i class="bi bi-plus text-xl"></i></button>
                    <button class="border rounded border-gray-300 w-7 h-7"><i class="bi bi-dash text-xl"></i></button>
                </div>
            </div>

            {{-- Wish List Add to Cart and Buy Now --}}
            <div class="flex items-center gap-4">
                <span class="bg-white shadow-md rounded-full w-8 h-8 flex items-center justify-center">
                    <i class="bi bi-heart text-2xl text-gray-500"></i>
                </span>

                <button
                    class="border border-violet-600 rounded w-28 text-center drop-shadow font-medium text-violet-600 py-0.5">Add
                    to Cart</button>
                <button
                    class="border border-violet-600 rounded w-28 text-center drop-shadow font-medium text-white bg-violet-600 py-0.5">Buy
                    Now</button>
            </div>

        </div>
        {{-- Right End --}}

    </div>

    {{-- Description --}}
    <div>
        <h3 class="text-lg text-gray-400 font-medium my-6">Product Description</h3>
        <div class="tex-gray-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, non dolore itaque veritatis deleniti
            fuga voluptatibus possimus sunt enim rem inventore iste fugiat quidem provident quam doloremque aliquid
            praesentium! Excepturi, reprehenderit iste! Maiores tenetur ex totam quae officia earum, natus consequuntur
            qui dignissimos excepturi ab id? Explicabo nihil laborum facilis vitae blanditiis vel soluta illum nam
            consectetur earum voluptates quae numquam tempore repellendus, vero aliquam ea perferendis quibusdam omnis,
            alias neque sed nobis, labore ipsa! Doloremque tempore, odio excepturi omnis porro qui libero aperiam
            quibusdam molestiae quas nisi autem, officiis iusto tempora labore sit sunt iure in nam ducimus. Nisi?
        </div>
    </div>

    {{-- Product Featured --}}
    <section class="mt-6">
        <h3 class="text-gray-800 font-medium mb-2">Product Feature</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @foreach (range(1,12) as $item)
            <x-product.card1 />
            @endforeach
        </div>
    </section>
</section>
@endsection
