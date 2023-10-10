<div id="sobre-nosotros" class="sobre-nosotros has-padding-top-50 has-padding-bottom-50">
    <div class="container has-padding-10">
        <div class="sobre-nosotros-content columns is-multiline is-justify-content-center is-variable is-3">
            <div class="column is-12 is-6-desktop">
                <h1 class="title sobre-nosotros-title is-size-1 has-margin-bottom-80-desktop has-margin-bottom-40-touch" data-inertia data-inertia-reveal data-inertia-delay="200">
                    <span>{!!get_field('nosotros-title-a', 'options')!!}</span>
                    <span>{!!get_field('nosotros-title-b', 'options')!!}</span>
                </h1>
                <img src="@asset('images/sobre-nosotros-first-image.png')" class="is-hidden-touch" alt="sobre nosotros - img" data-inertia data-inertia-reveal data-inertia-delay="400">
            </div>
            <div class="column is-12 is-6-desktop" data-inertia data-inertia-reveal data-inertia-delay="600">
                <div class="columns is-marginless is-paddingless is-multiline">
                    <img src="@asset('images/sobre-nosotros-second-image.png')" class="column is-12-desktop is-hidden-touch" alt="sobre nosotros - img">

                    <div class="columns is-mobile">
                        <img src="@asset('images/sobre-nosotros-first-image.png')" class="column is-6 is-hidden-desktop" alt="sobre nosotros - img" data-inertia data-inertia-reveal data-inertia-delay="400">
                        <img src="@asset('images/sobre-nosotros-second-image.png')" class="column is-6 is-hidden-desktop" alt="sobre nosotros - img">
                    </div>

                    <p class="sobre-nosotros-content column is-12-desktop is-flex is-align-items-center">
                        {!!get_field('nosotros-content', 'options')!!}
                    </p>
                </div>
            </div> 
        </div>
    </div>
</div>