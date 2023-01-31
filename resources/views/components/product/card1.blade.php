<a href="{{route('product_detail')}}" class="bg-white rounded-lg shadow-lg p-3 relative">
    <img src="{{asset('/images/shop/product-1-1.jpg')}}" alt="" class="mx-auto">

    <div class="flex justify-between gap-3 my-3">
        <p class="font-medium text-gray-800">Men's Casual Slim Fit T-Shirts</p>
        <div class="flex flex-col items-end">
            <strong class="text-violet-900">$500</strong>
            <strike class="text-gray-400">$599</strike>
        </div>
    </div>

    <div class="flex justify-between items-center mb-2">
        <div class="flex gap-1">
            <span style="background-color: #acacac" class="w-5 h-5 rounded-full">&nbsp;</span>
            <span style="background-color: #cc00ff" class="w-5 h-5 rounded-full">&nbsp;</span>
            <span style="background-color: #0048a7" class="w-5 h-5 rounded-full">&nbsp;</span>
        </div>
        <div class="flex gap-1 text-gray-400 text-sm">
            <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">S</span>
            <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">M</span>
            <span class="flex justify-center items-center w-5 h-5 rounded-full border border-gray-400">L</span>
        </div>
    </div>
    <div class="flex justify-between items-center">
        <span class="text-gray-400"><i class="bi bi-star"></i>4.5</span>
        <span class="text-violet-600 flex items-center font-bold"><i class="bi bi-cart3 text-2xl"></i>Buy Now</span>
    </div>
    <div class="absolute top-2 left-3 right-3 flex justify-between items-center">
        <span class="bg-red-500 text-white rounded px-2 text-xs">25% Off</span>
        <span class="bg-white shadow-md rounded-full w-7 h-7 flex items-center justify-center"><i class="bi bi-heart"></i></span>
    </div>
</a>
