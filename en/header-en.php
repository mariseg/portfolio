<header>
        <!-- Fixed navbar de Bootstrap -->
        <nav class="navbar navbar-expand-md mb-4 mt-2">  <!-- navbar-expand-md es la clase que define que el menu se colapse o expanda segun la pantalla -->
            <div class="container">
                <button class="navbar-toggler px-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">  
                    <i class="fas fa-bars p-1"></i>     <!-- icono del menu -->
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse" style>  <!-- contenedor de las opciones del menu -->
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page == "index-en"? "active" : "" ?> px-4 pe-sm-4 py-1" href="index-en.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page == "about-me"? "active" : "" ?> px-4 pe-sm-4 py-1" href="about-me.php">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page == "projects"? "active" : "" ?> px-4 pe-sm-4 py-1" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $page == "contact"? "active" : "" ?> px-4 pe-sm-4 py-1" href="contact.php">Contact</a>
                            <!-- class="nav-link active" son 2 clases distintas 'nav-link' y 'active' -->
                            <!-- la clase active se le pone solo al link de contacto porque estamos en la pagina contactos, en las otras paginas se pondra los otros correspondientes-->
                        </li>
                    </ul>
                    <form class="d-flex ms-4">  <!-- parte de ES/EN -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $page == "contact"? "../contacto.php" : ($page == "index-en"? "../index.php" : 
                                ($page == "projects"? "../proyectos.php" : "../sobre-mi.php")); ?>">ES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $page == "contact"? "contact.php" : ($page == "index-en"? "index-en.php" : 
                                ($page == "projects"? "projects.php" : "about-me.php")); ?>">EN</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
    </header>

