<x-layouts.app>
    <?php
    $size = count($brands) / 3;
    $columns = 1;
    $chunk_size = ceil($size / $columns);
    ?>
    <div class="container">

        <div class="row">
            @foreach($brands->chunk($chunk_size) as $chunk)
            <div class="col-md-4">
                <ul>
                    @foreach($chunk as $brand)
                    <?php
                    $current_first_letter = strtoupper(substr($brand->name, 0, 1));
                    if (!isset($header_first_letter) || $current_first_letter != $header_first_letter) {
                        echo '</ul>
                            <h2>' . $current_first_letter . '</h2>
                            <ul>';
                    }
                    $header_first_letter = $current_first_letter;
                    ?>
                    <li>
                        <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">
                            {{ $brand->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <?php unset($header_first_letter); ?>
            @endforeach
        </div>
    </div>

</x-layouts.app>