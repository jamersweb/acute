<div class="bravo-list-item @if(!$rows->count()) not-found @endif">
    @if($rows->count())
        <div class="text-paginate">
            <h2 class="text">
                @if($rows->total() > 1)
                    {{ __(":count events found",['count'=>$rows->total()]) }}
                @else
                    {{ __(":count event found",['count'=>$rows->total()]) }}
                @endif
            </h2>
            <span class="count-string">{{ __("Showing :from - :to of :total Events",["from"=>$rows->firstItem(),"to"=>$rows->lastItem(),"total"=>$rows->total()]) }}</span>
        </div>
        <div class="list-item">
            <div class="row">
                @foreach($rows as $row)
                    <div class="col-lg-4 col-md-6">
                        @include('Event::frontend.layouts.search.loop-grid')
                    </div>
                @endforeach
            </div>
        </div>
        <div class="bravo-pagination">
            {{$rows->appends(request()->except(['_ajax']))->links()}}
        </div>
    @else
        <div class="not-found-box">
            <h3 class="n-title">{{__("We couldn't find any events.")}}</h3>
            <p class="p-desc">{{__("Try changing your filter criteria")}}</p>

        </div>
    @endif
</div>
