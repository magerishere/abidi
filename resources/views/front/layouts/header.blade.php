<!-- header -->
{{--In home page, header must be absolute position, otherwise position is realative--}}
<header style="position: {{\Illuminate\Support\Facades\Route::is('home') ? 'absolute' : 'relative'}}">
    <div class="container">
        <div class="content">
            <ul class="header_items">
                <a href="{{route('home')}}">
                    <li>صفحه اصلی</li>
                </a>
                <a href="#">
                    <li>پزشکان عبیدی</li>
                </a>
                <a href="#">
                    <li>ویدئو</li>
                </a>
                <a href="" target="_blank">
                    <li>درباره ما</li>
                </a>
            </ul>
            <div class="btn_group">
                @guest
                    <a
                        href="#register"
                        target="_blank"
                        class="callToAction"
                        data-bs-toggle="modal"
                        data-bs-target="#registerModal"
                    >ورود/ ثبت نام</a
                    >
                @endguest
                @auth
                    <a
                        href="#"
                        target="_blank"
                        class="callToAction2"
                        data-bs-toggle="modal"
                        data-bs-target="#createTopicModal"
                    >
                        <i class="fas fa-plus"></i>ایجاد تاپیک جدید
                    </a>
                    <a
                        href="{{route('dashboard')}}"
                        target="_blank"
                        class="callToAction"
                    >
                        داشبورد
                    </a>
                @endauth

                <a href="#" class="bell_icon"
                ><i class="far fa-bell"></i> <span class="bell_number">5</span></a
                >
                <a href="#" class="user-icon"
                ><img src="/assets/images/user-icon.png" alt=""
                    /></a>
            </div>
        </div>
    </div>
</header>
