<section id="proyectos" class="section-padding relative" aria-labelledby="projects-heading">
    <div class="container-main">
        <x-section-header
            id="projects-heading"
            badge="Portafolio"
            title="Proyectos Destacados"
            subtitle="Soluciones reales desarrolladas para instituciones educativas y empresas."
        />

        <div class="grid gap-8 lg:gap-10">
            @foreach($projects as $project)
                <article
                    @class([
                        'project-card reveal',
                        'project-card-featured' => $project['featured'],
                    ])
                    aria-labelledby="project-{{ $project['slug'] }}"
                >
                    @if($project['featured'])
                        <div class="featured-glow" aria-hidden="true"></div>
                        <span class="featured-badge">Proyecto destacado</span>
                    @endif

                    <div class="grid lg:grid-cols-12 gap-6 lg:gap-8">
                        <div class="lg:col-span-5">
                            <div @class([
                                'project-preview bg-gradient-to-br',
                                $project['gradient'],
                                'project-preview-featured' => $project['featured'],
                            ])>
                                <img
                                    src="{{ asset('images/projects/' . $project['slug'] . '.svg') }}"
                                    alt="Vista previa de {{ $project['name'] }}"
                                    class="w-full h-full object-cover rounded-xl opacity-90"
                                    loading="lazy"
                                >
                            </div>
                        </div>

                        <div class="lg:col-span-7 flex flex-col justify-center">
                            <h3 id="project-{{ $project['slug'] }}" class="text-2xl md:text-3xl font-bold text-[var(--text-primary)]">
                                {{ $project['name'] }}
                            </h3>
                            <p class="mt-4 text-[var(--text-secondary)] leading-relaxed">
                                {{ $project['description'] }}
                            </p>

                            <div class="flex flex-wrap gap-2 mt-5" role="list" aria-label="Tecnologías del proyecto">
                                @foreach($project['technologies'] as $tech)
                                    <span class="badge-tech" role="listitem">{{ $tech }}</span>
                                @endforeach
                            </div>

                            <h4 class="mt-6 text-sm font-semibold uppercase tracking-wider text-[var(--accent)]">Características principales</h4>
                            <ul class="mt-3 grid sm:grid-cols-2 gap-2" role="list">
                                @foreach($project['features'] as $feature)
                                    <li class="flex items-start gap-2 text-sm text-[var(--text-secondary)]">
                                        <svg class="size-4 text-[var(--accent)] shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
