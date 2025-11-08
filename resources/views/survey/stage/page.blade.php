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
                            <span id="ghostBasePerguruanTinggi"></span><span id="ghostTextPerguruanTinggi"></span>
                        </div>
                        <input
                            type="text"
                            id="inputPerguruanTinggi"
                            data-api="/api/perguruan-tinggi"
                            name="answer"
                            value="{{ optional($previousAnswer)->answer }}"
                            placeholder="Ketik nama perguruan tinggi..."
                            autocomplete="off"
                            class="input-autocomplete">
                    </label>
                    @elseif($question->type == 'prodi')
                    <label class="autocomplete-wrapper">
                        <div class="ghost-container">
                            <span id="ghostBaseProdi"></span><span id="ghostTextProdi"></span>
                        </div>
                        <input
                            type="text"
                            id="inputProdi"
                            data-api="/api/prodi"
                            name="answer"
                            value="{{ optional($previousAnswer)->answer }}"
                            placeholder="Ketik prodi..."
                            autocomplete="off"
                            class="input-autocomplete">
                    </label>
                    @elseif($question->type == 'provinsi')
                    <label class="autocomplete-wrapper">
                        <div class="ghost-container">
                            <span id="ghostBaseProvinsi"></span><span id="ghostTextProvinsi"></span>
                        </div>
                        <input
                            type="text"
                            id="inputProvinsi"
                            data-api="/api/wilayah/provinsi"
                            name="answer"
                            value="{{ optional($previousAnswer)->answer }}"
                            placeholder="Ketik provinsi..."
                            autocomplete="off"
                            class="input-autocomplete">
                    </label>
                    @elseif($question->type == 'kabupaten')
                    <label class="autocomplete-wrapper">
                        <div class="ghost-container">
                            <span id="ghostBaseKabupaten"></span><span id="ghostTextKabupaten"></span>
                        </div>
                        <input
                            type="text"
                            id="inputKabupaten"
                            data-api="/api/wilayah/kabupaten"
                            name="answer"
                            value="{{ optional($previousAnswer)->answer }}"
                            placeholder="Ketik kabupaten..."
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
            const form = document.getElementById("submit-form");
            const radios = document.querySelectorAll("input[type='radio'][name='answer']");
            radios.forEach(radio => radio.addEventListener("change", () => form.submit()));

            const inputs = document.querySelectorAll("input[data-api]");

            for (const input of inputs) {
                const apiUrl = input.dataset.api;
                const baseId = input.id.replace("input", "ghostBase");
                const textId = input.id.replace("input", "ghostText");
                const ghostBase = document.getElementById(baseId);
                const ghostText = document.getElementById(textId);

                try {
                    const res = await fetch(apiUrl);
                    const data = await res.json();

                    const list = Array.isArray(data) ?
                        data.map(item => (typeof item === "string" ? item : item.nama)) :
                        data.prodi || [];

                    input.addEventListener("input", () => {
                        const val = input.value;
                        const lowerVal = val.toLowerCase();
                        const match = list.find(name => name.toLowerCase().startsWith(lowerVal));

                        ghostBase.textContent = val;
                        ghostText.textContent = val && match && match.toLowerCase() !== lowerVal ?
                            match.slice(val.length) :
                            "";
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
                    console.error(`Gagal memuat data dari ${apiUrl}:`, err);
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