@php
    $portfolio = config('portfolio');
@endphp
<div class="flex flex-col min-h-screen">
    <livewire:sections.navbar />
    <main class="flex-1">
        <livewire:sections.hero />
        <livewire:sections.about />
        <livewire:sections.technologies />
        <livewire:sections.skills />
        <livewire:sections.stats />
        <livewire:sections.projects />
        <livewire:sections.solutions />

        <section id="contacto" class="section-padding relative" aria-labelledby="contact-heading">
            <div class="container-main">
                <x-section-header
                    id="contact-heading"
                    badge="Contacto"
                    title="Hablemos de tu próximo proyecto"
                    subtitle="¿Tienes una idea o necesitas un desarrollador? Envíame un mensaje y te responderé pronto."
                />
                <livewire:contact-form />
            </div>
        </section>
        
    </main>
    <livewire:sections.footer />
    @include('livewire.sections.social-floating')
</div>
