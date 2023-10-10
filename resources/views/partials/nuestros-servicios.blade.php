<div id="nuestros-servicios" class="nuestros-servicios has-padding-top-50 has-padding-bottom-50">
    <div class="container has-padding-10">
        <div class="nuestros-servicios-header" data-inertia data-inertia-reveal data-inertia-delay="200">
            <h2 class="subtitle is-uppercase">
                {!!get_field('services-subtitle', 'options')!!}
            </h2>
            <h1 class="title is-size-1 has-margin-bottom-40 has-margin-top-30">
                <div data-inertia data-inertia-reveal data-inertia-delay="600">
                    <span>{!!get_field('services-title-a', 'options')!!}</span> <br>
                    <span>{!!get_field('services-title-b', 'options')!!}</span>
                </div>
            </h1>
        </div>
        <div class="nuestros-servicios-content" data-inertia data-inertia-reveal data-inertia-delay="400">
            <div class="columns is-multiline is-justify-content-center is-variable is-3">
                <div class="column is-4">
                    <div class="box servicios has-padding-60 is-full-height">
                        <div class="card-icon">
                            <div class="box is-shadowless is-flex is-align-items-center is-justify-content-center is-paddingless">
                                <img src="@asset('images/nuestros-servicios-icon-1.svg')" class="" alt="nuestros servicios - icon">
                            </div>
                            <h2 class="subtitle is-size-4 has-margin-bottom-10 has-text-weight-bold card-title">{!!get_field('services-title-1', 'options')!!}</h2>
                            <p class="card-text">
                                {!!get_field('services-content-1', 'options')!!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="box servicios has-padding-60 is-full-height">
                        <div class="card-icon">
                            <div class="box is-shadowless is-flex is-align-items-center is-justify-content-center is-paddingless">
                                <img src="@asset('images/nuestros-servicios-icon-2.svg')" class="" alt="nuestros servicios - icon">
                            </div>
                            <h2 class="subtitle is-size-4 has-margin-bottom-10 has-text-weight-bold card-title">{!!get_field('services-title-2', 'options')!!}</h2>
                            <p class="card-text">
                                {!!get_field('services-content-2', 'options')!!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="box servicios has-padding-60 is-full-height">
                        <div class="card-icon">
                            <div class="box is-shadowless is-flex is-align-items-center is-justify-content-center is-paddingless">
                                <img src="@asset('images/nuestros-servicios-icon-3.svg')" class="" alt="nuestros servicios - icon">
                            </div>
                            <h2 class="subtitle is-size-4 has-margin-bottom-10 has-text-weight-bold card-title">{!!get_field('services-title-3', 'options')!!}</h2>
                            <p class="card-text">
                                {!!get_field('services-content-3', 'options')!!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>