@extends('layouts.app') @section('content')

<div class="clip-path bg-blue overflow-x-hidden">
    <div class="d-flex overflow-hidden relative" style="align-items: flex-end;">
        <img id="home-banner" class="img-responsive" src="images/home-banner-illustration.svg"
            alt="Screencasts for the modern developer" />

        <div class="px-3 pt-2 font-bold text-white mt-0 code-link">
            <span class="ml-10 font-red">"menu"</span>=>[
            <a class="my-1 relative d-block" href="#">
                <div class="font-size-10 font-gray">//deep dives</div>
                <span class="text-white">"browse"=></span>"Series",
            </a>
            <a class="mb-1 relative d-block" href="#">
                <div class="font-size-10 font-gray">//pick a category</div>
                <span class="text-white">"find"=></span>"Topices",
            </a>
            <a class="mb-1 relative d-block" href="#">
                <div class="font-size-10 font-gray">//engage the community</div>
                <span class="text-white">"discuss"=></span>"Forum",
            </a>
            <a class="mb-1 relative d-block" href="#">
                <div class="font-size-10 font-gray">//what's going on</div>
                <span class="text-white">"feed"=></span>"Review",
            </a>
            <div class="ml-10" style="margin-bottom: 5px;">],</div>

            <span class="ml-10 font-red">"state"</span>=>[
            <a class="mb-1 relative d-block" href="#">
                <div class="font-size-10 font-gray">//multi-episode training</div>
                <span class="text-white">"series"=></span>"161",
            </a>
            <a class="mb-1 relative d-block" href="#">
                <div class="font-size-10 font-gray">//pick a category</div>
                <span class="text-white">"lessones"=></span>"2121"
            </a>
            <a class="mb-1 relative d-block" class="mb-1" href="#">
                <div class="font-size-10 font-gray">//new ones every week</div>
                <span class="text-white">"discuss"=></span>"Forum"
            </a>
            <a class="mb-1 relative d-block" href="#">
                <div class="font-size-10 font-gray">//hours and hours of content</div>
                <span class="text-white">"hour"=></span>"360"
            </a>
            <div class="ml-10">]</div>
        </div>
    </div>

</div>
<div class="modal fade" id="searchId">
    <div class="modal-dialog">
        <div class="px-3 modal-content">
            <div class="d-flex search-modal">
                <a href="#">
                    <svg class="m-2" fill="rgb(107, 78, 238)" viewBox="0 0 12 12" width="16px">
                        <use xlink:href="images/icons.svg#icon-search"></use>
                    </svg>
                </a>
                <input id="search-input" class="search-input bg-white flex-grow-1" type="search"
                    placeholder="Press'/'anywhere to search.">
            </div>
        </div>
    </div>
</div>
<div class="py-3 text-center" style="font-size:25px;">
    Push your web development skills <span class="text-primary">to the next level</span>, through
    <br><span class="text-primary"> expert screencasts</span> on Laravel, Vue, and so much more.
</div>

