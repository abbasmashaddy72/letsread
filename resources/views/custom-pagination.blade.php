@if ($paginator->hasPages())
    <div class="vs-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="#" class="pagi-btn disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">Prev</a>
        @else
            <a href="#" class="pagi-btn" wire:click="previousPage" rel="prev"
                aria-label="@lang('pagination.previous')">Prev</a>
        @endif

        <ul>
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><span class="active">{{ $page }}</span></li>
                        @else
                            <li>
                                <a href="#" wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="#" class="pagi-btn" wire:click="nextPage" rel="next"
                aria-label="@lang('pagination.next')">Next</a>
        @else
            <a href="#" class="pagi-btn disabled" aria-disabled="true" aria-label="@lang('pagination.next')">Next</a>
        @endif
    </div>
@endif
