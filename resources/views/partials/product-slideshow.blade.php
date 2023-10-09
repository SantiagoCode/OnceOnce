{{-- @query([
    'post_type'   => 'product',
    'product_tag' => $tags,
    'product_cat' => $category
]) --}}
{{-- <div class="container has-margin-top-140 has-margin-bottom-50"> --}}
    {{-- <h2 data-inertia data-inertia-reveal class="title is-5">{!!$title!!}</h2> --}}
{{-- </div> --}}
<div class="carousel" 
    data-inertia data-inertia-speed="0" 
    data-inertia-direction="horizontal" 
    style="--carousel-item-width: 80vw; --carousel-item-mobile-width: 85vw"
>
    <div class="carousel-wrapper columns is-mobile">

        @posts
            <div class="column is-12 carousel-item has-padding-20" data-cursor-text="Drag">
                <div class="box has-background-light is-shadowless is-paddingless">
                    <div class="columns">
                        <div class="column is-6 has-padding-left-60 has-padding-bottom-60 has-padding-top-70 has-padding-right-10">
                            <div class="has-margin-bottom-50">
                                <h3 class="title has-text-weight-bold" style="white-space: nowrap">
                                    Conoce nuestras propiedades mas populares
                                </h3>
                                <h1 class="title is-size-1" style="white-space: nowrap">
                                    Torres Tecmo
                                </h1>
                                <p>
                                    Situado en el corazón de Bogotá, este impresionante edificio de lujo redefine el estándar de la vida moderna. Con una arquitectura espectacular y vistas panorámicas de la ciudad
                                </p>
                            </div>
                            <div class="columns is-mobile">
                                <div class="column is-6 is-flex is-flex-direction-column is-justify-content-space-between after-line">
                                    <p class="is-uppercase has-margin-bottom-20" style="color: #A6A6A6">área de construcción</p>
                                    <h1 class="is-size-2 has-text-black has-text-weight-bold is-flex is-align-items-flex-start">
                                        <span class="">132</span>
                                        <span class="is-size-5" style="line-height: 3rem">m2</span>
                                    </h1>
                                </div>
                                <div class="column is-4 is-flex is-flex-direction-column is-justify-content-space-between after-line">
                                    <p class="is-uppercase has-margin-bottom-20" style="color: #A6A6A6">Habitaciones</p>
                                    <h1 class="is-size-2 has-text-black has-text-weight-bold is-flex is-align-items-flex-start">
                                        <span>3</span>
                                    </h1>
                                </div>
                                <div class="column is-2 is-flex is-flex-direction-column is-justify-content-space-between after-line">
                                    <p class="is-uppercase has-margin-bottom-20" style="color: #A6A6A6">Baños</p>
                                    <h1 class="is-size-2 has-text-black has-text-weight-bold is-flex is-align-items-flex-start">
                                        <span>2</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6 has-padding-right-60 has-padding-top-70-desktop is-relative slide-image-column">
                            <img src="@asset('images/torretecmo.svg')" class="slide-image" alt="torre tecmo - img" data-inertia data-inertia-reveal data-inertia-delay="400">
                        </div>
                    </div>
                </div>
            </div>
        @endposts
        @posts
            <div class="column is-12 carousel-item has-padding-20" data-cursor-text="Drag">
                <div class="box has-background-light is-shadowless is-paddingless">
                    <div class="columns">
                        <div class="column is-6 has-padding-left-60 has-padding-bottom-60 has-padding-top-70 has-padding-right-10">
                            <div class="has-margin-bottom-50">
                                <h3 class="title has-text-weight-bold" style="white-space: nowrap">
                                    Conoce nuestras propiedades mas populares
                                </h3>
                                <h1 class="title is-size-1" style="white-space: nowrap">
                                    Torres Tecmo
                                </h1>
                                <p>
                                    Situado en el corazón de Bogotá, este impresionante edificio de lujo redefine el estándar de la vida moderna. Con una arquitectura espectacular y vistas panorámicas de la ciudad
                                </p>
                            </div>
                            <div class="columns is-mobile">
                                <div class="column is-6 is-flex is-flex-direction-column is-justify-content-space-between after-line">
                                    <p class="is-uppercase has-margin-bottom-20" style="color: #A6A6A6">área de construcción</p>
                                    <h1 class="is-size-2 has-text-black has-text-weight-bold is-flex is-align-items-flex-start">
                                        <span class="">132</span>
                                        <span class="is-size-5" style="line-height: 3rem">m2</span>
                                    </h1>
                                </div>
                                <div class="column is-4 is-flex is-flex-direction-column is-justify-content-space-between after-line">
                                    <p class="is-uppercase has-margin-bottom-20" style="color: #A6A6A6">Habitaciones</p>
                                    <h1 class="is-size-2 has-text-black has-text-weight-bold is-flex is-align-items-flex-start">
                                        <span>3</span>
                                    </h1>
                                </div>
                                <div class="column is-2 is-flex is-flex-direction-column is-justify-content-space-between after-line">
                                    <p class="is-uppercase has-margin-bottom-20" style="color: #A6A6A6">Baños</p>
                                    <h1 class="is-size-2 has-text-black has-text-weight-bold is-flex is-align-items-flex-start">
                                        <span>2</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6 has-padding-right-60 has-padding-top-70-desktop is-relative slide-image-column">
                            <img src="@asset('images/torretecmo.svg')" class="slide-image" alt="torre tecmo - img" data-inertia data-inertia-reveal data-inertia-delay="400">
                        </div>
                    </div>
                </div>
            </div>
        @endposts
        @posts
            <div class="column is-12 carousel-item has-padding-20" data-cursor-text="Drag">
                <div class="box has-background-light is-shadowless is-paddingless">
                    <div class="columns">
                        <div class="column is-6 has-padding-left-60 has-padding-bottom-60 has-padding-top-70 has-padding-right-10">
                            <div class="has-margin-bottom-50">
                                <h3 class="title has-text-weight-bold" style="white-space: nowrap">
                                    Conoce nuestras propiedades mas populares
                                </h3>
                                <h1 class="title is-size-1" style="white-space: nowrap">
                                    Torres Tecmo
                                </h1>
                                <p>
                                    Situado en el corazón de Bogotá, este impresionante edificio de lujo redefine el estándar de la vida moderna. Con una arquitectura espectacular y vistas panorámicas de la ciudad
                                </p>
                            </div>
                            <div class="columns is-mobile">
                                <div class="column is-6 is-flex is-flex-direction-column is-justify-content-space-between after-line">
                                    <p class="is-uppercase has-margin-bottom-20" style="color: #A6A6A6">área de construcción</p>
                                    <h1 class="is-size-2 has-text-black has-text-weight-bold is-flex is-align-items-flex-start">
                                        <span class="">132</span>
                                        <span class="is-size-5" style="line-height: 3rem">m2</span>
                                    </h1>
                                </div>
                                <div class="column is-4 is-flex is-flex-direction-column is-justify-content-space-between after-line">
                                    <p class="is-uppercase has-margin-bottom-20" style="color: #A6A6A6">Habitaciones</p>
                                    <h1 class="is-size-2 has-text-black has-text-weight-bold is-flex is-align-items-flex-start">
                                        <span>3</span>
                                    </h1>
                                </div>
                                <div class="column is-2 is-flex is-flex-direction-column is-justify-content-space-between after-line">
                                    <p class="is-uppercase has-margin-bottom-20" style="color: #A6A6A6">Baños</p>
                                    <h1 class="is-size-2 has-text-black has-text-weight-bold is-flex is-align-items-flex-start">
                                        <span>2</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6 has-padding-right-60 has-padding-top-70-desktop is-relative slide-image-column">
                            <img src="@asset('images/torretecmo.svg')" class="slide-image" alt="torre tecmo - img" data-inertia data-inertia-reveal data-inertia-delay="400">
                        </div>
                    </div>
                </div>
            </div>
        @endposts
        {{-- @posts
            <div class="column is-12 carousel-item" data-cursor-text="Drag">
                @set($product , get_the_ID())
                <x-product-card :product="$product"/>
            </div>
        @endposts
        @posts
            <div class="column is-12 carousel-item" data-cursor-text="Drag">
                @set($product , get_the_ID())
                <x-product-card :product="$product"/>
            </div>
        @endposts --}}
    </div>
</div>