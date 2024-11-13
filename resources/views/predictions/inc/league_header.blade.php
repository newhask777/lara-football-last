<div id="cart_league_header" class="cart_league flex pl-2 pr-2 p-1 mt-2 mb-2 rounded-md cursor-pointer bg-gray-100 hover:bg-gray-200">
    <div class="cart_expand flex justify-between w-full">

        <!-- League name -->
        <div class="flex">
            <div class="mt-auto mb-auto">
                <img
                    src="https://flagdownload.com/wp-content/uploads/Flag_of_{{$tournament->competition_cluster}}_Flat_Round-1024x1024.png"
                    alt=""
                    class="w-4 mt-auto mb-auto"
                >
            </div>

            <div class="cart_league__name ml-2">
                <div class="inline-block align-middle ml-2">
                        <span class="text-sm font-bold">
                            {{ $tournament->competition_cluster }}
                        </span>
                    <span class="text-xs font-bold ml-2">
                            {{ $tournament->competition_name }}
                    </span>
                    <span class="text-xs font-bold ml-2">
                            {{ $tournament->federation }}
                    </span>
                </div>
            </div>

        </div>
        <!-- End League name -->

        <div class="arrows mt-auto mb-auto">
            <img  src="{{ asset('assets/images/arr-down1.png') }}" alt="" class="open down w-4 h-4">
            <img  src="{{ asset('assets/images/arr-up.png') }}" alt="" class="close up w-4 h-4">
        </div>

    </div>
</div>
