<section class="active_doctors">
    <div class="container">
        <div class="content">
            <h2 class="title">پزشکان فعال در انجمن</h2>
            <div class="active_doctor_box row">
                @foreach($doctors as $doctor)

                    <div class="col-lg-3 col-sm-12">
                        <img
                            src="{{$doctor->getFirstMediaUrl()}}"
                            alt=""
                            class="doctor_img"
                        />
                        <p class="doctor_name">{{$doctor->name}}</p>
                        <p class="doctor_specialty">
                            {{@$doctor->meta['special']}}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
