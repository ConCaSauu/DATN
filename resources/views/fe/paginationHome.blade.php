@if ($paginator->hasPages())
    <ul class="custom-pagination">
        {{-- Trang trước --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><i class="fa-solid fa-angle-left"></i></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa-solid fa-angle-left"></i></a></li>
        @endif

        {{-- Số trang --}}
        @foreach ($elements as $element)
            {{-- Dấu "..." --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Dãy trang --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span style="color: #6c7fd8">{{ $page }}</span></li>
                    @else
                        <li><a style="font-weight: 500;" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Trang kế tiếp --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa-solid fa-angle-right"></i></a></li>
        @else
            <li class="disabled"><i class="fa-solid fa-angle-right"></i></li>
        @endif
    </ul>
@endif
