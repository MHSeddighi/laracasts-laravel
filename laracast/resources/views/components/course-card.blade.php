<div class="border d-flex flex-row my-2 border-radius-3 bg-white font-poppins" style="width:{{ $width }};">
    <div class="d-flex flex-column p-3 text-center border-radius-3 text-white fs-6 font-semibold {{ isset($title)?"w-33":"w-100"}}"  style="{{ $imageBackground }}">
        @isset($type)
        <button class="font-size-11 type-btn rounded-pill">{{ $type}} </button>
        @endisset
        <img class="align-self-center {{ isset($type)? "my-4" :""}}" src="{{ $imageSource }}" width="96" height="96"/>
        @isset($content)
        <strong class="font-size-11">{{ $difficulty }} Difficulty</strong>
        <div class="text-center">
            <!-- difficulty show -->
            - - -
        </div>
        @endisset
    </div>


    @isset($title)
    <div class="d-flex flex-column px-3 py-2 w-67  border-radius-3 justify-content-around play-button {{ isset($content) ? "gap-4":"" }}">
        <a class="font-cabin fs-5 underline-hover text-black text-decoration-none"> {{ $title }}</a>
        @isset($content)
        <p class="font-size-12"> {{ $content }} </p>
        @endisset
        <div class="w-100 d-flex align-items-end mt-auto margin-1" style="height: 15%">
            <button class="btn rounded-pill d-none w-100  play-button">
                <svg class="align-middle me-1" width="15px" height="15px" fill="#000">
                    <use xlink:href="images/play-button.svg#Capa_1"></use>
                </svg>
                <span>Play</span>
            </button>
            <div class="font-gray font-size-10 p-2">
                <img src="images/course cards/books-icon.svg"/><span class="me-4 ms-1">  {{ $lessonNumbers }} lessons</span>
                <img src="images/course cards/clock-icon.svg"/><span class="ms-1">  {{ $time }}  </span>
            </div>
        </div>
    </div>

    @endisset
</div>
