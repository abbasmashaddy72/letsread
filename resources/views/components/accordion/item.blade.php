<div class="accordion-item @if ($loop->index == 0) active @endif">
    <div class="accordion-header" id="heading{{ $loop->index }}">
        <button class="accordion-button @if ($loop->index != 0) collapsed @endif" type="button"
            data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}"
            aria-expanded="@if ($loop->index == 0) true @else false @endif"
            aria-controls="collapse{{ $loop->index }}">
            {{ $title }}
        </button>
    </div>
    <div id="collapse{{ $loop->index }}"
        class="accordion-collapse collapse @if ($loop->index == 0) show @endif"
        aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#faqVersion1">
        <div class="accordion-body">
            <x-prose>
                {!! $content !!}
            </x-prose>
        </div>
    </div>
</div>
