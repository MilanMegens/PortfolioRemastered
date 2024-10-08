<!--
███╗░░░███╗██╗██╗░░░░░░█████╗░███╗░░██╗░█████╗░░██████╗░██████╗
████╗░████║██║██║░░░░░██╔══██╗████╗░██║██╔══██╗██╔════╝██╔════╝
██╔████╔██║██║██║░░░░░███████║██╔██╗██║██║░░██║╚█████╗░╚█████╗░
██║╚██╔╝██║██║██║░░░░░██╔══██║██║╚████║██║░░██║░╚═══██╗░╚═══██╗
██║░╚═╝░██║██║███████╗██║░░██║██║░╚███║╚█████╔╝██████╔╝██████╔╝
╚═╝░░░░░╚═╝╚═╝╚══════╝╚═╝░░╚═╝╚═╝░░╚══╝░╚════╝░╚═════╝░╚═════╝░
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Milan Megens</title>
    <link rel="icon" type="image/x-icon" href="content/icons/favicon_milan.png">
    <!-- CSS Links -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navbar.css">

    <!-- Phosphor icon library link -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- JavaScript Links -->
    <script src="scripts/main.js" defer></script>
    <script src="scripts/navbar.js" defer></script>
</head>
<body>
            <!-- Include van de Navbar -->
            <?php include('includes/navbar.php') ?>

            <!-- Homepage -->
            <?php include('paginas/homepage.php') ?>

            <!-- Over mij pagina -->
            <?php include('paginas/overmij.php') ?>

            <!-- Vaardigheden pagina -->
            <?php include('paginas/vaardigheden.php') ?>

            <!-- Projecten pagina -->
            <?php include('paginas/projecten.php') ?>

            <!-- Contact pagina -->
            <?php include('paginas/contact.php') ?>

            <button id="scrollToTop" onclick="scrollToTop()"><i class="ph ph-caret-up"></i></button>
</body>
</html>