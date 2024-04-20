<x-app-layout>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Create new note</h1>
        <form action="{{ route('note.store') }}"" method="POST" class="note">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class='note-buttons'>
                <a href="{{ route('note.index') }}" class="note-submit-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
