<!-- ============ createTopicModal ============ -->
<div
    class="modal fade topicModal"
    id="createTopicModal"
    aria-hidden="true"
    aria-labelledby="creatTopicLabel"
    tabindex="-1"
>
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
                <!-- create_step1 -->
                <div class="create_step1">
                    <div class="top">
                        <img
                            src="/assets/images/createTopic.png"
                            alt=""
                            class="createTopic_img"
                        />
                        <p class="title">ایجاد تاپیک جدید</p>
                    </div>
                    <p class="caption">
                        تاپیک شما پس از تایید توسط مدیر سایت منتشر میشود
                    </p>
                    <form action="{{route('topics.store')}}" method="POST" id="createTopic" class="createTopic_form">
                        @csrf
                        <div class="form-group">
                            <label class="topic_title" for="topic_title"
                            >عنوان تاپیک</label
                            >
                            <input
                                name="title"
                                id="title"
                                class="topic_title_inp"
                                type="text"
                                placeholder="به عنوان مثال فواید دارو های گیاهی"
                            />
                        </div>
                        <div class="form-group">
                    <textarea
                        id="content"
                        class="topic_content_inp"
                        name="content"
                        cols="30"
                        rows="10"
                        placeholder="اینجا بنویسید"
                    ></textarea>
                        </div>
                        <div class="form-group">
                            <div class="tag_box">
                                <span class="tag_box_title"> تگ ها</span>
                                <input class="topic_tags" value="طب سنتی"/>
                                <input class="topic_tags" value="دیابت"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="rules_box">
                                <input
                                    type="checkbox"
                                    name="rules"
                                    id="rules"
                                    class="rules_inp"
                                />
                                <p class="rules_title">
                                    <span>قوانین و مقررات</span>
                                    سایت را خوانده ام و با آن موافقم
                                </p>
                            </div>
                        </div>
                        <div class="btn_group">
                            <button
                                type="submit"
                                id="release_topic"
                                class="callToAction release_topic submit_topic"
                            >
                                انتشار
                            </button>
                            <button
                                type="button"
                                id="save_topic"
                                class="callToAction2 save_topic submit_topic"
                            >
                                ذخیره
                            </button>
                        </div>
                    </form>
                </div>
                <!-- create_step2 -->
                <div class="create_step2">
                    <img
                        src="{{asset('front/assets/images/topic_submit_img')}}"
                        alt=""
                        class="topic_submit"
                    />
                    <p class="caption">
                        تاپیک شما بعد از تایید مدیر سایت منتشر خواهد شد
                    </p>
                    <a href="./showTopic.html" class="all_myTopic"
                    >همه تاپیک های من
                        <img src="{{asset('front/assets/images/left_arrow.png')}}" alt=""/>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
