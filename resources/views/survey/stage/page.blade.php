<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey</title>
    <link rel="stylesheet" href="{{ asset('css/tracer-study/survey/style.css') }}">
</head>

<body>
    <x-preloader />

    <div class="survey-container">

        <!-- Header -->
        <div class="header">
            <div class="logo-title">
                <a href="/tracer-study">
                    <img src="{{ asset('images/logo.png') }}" alt="logo">
                </a>
                <div>
                    <h1>Tracer Study Survey</h1>
                    <p>Isi survey sesuai pengalamanmu</p>
                </div>
            </div>
        </div>

        <!-- Progress bar -->
        <div class="progress-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>

        <!-- QNA -->
        <div class="qna-container">
            <h2>{{ $question->text }}</h2>

            <form action="{{ route('survey.stage.submit', ['stage_id' => $stage->id, 'page' => $page]) }}" method="POST" id="submit-form">
                @csrf
                <input type="hidden" name="question_id" value="{{ $question->id }}">

                <div class="options">
                    @if($question->type == 'radio')
                        @foreach($question->options as $opt)
                        <label class="option">
                            <input type="radio" name="answer" value="{{ $opt->value }}"
                                {{ optional($previousAnswer)->answer == $opt->value ? 'checked' : '' }}>
                            <span class="custom-check"></span>
                            {{ $opt->text }}
                        </label>
                        @endforeach
                    @elseif($question->type == 'checkbox')
                        @foreach($question->options as $opt)
                        <label class="option">
                            <input type="checkbox" name="answer[]" value="{{ $opt->value }}"
                                {{ is_array(explode(",", optional($previousAnswer)->answer)) && in_array($opt->value, explode(",", optional($previousAnswer)->answer)) ? 'checked' : '' }}>
                            <span class="custom-check"></span>
                            {{ $opt->text }}
                        </label>
                        @endforeach
                    @elseif($question->type == 'text')
                        <label class="option">
                            <input type="text" name="answer" value="{{ optional($previousAnswer)->answer }}" placeholder="Ketik jawabanmu di sini">
                        </label>
                    @elseif($question->type == 'nim')
                        <label class="option">
                            <input type="text" name="answer" pattern="\d{10}" value="{{ optional($previousAnswer)->answer }}" placeholder="Ketik nim di sini">
                        </label>
                    @elseif($question->type == 'date')
                        <label class="option">
                            <input type="date" name="answer" value="{{ optional($previousAnswer)->answer }}" placeholder="Ketik jawabanmu di sini">
                        </label>
                    @endif
                </div>
            </form>

            <div class="actions">
                @if($page > 1)
                <form action="{{ route('survey.stage.deleteAnswer', ['stage_id'=>$stage->id,'page'=>$page, 'question_id'=>$question->id]) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-back">← Kembali</button>
                </form>
                @else
                <button class="btn btn-back" disabled>← Kembali</button>
                @endif

                <button type="submit" form="submit-form" class="btn btn-next">Lanjut →</button>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("submit-form");
            const radios = document.querySelectorAll("input[type='radio'][name='answer']");
            radios.forEach(radio => radio.addEventListener("change", () => form.submit()));

            // Set progress bar
            const page = {{ $page }};
            const total = {{ $total_pages }};
            const progressBar = document.getElementById("progress-bar");
            const percent = (page / total) * 100;
            progressBar.style.width = percent + "%";
        });
    </script>
</body>

</html>
