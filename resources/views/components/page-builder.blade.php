@foreach ($content as $container)
    <section class=" space-top space-extra-bottom">
        <div class="container">
            @if ($container['blocks'])
                <x-blocks :blocks="$container['blocks']" />
            @endif
        </div>
    </section>
@endforeach
