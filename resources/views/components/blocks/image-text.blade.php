<div class="flex-row-reverse row align-items-center justify-content-between">
    <div class="text-center col-lg-6 col-xl-auto text-lg-end">
        <div class="img-box2">
            <div class="transform-banner">
                <x-curator-glider :media="$data['image']" :srcset="['1200w', '1024w', '640w']" sizes="(max-width: 1200px) 100vw, 1024px" />
            </div>
            <div class="vs-circle jump"></div>
        </div>
    </div>
    <div class="text-center col-lg-6 text-lg-start">
        <h2 class="sec-title me-xxl-5">{{ $data['title'] }}</h2>
        {!! $data['content'] !!}
    </div>
</div>
