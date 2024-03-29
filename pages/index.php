<!doctype html>
<html lang="en">

<?php require('includes/head.php'); ?>

<body data-bs-theme="light">

<turtle-canvas class="h-100 w-100 position-fixed opacity-25"></turtle-canvas>

<div class="container position-relative p-3 p-sm-5">
    <div class="row">

        <div class="col-lg-5 p-4">

            <a href="/">
                <img src="avatar.png" alt="" class="avatar" width="150" height="150">
            </a>

            <h1 class="fs-1 fw-bold mb-0 mt-3">Stéphane Wouters</h1>
            <div class="fw-light">@doelia</div>

            <div class="opacity-75 fs-4 mt-3 fw-light" style="">Full stack web developer</div>
            <div class="opacity-75 fs-4 fw-light">Montpellier, France</div>

            <div class="mt-3">
                <span class="text-body fw-light">contact@stephanewouters.fr</span>
            </div>

            <div class="d-flex gap-3 fs-4 mt-3">
                <a href="https://twitter.com/Doelia" class="text-body icon-hover-animated rounded">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="https://www.instagram.com/wouters.stephane/" class="text-body icon-hover-animated rounded">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/in/st%C3%A9phane-wouters-ab0b9712b/" class="text-body icon-hover-animated rounded">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="https://github.com/doelia/" class="text-body icon-hover-animated rounded">
                    <i class="fa-brands fa-github-alt"></i>
                </a>
            </div>

            <div class="mt-3">
                <a href="https://www2.stephanewouters.fr/CV_WOUTERS.pdf" class="text-hover-animated text-body fw-bold">CV</a>
            </div>


        </div>

        <div class="col content">

            <div class="my-5 category-hover fade-in">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center category-icon" style="height: 40px; width: 40px; line-height: 40px">
                        <i class="fa-solid fa-briefcase opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">CURRENT JOB</h2>
                        <div class="opacity-75 small fst-italic">Since 2015</div>
                    </div>
                </div>
                <div class="m-3 border-start border-gray ps-3 pt-1">
                    <span class="fst-italic fw-light">Lead developer -</span>
                    <turtle-trigger-popper turtle-type="fishes">
                        <a href="https://poisson-soluble.com" class="text-hover-animated text-body fw-bold">Poisson Soluble</a>
                    </turtle-trigger-popper>
                </div>
            </div>

            <div class="my-5 category-hover fade-in">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center category-icon" style="height: 40px; width: 40px; line-height: 40px">
                        <i class="fa-solid fa-chalkboard-user opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">Courses</h2>
                        <div class="opacity-75 small fst-italic">Teaching at EPSI School</div>
                    </div>
                </div>
                <div class="m-3 border-start border-gray ps-3 pt-1">
                    <ul class="list-unstyled d-flex flex-column gap-1">
                        <li>
                            <span class="fst-italic fw-light">EPSI 1 -</span>
                            <a href="https://stephanewouters.fr/teaching/epsi/serveurweb.html" class="text-hover-animated text-body fw-bold">Serveurs web</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">WIS 3 -</span>
                            <a href="https://stephanewouters.fr/teaching/wis/cloud.html" class="text-hover-animated text-body fw-bold">Cloud & systèmes web</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">WIS 2 -</span>
                            <a href="https://stephanewouters.fr/teaching/wis/js.html" class="text-hover-animated text-body fw-bold">JavaScript</a>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">WIS 1 -</span>
                            <a href="https://stephanewouters.fr/teaching/wis/website_bdd.html" class="text-hover-animated text-body fw-bold">Base de données avec SQL et PHP</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="my-5 category-hover fade-in">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center category-icon">
                        <i class="fa-solid fa-seedling opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">Side projects</h2>
                        <div class="opacity-75 small fst-italic">I made stuff, since 2007</div>
                    </div>
                </div>

                <div class="m-3 border-start border-gray ps-3 pb-1">
                    <ul class="list-unstyled d-flex flex-column gap-1 mb-0">
                        <li>
                            <span class="fst-italic fw-light">2023 -</span>
                            <turtle-trigger-popper turtle-type="ants">
                                <a href="https://ants.doelia.fr" class="text-hover-animated text-body fw-bold">Ants simulator</a>
                            </turtle-trigger-popper>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">2023 -</span>
                            <a href="https://stephanewouters.fr/pk/" class="text-hover-animated text-body fw-bold">Progress Knight: Remastered</a>
                            <span class="fst-italic fw-light">Mobile IDLE game</span>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">2022 -</span>
                            <a href="https://playthatmap.net" class="text-hover-animated text-body fw-bold">PlayThatMap</a>
                            <span class="fst-italic fw-light">Minecraft map hosting service</span>
                        </li>
                        <li>
                            <span class="fst-italic fw-light">2022 -</span>
                            <a href="https://bakamon.doelia.fr/" class="text-hover-animated text-body fw-bold">Bakamon GO!</a>
                        </li>
                    </ul>

                    <div class="mt-2">
                        <a href="projects.html" class="fst-italic opacity-50 text-black">View more</a>
                    </div>

                </div>
            </div>

            <div class="my-5 grayscale-hover-effect category-hover fade-in">
                <div class="d-flex align-items-center">
                    <div class="text-bg-light rounded text-center category-icon">
                        <i class="fa-solid fa-rocket opacity-25"></i>
                    </div>
                    <div class="col ms-3">
                        <h2 class="text-uppercase fs-5 mb-0 fw-light">Technologies</h2>
                    </div>
                </div>
                <div class="m-3 border-start border-gray ps-3 pb-1">
                    <div>
                        <span class="text-uppercase opacity-75 small">Favorite stack</span>
                        <div>
                            <span class="fw-bold me-1">Backend</span>
                            <span class="fst-italic fw-light">Docker, Symfony, PostgreSQL, Mercure.rocks</span>
                        </div>
                        <div>
                            <span class="fw-bold me-1">Front-end</span>
                            <span class="fst-italic fw-light">React, React native, Bootstrap</span>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="text-uppercase opacity-75 small">Occasionally used</span>
                        <div>
                            <span class="fw-bold me-1">Devops</span>
                            <span class="fst-italic fw-light">Docker swarm, OpenShift, AWS</span>
                        </div>
                        <div>
                            <span class="fw-bold me-1">Backend</span>
                            <span class="fst-italic fw-light">Node.JS, Python, Bash, Golang</span>
                        </div>
                        <div>
                            <span class="fw-bold me-1">Front-end</span>
                            <span class="fst-italic fw-light">Vue.js, Angular, Leaflet, Socket.io, GraphQL</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
