@if ($content['type'] == 'slider' && Route::currentRouteName() == 'welcome')
    <section class="vs-hero-wrapper">
        <div class="vs-hero-carousel" data-height="770" data-container="1900" data-slidertype="responsive"
            data-navbuttons="true">
            @foreach ($content['sliders'] as $item)
                <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                    <x-curator-glider class="ls-bg" width="1920" height="770" decoding="async" :media="$item['image']"
                        :srcset="['1200w', '1024w', '640w']" sizes="(max-width: 1200px) 100vw, 1024px" />
                    <ls-layer
                        style="font-size:36px; color:#000; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; width:255px; height:255px; border-width:60px 60px 60px 60px; border-color:#FFD600; border-radius:50% 50% 50% 50%; top:126px; left:740px; z-index:4; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="static:forever;">
                    </ls-layer>
                    <div style="font-size:36px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; width:711px; height:410px; left:312px; top:213px; background-color:#490D59; border-radius:213px 206px 50px 213px; z-index:5; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="static:forever;"></div>
                    <div style="font-size:36px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; opacity:0.9; overflow:visible; width:1200px; height:600px; left:350px; top:76px; background-color:#490D59; border-radius:213px 206px 50px 213px; z-index:5; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="static:forever;"></div>
                    <div style="font-size:36px; stroke:#000; stroke-width:0px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; opacity:0.9; overflow:visible; width:1300px; height:700px; left:50%; top:33px; background-color:#490D59; border-radius:213px 206px 50px 213px; z-index:5; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="static:forever;"></div>
                    <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:284px; left:312px; width:711px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                        {{ $item['text_1'] }}
                    </h1>
                    <h1 style="font-size:60px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:60px; color:#ffffff; top:361px; left:312px; width:711px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:100; delayin:300; easingin:easeOutQuint; offsetxout:100; easingout:easeOutQuint;">
                        {{ $item['text_2'] }}
                    </h1>
                    <p style="font-size:18px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:711px; left:312px; top:438px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                        data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        {{ $item['text_3'] }}</p>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:100%; top:494px; font-family:'Fredoka', sans-serif; width:711px; margin-left:-877px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                        data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="{{ $item['button_url'] }}" class="vs-btn">{{ $item['button_text'] }}</a>
                    </div>
                    <h1 style="font-size:90px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:141px; left:50%; width:1200px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                        {{ $item['text_1'] }}
                    </h1>
                    <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:90px; color:#ffffff; top:255px; left:50%; width:1200px; font-size:90px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                        {{ $item['text_2'] }}
                    </h1>
                    <p style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Jost', sans-serif; color:#ffffff; width:1200px; left:50%; top:384px; font-size:38px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                        data-ls="offsetyin:100; delayin:500; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        {{ $item['text_3'] }}</p>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:495px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                        data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="{{ $item['button_url'] }}" class="vs-btn">{{ $item['button_text'] }}</a>
                    </div>
                    <h1 style="font-size:110px; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:113px; left:50%; width:1200px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                        data-ls="offsetxin:-100; delayin:200; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                        {{ $item['text_1'] }}
                    </h1>
                    <h1 style="stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; font-family:'Fredoka', sans-serif; line-height:110px; color:#ffffff; top:247px; left:50%; width:1200px; font-size:110px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                        data-ls="offsetxin:100; delayin:400; easingin:easeOutQuint; offsetxout:-100; easingout:easeOutQuint;">
                        {{ $item['text_2'] }}
                    </h1>
                    <div style="font-size:30px; color:#000; stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; left:50%; top:430px; font-family:'Fredoka', sans-serif; width:1200px; margin-left:0px; -webkit-background-clip:border-box;"
                        class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                        data-ls="offsetyin:100; delayin:700; easingin:easeOutQuint; offsetyout:100; easingout:easeOutQuint;">
                        <a href="{{ $item['button_url'] }}" class="vs-btn">{{ $item['button_text'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@else
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $content['title'] }}</h1>
                <p class="breadcumb-text">{{ $content['cta'] }}</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>{{ $content['title'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
