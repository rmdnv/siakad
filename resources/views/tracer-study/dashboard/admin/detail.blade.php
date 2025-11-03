<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jawaban Tracer Study - {{ $user->nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans p-6">

    <div class="max-w-4xl mx-auto p-6 bg-white rounded-2xl shadow-lg">
        <h2 class="text-2xl font-bold mb-6">Jawaban: {{ $user->nama }}</h2>

        @php
            $questionsByParent = $questions->groupBy('parent_question_id');
        @endphp

        {{-- panggil partial recursive untuk pertanyaan root --}}
        @foreach($questionsByParent[null] ?? [] as $question)
            @include('partials.question-answer', [
                'question' => $question,
                'user' => $user,
                'questionsByParent' => $questionsByParent,
                'level' => 0
            ])
        @endforeach

        <a href="{{ url()->previous() }}" class="inline-block mt-6 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
            Kembali
        </a>
    </div>

</body>

</html>
