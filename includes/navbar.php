<!-- Green sock animation platform include -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

<!-- Begin navbar -->
<div class="navigatiebalk">  
    <div class="navbar">
        <div class="brand">{Milan Megens}</div>
        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="desktop-menu" id="desktop-menu">
            <a href="#overmij">Over mij</a>
            <a href="#Vaardigheden">Vaardigheden</a>
            <a href="#Projecten">Projecten</a>
            <a href="#Contact">Contact</a>
        </div>
    </div>

    <div class="menu" id="menu">
        <!-- Kruisje -->
        <div class="kruis" onclick="toggleMenu()">
            <div class="diagonal left"></div>
            <div class="diagonal right"></div>
        </div>

        <!-- Navigatie titel -->
        <p class="baarle">Navigatie</p>
        <hr class="lijntje-1">

        <!-- Navigatie items -->
        <div class="nav-items">
            <a href="#overmij" onclick="toggleMenu()">Over mij</a>
            <a href="#vaardigheden" onclick="toggleMenu()">Vaardigheden</a>
            <a href="#projecten" onclick="toggleMenu()">Projecten</a>
            <a href="#contact" onclick="toggleMenu()">Contact</a>
        </div>

        <!-- Socials -->
        <p class="elraab">Socials</p>
        <hr class="lijntje-1">

        <!-- Icons -->
        <div class="socials">
            <a href="www.linkedin.com/in/milanmegens2007" target="_blank">
                <img src="content/icons/linkedin.png">
            </a>
            <a href="https://github.com/MilanMegens" target="_blank">
                <img src="content/icons/github.png">
            </a>
            <a href="https://www.instagram.com/milanmegens/" target="_blank">
                <img src="content/icons/instagram.png">
            </a>
            <a href="mailto:milanoss2007@gmail.com" target="_blank">
                <img src="content/icons/mail.png">
            </a>
        </div>
    </div>