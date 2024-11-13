<div class="mt-2">
    <h1  class="font-bold"> Stats By Day</h1>
    <div class="flex bg-green-400 p-1 text-xs  font-bold"  style="width: <?php echo $wins * 2; ?>px">
        <span>wins:</span>
        <span>{{ $wins }}</span>
    </div>
    <div class="flex bg-red-400 p-1 text-xs  font-bold"  style="width: <?php echo $losts * 2; ?>px">
        <span>losts:</span>
        <span>{{ $losts }}</span>
    </div>
</div>


<div class="mt-2">
    <h1  class="font-bold">Stats By Federation</h1>
   
    <h2 class="text-xs font-bold mt-2">UEFA</h2>

    <div class="flex bg-green-400 p-1 text-xs  font-bold"  style="width: <?php echo $wins_day_fede * 10; ?>px">
        <span>wins:</span>
        <span>{{ $wins_day_fede }}</span>
    </div>
    <div class="flex bg-red-400 p-1 text-xs  font-bold"  style="width: <?php echo $losts_day_fede * 10; ?>px">
        <span>losts:</span>
        <span>{{ $losts_day_fede }}</span>
    </div>


    <h2 class="text-xs font-bold mt-2">CAF</h2>

    <div class="flex bg-green-400 p-1 text-xs  font-bold"  style="width: <?php echo $wins_by_fede_caf * 10; ?>px">
        <span>wins:</span>
        <span>{{ $wins_by_fede_caf }}</span>
    </div>
    <div class="flex bg-red-400 p-1 text-xs  font-bold"  style="width: <?php echo $losts_by_fede_caf * 10; ?>px">
        <span>losts:</span>
        <span>{{ $losts_by_fede_caf }}</span>
    </div>


    <h2 class="text-xs font-bold mt-2">AFC</h2>

    <div class="flex bg-green-400 p-1 text-xs  font-bold"  style="width: <?php echo $wins_by_fede_afc * 10; ?>px">
        <span>wins:</span>
        <span>{{ $wins_by_fede_afc }}</span>
    </div>
    <div class="flex bg-red-400 p-1 text-xs  font-bold"  style="width: <?php echo $losts_by_fede_afc * 10; ?>px">
        <span>losts:</span>
        <span>{{ $losts_by_fede_afc }}</span>
    </div>


    <h2 class="text-xs font-bold mt-2">CONCACAF</h2>

    <div class="flex bg-green-400 p-1 text-xs  font-bold"  style="width: <?php echo $wins_by_fede_concacaf * 10; ?>px">
        <span>wins:</span>
        <span>{{ $wins_by_fede_concacaf }}</span>
    </div>
    <div class="flex bg-red-400 p-1 text-xs  font-bold"  style="width: <?php echo $losts_by_fede_concacaf * 10; ?>px">
        <span>losts:</span>
        <span>{{ $losts_by_fede_concacaf }}</span>
    </div>

    <h2 class="text-xs font-bold mt-2">CONMEBOL</h2>

    <div class="flex bg-green-400 p-1 text-xs  font-bold"  style="width: <?php echo $wins_by_fede_conmebol * 10; ?>px">
        <span>wins:</span>
        <span>{{ $wins_by_fede_conmebol }}</span>
    </div>
    <div class="flex bg-red-400 p-1 text-xs  font-bold"  style="width: <?php echo $losts_by_fede_conmebol * 10; ?>px">
        <span>losts:</span>
        <span>{{ $losts_by_fede_conmebol }}</span>
    </div>


    @foreach($won_results as $country)

    <h2 class="text-xs font-bold mt-2">{{ $country->competition_cluster }}</h2>

    <div class="flex bg-green-400 p-1 text-xs  font-bold"  style="width: <?php echo $country->wons_count * 10; ?>px">
        <span>wins:</span>
        <span>{{ $country->wons_count }}</span>
    </div>

    {{-- <div class="flex bg-red-400 p-1 text-xs  font-bold"  style="width: <?php echo $country->$losts * 10; ?>px">
        <span>losts:</span>
        <span>{{ $losts }}</span>
    </div> --}}

    @endforeach

</div>



<div class="mt-2">
    <h1  class="font-bold">Stats By Mounth</h1>
    
    <div class="flex bg-green-400 p-1 text-xs  font-bold"  style="width: <?php echo $wins_mounth * 2; ?>px">
        <span>wins:</span>
        <span>{{ $wins_mounth }}</span> 
    </div>
    <div class="flex bg-red-400 p-1 text-xs  font-bold"  style="width: <?php echo $losts_mounth * 2; ?>px">
        <span>losts:</span>
        <span> {{ $losts_mounth }}</span>
    </div>
</div>

