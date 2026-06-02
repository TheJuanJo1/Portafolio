<section id="habilidades" class="section-padding relative" aria-labelledby="skills-heading">
    <div class="container-main">
        <x-section-header
            id="skills-heading"
            badge="Habilidades"
            title="Nivel de dominio técnico"
            subtitle="Experiencia práctica en las tecnologías que utilizo día a día."
        />

        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            @foreach($skills as $skill)
                <div class="skill-item reveal" data-skill-level="{{ $skill['level'] }}">
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-medium text-[var(--text-primary)]">{{ $skill['name'] }}</span>
                        <span class="text-sm font-mono text-[var(--accent)] skill-percent">0%</span>
                    </div>
                    <div class="skill-track" role="progressbar" aria-valuenow="{{ $skill['level'] }}" aria-valuemin="0" aria-valuemax="100" aria-label="{{ $skill['name'] }}: {{ $skill['level'] }}%">
                        <div class="skill-bar" data-target="{{ $skill['level'] }}"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
