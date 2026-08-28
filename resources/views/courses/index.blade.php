<x-layout title="Courses — Student Portal">
    <x-alert type="info">
        Data successfully handed off from CourseController@index.
    </x-alert>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h1 style="margin: 0;">Available Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn">+ New Course</a>
    </div>

    @forelse ($courses as $course)
        <x-course-card 
            :code="$course['code']" 
            :title="$course['title']" 
            :units="$course['units']"
        >
            <p style="margin: 0;">{{ $course['description'] }}</p>
        </x-course-card>
    @empty
        <div class="card">
            <p>No courses found.</p>
        </div>
    @endforelse
</x-layout>