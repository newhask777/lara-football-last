<div class="col-span-2 mt-1 flex flex-row items-start  rounded-lg">
    <!-- Predictions -->
    <div class="right_sidebar rounded-lg border bg-white  min-w-[240px]">
        <!-- League Game -->
        <div class="legague_game p-2">
            <div id="right_sidebar_header" class="flex p-2  rounded-t-md hover:cursor-pointer ">
                <!-- <img src="/assets/images/spain.png" alt="" class="w-6 h-6 mt-auto mb-auto"> -->
                <div class="cart_league__name flex justify-between w-full p-2 rounded-md hover:bg-gray-100">

                    <div class="">
                            <span class="text-sm font-bold mt-auto mr-auto">
                                TODAY
                            </span>
                        <span class="text-sm font-bold mt-auto mr-auto ml-1">PREDICTIONS</span>
                    </div>

                    <div class="arrows">
{{--                        <img id="liga_arr_down" src="{{ url_for('static', path='assets/images/arr-down1.png') }}" alt="" class="w-4 h-4 inline-block align-middle">--}}
{{--                        <img id="liga_arr_up" src="{{ url_for('static', path='assets/images/arr-up.png') }}" alt="" class="w-4 h-4 inline-block align-middle">--}}
                    </div>
                </div>

            </div>
            <!-- Body -->
            <div id="right_sidebar_body" class="right_sedebar_header  p-2">
                <a href="">

                    <div class="flex pb-2">
{{--                        <img src="{{ url_for('static', path='/assets/images/spain.png') }}" alt="" class="w-4 h-4 mt-auto mb-auto">--}}
                        <div class="cart_league__name ml-2 flex justify-between w-full">
                            <div class="">
                                    <span class="text-xs font-bold mt-auto mr-auto">
                                        Spain:
                                    </span>
                                <span class="text-xs font-bold mt-auto mr-auto ml-1">La Liga</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between mt-4">
                        <div class="home_team mt-auto mb-auto">
{{--                            <img src="{{ url_for('static', path='assets/images/barselona.png') }}" alt="" class="w-10 h-10 ml-auto mr-auto">--}}
                            <span class="text-sm font-bold">Barselona</span>
                        </div>
                        <div class="result  flex flex-col justify-center">
                                <span class="inline-block align-middle text-xs font-bold m-auto  pl-3 pr-3 pt-1 pb-1">
                                    22 : 00
                                </span>

                        </div>
                        <div class="home_team">
{{--                            <img src="{{ url_for('static', path='assets/images/real.png') }}" alt="" class="w-8 h-10 ml-auto mr-auto">--}}
                            <span class="text-sm font-bold">Real Madrid</span>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="right_sedebar_header flex w-full mt-2">

                            <div class="flex w-full border hover:border-lime-400 rounded-md">
                                <!-- <a href="" class="inline-block flex w-full"> -->
                                <div class="result w-1/2">

                                    <div class="flex flex-col
                                            inline-block bg-lime-500
                                            text-white align-middle
                                            text-xl font-bold
                                            m-auto rounded-l-md
                                            border p-2">

                                                <span class="mr-auto ml-auto">
                                                    1X
                                                </span>
                                        <span class="text-xs mr-auto ml-auto">
                                                    win or draw
                                                </span>

                                    </div>
                                </div>

                                <div class="home_team text-3xl mt-auto mb-auto p-2 w-1/2 text-center">
                                    <span class="font-bold">1.54</span>
                                </div>
                                <!-- </a> -->

                            </div>
                        </div>

                        <!-- <div class="mt-4 text-center">
                            <a href="" class="inline-block w-full ml-auto mr-auto p-2 bg-lime-500 text-white font-bold rounded-md">See more</a>
                        </div>                          -->
                    </div>
                </a>
            </div>
        </div>
        <!-- End League Game -->

    </div>
</div>
