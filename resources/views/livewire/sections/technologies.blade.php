<section id="tecnologias" class="section-padding relative" aria-labelledby="tech-heading">
    <div class="container-main">
        <x-section-header
            id="tech-heading"
            badge="Tecnologías"
            title="Herramientas que domino"
            subtitle="Stack completo para desarrollo web moderno, desde la interfaz hasta la base de datos."
        />

        @foreach($groups as $category => $items)
            <div class="mb-12 last:mb-0 reveal">
                <h3 class="text-lg font-semibold text-[var(--text-primary)] mb-6 flex items-center gap-3">
                    <span class="h-px flex-1 bg-gradient-to-r from-[var(--accent)]/50 to-transparent"></span>
                    {{ $category }}
                    <span class="h-px flex-1 bg-gradient-to-l from-[var(--accent)]/50 to-transparent"></span>
                </h3>
                <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4" role="list">
                    @foreach($items as $tech)
                        <li>
                            <article class="tech-card group">
                                <img
                                    src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/{{ $tech['icon'] }}.svg"
                                    alt=""
                                    class="tech-icon size-8"
                                    style="--icon-color: {{ $tech['color'] }}"
                                    loading="lazy"
                                    width="32"
                                    height="32"
                                    aria-hidden="true"
                                    onerror="this.style.display='none'"
                                >
                                <span class="font-medium text-[var(--text-primary)] text-sm mt-3">{{ $tech['name'] }}</span>
                            </article>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>
