<section class="section-padding relative" aria-label="Estadísticas">
    <div class="container-main">
        <div class="glass-card p-8 md:p-12">
            <ul class="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12" role="list">
                @foreach($stats as $stat)
                    <li class="text-center reveal stat-item">
                        @if(isset($stat['text']))
                            <p class="text-3xl md:text-4xl font-bold gradient-text">{{ $stat['text'] }}</p>
                            @if(isset($stat['subtext']))
                                <p class="text-xl md:text-2xl font-semibold text-[var(--text-primary)] mt-1">{{ $stat['subtext'] }}</p>
                            @endif
                        @else
                            <p class="text-4xl md:text-5xl font-bold gradient-text">
                                <span class="stat-counter" data-target="{{ $stat['value'] }}">0</span>{{ $stat['suffix'] ?? '' }}
                            </p>
                        @endif
                        @if($stat['label'])
                            <p class="mt-3 text-sm text-[var(--text-muted)] leading-snug">{{ $stat['label'] }}</p>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
