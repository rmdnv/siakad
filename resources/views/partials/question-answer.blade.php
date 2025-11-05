@php
    $answer = $user->answers->firstWhere('question_id', $question->id);
    $show = $answer ? true : false; // hanya tampil jika ada jawaban

    // cek apakah parent answer sesuai
    if ($question->parent_answer_value && isset($parentAnswer)) {
        $show = $show && ($parentAnswer->answer == $question->parent_answer_value);
    }
@endphp

@if($show)
    <div class="mt-3 p-3 bg-gray-50 rounded-lg border-l-4 border-blue-200"
         style="margin-left: {{ $level * 20 }}px;">
        <p class="text-gray-700 font-medium">{{ $question->text }}</p>

        {{-- jenis jawaban --}}
        @if($question->type === 'radio')
            <div class="flex gap-2 mt-2 flex-wrap">
                @foreach($question->options as $opt)
                    <span class="px-3 py-1 border rounded-lg text-sm
                        {{ $answer->answer == $opt->value ? 'bg-blue-100 text-blue-700 font-semibold' : 'bg-gray-100 text-gray-600' }}">
                        {{ $opt->text }}
                    </span>
                @endforeach
            </div>
        @elseif($question->type === 'checkbox')
            @php
                $answers = is_array($answer->answer) ? $answer->answer : explode(',', $answer->answer);
            @endphp
            <div class="flex gap-2 mt-2 flex-wrap">
                @foreach($question->options as $opt)
                    <span class="px-3 py-1 border rounded-lg text-sm
                        {{ in_array($opt->value, $answers) ? 'bg-green-100 text-green-700 font-semibold' : 'bg-gray-100 text-gray-600' }}">
                        {{ $opt->text }}
                    </span>
                @endforeach
            </div>
        @else
            <input type="text" disabled class="mt-2 w-full border rounded-lg px-3 py-2"
                   value="{{ $answer->answer }}">
        @endif

        {{-- render anak pertanyaan secara rekursif --}}
        @foreach($questionsByParent[$question->id] ?? [] as $child)
            @include('partials.question-answer', [
                'question' => $child,
                'user' => $user,
                'questionsByParent' => $questionsByParent,
                'level' => $level + 1,
                'parentAnswer' => $answer
            ])
        @endforeach
    </div>
@endif
