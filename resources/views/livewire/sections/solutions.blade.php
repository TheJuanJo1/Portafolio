<section id="soluciones" class="section-padding relative" aria-labelledby="solutions-heading">
    <div class="container-main">
        <x-section-header
            id="solutions-heading"
            badge="Lo que he desarrollado"
            title="Soluciones por sector"
            subtitle="Experiencia aplicada en entornos académicos y empresariales."
        />

        <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
            @foreach($solutions as $solution)
                <article class="solution-card reveal">
                    <div class="solution-card-header">
                        <span class="text-3xl" aria-hidden="true">{{ $solution['icon'] }}</span>
                        <h3 class="text-xl font-bold text-[var(--text-primary)]">{{ $solution['title'] }}</h3>
                    </div>

                    <ul class="mt-4 space-y-2" role="list">
                        @foreach($solution['projects'] as $projectName)
                            <li class="flex items-center gap-2 text-[var(--text-secondary)]">
                                <span class="size-1.5 rounded-full bg-[var(--accent)]" aria-hidden="true"></span>
                                {{ $projectName }}
                            </li>
                        @endforeach
                    </ul>

                    <p class="mt-5 text-[var(--text-muted)] leading-relaxed border-t border-[var(--border)] pt-5">
                        {{ $solution['description'] }}
                    </p>

                    <div class="solution-metrics mt-6 grid grid-cols-3 gap-3" aria-hidden="true">
                        <div class="metric-box"><span class="metric-bar" style="height: 60%"></span></div>
                        <div class="metric-box"><span class="metric-bar" style="height: 85%"></span></div>
                        <div class="metric-box"><span class="metric-bar" style="height: 45%"></span></div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
