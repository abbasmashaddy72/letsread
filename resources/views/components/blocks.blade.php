{{-- @props([
    'blocks' => [],
    'combine' => boolean,
])

@if ($blocks)
    @if ($combine)
        <div class="row gx-80">
            @foreach ($blocks as $block)
                @if ($loop->first)
                    <div class="pb-3 col-lg-6 col-xxl-auto pb-xl-0">
                        <x-dynamic-component :component="'blocks.' . $block['type']" :data="$block['data']" />
                    </div>
                @else
                    <div class="col-lg-6 align-self-center">
                        <x-dynamic-component :component="'blocks.' . $block['type']" :data="$block['data']" />
                    </div>
                @endif
            @endforeach
        </div>
    @endif
    @foreach ($blocks as $block)
        <x-dynamic-component :component="'blocks.' . $block['type']" :data="$block['data']" />
    @endforeach
@endif --}}
@props([
    'blocks' => [],
    'combine' => false,
])

@if (!empty($blocks))
    @if ($combine)
        <div class="row gx-80">
            @foreach ($blocks as $index => $block)
                <div class="col-lg-6{{ $loop->first ? ' pb-3 col-xxl-auto pb-xl-0' : ' align-self-center' }}">
                    <x-dynamic-component :component="'blocks.' . $block['type']" :data="$block['data']" />
                </div>
            @endforeach
        </div>
    @else
        @foreach ($blocks as $block)
            <x-dynamic-component :component="'blocks.' . $block['type']" :data="$block['data']" />
        @endforeach
    @endif
@endif
