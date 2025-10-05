<x-layouts.app>

    <x-slot:head>
        <meta name="robots" content="index, nofollow">
    </x-slot:head>

    <x-slot:breadcrumb>
        <li><a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/" alt="Manuals for '{{$brand->name}}'"
               title="Manuals for '{{$brand->name}}'">{{ $brand->name }}</a></li>
    </x-slot:breadcrumb>


    <h1>{{ $brand->name }}</h1>

    <p>{{ __('introduction_texts.type_list', ['brand'=>$brand->name]) }}</p>


    <div class="flex flex-column">
        <div>
            <h2>Top 5 populaire handleidingen</h2>
            @foreach ($top_manuals as $manual)
                <div class="flex flex-column">
                    <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/"
                       title="{{ $manual->name }}">{{ $manual->name }}</a>
                    <a href="{{ $manual->originUrl }}" target="new"
                       title="{{ $manual->name }}">{{ $manual->name }}</a>
                </div>
            @endforeach
        </div>
        <h2>Handleidingen</h2>
        @foreach($manuals as $manual)
            <div>
                <div class="type">
                    <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/"
                       title="{{ $manual->name }}">{{ $manual->name }}</a>
                    <a href="{{ $manual->originUrl }}" target="new"
                       title="{{ $manual->name }}">{{ $manual->name }}</a>
                </div>
            </div>
        @endforeach
    </div>

</x-layouts.app>
