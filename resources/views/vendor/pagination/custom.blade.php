@if ($paginator->hasPages())
    <div
        class="gdlr-core-pagination gdlr-core-js gdlr-core-style-round gdlr-core-center-align gdlr-core-with-border gdlr-core-item-pdlr">

        {{-- Link "Previous" --}}
        @if ($paginator->onFirstPage())
            <span class="page-numbers disabled" aria-disabled="true">@lang('pagination.previous')</span>
        @else
            <a class="page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="page-numbers disabled" aria-disabled="true">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page-numbers gdlr-core-active">{{ $page }}</span>
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Link "Next" --}}
        @if ($paginator->hasMorePages())
            <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
        @else
            <span class="page-numbers disabled" aria-disabled="true">@lang('pagination.next')</span>
        @endif
    </div>
@endif
