<div class="text-center title-area text-lg-start">
    <span class="sec-subtitle">{{ $data['message'] }}</span>
    <h2 class="sec-title">{{ $data['title'] }}</h2>
</div>

<div class="accordion accordion-style1" id="faqVersion1">
    @if (isset($data['data']) && class_exists($data['data']))
        @php
            $modelClass = $data['data'];
            $modelData = app($modelClass);
            $items = $modelData
                ->where('status', 'published')
                ->take((int) $data['count'])
                ->get();
        @endphp
        @foreach ($items as $item)
            <x-accordion.item :title="$item->question" :content="$item->answer" :loop="$loop" />
        @endforeach
    @else
        @foreach ($data['items'] as $item)
            <x-accordion.item :title="$item['title']" :content="$item['content']" :loop="$loop" />
        @endforeach
    @endif
</div>
