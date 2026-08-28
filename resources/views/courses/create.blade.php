<x-layout title="Create Course — Student Portal">
    <h1>Create New Course</h1>
    <div class="card">
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div style="margin-bottom: 1rem;">
                <label style="display: block; margin-bottom: 0.25rem;">Course Code</label>
                <input type="text" name="code" style="width: 100%; padding: 0.5rem; box-sizing: border-box;" required>
            </div>
            <div style="margin-bottom: 1rem;">
                <label style="display: block; margin-bottom: 0.25rem;">Course Title</label>
                <input type="text" name="title" style="width: 100%; padding: 0.5rem; box-sizing: border-box;" required>
            </div>
            <button type="submit" class="btn">Save Course</button>
        </form>
    </div>
</x-layout>