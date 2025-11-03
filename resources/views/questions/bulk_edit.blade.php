@extends('layout', ['title' => 'Bulk Edit Kondisi'])

@section('content')
<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-xl p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Bulk Edit Kondisi Pertanyaan</h2>

    <form method="POST" action="{{ route('questions.bulk_update') }}" class="space-y-8">
        @csrf

        @foreach($questions as $question)
            <div class="border rounded-lg shadow-sm p-5">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">
                    ID {{ $question->id }} — {{ $question->text }}
                </h3>

                <!-- Kondisi -->
                <div>
                    <label class="block font-medium mb-2 text-gray-700">Kondisi</label>

                    <div id="conditions-wrapper-{{ $question->id }}" class="space-y-3">
                        @foreach($question->conditions ?? [] as $cond)
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-2 items-center">
                            <select name="conditions[{{ $question->id }}][parent_question_id][]"
                                class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">
                                @foreach($allQuestions as $parent)
                                    <option value="{{ $parent->id }}" 
                                        @if($parent->id == $cond->parent_question_id) selected @endif>
                                        {{ $parent->id }}. {{ $parent->text }}
                                    </option>
                                @endforeach
                            </select>

                            <select name="conditions[{{ $question->id }}][operator][]"
                                class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">
                                <option value="=" @if($cond->operator == '=') selected @endif>adalah (=)</option>
                                <option value="!=" @if($cond->operator == '!=') selected @endif>bukan (!=)</option>
                                <option value="||" @if($cond->operator == '||') selected @endif>Atau (||)</option>
                            </select>

                            <input type="text" 
                                name="conditions[{{ $question->id }}][parent_answer_value][]" 
                                value="{{ $cond->parent_answer_value }}" 
                                placeholder="Isi jawaban"
                                class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">

                            <button type="button"
                                class="remove-condition bg-red-500 hover:bg-red-600 text-white rounded-lg px-3 py-2 transition">
                                ✕
                            </button>
                        </div>
                        @endforeach
                    </div>

                    <button type="button" class="add-condition mt-3 px-4 py-2 bg-yellow-500 text-white rounded-lg shadow hover:bg-yellow-600 transition"
                        data-question="{{ $question->id }}">
                        + Tambah Kondisi
                    </button>
                </div>
            </div>
        @endforeach

        <div class="flex items-center gap-3">
            <button
                class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow transition">
                Update Semua Kondisi
            </button>
            <a href="{{ route('questions.index') }}"
                class="text-gray-600 hover:text-gray-900 underline">
                Batal
            </a>
        </div>
    </form>
</div>

<script>
document.querySelectorAll('.add-condition').forEach(btn => {
    btn.addEventListener('click', function() {
        const qid = this.dataset.question;
        const wrapper = document.getElementById(`conditions-wrapper-${qid}`);

        const row = document.createElement('div');
        row.classList.add('grid', 'grid-cols-1', 'md:grid-cols-4', 'gap-2', 'items-center');

        row.innerHTML = `
            <select name="conditions[${qid}][parent_question_id][]" class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">
                @foreach($allQuestions as $parent)
                    <option value="{{ $parent->id }}">{{ $parent->id }}. {{ $parent->text }}</option>
                @endforeach
            </select>

            <select name="conditions[${qid}][operator][]" class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">
                <option value="=">adalah (=)</option>
                <option value="!=">bukan (!=)</option>
                <option value="||">Atau (||)</option>
            </select>

            <input type="text" name="conditions[${qid}][parent_answer_value][]" placeholder="Isi jawaban"
                class="border rounded-lg px-2 py-2 focus:ring-2 focus:ring-blue-400">

            <button type="button" class="remove-condition bg-red-500 hover:bg-red-600 text-white rounded-lg px-3 py-2 transition">✕</button>
        `;

        wrapper.appendChild(row);

        row.querySelector('.remove-condition').addEventListener('click', function() {
            row.remove();
        });
    });
});

// delegasi hapus kondisi
document.querySelectorAll('.remove-condition').forEach(btn => {
    btn.addEventListener('click', function() {
        this.closest('.grid').remove();
    });
});
</script>
@endsection
