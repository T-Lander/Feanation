<p class="text-center">
    
    @if(!$paginator->onFirstPage())
        <a href="{{$paginator->previousPageUrl()}}"> Previous - </a>
    @endif

    {{$paginator->currentPage()}}

    @if($paginator->onFirstPage())
        <a href="{{$paginator->nextPageUrl()}}"> - Next</a>
    @endif

    
</p>