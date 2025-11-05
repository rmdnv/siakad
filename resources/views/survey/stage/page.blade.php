<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey</title>
    <!-- Tom Select CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <!-- Tom Select JS -->
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/tracer-study/survey/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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
                    @elseif($question->type == 'perguruan_tinggi')
                    <label class="autocomplete-wrapper">
                        <div class="ghost-container">
                            <span id="ghostBase"></span><span id="ghostText"></span>
                        </div>
                        <input
                            type="text"
                            id="inputPerguruanTinggi"
                            name="answer"
                            value="{{ optional($previousAnswer)->answer }}"
                            placeholder="Ketik nama perguruan tinggi..."
                            autocomplete="off"
                            class="input-autocomplete">
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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", async function() {
            const input = document.getElementById("inputPerguruanTinggi");
            const ghostBase = document.getElementById("ghostBase");
            const ghostText = document.getElementById("ghostText");

            if (input) {
                try {
                    const res = await fetch("/api/perguruan-tinggi");
                    const data = await res.json();
                    const list = data.map(pt => pt.nama);

                    input.addEventListener("input", () => {
                        const val = input.value;
                        const lowerVal = val.toLowerCase();
                        const match = list.find(name => name.toLowerCase().startsWith(lowerVal));

                        ghostBase.textContent = val;

                        if (val && match && match.toLowerCase() !== lowerVal) {
                            ghostText.textContent = match.slice(val.length);
                        } else {
                            ghostText.textContent = "";
                        }
                    });

                    input.addEventListener("keydown", e => {
                        if (e.key === "Tab" && ghostText.textContent) {
                            e.preventDefault();
                            input.value = ghostBase.textContent + ghostText.textContent;
                            ghostBase.textContent = input.value;
                            ghostText.textContent = "";
                        }
                    });
                } catch (err) {
                    console.error("Gagal memuat data universitas:", err);
                }
            }
        });
    </script>
    <script>
        @if(session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 3000,
            close: false,
            gravity: "top",
            position: "right",
            backgroundColor: "#ef4444",
            stopOnFocus: true,
        }).showToast();
        @endif
    </script>
</body>

</html>