@props(['code', 'title', 'units' => 3])

<article {{ $attributes->merge(['class' => 'card']) }}>
    <h2 style="margin-top: 0;">
        <a href="{{ route('courses.show', $code) }}" style="color: #0284c7; text-decoration: none;">
            {{ $code }}
        </a> — {{ $title }}
    </h2>
    <small style="color: #64748b; font-weight: bold;">{{ $units }} Units</small>
    
    @if ($slot->isNotEmpty())
        <div style="margin-top: 0.75rem; color: #334155;">{{ $slot }}</div>
    @endif
</article>