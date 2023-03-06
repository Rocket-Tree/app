<ul class="list-reset lg:flex justify-end flex-1 items-center mr-3">
    @foreach ($links as $text => $link)
        <x-layout.header.navbar-link :href=$link :text=$text :active="$link === $active" />
    @endforeach
    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button"><x-flag-country-es class="w-6 h-6" /> <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
    <!-- Dropdown menu -->
    <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-12 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
            <li>
                <a href="#" class="block px-4 py-2"><x-flag-country-us class="w-6 h-6" /></a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2"><x-flag-country-cn class="w-6 h-6" /></a>
            </li>
        </ul>
    </div>
</ul>
