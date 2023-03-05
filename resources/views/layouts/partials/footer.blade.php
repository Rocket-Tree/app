<footer class="bg-white">
    <div class="container mx-auto px-8">
      <div class="w-full flex flex-col md:flex-row py-6">
        <div class="flex-1 mb-6 text-black">
          <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            <div class="inline-flex">
                <svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M276.495468 361.957704c54.912387 0 98.996979-44.084592 98.996979-98.996979 0-54.912387-44.084592-98.996979-98.996979-98.996979C221.583082 163.963746 177.498489 208.048338 177.498489 262.960725c-0.773414 54.138973 44.084592 98.996979 98.996979 98.996979zM553.377644 556.858006c-44.858006 0-81.208459 36.350453-81.20846 81.208459S508.519637 719.274924 553.377644 719.274924s81.208459-36.350453 81.208459-81.208459c0.773414-44.858006-35.577039-81.208459-81.208459-81.208459z m231.250755-315.55287c-37.897281 0-68.833837 30.936556-68.833837 68.833837s30.936556 68.833837 68.833837 68.833837 68.833837-30.936556 68.833837-68.833837c0-38.670695-30.936556-68.833837-68.833837-68.833837zM291.963746 447.806647c0-33.256798-27.069486-60.326284-60.326284-60.326284s-60.326284 27.069486-60.326284 60.326284 27.069486 60.326284 60.326284 60.326284 60.326284-27.069486 60.326284-60.326284z m34.030212-26.296073c0 29.389728 23.202417 52.592145 52.592145 52.592145s52.592145-23.202417 52.592145-52.592145-23.202417-52.592145-52.592145-52.592145-52.592145 23.202417-52.592145 52.592145zM517.800604 531.335347c27.069486 0 48.725076-21.655589 48.725076-48.725075s-21.655589-48.725076-48.725076-48.725076-48.725076 21.655589-48.725075 48.725076c-0.773414 26.296073 21.655589 48.725076 48.725075 48.725075z m237.438067-315.55287c27.069486 0 48.725076-21.655589 48.725075-48.725075s-21.655589-48.725076-48.725075-48.725076-48.725076 21.655589-48.725076 48.725076 21.655589 48.725076 48.725076 48.725075z m-42.537765 398.308157c-27.069486 0-48.725076 21.655589-48.725075 48.725076s21.655589 48.725076 48.725075 48.725075 48.725076-21.655589 48.725076-48.725075-21.655589-48.725076-48.725076-48.725076z m-329.47432-448.58006c29.389728 0 52.592145-23.202417 52.592145-52.592145s-23.202417-52.592145-52.592145-52.592145-52.592145 23.202417-52.592145 52.592145c0 28.616314 23.975831 52.592145 52.592145 52.592145z m-41.76435 333.34139c-58.779456 0-106.731118 47.951662-106.731118 106.731118 0 58.779456 47.951662 106.731118 106.731118 106.731117C400.241692 711.540785 448.193353 663.589124 448.193353 604.809668c0-58.779456-47.951662-105.957704-106.731117-105.957704z m358.864048-240.531722c0-80.435045-64.966767-145.401813-145.401813-145.401813S409.522659 177.885196 409.522659 258.320242s64.966767 145.401813 145.401812 145.401812c80.435045 0.773414 145.401813-64.966767 145.401813-145.401812z m12.374622 130.706948c-55.685801 0-101.317221 45.63142-101.31722 101.317221 0 55.685801 45.63142 101.317221 101.31722 101.31722 55.685801 0 101.317221-45.63142 101.317221-101.31722 0-55.685801-44.858006-101.317221-101.317221-101.317221z" fill="#1ca538"></path><path d="M538.682779 744.797583h-53.365558l-6.960726 226.610272h66.513596l-6.187312-226.610272z" fill="#65320b"></path></g></svg>
            </div>
            <div class="inline-flex text-3xl text-[#65320b] hover:text-[#1ca538]">RocketTree</div>
          </a>
        </div>
        <x-layout.footer.footer-links title="Links" :links="json_encode([['href' => '#', 'text' => 'FAQ'],['href' => '#', 'text' => 'Help'],['href' => '#', 'text' => 'Support']])" />
        <x-layout.footer.footer-links title="Legal" :links="json_encode([['href' => '#', 'text' => 'Terms'],['href' => '#', 'text' => 'Privacy']])" />
        <x-layout.footer.footer-links title="Social" :links="json_encode([['href' => '#', 'text' => 'Facebook'],['href' => '#', 'text' => 'LinkedIn'],['href' => '#', 'text' => 'Twitter']])" />
        <x-layout.footer.footer-links title="Company" :links="json_encode([['href' => '#', 'text' => 'Empresa'],['href' => '#', 'text' => 'Contact']])" />
      </div>
    </div>
    <div class="text-center 2023 text-[#65320b]">
        <a href="{{ route('home') }}" class="hover:font-extrabold">2023 RocketTree</a> | Todos los derechos reservados
    </div>
  </footer>
<script>
var scrollpos = window.scrollY;
var header = document.getElementById("header");
var navcontent = document.getElementById("nav-content");
var navaction = document.getElementById("navAction");
var brandname = document.getElementById("brandname");
var toToggle = document.querySelectorAll(".toggleColour");

document.addEventListener("scroll", function () {
    /*Apply classes for slide in bar*/
    scrollpos = window.scrollY;

    if (scrollpos > 10) {
    header.classList.add("bg-white");
    navaction.classList.remove("bg-white");
    navaction.classList.add("gradient");
    navaction.classList.remove("text-gray-800");
    navaction.classList.add("text-white");
    //Use to switch toggleColour colours
    for (var i = 0; i < toToggle.length; i++) {
        toToggle[i].classList.add("text-gray-800");
        toToggle[i].classList.remove("text-white");
    }
    header.classList.add("shadow");
    navcontent.classList.remove("bg-gray-100");
    navcontent.classList.add("bg-white");
    } else {
    header.classList.remove("bg-white");
    navaction.classList.remove("gradient");
    navaction.classList.add("bg-white");
    navaction.classList.remove("text-white");
    navaction.classList.add("text-gray-800");
    //Use to switch toggleColour colours
    for (var i = 0; i < toToggle.length; i++) {
        toToggle[i].classList.add("text-white");
        toToggle[i].classList.remove("text-gray-800");
    }

    header.classList.remove("shadow");
    navcontent.classList.remove("bg-white");
    navcontent.classList.add("bg-gray-100");
    }
});
</script>
<script>
/*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");

document.onclick = check;
function check(e) {
    var target = (e && e.target) || (event && event.srcElement);

    //Nav Menu
    if (!checkParent(target, navMenuDiv)) {
    // click NOT on the menu
    if (checkParent(target, navMenu)) {
        // click on the link
        if (navMenuDiv.classList.contains("hidden")) {
        navMenuDiv.classList.remove("hidden");
        } else {
        navMenuDiv.classList.add("hidden");
        }
    } else {
        // click both outside link and outside menu, hide menu
        navMenuDiv.classList.add("hidden");
    }
    }
}
function checkParent(t, elm) {
    while (t.parentNode) {
    if (t == elm) {
        return true;
    }
    t = t.parentNode;
    }
    return false;
}
</script>
