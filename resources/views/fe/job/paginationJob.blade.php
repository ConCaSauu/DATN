{{-- <ul>
    <li class="active">
        <a href="javascript:void(0)">1</a>
    </li>
    <li>
        <a href="javascript:void(0)">2</a>
    </li>
    <li>
        <a href="javascript:void(0)">3</a>
    </li>
    <li>
        <a href="javascript:void(0)">4</a>
    </li>
    <li>
        <a href="javascript:void(0)" class="next">Next <i class="ri-arrow-right-s-line"></i></a>
    </li>
</ul> --}}

<ul>
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li class="disabled">
            <a href="javascript:void(0)" class="next"><i class="ri-arrow-left-s-line" style="margin:0 12px 0 0"></i> Prev</a>
        </li>
    @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="ri-arrow-left-s-line"></i> Prev</a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active"><a href="javascript:void(0)">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="next">Next <i class="ri-arrow-right-s-line"></i></a>
        </li>
    @else
        <li class="disabled">
            <a href="javascript:void(0)" class="next">Next <i class="ri-arrow-right-s-line"></i></a>
        </li>
    @endif
</ul>