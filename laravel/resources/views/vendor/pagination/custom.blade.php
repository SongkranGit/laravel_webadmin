

@if ($paginator->hasPages())

    @if ($paginator->onFirstPage())
        <a href="#" class="navlinks">&lt; Previous</a>
    @else
        <a class="navlinks"  href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a>
    @endif

    {{--Pagination Elements--}}
    @foreach ($elements as $element)
        {{--"Three Dots" Separator--}}
        @if (is_string($element))
            <a class="disabled"><span>{{ $element }}</span></a>
        @endif

        {{--Array Of Links--}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a href="#" class="navlinks current">{{ $page }}</a>
                @else
                    <a class="navlinks" href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{--Next Page Link--}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="navlinks">Next ></a>
    @else
        <a  href="#"  class="navlinks disable">Next ></a>
    @endif

@endif