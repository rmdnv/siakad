@extends('layout', ['title' => 'Questions'])

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h2 class="text-xl font-semibold">Daftar Pertanyaan</h2>
    <a href="{{ route('questions.create') }}"
        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow transition">
        + Tambah Pertanyaan
    </a>
</div>
<!-- Bulk Action Buttons -->
<div class="mb-4 flex space-x-2">
    <button id="bulk_delete" class="bg-red-600 text-white px-4 py-2 rounded-lg">Hapus Terpilih</button>
    <button id="bulk_duplicate" class="bg-green-600 text-white px-4 py-2 rounded-lg">Duplicate Terpilih</button>
    <button id="bulk_edit" class="bg-yellow-600 text-white px-4 py-2 rounded-lg">Edit Terpilih</button>
</div>

<!-- Hidden Form for Bulk Action -->
<form id="bulk_form" method="POST" style="display:none;">
    @csrf
    <input type="hidden" name="question_ids" id="bulk_question_ids">
</form>

<div class="overflow-x-auto bg-white shadow rounded-lg">
    <table class="w-full border-collapse">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="p-3 text-left">
                    <input type="checkbox" id="select_all">
                </th>
                <th class="p-3 text-left">#</th>
                <th class="p-3 text-left">Stage</th>
                <th class="p-3 text-left">Pertanyaan</th>
                <th class="p-3 text-left">Kondisi</th>
                <th class="p-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($questions as $q)
            <tr class="border-t hover:bg-gray-50">
                <td class="p-3 border text-center">
                    <input type="checkbox" name="selected_questions[]" value="{{ $q->id }}" class="select_question">
                </td>
                <td class="p-3 border">{{ $q->id }}</td>
                <td class="p-3 border">{{ $q->stage_id }}</td>
                <td class="p-3 border">{{ $q->text }}</td>
                <td class="p-3 border">
                    @forelse($q->conditions as $c)
                    <span class="relative group inline-block bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded mr-1 cursor-help mt-2">
                        Hanya tampil jika
                        <span class="bg-blue-50 text-blue-700 px-1 rounded">
                            "{{ Str::limit($c->parentQuestion->text, 15) }}"
                        </span>
                        {{ $c->operator === '=' ? 'adalah' : ($c->operator === '!=' ? 'bukan' : $c->operator) }}
                        <span class="bg-green-50 text-green-700 px-1 rounded">
                            "{{ $c->parent_answer_value }}"
                        </span>

                        <!-- Tooltip -->
                        <div class="absolute bottom-full left-0 mb-2 hidden group-hover:block w-max max-w-xs bg-black text-white text-xs p-2 rounded shadow z-10">
                            Jika pertanyaan: "{{ $c->parentQuestion->text }}"
                            {{ $c->operator === '=' ? 'adalah' : ($c->operator === '!=' ? 'bukan' : $c->operator) }}
                            "{{ $c->parent_answer_value }}"
                        </div>
                    </span>
                    @empty
                    <span class="text-gray-400 text-sm">Tidak ada kondisi</span>
                    @endforelse
                </td>
                <td class="p-3 text-center space-x-2">
                    <a href="{{ route('questions.edit', $q) }}"
                        class="inline-block text-blue-600 hover:text-blue-800 font-medium">Edit</a>

                    <form action="{{ route('questions.destroy', $q) }}" method="POST"
                        class="inline" onsubmit="return confirm('Yakin hapus pertanyaan ini?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium">Delete</button>
                    </form>

                    <form action="{{ route('questions.duplicate', $q) }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-green-600 hover:text-green-800 font-medium">
                            Duplicate
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="p-4 text-center text-gray-500">Belum ada pertanyaan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- JS for Bulk Actions -->
<script>
    // Select all checkbox
    document.getElementById('select_all').addEventListener('change', function() {
        document.querySelectorAll('.select_question').forEach(cb => cb.checked = this.checked);
    });

    // Bulk Delete
    document.getElementById('bulk_delete').addEventListener('click', function() {
        let selected = Array.from(document.querySelectorAll('.select_question:checked'))
                            .map(cb => cb.value);
        if(selected.length === 0) {
            alert('Pilih minimal 1 pertanyaan!');
            return;
        }
        if(confirm('Yakin hapus pertanyaan terpilih?')) {
            let form = document.getElementById('bulk_form');
            form.action = "{{ route('questions.bulk_delete') }}";
            document.getElementById('bulk_question_ids').value = selected.join(',');
            form.submit();
        }
    });

    // Bulk Edit
    document.getElementById('bulk_edit').addEventListener('click', function() {
        let selected = Array.from(document.querySelectorAll('.select_question:checked'))
                            .map(cb => cb.value);
        if(selected.length === 0) {
            alert('Pilih minimal 1 pertanyaan!');
            return;
        }
        // Redirect ke halaman bulk edit dengan query string
        window.location.href = "{{ route('questions.bulk_edit') }}?ids=" + selected.join(',');
    });

    // Bulk Duplicate
    document.getElementById('bulk_duplicate').addEventListener('click', function() {
        let selected = Array.from(document.querySelectorAll('.select_question:checked'))
                            .map(cb => cb.value);
        if(selected.length === 0) {
            alert('Pilih minimal 1 pertanyaan!');
            return;
        }
        let form = document.getElementById('bulk_form');
        form.action = "{{ route('questions.bulk_duplicate') }}";
        document.getElementById('bulk_question_ids').value = selected.join(',');
        form.submit();
    });
</script>
@endsection
