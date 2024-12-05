<div style="padding: 24px">
@foreach (mainMenu() as $side)
    @php
        $isActive = $side['slug'] === $active;
        $svg = 'components.svgs.' . $side['svg'];
    @endphp


    <div class="d-flex align-items-center my-3" style="">

        <div class="@if ($side['slug'] == $active) sidebar_bg @endif d-flex align-items-center py-3 px-4"
            style="width: 100%; background-color:{{ $isActive ? '#FBB105' : '' }}; border-radius:8px; height:36px;">

            <div style="width: 40px">
                @include($svg, ['bg' => $isActive ? '#0C449B' : null])
            </div>
            <a href="{{ $side['link'] }}" style="text-decoration: none">
                <p class="m-0 fs14 {{ $isActive ? 'fw700' : '' }}" style="color: @if ($side['slug'] == $active) #0D0D0D @else #0D0D0D @endif">
                    {{ $side['title'] }}</p>
            </a>
        </div>
    </div>

@endforeach

</div>
