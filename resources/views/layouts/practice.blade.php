<x-layouts.app>
  <style>
    [x-cloak] { display: none; }
    .fade {
      transition: all 0.3s ease-in-out;
    }
    .fade-enter { opacity: 0; transform: translateY(-10px); }
    .fade-leave { opacity: 0; transform: translateY(10px); }
  </style>
  <div class="max-w-xl mx-auto bg-white shadow p-6 rounded">
      <livewire:search />
  </div>
  <div 
    x-data="notesApp()" 
    x-init="init()" 
    class="max-w-xl mx-auto bg-white shadow p-6 rounded"
    x-cloak
  >
    <h1 class="text-2xl font-bold mb-4">🗒️ Notes</h1>

    <!-- New Note -->
    <div class="mb-4">
      <textarea 
        x-model="noteContent" 
        placeholder="Write your note here..." 
        class="w-full p-2 border rounded mb-2"
        x-ref="noteInput"
      ></textarea>
      <div>
        <button 
          x-on:click="addNote()" 
          class="bg-blue-600 text-white px-4 py-2 rounded"
        >
          Add Note
        </button>
        <button 
          x-on:click="$refs.noteInput.focus()" 
          class="ml-2 text-sm text-blue-500 underline"
        >
          Focus Note Box
        </button>
      </div>
    </div>

    <!-- Live Preview -->
    <div x-show="noteContent" class="mb-4">
      Live Preview: <span x-text="noteContent"></span>
    </div>

    <!-- HTML Preview -->
    <div class="mb-4 bg-gray-100 p-2 rounded">
      <strong>HTML Preview:</strong>
      <div x-html="noteContent"></div>
    </div>

    <!-- Notes list -->
    <template x-if="notes.length > 0">
      <ul>
        <template x-for="(note, index) in notes" :key="index">
          <li class="bg-gray-200 my-2 p-3 rounded flex justify-between items-center fade" x-transition>
            <span x-text="note"></span>
            <button 
              x-on:click="deleteNote(index)" 
              class="text-red-500 hover:text-red-700"
            >
              Delete
            </button>
          </li>
        </template>
      </ul>
    </template>

    <!-- No notes message -->
    <template x-if="notes.length === 0">
      <p class="text-gray-500">No notes yet. Start writing! ✍️</p>
    </template>

    <!-- Log watcher -->
    <div x-effect="console.log('Total notes: ' + notes.length)"></div>

    <!-- Ignored area -->
    <div x-ignore class="mt-6 p-2 text-sm bg-yellow-100 rounded">
      This block is ignored by Alpine.js and won't be reactive.
    </div>
  </div>
  <!-- Alpine Logic -->
  <script>
    function notesApp() {
      return {
        noteContent: '',
        notes: [],

        init() {
          this.notes = ['Welcome to your notes app!'];
        },

        addNote() {
          if (this.noteContent.trim() !== '') {
            this.notes.push(this.noteContent.trim());
            this.noteContent = '';
          }
        },

        deleteNote(index) {
          this.notes.splice(index, 1);
        }
      }
    }
  </script>

</x-layouts.app>