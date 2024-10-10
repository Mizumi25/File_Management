<x-layout>
    <div class="note-Container single-note">
        <div class="note-header">
            <h1>Note: {{ $note->created_at }}</h1>
            <div class="note-buttons">
                <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                <form method="POST" action="{{ route('note.destroy', $note) }}">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>

        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>
       
                
    </div>
</x-layout>
