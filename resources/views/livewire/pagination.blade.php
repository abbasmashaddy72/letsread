<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public $data;

    public function with(): array
    {
        $data = $this->data;
        $modelClass = isset($data['data']) && class_exists($data['data']) ? $data['data'] : null;

        $items = $modelClass
            ? app($modelClass)
                ->where('status', 'published')
                ->paginate($data['count'] ?? 10)
            : [];

        return [
            'items' => $items,
            'routeName' => strtolower(class_basename($modelClass)),
        ];
    }

    public function paginationView()
    {
        return 'custom-pagination';
    }
}; ?>

<div>
    <div class="text-center title-area">
        <div class="sec-bubble">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
        </div>
        <h2 class="sec-title">{{ $this->data['title'] }}</h2>
        <p class="sec-text">{{ $this->data['message'] }}</p>
    </div>
    <div class="row">
        @foreach ($items as $item)
            <div class="service-style1 col-xl-3">
                <div class="service-body">
                    <div class="service-img">
                        <a href="{{ route($routeName . '.show', ['page' => $item->slug]) }}">
                            <x-curator-glider :media="$item->meta->ogImage->id ?? $item->image->id" :srcset="['1200w', '1024w', '640w']"
                                sizes="(max-width: 1200px) 100vw, 1024px" />
                        </a>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <x-dynamic-component :component="$item['icon'] ?? 'fas-cloud'" />
                        </div>
                        <h3 class="service-title line-clamp-1">
                            <a href="{{ route($routeName . '.show', ['page' => $item->slug]) }}">{{ $item->title }}</a>
                        </h3>
                        <p class="service-text line-clamp-3">
                            {{ $item->excerpt ?? $item->content }}
                        </p>
                        <div class="service-bottom">
                            <a href="{{ route($routeName . '.show', ['page' => $item->slug]) }}"
                                class="service-btn">{{ $item['button_text'] ?? 'Read More' }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $items->links() }}
    </div>
</div>