<div class="d-flex justify-content-center my-5 flex-wrap" style="gap:2.5%;">
    <div class="border-radius-3 card-skills">
        <div class="border-radius-3 px-4 py-3 h-75 text-center" style="background-color:#F24777;">
            <img src="images/frameworks-default.svg">
            <div class="text-white">Frameworks</div>
        </div>
        <div class="text-center d-flex justify-content-center gap-3 py-2" style="color:gray;">
            <div class="text-center ">
                <span class="d-block">63</span>
                <span class="font-size-10">Series</span>
            </div>
            <div class="d-inline" style="width: 1px;height:1.5rem;background:rgb(128,128,128,0.2);align-self: center;">
            </div>
            <div>
                <span class="d-block">1056</span>
                <span class="font-size-10">Videos</span>
            </div>
        </div>
        <button class="btn rounded-pill d-none w-75 mx-auto mt-2 d-flex" style="background-color: #EBEDF1;">
            <svg class="align-middle" width="15px" height="15px" fill="#aaa">
                <use xlink:href="images/play-button.svg#Capa_1"></use>
            </svg>
            <span>
                Explore
            </span>
        </button>
    </div>
    <div class="border-radius-3 card-skills">
        <div class="border-radius-3 px-4 py-3 fs-5 h-75 text-center" style="background-color:#FDC037;">
            <img src="images/languages-default.svg">
            <div class="text-white">Languages</div>
        </div>
        <div class="text-center d-flex justify-content-center gap-3 py-2" style="color:gray;">
            <div class="text-center ">
                <span class="d-block">19</span>
                <span class="font-size-10">Series</span>
            </div>
            <div class="d-inline" style="width: 1px;height:1.5rem;background:rgb(128,128,128,0.2);align-self: center;">
            </div>
            <div>
                <span class="d-block">176</span>
                <span class="font-size-10">Videos</span>
            </div>
        </div>
        <button class="btn rounded-pill d-none w-75 mx-auto mt-2 d-flex" style="background-color: #EBEDF1;">
            <svg class="align-middle" width="15px" height="15px" fill="#aaa">
                <use xlink:href="images/play-button.svg#Capa_1"></use>
            </svg>
            <span>
                Explore
            </span>
        </button>
    </div>
    <div class="border-radius-3 card-skills">
        <div class="border-radius-3 px-4 py-3 fs-5 h-75 text-center" style="background-color:#4998FB;">
            <img src="images/techniques-default.svg">
            <div class="text-white">Techniques</div>
        </div>
        <div class="text-center d-flex justify-content-center gap-3 py-2" style="color:gray;">
            <div class="text-center ">
                <span class="d-block">37</span>
                <span class="font-size-10">Series</span>
            </div>
            <div class="d-inline" style="width: 1px;height:1.5rem;background:rgb(128,128,128,0.2);align-self: center;">
            </div>
            <div>
                <span class="d-block">435</span>
                <span class="font-size-10">Videos</span>
            </div>
        </div>
        <button class="btn rounded-pill d-none w-75 mx-auto mt-2 d-flex" style="background-color: #EBEDF1;">
            <svg class="align-middle" width="15px" height="15px" fill="#aaa">
                <use xlink:href="images/play-button.svg#Capa_1"></use>
            </svg>
            <span>
                Explore
            </span>
        </button>
    </div>
    <div class="border-radius-3 card-skills">
        <div class="border-radius-3 px-4 py-3 fs-5 h-75 text-center" style="background-color:#3EB59B;">
            <img src="images/testing-default.svg">
            <div class="text-white">Testing</div>
        </div>
        <div class="text-center d-flex justify-content-center gap-3 py-2" style="color:gray;">
            <div class="text-center ">
                <span class="d-block">12</span>
                <span class="font-size-10">Series</span>
            </div>
            <div class="d-inline" style="width: 1px;height:1.5rem;background:rgb(128,128,128,0.2);align-self: center;">
            </div>
            <div>
                <span class="d-block">100</span>
                <span class="font-size-10">Videos</span>
            </div>
        </div>
        <button class="btn rounded-pill d-none w-75 mx-auto mt-2 d-flex" style="background-color: #EBEDF1;">
            <svg class="align-middle" width="15px" height="15px" fill="#aaa">
                <use xlink:href="images/play-button.svg#Capa_1"></use>
            </svg>
            <span>
                Explore
            </span>
        </button>
    </div>
    <div class="border-radius-3 card-skills">
        <div class="border-radius-3 px-4 py-3 fs-5 h-75  text-center     " style="background-color:#9C67D8;">
            <img src="images/tooling-default.svg">
            <div class="text-white">Tooling</div>
        </div>
        <div class="text-center d-flex justify-content-center gap-3 py-2" style="color:gray;">
            <div class="text-center ">
                <span class="d-block">31</span>
                <span class="font-size-10">Series</span>
            </div>
            <div class="d-inline" style="width: 1px;height:1.5rem;background:rgb(128,128,128,0.2);align-self: center;">
            </div>
            <div>
                <span class="d-block">366</span>
                <span class="font-size-10">Videos</span>
            </div>
        </div>
        <button class="btn rounded-pill d-none w-75 mx-auto mt-2 d-flex" style="background-color: #EBEDF1;">
            <svg class="align-middle" width="15px" height="15px" fill="#aaa">
                <use xlink:href="images/play-button.svg#Capa_1"></use>
            </svg>
            <span>
                Explore
            </span>
        </button>
    </div>
    
</div>
<div class="py-3 text-center" style="font-size:15px;font-weight: 500;">
    <div style="font-size:30px;">What will you learn next?</div>
    There's no shortage of content at Laracasts. Check back most work-days for new lessons<br>
    on your favorite web technologies and techniques.
</div>



<div class="py-3 text-center" style="font-size:15px;font-weight: 500;">
    <div style="font-size:30px;">Explore Laracasts</div>
    If you already know what you're looking for, Laracasts is divided into various topics ranging<br>
    from frameworks to packages to tools.
</div>


@endsection