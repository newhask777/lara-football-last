<div class="cart_header p-4 rounded-t-md border-b-2 flex justify-between">
    <div class="">
        <ul class="flex mt-auto mb-auto text-sm font-bold">
            <!-- All -->
            @if ( $temp == 'today')
                <li class="ml-2 first:ml-0 rounded-md border pl-3 pr-3 pt-1 pb-1 mt-auto mb-auto bg-lime-500 text-white">
                    <a href="/events">All</a>
                </li>
            @else
                <li class="ml-2 mt-auto mb-auto pl-3 pr-3 pt-1 pb-1 bg-gray-100 rounded-md hover:text-white hover:bg-gray-400">
                    <a href="/events">All</a>
                </li>
            @endif
           
            <!-- stats -->
            @if ($temp == 'stats')
                <li class="ml-2 first:ml-0 rounded-md border pl-3 pr-3 pt-1 pb-1 mt-auto mb-auto bg-lime-500 text-white">
                    <a href="{{ route('stats.day', ['date' => request('date')]) }}">Statistic</a>
                </li>
            @else
                <li class="ml-2 mt-auto mb-auto pl-3 pr-3 pt-1 pb-1 bg-gray-100 rounded-md hover:text-white hover:bg-gray-400">
                    <a href="{{ route('stats.day', ['date' => request('date')]) }}">Statistic</a>
                </li>
            @endif

        </ul>
    </div>
    <div class="text-xs font-bold ml-2 justify-end mt-auto mb-auto">

        {{ $date }}

    </div>
</div>
