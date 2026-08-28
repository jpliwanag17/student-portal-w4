<nav style="background: #1e293b; padding: 1rem; margin-bottom: 2rem;">
    <div style="max-width: 800px; margin: 0 auto; display: flex; gap: 1.5rem;">
        <a href="{{ route('home') }}" style="color: {{ request()->routeIs('home') ? '#38bdf8' : '#cbd5e1' }}; text-decoration: none; font-weight: bold;">Home</a>
        <a href="{{ route('about') }}" style="color: {{ request()->routeIs('about') ? '#38bdf8' : '#cbd5e1' }}; text-decoration: none; font-weight: bold;">About</a>
        <a href="{{ route('courses.index') }}" style="color: {{ request()->routeIs('courses.*') ? '#38bdf8' : '#cbd5e1' }}; text-decoration: none; font-weight: bold;">Courses</a>
        <a href="{{ route('contact') }}" style="color: {{ request()->routeIs('contact') ? '#38bdf8' : '#cbd5e1' }}; text-decoration: none; font-weight: bold;">Contact</a>
    </div>
</nav>