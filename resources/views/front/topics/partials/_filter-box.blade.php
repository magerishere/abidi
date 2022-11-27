<!-- filter_box -->
<div class="filter_box">
    <div class="container">
        <div class="content">
            <div class="filter">
                <p class="filter_txt">مرتب سازی بر اساس:</p>
                <ul class="nav nav_tabs" id="filterTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link active"
                            id="all_answers_tab"
                            data-bs-toggle="tab"
                            data-bs-target="#all_answers"
                            type="button"
                            role="tab"
                            aria-controls="all_answers"
                            aria-selected="true"
                        >
                            همه
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link"
                            id="best_answers_tab"
                            data-bs-toggle="tab"
                            data-bs-target="#best_answers"
                            type="button"
                            role="tab"
                            aria-controls="best_answers"
                            aria-selected="false"
                        >
                            داغ ترین ها
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link"
                            id="newest_tab"
                            data-bs-toggle="tab"
                            data-bs-target="#newest"
                            type="button"
                            role="tab"
                            aria-controls="newest"
                            aria-selected="false"
                        >
                            جدیدترین
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button
                            class="nav-link"
                            id="doctors_answers_tab"
                            data-bs-toggle="tab"
                            data-bs-target="#doctors_answers"
                            type="button"
                            role="tab"
                            aria-controls="doctors_answers"
                            aria-selected="false"
                        >
                            پاسخ پرشک
                        </button>
                    </li>
                </ul>
            </div>
            <div class="answers_box">
                <span>{{$replies->count()}}</span>
                <span>پاسخ</span>
            </div>
        </div>
    </div>
</div>
