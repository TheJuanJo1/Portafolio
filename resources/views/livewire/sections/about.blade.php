<section id="sobre-mi" class="section-padding relative" aria-labelledby="about-heading">
    <div class="container-main">
        <x-section-header
            id="about-heading"
            badge="Sobre mí"
            title="Construyendo soluciones con impacto real"
        />

        <div class="grid lg:grid-cols-5 gap-10 lg:gap-16 items-start">
            <div class="lg:col-span-3 space-y-5 reveal">
                @foreach($about['paragraphs'] as $paragraph)
                    <p class="text-[var(--text-secondary)] text-lg leading-relaxed">{{ $paragraph }}</p>
                @endforeach
                <p class="text-[var(--text-secondary)] text-lg leading-relaxed">
                    Tengo experiencia trabajando con:
                </p>
            </div>

            <div class="lg:col-span-2 reveal reveal-delay-1">
                <div class="glass-card p-6 md:p-8">
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-[var(--accent)] mb-4">Stack principal</h3>
                    <ul class="flex flex-wrap gap-2" role="list">
                        @foreach($about['experience'] as $tech)
                            <li>
                                <span class="tech-pill text-sm">{{ $tech }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <p class="mt-6 text-[var(--text-secondary)] leading-relaxed border-t border-[var(--border)] pt-6">
                        {{ $about['goal'] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
