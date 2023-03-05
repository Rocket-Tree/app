<div class="flex-1">
    <p class="uppercase text-gray-500 md:mb-6">{{ $title }}</p>
    <ul class="list-reset mb-6">
        @foreach (json_decode($links, true) as $link)
            <x-layout.footer.footer-link :href="$link['href']" :text="$link['text']" />
        @endforeach
    </ul>
</div>
