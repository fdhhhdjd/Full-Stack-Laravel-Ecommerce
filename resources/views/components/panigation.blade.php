@if ($paginator->hasPages())
    <ul class="page-numbers">

        @if ($paginator->onFirstPage())
            <li class="d-none"><a class="page-number-item next-link" href="{{ $paginator->previousPageUrl() }}"> <i
                        class="fa fa-angle-left mr-1" aria-hidden="true"></i></a></li>
        @else
            <li><a class="page-number-item next-link" href="{{ $paginator->previousPageUrl() }}"> <i
                        class="fa fa-angle-left mr-1" aria-hidden="true"></i></a></li>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><span class="page-number-item current"> {{ $page }}</span></li>
                    @else
                        <li><a class="page-number-item" href="{{ $url }}"> {{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="d-none"><a class="page-number-item next-link" href="{{ $paginator->nextPageUrl() }}"> <i
                        class="fa fa-angle-right mr-1" aria-hidden="true"></i></a></li>
        @else
            <li><a class="page-number-item next-link" href="{{ $paginator->nextPageUrl() }}"> <i
                        class="fa fa-angle-right mr-1" aria-hidden="true"></i></a></li>
        @endif

    </ul>
@endif
