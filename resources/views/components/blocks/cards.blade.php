@if (isset($data['data']) && class_exists($data['data']))
    @php
        $modelClass = $data['data'];
        $modelData = app($modelClass);
        $items = $modelData->where('status', 'published')->take((int) $data['count'])->get();
    @endphp
    <div class="text-center title-area">
        <div class="sec-bubble">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
        </div>
        <h2 class="sec-title">{{ $data['title'] }}</h2>
        <p class="sec-text">{{ $data['message'] }}</p>
    </div>
    @if (class_basename($modelClass) == 'Testimonial')
        <div class="row vs-carousel testislide3" data-slide-show="2" data-md-slide-show="2">
            @foreach ($items as $item)
                <div class="col-lg-6">
                    <div class="testi-style2">
                        <p class="testi-text">{{ $item->excerpt }}</p>
                        <div class="testi-body">
                            <div class="testi-icon"><i class="fas fa-quote-left"></i></div>
                            <div class="media-body">
                                <h3 class="testi-name h4">{{ $item->title }}</h3>
                                <div class="testi-rating">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < $item->rating)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="fa fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3"
            data-md-slide-show="2">
            @foreach ($items as $item)
                <div class="service-style1 col-xl-3">
                    <div class="service-body">
                        <div class="service-img">
                            <a
                                href="{{ route(strtolower(class_basename($modelClass)) . '.show', ['page' => $item->slug]) }}">
                                <x-curator-glider :media="$item->meta->ogImage->id ?? $item->image->id" :srcset="['1200w', '1024w', '640w']"
                                    sizes="(max-width: 1200px) 100vw, 1024px" />
                            </a>
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <x-dynamic-component :component="$item['icon'] ?? 'fas-cloud'" />
                            </div>
                            <h3 class="service-title line-clamp-1">
                                <a
                                    href="{{ route(strtolower(class_basename($modelClass)) . '.show', ['page' => $item->slug]) }}">{{ $item->title }}</a>
                            </h3>
                            <p class="service-text line-clamp-3">
                                {{ $item->excerpt ?? $item->content }}
                            </p>
                            <div class="service-bottom">
                                <a href="{{ route(strtolower(class_basename($modelClass)) . '.show', ['page' => $item->slug]) }}"
                                    class="service-btn">{{ $item['button_text'] ?? 'Read More' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@else
    <div class="row">
        @if ($data['type'] == 'icon')
            @foreach ($data['items'] as $item)
                <div class="col-md-4">
                    <div class="info-style2">
                        <div class="info-icon">
                            <x-dynamic-component :component="$item['icon']" width="60" height="60" />
                        </div>
                        <h3 class="info-title">{{ $item['title'] }}</h3>
                        <p class="info-text">
                            <a href="{{ $item['button_url'] ?? '#' }}" class="text-inherit">
                                {!! $item['content'] !!}</a>
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endif
