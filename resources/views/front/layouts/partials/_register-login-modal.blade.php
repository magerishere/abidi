<div
    class="modal fade"
    id="registerModal"
    aria-hidden="true"
    aria-labelledby="registerModalLabel"
    tabindex="-1"
>
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body row">
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
                <div class="col-6">
                    <div class="content">
                        <!-- step1 : enter name, phone and password  -->
                        <div class="steps step1">
                            <h2 class="title">ثبت نام در فروم دکتر عبیدی</h2>
                            <p class="subtitle">
                                قبلا ثبت نام کرده اید؟
                                <a class="login_btn">ورود</a>
                            </p>
                            <form id="subscribers" action="{{route('generate')}}" method="POST">
                               @csrf
                                <div class="form-group">
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="form-control"
                                        placeholder="نام و نام خانوادگی"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="tel"
                                        name="mobile"
                                        id="mobile"
                                        class="form-control"
                                        placeholder="شماره تلفن همراه"
                                    />
                                </div>
                                <div class="form-group password_box">
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        class="form-control"
                                        placeholder="رمز عبور"
                                    />
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-register callToAction"
                                >
                                    ادامه
                                </button>
                                <button
                                    type="submit"
                                    class="btn btn-register callToAction2"
                                >
                                    <img src="{{asset('front/assets/images/google_logo.png')}}" alt=""/>
                                    ثبت نام با گوگل
                                </button>
                            </form>
                            <div class="errorValidateOtp"></div>
                        </div>
                        <!-- step2 : enter uniqe code -->
                        <div class="steps step2">
                            <p class="enteredPhone_text">
                                لطفا کد ارسال شده به شماره
                                <span class="enteredPhone"></span>
                                را وارد کنید
                            </p>
                            <form  id="subscribers_confirm" action="{{route('register')}}" method="POST">
                                @csrf
                                <p class="false_number">
                                    شماره اشتباه است؟
                                    <span id="editMobile">اصلاح شماره تلفن</span>
                                </p>
                                <div class="form-group confirm_box">
                                    <input
                                        type="tel"
                                        name="otp"
                                        id="otp"
                                        class="input_code"
                                        autofocus
                                        autocomplete="off"
                                    />
                                </div>
                                <p id="smsTimer">02:01</p>
                                <button
                                    id="otpValidBtn"
                                    class="btn btn_code callToAction"
                                >
                                    ثبت نام
                                </button>
                                <div id="sendAgain">
                                    <i class="fas fa-redo"></i>
                                    ارسال مجدد کد
                                </div>
                            </form>
                            <div class="result"></div>
                            <div class="errorValidate"></div>
                            <p class="problem_code">در دریافت کد مشکل دارید ؟</p>
                        </div>
                        <!-- step3 : login with uniqe code -->
                        <div class="steps step3">
                            <h2 class="title">ورود به فروم دکتر عبیدی</h2>
                            <p class="subtitle">
                                ثبت نام نکرده اید ؟
                                <a class="signup_btn">ثبت نام</a>
                            </p>
                            <form id="login">
                                <div class="form-group">
                                    <input
                                        type="tel"
                                        name="login_phone"
                                        id="login_phone"
                                        class="form-control"
                                        placeholder="شماره تلفن همراه"
                                    />
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-register callToAction"
                                >
                                    ادامه
                                </button>
                                <button
                                    type="submit"
                                    class="btn btn-register callToAction2"
                                >
                                    <img src="{{asset('front/assets/images/google_logo.png')}}" alt=""/>
                                    ورود با گوگل
                                </button>
                            </form>
                            <div class="errorValidateOtp"></div>
                        </div>
                        <!-- step4 : login with password  -->
                        <div class="steps step4">
                            <h2 class="title">ورود با رمز عبور</h2>
                            <p class="subtitle">
                                ورود از طریق
                                <a class="login_with_code"> ارسال کد </a>
                            </p>
                            <form id="subscribers" action="{{route('login')}}" method="POST">
                                @csrf
     
                                <div class="form-group">
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        class="form-control"
                                        placeholder="رمز عبور"
                                    />
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-register callToAction"
                                >
                                    ورود
                                </button>
                                <p class="forget_password">
                                    رمز عبور خود را فراموش کردید ؟
                                    <br/>
                                    <a href="#"> فراموشی رمز عبور </a>
                                </p>
                            </form>
                            <div class="errorValidateOtp"></div>
                        </div>
                        <!-- step5 : send link ways -->
                        <div class="steps step5">
                            <h2 class="title">فراموشی رمز عبور</h2>
                            <p class="subtitle">
                                لطفا یکی از روش های زیر را برای دریافت لینک تغییر رمز عبور
                                انتخاب کنید
                            </p>
                            <button class="btn send_ways">
                                <i class="far fa-comment"></i>
                                ارسال پیام کوتاه
                            </button>
                            <button class="btn send_ways">
                                <i class="far fa-envelope"></i>
                                ارسال ایمیل
                            </button>
                            <button type="submit" class="btn btn-register callToAction">
                                ورود
                            </button>
                            <a href="#">
                                <div class="support">
                                    <i class="far fa-question-circle"></i>
                                    <span class="support_txt">پشتیبان آنلاین</span>
                                </div>
                            </a>
                        </div>
                        <!-- step6 : send link to email  -->
                        <div class="steps step6">
                            <h2 class="title">فراموشی رمز عبور</h2>
                            <p class="subtitle">
                                لطفا ایمیل خود را جهت دریافت لینک تغییر رمز عبور وارد کنید
                            </p>
                            <form id="email_link">
                                <div class="form-group">
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        placeholder="ایمیل"
                                    />
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-register callToAction"
                                >
                                    ارسال لینک
                                </button>
                            </form>
                            <div class="errorValidateOtp"></div>
                            <p class="send_to_phone">ارسال لینک به شماره تلفن همراه</p>
                        </div>
                        <!-- step7 : send link to phone   -->
                        <div class="steps step7">
                            <h2 class="title">فراموشی رمز عبور</h2>
                            <p class="subtitle">
                                لطفا شماره تلفن همراه خود را جهت دریافت لینک تغییر رمز
                                عبور وارد کنید
                            </p>
                            <form id="phone_link">
                                <div class="form-group">
                                    <input
                                        type="tel"
                                        name="phone"
                                        id="phone"
                                        class="form-control"
                                        placeholder="شماره تلفن"
                                    />
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-register callToAction"
                                >
                                    ارسال لینک
                                </button>
                            </form>
                            <div class="errorValidateOtp"></div>
                            <p class="send_to_email">ارسال لینک به شماره ایمیل</p>
                        </div>
                        <!-- step8 : result send link to phone   -->
                        <div class="steps step8">
                            <img src="{{asset('front/assets/images/sms_icon.png')}}" alt=""/>
                            <p class="change_pass_link">
                                لینک تغییر رمز عبور به شماره
                                <span>09123456789</span>
                                ارسال شد
                            </p>
                            <a href="#" target="_blank" class="go_forum">
                                ورود به فروم عبیدی
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </div>
                        <!-- step9 : result send link to phone   -->
                        <div class="steps step9">
                            <img src="{{asset('front/assets/images/email_icon.png')}}" alt=""/>
                            <p class="change_pass_link">
                                لینک تغییر رمز عبور به ایمیل
                                <span> info@gmail </span>
                                ارسال شد
                            </p>
                            <a href="#" target="_blank" class="go_forum">
                                ورود به فروم عبیدی
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 modal_img_box">
                    <img
                        src="{{asset('front/assets/images/register_img.png')}}"
                        alt=""
                        class="register_img"
                    />
                    <img
                        src="{{asset('front/assets/images/modal_logo.png')}}"
                        alt=""
                        class="modal_logo"
                    />
                </div>
            </div>
        </div>
    </div>
</div>
