<ul class="list-reset lg:flex justify-end flex-1 items-center mr-3">
    @foreach ($links as $text => $link)
        <x-layout.header.navbar-link :href=$link :text=$text :active="$link === $active" />
    @endforeach
    <x-layout.header.country-flags />
</ul>
