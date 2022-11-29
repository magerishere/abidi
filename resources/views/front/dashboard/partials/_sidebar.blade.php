<div class="col-lg-4 col-sm-12">
    <div class="dashboard_user">
        <div class="user_properties">
            <div class="user_img">
                <img src="/assets/images/user1.png" alt=""/>
            </div>
            <div class="user_info">
                <p class="user_name">{{$user->name}}</p>
                <p class="user_status">
                    @foreach($user->roles as $role)
                        <span>{{$role->name->description}}</span>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
    <ul class="nav nav_tabs" id="dashboardList_tab" role="tablist">
        <!-- dashboard_item -->
        <li class="nav-item" role="presentation">
            <button
                class="nav-link active"
                id="dashboard_item_tab"
                data-bs-toggle="tab"
                data-bs-target="#dashboard_item"
                type="button"
                role="tab"
                aria-controls="dashboard_item"
                aria-selected="true"
            >
                <img

                    src="{{asset('front/assets/images/dashboard_icon.png')}}"
                    alt=""
                    class="dashboard_item_img"
                />
                <p class="dashboard_item_txt">داشبورد</p>
            </button>
        </li>
        <!-- myTopic_item -->
        <li class="nav-item" role="presentation">
            <button
                class="nav-link"
                id="myTopic_item_tab"
                data-bs-toggle="tab"
                data-bs-target="#myTopic_item"
                type="button"
                role="tab"
                aria-controls="myTopic_item"
                aria-selected="false"
            >
                <img

                    src="{{asset('front/assets/images/myTopic_icon.png')}}"
                    alt=""
                    class="dashboard_item_img"
                />
                <p class="dashboard_item_txt">تاپیک های من</p>
            </button>
        </li>
        <!-- savedTopic_item -->
        <li class="nav-item" role="presentation">
            <button
                class="nav-link"
                id="savedTopic_item_tab"
                data-bs-toggle="tab"
                data-bs-target="#savedTopic_item"
                type="button"
                role="tab"
                aria-controls="savedTopic_item"
                aria-selected="false"
            >
                <img

                    src="{{asset('front/assets/images/savedTopic_icon.png')}}"
                    alt=""
                    class="dashboard_item_img"
                />
                <p class="dashboard_item_txt">تاپیک های ذخیره شده</p>
            </button>
        </li>
        <!-- completeinfo_item -->
        <li class="nav-item" role="presentation">
            <button
                class="nav-link"
                id="completeinfo_item_tab"
                data-bs-toggle="tab"
                data-bs-target="#completeinfo_item"
                type="button"
                role="tab"
                aria-controls="completeinfo_item"
                aria-selected="false"
            >
                <img
                    src="{{asset('front/assets/images/completeinfo_icon.png')}}"
                    alt=""
                    class="dashboard_item_img"
                />
                <p class="dashboard_item_txt">تکمیل اطلاعات</p>
            </button>
        </li>
        <!-- messagebox_item -->
        <li class="nav-item" role="presentation">
            <button
                class="nav-link"
                id="messagebox_item_tab"
                data-bs-toggle="tab"
                data-bs-target="#messagebox_item"
                type="button"
                role="tab"
                aria-controls="messagebox_item"
                aria-selected="false"
            >
                <img

                    src="{{asset('front/assets/images/messages_icon.png')}}"
                    alt=""
                    class="dashboard_item_img"
                />
                <p class="dashboard_item_txt">صندوق پیام ها</p>
            </button>
        </li>
        <!-- exit_item -->
        <a href="#" class="exit_item">
            <img
                src="{{asset('front/assets/images/exit_icon.png')}}"
                alt=""
                class="dashboard_exit_img"
            />
            <p class="dashboard_exit caption" data-bs-toggle="modal"
                      data-bs-target="#exitModal">خروج</p>
        </a>
    </ul>
</div>
