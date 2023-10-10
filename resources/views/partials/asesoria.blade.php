<div id="asesorias" class="asesorias has-padding-top-50 has-padding-bottom-50">
    <div class="container has-padding-10">
        <div class="asesorias-header" data-inertia data-inertia-reveal data-inertia-delay="200">
            <h1 class="title is-full-width has-text-centered is-size-1 has-margin-bottom-50">
                {!!get_field('asesoria-title', 'options')!!}
            </h1>
            <h2 class="subtitle is-uppercase is-full-width has-text-centered" style="color: #A6A6A6">
                {!!get_field('asesoria-subtitle', 'options')!!}</h2>
            <p class="has-text-centered mx-auto is-size-7 has-margin-bottom-50">
                {!!get_field('asesoria-direccion', 'options')!!}
            </p>
        </div>
        
        <div class="asesorias-content" data-inertia data-inertia-reveal data-inertia-delay="400">
            <iframe src="{!!get_field('asesoria-map', 'options')!!}" 
                height="600" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="is-full-width">
            </iframe>
        </div>
    </div>
</div>