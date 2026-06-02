# Portafolio — Juan Moreno

Portafolio profesional Full Stack construido con **Laravel 12**, **Livewire**, **Tailwind CSS**, **JavaScript** y **Vite**.

## Requisitos

- PHP 8.2+
- Composer
- Node.js 18+

## Instalación

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Para desarrollo con recarga en caliente:

```bash
composer run dev
```

O en terminales separadas:

```bash
php artisan serve
npm run dev
```

## Estructura

- `app/Livewire/` — Componentes Livewire (página principal, secciones, formulario de contacto)
- `config/portfolio.php` — Datos del portafolio (proyectos, tecnologías, SEO)
- `resources/views/livewire/` — Vistas de componentes
- `resources/css/app.css` — Estilos premium y variables de tema
- `resources/js/portfolio.js` — Partículas, animaciones, tema claro/oscuro

## Personalización

Edita `config/portfolio.php` para actualizar textos, enlaces sociales, proyectos y correo electrónico.

Reemplaza `public/images/profile-placeholder.svg` con tu fotografía de perfil.

## Tema claro / oscuro

La preferencia se guarda en `localStorage` bajo la clave `portfolio-theme`.

## Contacto

El formulario valida en tiempo real con Livewire. Para enviar correos, integra `Mail` en `App\Livewire\ContactForm::submit()`.

## Licencia

MIT
