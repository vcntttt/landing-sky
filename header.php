<header class="sticky top-0 z-50 p-4" id="header">
    <nav class="flex w-[80%] mx-auto items-center justify-between basis-0">
    <div class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 1200 1200" id="logoMenu">
    <path fill="currentColor" d="M600 0c-65.168 0-115.356 54.372-115.356 119.385c0 62.619-.439 117.407-.439 117.407h-115.87c-2.181 0-4.291.241-6.372.586h-32.227v112.573h540.527V237.378h-32.227c-2.081-.345-4.191-.586-6.372-.586H715.796s1.318-49.596 1.318-117.041C717.114 57.131 665.168 0 600 0zM175.195 114.185V1200h849.609V114.185H755.64v78.662h191.382v928.345h-693.97V192.847H444.36v-78.662H175.195zM600 115.649c21.35 0 38.599 17.18 38.599 38.452c0 21.311-17.249 38.525-38.599 38.525s-38.599-17.215-38.599-38.525c0-21.271 17.249-38.452 38.599-38.452zM329.736 426.27v38.525h38.599V426.27h-38.599zm115.869.732v38.525h424.658v-38.525H445.605zm-115.869 144.58v38.525h38.599v-38.525h-38.599zm115.869.732v38.599h424.658v-38.599H445.605zM329.736 716.895v38.525h38.599v-38.525h-38.599zm115.869.805v38.525h424.658V717.7H445.605zM329.736 862.28v38.525h38.599V862.28h-38.599zm115.869.806v38.525h424.658v-38.525H445.605zm-115.869 144.507v38.525h38.599v-38.525h-38.599zm115.869.805v38.525h424.658v-38.525H445.605z"/>
</svg>

        <h1 class="text-3xl ml-3">Sky Inventory</h1>
    </div>
    <div class="navLinks duration-500 md:static absolute md:min-h-fit min-h-[30vh] left-0 top-[-100%] md:w-auto w-full flex items-center p-5">
        <ul class="lista md:flex-row md:items-center md:gap-4 flex-col [&>li>a]:p-2 hidden md:flex [&>li]:mx-4">
            <li><a class="hover:text-amber-500 hover:underline" href="index.php">Inicio</a></li>
            <li><a class="hover:text-amber-500 hover:underline" href="products.php">Productos</a></li>
            <li><a class="hover:text-amber-500 hover:underline" href="about.php">Quienes Somos</a></li>
            <li><a class="hover:text-amber-500 hover:underline" href="contact.php">Contacto</a></li>
        </ul>
    </div>
    <div class="flex items-center">
        <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
    </div>
    </nav>
    <script>
        // Navbar responsive
        const navLinks = document.querySelector('.navLinks');
        const lista = document.querySelector('.lista');
        const logo = document.getElementById('logoMenu');
        function onToggleMenu(icon) {
            icon.name = icon.name === 'menu' ? 'close' : 'menu';
            navLinks.classList.toggle('top-[9%]');
            lista.classList.toggle('hidden');
        }
        window.addEventListener('load', function () {
        // Cambiar color de header
        const header = document.getElementById('header');
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.9,
        }

        const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
        const {isIntersecting} = entry;
        if (isIntersecting) {
            // console.log("Intersecting section:", entry.target);
            const color = entry.target.getAttribute('data-header-color');
            // console.log("Setting header color to:", color);
            header.style.color = color;
            if(logo) logo.style.color = color;
        }
    });
}, observerOptions);
    const sections = document.querySelectorAll('.landing-section');
    // console.log("Found sections:", sections?.length);
    sections?.forEach(section => {
    // console.log("Section color attribute:", section.getAttribute('data-header-color'));
    observer.observe(section);
    });
    })
    </script>
</header>