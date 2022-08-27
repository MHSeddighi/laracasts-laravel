<div class="d-flex gap-2">
    <svg fill="{{ $imgColor }}" width="21px" height="21px">
        <use xlink:href="{{ asset($imgSrc) }}"></use>
    </svg>

    <span style="color:{{ $textColor }};">
       {{ $text }}
    </span>
</div>