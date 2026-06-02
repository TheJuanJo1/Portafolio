<header
    id="site-header"
    class="nav-top fixed top-0 left-0 right-0 z-50 transition-all duration-500"
    role="banner"
>
    <nav class="container-main flex items-center justify-between h-16 md:h-18" aria-label="Navegación principal">
        <a href="#inicio" class="flex items-center gap-2 group" wire:click="closeMobile">
            <span class="logo-mark" aria-hidden="true">JM</span>
            <span class="font-semibold text-[var(--text-primary)] group-hover:text-[var(--accent)] transition-colors">
                {{ $name }}
            </span>
        </a>

        <ul class="hidden lg:flex items-center gap-1" role="list">
            @foreach($nav as $item)
                <li>
                    <a
                        href="{{ $item['href'] }}"
                        class="nav-link"
                        data-section="{{ ltrim($item['href'], '#') }}"
                    >{{ $item['label'] }}</a>
                </li>
            @endforeach
        </ul>

        <div class="flex items-center gap-2">
            <button
                type="button"
                id="theme-toggle"
                class="icon-btn"
                aria-label="Cambiar tema claro u oscuro"
            >
                <svg class="icon-sun hidden dark-theme:inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>
                <svg class="icon-moon dark-theme:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>

            <button
                type="button"
                class="icon-btn lg:hidden"
                wire:click="toggleMobile"
                aria-expanded="{{ $mobileOpen ? 'true' : 'false' }}"
                aria-controls="mobile-menu"
                aria-label="Abrir menú de navegación"
            >
                @if($mobileOpen)
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                @endif
            </button>
        </div>
    </nav>

    <div
        id="mobile-menu"
        @class([
            'lg:hidden border-t border-[var(--border)] bg-[var(--nav-bg)] backdrop-blur-xl transition-all duration-300 overflow-hidden',
            'max-h-96 opacity-100' => $mobileOpen,
            'max-h-0 opacity-0 border-transparent' => ! $mobileOpen,
        ])
        @if(! $mobileOpen) hidden @endif
    >
        <ul class="container-main py-4 flex flex-col gap-1" role="list">
            @foreach($nav as $item)
                <li>
                    <a
                        href="{{ $item['href'] }}"
                        class="nav-link-mobile"
                        wire:click="closeMobile"
                    >{{ $item['label'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
