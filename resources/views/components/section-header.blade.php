@props(['badge', 'title', 'subtitle' => null, 'id' => null])

<div class="mb-12 md:mb-16 text-center max-w-3xl mx-auto reveal">
    @if($badge)
        <span class="section-badge">{{ $badge }}</span>
    @endif
    <h2 @if($id) id="{{ $id }}" @endif class="section-title mt-4">{{ $title }}</h2>
    @if($subtitle)
        <p class="section-subtitle mt-4">{{ $subtitle }}</p>
    @endif
</div>
