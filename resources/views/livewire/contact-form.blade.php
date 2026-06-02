<div class="max-w-2xl mx-auto reveal">
    @if($submitted)
        <div
            class="success-message"
            role="status"
            aria-live="polite"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-emerald-400" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div>
                <p class="font-semibold text-[var(--text-primary)]">¡Mensaje enviado correctamente!</p>
                <p class="text-sm text-[var(--text-muted)] mt-1">Gracias por contactarme. Te responderé lo antes posible.</p>
            </div>
        </div>
    @endif

    <form wire:submit="submit" class="glass-card p-6 md:p-8 space-y-5 @if($submitted) opacity-60 pointer-events-none @endif" novalidate>
        <div>
            <label for="contact-name" class="form-label">Nombre</label>
            <input
                type="text"
                id="contact-name"
                wire:model.blur="name"
                class="form-input @error('name') form-input-error @enderror"
                autocomplete="name"
                placeholder="Tu nombre"
            >
            @error('name')
                <p class="form-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="contact-email" class="form-label">Correo</label>
            <input
                type="email"
                id="contact-email"
                wire:model.blur="email"
                class="form-input @error('email') form-input-error @enderror"
                autocomplete="email"
                placeholder="tu@correo.com"
            >
            @error('email')
                <p class="form-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="contact-subject" class="form-label">Asunto</label>
            <input
                type="text"
                id="contact-subject"
                wire:model.blur="subject"
                class="form-input @error('subject') form-input-error @enderror"
                placeholder="Asunto del mensaje"
            >
            @error('subject')
                <p class="form-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="contact-message" class="form-label">Mensaje</label>
            <textarea
                id="contact-message"
                wire:model.blur="message"
                rows="5"
                class="form-input resize-none @error('message') form-input-error @enderror"
                placeholder="Cuéntame sobre tu proyecto..."
            ></textarea>
            @error('message')
                <p class="form-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn-primary w-full justify-center" wire:loading.attr="disabled">
            <span wire:loading.remove wire:target="submit">Enviar mensaje</span>
            <span wire:loading wire:target="submit" class="flex items-center gap-2">
                <svg class="animate-spin size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Enviando...
            </span>
        </button>
    </form>
</div>
