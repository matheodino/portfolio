<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>matheonlht</title>
</head>

<body>
    <!-- ==== HEADER ==== -->
    <header class="container grid grid-cols-1 gap-8 md:grid-cols-2">
        <!-- ---- Left ---- -->
        <div class="flex flex-col self-start justify-between min-h-screen py-8">
            <a href="/" class="text-primary">
                <p class="text-2xl font-bold leading-none">matheo<span class="font-light">nlht</span></p>
                <p class="mt-2 md:hidden">dev & designer web</p>
            </a>
            <div class="my-16">
                <p>ma vision</p>
                <h1>concevoir un web plus simple, durable et solidaire</h1>
            </div>
            <nav>
                <ul>
                    <li><a class="bottom" href="#about">à propos</a></li>
                    <li><a class="bottom" href="#projects">projets</a></li>
                    <li><a class="external" href="cv" target="_blank">cv</a></li>
                </ul>
            </nav>
        </div>

        <!-- ---- Right ---- -->
        <div class="flex flex-col items-end md:pt-8">
            <div class="flex-col justify-center hidden md:flex">
                <p>dev & designer web</p>
            </div>

            <img class="w-1/2 -translate-y-32 md:translate-y-0 md:mt-16 md:w-2/3 lg:w-3/5 lg:mr-8" width="48" height="48" src="src/me.svg" alt="personnage représentant mathéo">
        </div>
    </header>

    <!-- ==== MAIN ==== -->
    <main class="-translate-y-32 md:translate-y-0">
        <!-- ---- About ---- -->
        <section id="about">
            <div class="container py-8 my-16">
                <h2>à propos</h2>

                <div class="grid-3">
                    <div class="lg:col-start-2 lg:col-span-2">
                        <p>je m'appelle mathéo, je suis passionné d’arts et de sciences.</p>
                        <p>en tant que dev & designer web, je veux avoir de l'impact et mettre en œuvre mes convictions avec des projets ayant pour objectifs de :</p>
                        <ul class="mt-8 grid-3">
                            <li>
                                <img class="w-12 mb-2" width="48" height="48" src="src/accessibility.svg" alt="icône accessibilité avec un bonhomme">
                                <strong>simplifier</strong> les services et améliorer leur accessibilité,
                            </li>
                            <li>
                                <img class="w-12 mb-2" width="48" height="48" src="src/leaf.svg" alt="icône feuille">
                                <strong>lutter</strong> contre le dérèglement climatique et les inégalités sociales,
                            </li>
                            <li>
                                <img class="w-12 mb-2" width="48" height="48" src="src/landmark.svg" alt="icône monument">
                                <strong>valoriser</strong> les sciences, les arts, les cultures et les projets humanitaires.
                            </li>
                        </ul>
                        <a class="external" href="cv" target="blank">mon cv</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---- Projects ---- -->
        <section id="projects">
            <div class="container py-8 mt-16">
                <h2 class="mb-4">projets</h2>

                <div class="grid-3">
                    <!-- Project -->
                    <a href="https://www.figma.com/proto/5i7GJTqkKQ7701gncIBhJr/Behance?page-id=0%3A1&node-id=67%3A1920&viewport=368%2C48%2C0.08&scaling=min-zoom" target="_blank">
                        <div class="image bg-[#007041]">
                            <img src="src/projects/parc-tete-dor/logo.svg" alt="logo parc de la tête d'or">
                        </div>
                        <div class="infos">
                            <h3>parc de la tête d'or</h3>
                            <ul>
                                <li>branding</li>
                            </ul>
                            <p class="external">voir le projet</p>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="https://www.figma.com/proto/b9dGVju44erfntprdHQNVF/Pr%C3%A9volution?page-id=222%3A712&node-id=481%3A8&viewport=368%2C48%2C0.19&scaling=min-zoom&starting-point-node-id=481%3A8" target="_blank">
                        <div class="image bg-[#EBFCFF]">
                            <img src="src/projects/prevolution/logo.svg" alt="logo prévolution">
                        </div>
                        <div class="infos">
                            <h3>prévolution</h3>
                            <ul>
                                <li>branding</li>
                                <li>design</li>
                                <li>dev</li>
                            </ul>
                            <p class="external">voir le design</p>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="https://www.figma.com/proto/HdUfEZAjgw3lFcVZlG3QEa/IUT-de-Chamb%C3%A9ry?page-id=0%3A1&node-id=54%3A250&viewport=368%2C48%2C0.15&scaling=min-zoom&starting-point-node-id=54%3A496" target="_blank">
                        <div class="image bg-[#E2E8F3]">
                            <img src="src/projects/iut/logo.svg" alt="logo IUT de chambéry">
                        </div>
                        <div class="infos">
                            <h3>iut de chambéry</h3>
                            <ul>
                                <li>design</li>
                                <li>ux</li>
                            </ul>
                            <p class="external">voir le design</p>
                        </div>
                    </a>

                    <!-- Project -->
                    <a href="ollie/" target="_blank">
                        <div class="image bg-[#FAB8C4]">
                            <img src="src/projects/ollie/logo.svg" alt="logo ollie">
                        </div>
                        <div class="infos">
                            <h3>ollie</h3>
                            <ul>
                                <li>dev</li>
                            </ul>
                            <p class="external">voir le site</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ---- Projects ---- -->
        <section id="hi">
            <div class="container py-8 mb-24 text-center">
                <a class="button" href="mailto:hi@matheonlht.com" target="_blank">parlez-moi de votre projet<img width="24" height="24" src="src/envelope.svg" alt="icône enveloppe"></p></a>
            </div>
        </section>
    </main>

    <!-- ==== FOOTER ==== -->
    <footer class="py-16 text-center bg-ghost-white">
        <div class="container flex flex-col items-center gap-8 lg:justify-between lg:flex-row">
            <!-- ---- Miscellaneous ---- -->
            <div class="flex flex-col gap-2 md:gap-8 md:flex-row">
                <p>fait main avec <a class="reset" href="https://tailwindcss.com/" target="_blank">tailwind<img width="16" height="16" src="src/tw.svg" alt="logo tailwind CSS"></a></p>

                <p>978 kbits<img width="16" height="16" src="src/leaf2.svg" alt="icône feuille"></p>
            </div>

            <!-- ---- Navigation ---- -->
            <nav>
                <ul class="flex flex-col gap-2 md:gap-8 md:flex-row">
                    <li><a class="external" href="mailto:hi@matheonlht.com" target="_blank">contact</a></li>
                    <li><a class="external" href="https://www.linkedin.com/in/matheonlht/" target="_blank">in</a></li>
                    <li><a class="external" href="https://github.com/matheodino/" target="_blank">github</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>

</html>