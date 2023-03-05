<ul class="list-reset lg:flex justify-end flex-1 items-center">
    @foreach ($links as $text => $link)
        <x-layout.header.navbar-link :href=$link :text=$text :active="$link === $active" />
    @endforeach
</ul>
