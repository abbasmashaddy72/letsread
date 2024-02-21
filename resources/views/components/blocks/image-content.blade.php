@if (isset($data['data']) && class_exists($data['data']))
    @php
        $modelClass = $data['data'];
        $modelData = app($modelClass);

        if ($modelClass === '\App\Models\Testimonial') {
            $typeCondition = null;

            if (stripos($data['title'], 'Teacher') !== false) {
                $typeCondition = 'teacher';
            } elseif (stripos($data['title'], 'Parent') !== false) {
                $typeCondition = 'parent';
            }

            if ($typeCondition) {
                $items = $modelData->where('status', 'published')->where('type', $typeCondition)->take((int) $data['count'])->get();
            } else {
                // For other models or no specific title condition, use a normal condition
                $items = $modelData->where('status', 'published')->take((int) $data['count'])->get();
            }
        } else {
            // For other models, use a normal condition
            $items = $modelData->where('status', 'published')->take((int) $data['count'])->get();
        }
    @endphp
    @if (class_basename($modelClass) == 'Testimonial')
        <div class="flex-row-reverse row align-items-center gx-60">
            <div class="mb-40 text-center col-lg-6 text-lg-start mb-lg-0">
                <x-curator-glider :media="$data['image']" class="w-100" :srcset="['1200w', '1024w', '640w']"
                    sizes="(max-width: 1200px) 100vw, 1024px" />
            </div>
            <div class="col-lg-6">
                <div class="text-center title-area">
                    <p class="sec-subtitle">{{ $data['message'] }}</p>
                    <h2 class="sec-title">{{ $data['title'] }}</h2>
                </div>
                <div class="vs-carousel" data-fade="true" data-dots="true" data-xl-dots="true" data-ml-dots="true"
                    data-lg-dots="true" data-md-dots="true" data-sm-dots="true" data-xs-dots="true">
                    @foreach ($items as $item)
                        <div>
                            <div class="testi-style1">
                                <div class="testi-icon"><i class="fas fa-quote-left"></i></div>
                                <h3 class="testi-name h2">{{ $item->title }}</h3>
                                <div class="testi-rating">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < $item->rating)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="fa fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                <p class="testi-text">{{ $item->excerpt }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endif
