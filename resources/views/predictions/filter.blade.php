<div class="cart_header p-4 rounded-t-md border-b-2 flex justify-between">
    <div class="w-full">
        <div class="mt-auto mb-auto text-sm font-bold">


            <form action="{{route('predictions.filter', ['date' => $date] )}}" method="GET">
                @csrf
                <div class="mb-4 grid grid-cols-4 gap-4">
                    {{-- Date --}}
                    <div>
                        <div class="mb-1 font-semibold">
                            Date
                        </div>
                        <x-forms.text-input name="date" value="{{ !empty(request('date')) ? request('date') : $date}}" placeholder="date"/>
                    </div>
                    {{-- Coeficient --}}
                    <div>
                        <div class="mb-1 font-semibold">
                            Coeficient
                        </div>
                        <div class="flex space-x-2">
                            <x-forms.text-input name="min_coef" value="{{request('min_coef')}}" placeholder="From"/>
                            <x-forms.text-input name="max_coef" value="{{request('max_coef')}}" placeholder="To"/>
                        </div>
                    </div>
                    {{-- Status --}}
                    <div>
                        <div class="mb-1 font-semibold">
                            Status
                        </div>
                        <x-forms.select-input-status name="status" :options="['won', 'lost', 'postponed', 'pending']"/>
                    </div>
                    {{-- Prediction --}}
                    <div>
                        <div class="mb-1 font-semibold">
                            Prediction
                        </div>
                        <x-forms.select-input-prediction name="prediction" :options="['1', '2', '12', '1X', '2X']"/>
                    </div>
                </div>
                <button class="w-full rounded-md border-0 py-1.5 
                    px-2.5 text-sm ring-1 ring-slate-300 
                    placeholder:text-slate-400 focus:ring-2">Filter</button>
            </form>


        </div>
    </div>
</div>
