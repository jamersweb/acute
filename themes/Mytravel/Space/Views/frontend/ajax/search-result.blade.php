<div class="list-item">
    <div class="row">
        @if($rows->total() > 0)
            @foreach($rows as $row)
                <div class="col-md-6 col-xl-4 mb-3 mb-md-4 pb-1">
                    @include('Space::frontend.layouts.search.loop-grid')
                </div>
            @endforeach
        @else
            <div class="col-lg-12">
                {{__("Space not found")}}
            </div>
        @endif
    </div>
</div>
@if($rows->total() > 0)
    <div class="text-center text-md-left font-size-14 mb-3 text-lh-1">{{ __("Showing :from - :to of :total Spaces",["from"=>$rows->firstItem(),"to"=>$rows->lastItem(),"total"=>$rows->total()]) }}</div>
@endif
{{$rows->appends(request()->except(['_ajax']))->links()}}
