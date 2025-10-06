<x-layouts.app>

    <x-slot:introduction_text>
        <p><img src="img/afbl_logo.png" align="right" width="100" height="100">{{ __('introduction_texts.homepage_line_1') }}</p>
        <p>{{ __('introduction_texts.homepage_line_2') }}</p>
        <p>{{ __('introduction_texts.homepage_line_3') }}</p>
    </x-slot:introduction_text>

    <h1>
        <x-slot:title>
            {{ __('misc.all_brands') }}
        </x-slot:title>
    </h1>


    <?php
    $size = count($topManuals);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>

    <div class="container">
        <h2>Top 10 handleidingen</h2>
        @foreach($topManuals as $manual)
        <div>
            <div>{{ $manual->display_name }}</div>
        </div>
        @endforeach

        <!-- A-Z selectie menu -->
        <div class="letter-menu text-center my-4">
            <label for="letterSelect" class="letter-label">Ga naar merk:</label>
            <select id="letterSelect" class="letter-select" onchange="if(this.value) window.location.href=this.value;">
                <option value="">-- Kies een letter --</option>
                @foreach(range('A','Z') as $letter)
                <option value="{{ url('/home/' . strtolower($letter)) }}">
                    {{ $letter }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</x-layouts.app>
