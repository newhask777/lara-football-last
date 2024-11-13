<div>
    <select name="{{ $name }}" id="" class="mb-1 flex items-center
    w-full rounded-md border-0 py-1.5 
    px-2.5 text-sm ring-1 ring-slate-300 
    placeholder:text-slate-400 focus:ring-2">

        <option value="" class="
        text-xs font-bold ring-1 ring-slate-300 
        placeholder:text-slate-400 focus:ring-2">
            @if (request('prediction') != null)
                {{ request('prediction') }}
            @else
                all
            @endif
        </option>

        @foreach($options as $option) 
           
            <option value="{{ $option }}"  class="
            text-xs font-bold ring-1 ring-slate-300 
            placeholder:text-slate-400 focus:ring-2">
               
              {{ $option }}
            </option>
 
        @endforeach
       
    </select>
</div>