@if( $paginator->hasPages() )
<ul class="pagination mt-3 justify-content-center pagination_style1">

    @if($paginator->onFirstPage())
    @else
    <li class="page-item">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
            <span aria-hidden="true"><i class="ti-arrow-left"></i></span>
        </a>
    </li>
    @endif

    @foreach($elements as $element)
    @foreach($element as $page => $url)
    @if( $paginator->currentPage() == $page )
    <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
    @else
    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endforeach
    
    @if($paginator->hasMorePages())
    <li class="page-item">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
            <span aria-hidden="true"><i class="ti-arrow-right"></i></span>
        </a>
    </li>
    @else
    @endif
</ul>
@endif