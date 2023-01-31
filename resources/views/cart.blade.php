@extends('layouts.app')

@push('scripts')
<script>

</script>
@endpush

@section('body_content')
<section class="px-8 md:px-20 mt-6">
    <h1 class="text-5xl drop-shadow-md font-bold text-center text-black py-12">Shopping Cart</h1>

    <div class="grid grid-cols-3 gap-6">
        {{-- Left Side --}}
        <div class="md:col-span-2">
            {{-- Delivery Addres --}}
            <h3 class="text-gray-700 text-lg font-medium">Delivery Addres</h3>
            <div>
                <div class="flex gap-4 pt-3 overflow-x-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-h-1">
                    @foreach (range(1,4) as $item)
                    <label for="address_{{$loop->index}}" class="shrink-0 w-72 relative">
                        <input type="radio" name="address" id="address_{{$loop->index}}" class="hidden peer">
                        <div class="p-2 border border-slate-300 peer-checked:border-violet-600 rounded cursor-pointer">
                            <div class="flex justify-between items-center">
                                <span class="text-black text-lg font-bold">Dedy Rahmat</span>
                                <span class="text-gray-400 cursor-pointer"><i class="bi bi-pencil"></i> Edit</span>
                            </div>
                            <p class="text-gray-400 leading-4">Railway Station, NH 28, Railway Colony Gorakhpur, Uttar
                                Paradesh - 273008</p>
                            <p class="text-gray-600">Mobile No : 089530519448</p>
                        </div>
                        <i
                            class="absolute peer-checked:block hidden -top-3 -right-3 bi bi-check-circle text-xl text-violet-600 bg-white"></i>
                    </label>
                    @endforeach
                </div>
                <div>
                    <i class="bi bi-plus-circle-fill"></i>
                    Add Address
                </div>
            </div>
            {{-- Delivery End Addres --}}
        </div>
        {{-- Left End Side --}}

        {{-- Right Side --}}
        <div>
            <h1>Right Side</h1>
        </div>
        {{-- Right End Side --}}
    </div>
</section>
@endsection
