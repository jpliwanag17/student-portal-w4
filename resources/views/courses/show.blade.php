<x-layout :title="$course['code'] . ' — Student Portal'">
    <div class="card">
        <h1>{{ $course['code'] }}: {{ $course['title'] }}</h1>
        <p><strong>Units:</strong> {{ $course['units'] }}</p>
        <p>{{ $course['description'] }}</p>
        <p><a href="{{ route('courses.index') }}" style="color: #0284c7;">&larr; Back to all courses</a></p>
    </div>
</x-layout>