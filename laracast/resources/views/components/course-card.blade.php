<div class="border d-flex flex-row my-2 border-radius-3 bg-white font-poppins" style="width:{{ $width }};">
    <div class="d-flex flex-column p-2 text-center border-radius-3 text-white fs-6 font-semibold {{ isset($title)?"w-33":"w-100"}}"  style="{{ $imageBackground }}">
        @isset($type)
            <button class="font-size-11 type-btn rounded-pill m-2">{{ $type}} </button>
        @endisset
            <img class="align-self-center {{ isset($type)? "my-4" :""}}" src="{{ $imageSource }}" width="96" height="96"/>
        @isset($difficulty)
            <strong class="font-size-11">{{ $difficulty }} <br> Difficulty</strong>
            <div class="d-flex justify-content-center gap-1 mt-2 mb-1">
                <span class="d-inline-block w-2 h-1 rounded bg-white"></span>
                <span class="d-inline-block w-2 h-1 rounded {{ strcasecmp($difficulty,"beginner")!=0 ? "bg-white":"bg-secondary opacity-50" }}"></span>
                <span class="d-inline-block w-2 h-1 rounded {{ ((strcasecmp($difficulty,"beginner")!=0) and (strcasecmp($difficulty,"intermediate")!=0)) ? "bg-white":"bg-secondary opacity-50" }}"></span>
            </div>
        @endisset
    </div>


    @isset($title)
    <div class="m-3 mb-2 w-67 d-flex flex-column gap-1 border-radius-3 position-relative justify-content-between play-button {{ isset($content) ? "gap-4":"" }}">
        <a class="font-cabin fs-5 underline-hover text-black text-decoration-none"> {{ $title }}</a>
        @isset($content)
        <p class="font-size-12 overflow-hidden max-h-100"> {{ $content }} </p>
        @endisset
            <button class="btn rounded-pill d-none">
                <svg class="align-middle me-1" width="15px" height="15px" fill="#000">
                    <use xlink:href="images/play-button.svg#Capa_1"></use>
                </svg>
                <span>Play</span>
            </button>
            <div class="font-gray font-size-10 p-2" >
                <img src="images/course cards/books-icon.svg"/><span class="me-4 ms-1">  {{ $lessons }} lessons</span>
                <img src="images/course cards/clock-icon.svg"/><span class="ms-1">  {{ $time }}  </span>
            </div>
    </div>
    @endisset
</div>
