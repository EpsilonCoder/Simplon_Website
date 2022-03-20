 <!-- Main -->
 <main class="container-fluid ">
    <figure>
        <img src="./formations/img/formationsproBestResolution.jpg" alt="Banner" class="img-fluid">
        <figcaption class="position-absolute">Formations</figcaption>
    </figure>
    <!-- barre de recherche -->
    @include('component.fonctionality.searchbar')
    <!-- End search bar -->
    <!-- public Section  -->
    <section class="row mb-3 justify-content-center row-secondary public-section">
        <div class="col-12">
            <div class="col-10 offset-1">
                <!-- Public title -->
                <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">Par Public </h2>
                <p class="my-5 text-justify">
                    Physical space is often conceived in three linear dimensions, although modern physicists usually
                    consider it, with time, to be part of a boundless four-dimensional continuum known as spacetime.
                    The concept of space is considered to be of fundamental importance to an understanding of the
                    physical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nostrum optio id iusto
                    doloribus suscipit similique incidunt minima molestiae alias tempora beatae. Eaque, ducimus
                    maiores?
                </p>
                 @include('component.fonctionality.parpublic')
            </div>
        </div>
    </section>
    <!-- End public Section  -->
    <!-- Section parcours -->
    <section class="row mb-3 justify-content-center row-secondary parcours-section">
        <div class="col-12 px-0">
            <div class="col-10 offset-1">
                <!-- Parcours title -->
                <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">Par Parcours </h2>
                <p class="my-5 text-justify">
                    Physical space is often conceived in three linear dimensions, although modern physicists usually
                    consider it, with time, to be part of a boundless four-dimensional continuum known as spacetime.
                    The concept of space is considered to be of fundamental importance to an understanding of the
                    physical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nostrum optio id iusto
                    doloribus suscipit similique incidunt minima molestiae alias tempora beatae. Eaque, ducimus
                    maiores?
                </p>
                @include('component.fonctionality.parparcour')
            </div>
        </div>
    </section>
    <!--  Partenariat Section-->
    <section class=" partenariat row  justify-content-center">
        <!-- Parcours title -->
        <div class="col-12 px-0 me-0">
            <div class="col-10 offset-1">
                <h2 class=" fw-bold text-uppercase sp-red sp-line-under mb-2">En Partenariat </h2>
                <p class="my-5 text-justify">
                    Physical space is often conceived in three linear dimensions, although modern physicists usually
                    consider it, with time, to be part of a boundless four-dimensional continuum known as spacetime.
                    The concept of space is considered to be of fundamental importance to an understanding of the
                    physical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, nostrum optio id iusto
                </p>
                 @include('component.fonctionality.partenariat')


                <div class=" col-12 px-0 text-end alert">
                    <a href="" class="text-decoration-underline alert-dark  alert-link bg-white">Afficher tout
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--  End Partenariat Section-->
</main>
<!-- End Main -->