<style>
    .line {
        width: 1px;
        background-color: black;
    }

    .modal-profile {
        position: fixed;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        pointer-events: auto;
        background-color: #0D131D;
        border: 1px solid rgba(0, 0, 0, 0.2);
        outline: 0;
    }

    .dec-none a {
        text-decoration: none;
    }

    .profile-menu {
        padding-bottom: 100px;
        border-radius: 10px;
        font-size: 15px;
        letter-spacing: 1.2px;
    }

    .profile-menu a {
        text-decoration: none;
        padding-left: 10px;
        padding-right: 80px;
    }

    .profile-menu a::before {
        background: linear-gradient(180deg, #151c26 45%, transparent 0, transparent 55%, #151c26 0);
        border-radius: 4px;
        content: "";
        display: block;
        height: 100%;
        position: absolute;
        left: -5px;
        width: 4px;
    }

    .profile-menu a:hover:before {
        background: linear-gradient(180deg, #1156c5 45%, transparent 0, transparent 55%, #1156c5 0);
    }

    .profile-menu a > *{
        color:white;
    }
    .profile-menu a:hover > *{
        color: blue;
    }
</style>

<div class="modal-dialog">
    <div class="py-5 px-4 modal-profile gap-4">
        <div class="text-center fs-5 text-white">Notifications</div>
        <div class="d-flex">
            <div class="d-flex flex-column gap-2 dec-none profile-menu ">
                <a class="my-1" href="#">
                    <div class="fs-5 ">What's New</div>
                    <span class="font-size-10 font-gray">//new content for you</span>
                </a>

                <a class="my-1" href="#">
                    <div class="fs-5 ">My Library</div>
                    <span class="font-size-10 font-gray">//keep going</span>
                </a>

                <a class="my-1" href="#">
                    <div class="fs-5 ">Social Feed</div>
                    <span class="font-size-10 font-gray">//new from the community</span>
                </a>

                <a class="my-1" href="#">
                    <div class="fs-5 ">My Profile</div>
                    <span class="font-size-10 font-gray">//everyone sees this page</span>
                </a>

                <a class="my-1" href="#">
                    <div class="fs-5 ">Settings</div>
                    <span class="font-size-10 font-gray">//make a twaek</span>
                </a>

                <a class="my-1" href="#">
                    <div class="fs-5 ">Gift an Acount</div>
                    <span class="font-size-10 font-gray">//from the kidness of yout <3 </span>
                </a>

                <a class="my-1" href="#">
                    <div class="fs-5 ">Logout</div>
                    <span class="font-size-10 font-gray">//but...why?</span>
                </a>
            </div>
            <div class="line"></div>
            <div>

            </div>
        </div>
    </div>
</div>