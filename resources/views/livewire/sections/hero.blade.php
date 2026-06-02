<section id="inicio" class="relative min-h-screen flex items-center pt-20 overflow-hidden" aria-labelledby="hero-heading">
    <div class="hero-grid" aria-hidden="true"></div>

    <div class="container-main relative z-10 py-16 md:py-24">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="reveal">
                <p class="hero-badge">
                    <span class="pulse-dot" aria-hidden="true"></span>
                    Disponible para proyectos
                </p>
                <h1 id="hero-heading" class="hero-title mt-6">
                    {{ $portfolio['name'] }}
                </h1>
                <p class="hero-role mt-3">{{ $portfolio['title'] }}</p>
                <p class="hero-bio mt-6 max-w-xl">
                    {{ $portfolio['hero']['bio'] }}
                </p>

                <div class="flex flex-wrap gap-2 mt-8" role="list" aria-label="Tecnologías destacadas">
                    @foreach($portfolio['hero']['tech_highlight'] as $tech)
                        <span class="tech-pill" role="listitem">{{ $tech }}</span>
                    @endforeach
                </div>

                <div class="flex flex-wrap gap-4 mt-10">
                    <a href="#proyectos" class="btn-primary">
                        Ver Proyectos
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                    <a href="#contacto" class="btn-secondary">Contactarme</a>
                </div>
            </div>

            <div class="relative flex justify-center lg:justify-end reveal reveal-delay-2">
                <div class="hero-visual">
                    <div class="hero-orbit hero-orbit-1" aria-hidden="true"></div>
                    <div class="hero-orbit hero-orbit-2" aria-hidden="true"></div>

                    <div class="profile-ring">
                        <img
                            src="{{ asset('images/profile-placeholder.svg') }}"
                            alt="Fotografía de perfil de {{ $portfolio['name'] }}"
                            class="profile-image"
                            width="280"
                            height="280"
                        >
                    </div>

                    <div class="float-card float-card-1 glass-card" aria-hidden="true">
                        <span class="text-[var(--accent)] font-mono text-sm">&lt;/&gt;</span>
                        <span class="text-xs text-[var(--text-muted)]">Full Stack</span>
                    </div>
                    <div class="float-card float-card-2 glass-card" aria-hidden="true">
                        <span class="text-emerald-400 font-mono text-sm">●</span>
                        <span class="text-xs text-[var(--text-muted)]">Laravel</span>
                    </div>
                    <div class="float-card float-card-3 glass-card" aria-hidden="true">
                        <span class="text-amber-400 font-mono text-sm">⚡</span>
                        <span class="text-xs text-[var(--text-muted)]">Livewire</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
