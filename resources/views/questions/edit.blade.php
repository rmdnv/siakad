@extends('layout', ['title' => 'Edit Question'])

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Pertanyaan</h2>

    <form method="POST" action="{{ route('questions.update', $question->id) }}" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Stage -->
        <div>
            <label class="block font-medium mb-1 text-gray-700">Stage</label>
            <select name="stage_id"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
                <option value="">-- Pilih Stage --</option>
                @foreach($stages as $stage)
                <option value="{{ $stage->id }}" @if($stage->id == $question->stage_id) selected @endif>
                    {{ $stage->name }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Text -->
        <div>
            <label class="block font-medium mb-1 text-gray-700">Teks Pertanyaan</label>
            <textarea name="text" rows="3" placeholder="Tulis pertanyaan di sini..."
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none" required>{{ $question->text }}</textarea>
        </div>

        <!-- Type -->
        <div>
            <label class="block font-medium mb-1 text-gray-700">Tipe Pertanyaan</label>
            <select name="type"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                <option value="radio" @if($question->type == 'radio') selected @endif>Pilihan Ganda (Radio)</option>
                <option value="checkbox" @if($question->type == 'checkbox') selected @endif>Pilihan Ganda Kompleks (checkbox)</option>
                <option value="text" @if($question->type == 'text') selected @endif>Isian Teks</option>
            </select>
        </div>

        <!-- Question Options -->
        <div id="options-section" class="{{ in_array($question->type, ['radio','checkbox']) ? '' : 'hidden' }}">
            <label class="block font-medium mb-2 text-gray-700">Opsi Jawaban</label>

            <div id="options-wrapper" class="space-y-3">
                @foreach($question->options ?? [] as $opt)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 items-center">
                    <input type="text" name="question_options[value][]" value="{{ $opt->value }}" placeholder="Value"
                        class="border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400">

                    <input type="text" name="question_options[text][]" value="{{ $opt->text }}" placeholder="Teks Opsi"
                        class="border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400">

                    <button type="button"
                        class="remove-option bg-red-500 hover:bg-red-600 text-white rounded-lg px-3 py-2 transition">
                        ✕
                    </button>
                </div>
                @endforeach
            </div>

            <button type="button" id="add-option"
                class="mt-3 px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
                + Tambah Opsi
            </button>
        </div>

        <!-- Conditions -->
        <div>
            <label class="block font-medium mb-2 text-gray-700">Kondisi (Opsional)</label>

            <div id="conditions-wrapper" class="space-y-3">
                @foreach($question->conditions ?? [] as $cond)
                <div class="grid grid-cols-1 md:grid-cols-4 gap-2 items-center">
                    <select name="conditions[parent_question_id][]" class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">
                        @foreach($allQuestions as $parent)
                            <option value="{{ $parent->id }}" @if($parent->id == $cond->parent_question_id) selected @endif>
                                {{ $parent->id }}. 
                                {{ $parent->text }}
                            </option>
                        @endforeach
                    </select>

                    <select name="conditions[operator][]" class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">
                        <option value="=" @if($cond->operator == '=') selected @endif>adalah (=)</option>
                        <option value="!=" @if($cond->operator == '!=') selected @endif>bukan (!=)</option>
                        <option value="||" @if($cond->operator == '||' || $cond->operator == 'ATAU') selected @endif>Atau (||)</option>
                    </select>

                    <input type="text" name="conditions[parent_answer_value][]" value="{{ $cond->parent_answer_value }}" placeholder="Isi jawaban"
                        class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">

                    <button type="button" class="remove-condition bg-red-500 hover:bg-red-600 text-white rounded-lg px-3 py-2 transition">
                        ✕
                    </button>
                </div>
                @endforeach
            </div>

            <button type="button" id="add-condition"
                class="mt-3 px-4 py-2 bg-yellow-500 text-white rounded-lg shadow hover:bg-yellow-600 transition">
                + Tambah Kondisi
            </button>
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-3">
            <button
                class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow transition">
                Update
            </button>
            <a href="{{ route('questions.index') }}"
                class="text-gray-600 hover:text-gray-900 underline">
                Batal
            </a>
        </div>
    </form>
</div>

<script>
    const typeSelect = document.querySelector('select[name="type"]');
    const optionsSection = document.getElementById('options-section');
    const optionsWrapper = document.getElementById('options-wrapper');
    const addOptionBtn = document.getElementById('add-option');

    // toggle opsi
    typeSelect.addEventListener('change', function() {
        if (this.value === 'radio' || this.value === 'checkbox') {
            optionsSection.classList.remove('hidden');
        } else {
            optionsSection.classList.add('hidden');
            optionsWrapper.innerHTML = '';
        }
    });

    const conditionsWrapper = document.getElementById('conditions-wrapper');

    optionsWrapper.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-option')) {
            e.target.closest('.grid').remove();
        }
    });

    // delegasi event untuk semua tombol remove-condition
    conditionsWrapper.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-condition')) {
            e.target.closest('.grid').remove();
        }
    });

    // tambah opsi
    addOptionBtn.addEventListener('click', function() {
        const row = document.createElement('div');
        row.classList.add('grid', 'grid-cols-1', 'md:grid-cols-3', 'gap-2', 'items-center');

        row.innerHTML = `
            <input type="text" name="question_options[value][]" placeholder="Value"
                class="border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400">

            <input type="text" name="question_options[text][]" placeholder="Teks Opsi"
                class="border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400">

            <button type="button" class="remove-option bg-red-500 hover:bg-red-600 text-white rounded-lg px-3 py-2 transition">
                ✕
            </button>
        `;

        optionsWrapper.appendChild(row);

        row.querySelector('.remove-option').addEventListener('click', function() {
            row.remove();
        });
    });

    // kondisi dinamis
    document.getElementById('add-condition').addEventListener('click', function() {
        const wrapper = document.getElementById('conditions-wrapper');

        const row = document.createElement('div');
        row.classList.add('grid', 'grid-cols-1', 'md:grid-cols-4', 'gap-2', 'items-center');

        row.innerHTML = `
        <select name="conditions[parent_question_id][]" class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">
            @foreach($allQuestions as $parent)
                <option value="{{ $parent->id }}">{{ $parent->id }}. {{ $parent->text }}</option>
            @endforeach
        </select>

        <select name="conditions[operator][]" class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">
            <option value="=">adalah (=)</option>
            <option value="!=">bukan (!=)</option>
            <option value="||">Atau (||)</option>
        </select>

        <input type="text" name="conditions[parent_answer_value][]" placeholder="Isi jawaban"
            class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">

        <button type="button" class="remove-condition bg-red-500 hover:bg-red-600 text-white rounded-lg px-3 py-2 transition">
            ✕
        </button>
    `;
        
        wrapper.appendChild(row);

        row.querySelector('.remove-condition').addEventListener('click', function() {
            row.remove();
        });
    });
</script>
@endsection
