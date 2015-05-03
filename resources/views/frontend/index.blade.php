@extends('frontend')

@section('content')

<!-- Banner -->
<div class="box-slider">
    <div class="owl-carousel" id="slide-homepage">
        @foreach ($slidePosts as $post)
        <div class="item">
            <a class="thumb" href="{{url($post->slug . '.html')}}" title="{{$post->title}}">
                <img src="{{url('render/?p=' . $post->image . '&w=&h=')}}" />
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- EndBanner -->
<!-- BoxSlide -->
<div class="box-intro">
    <div class="owl-carousel" id="slide-intro">
        @foreach ($introPosts as $post)
        <div class="item clearFix">
            <div class="thumb">
                <a href="{{url($post->slug . '.html')}}" title="{{$post->title}}">
                    <img src="{{url('render/?p=' . $post->image . '&w=208&h=177')}}" alt="{{$post->title}}" />
                </a>
            </div>
            <h3>
                <a href="{{url($post->slug. '.html')}}" title="{{$post->title}}"><span>{{str_limit($post->title, 40)}}</span></a>
            </h3>
            <p>{{str_limit($post->desc, 70)}}</p>
        </div>
        @endforeach

    </div>
</div>
<!-- EndBoxSlide -->
<!-- Boxlist -->
<div class="box-discovery">
    <h3 class="title">
        Sáng mắt Sáng tương lai
        <span>Khám phá những các chăm sóc một đôi mắt thật sự khoẻ mạnh cho mọi lứa tuổi ngay bây giờ...</span>
    </h3>
    <div class="block-list">
        @foreach ($discoveryPosts as $post)
        <article class="item">
            <a href="{{url($post->slug. '.html')}}" >
                <img src="{{url('render/?p=' . $post->image . '&w=350&h=289')}}" />
            </a>
            <h3><a href="{{url($post->slug. '.html')}}">{{str_limit($post->title, 40)}}</a></h3>
        </article>  
        @endforeach    
    </div>
</div>
<!-- EndBoxList -->
<!-- BoxOffice -->
<div class="box-office">
    <div class="group-title">
        <div class="thumb">
            <div class="i-office"></div>
        </div>
        <div class="office-room">
            <p>Phòng mạch</p>
            <h3>Dr.Mắt Tỏ</h3>
        </div>
    </div>
    <div class="data">
        <div class="owl-carousel" id="slide-office">
            @foreach ($questions as $question)
            <div class="item clearFix">
                <h3>
                    <span>{{$question->ask_person}}</span>
                </h3>
                <p>{{str_limit($question->question, 100)}}</p>
            </div>
           @endforeach
        </div>
        <div class="btn-ask">
            <h3>
                <a href="#" title="Question">Đặt câu hỏi</a>
            </h3>
        </div>
    </div>
    <div class="avatar">
        <img src="{{url('images/avatar.png')}}" alt="iconBaby">
    </div>
</div>
<!--endBoxOffice-->
<!-- BoxEvent -->
<div class="box-event">
    <h3 class="title">
        <span class="i-event"></span><a href="{{url('su-kien-nhan-hang')}}">Sự kiện nhãn hàng</a>
    </h3>
    <ul class="news-type">
        <li class="active">
            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-group" data-parent="news-type" data-reset="news-list" title="Sự kiện mới nhất"> Sự kiện mới nhất </a>
        </li>
        <li>
            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-sectors" data-parent="news-type" data-reset="news-list" title="Sự kiện nhiều lượt xem"> Sự kiện nhiều lượt xem </a>
        </li>
    </ul><!--//news-type-->
    <div class="news-list" id="tab-group" style="display: block">
        @foreach ($latestEvents as $post)
        <article class="item">
            <a href="{{url($post->slug. '.html')}}" title="{{$post->title}}">
                <img src="{{url('render/?p=' . $post->image . '&w=400&h=245')}}" />
            </a>
            <h3>{{str_limit($post->title, 40)}}</h3>
            <p>{{str_limit($post->desc, 70)}}</p>
            <a href="{{url($post->slug. '.html')}}" class="read-more">Chi tiết</a>
        </article>
        @endforeach

    </div><!--//news-list-->
    <div class="news-list" id="tab-sectors">
        @foreach ($mostViews as $post)
            <article class="item">
                <a href="{{url($post->slug. '.html')}}" title="{{$post->title}}">
                    <img src="{{url('render/?p=' . $post->image . '&w=400&h=245')}}" />
                </a>
                <h3>{{str_limit($post->title, 40)}}</h3>
                <p>{{str_limit($post->desc, 70)}}</p>
                <a href="{{url($post->slug. '.html')}}" class="read-more">Chi tiết</a>
            </article>
        @endforeach

    </div><!--//news-list-->
</div>
<!-- EndBoxEvent -->
<!-- BoxFuture -->
<div class="box-future">
    <h3 class="title">
        <span class="i-future"></span><a href="{{url('lycoeye')}}">Vì một tương lai tươi sáng</a>
    </h3>
    <div class="area-future">
        <div class="col-left">
            <h3>VỚI CON THẾ GIỚI THẬT MUÔN MẦU <br> VỚI MẸ CON LÀ CẢ THẾ GIỚI</h3>
            <p>
                Chăm sóc và nâng niu đôi mắt ngay hôm nay <br> để con có một tương lai tương sáng
            </p>
            <div class="btn-view">
                <h3>
                    <a href="{{url('lycoeye')}}" title="Question">Xem thêm</a>
                </h3>
            </div>
        </div>
        <div class="col-right">
            <div class="row-future">
                <div class="item future-1"></div>
                <div class="item future-2"></div>
                <div class="item future-3"></div>
            </div>
            <div class="row-future">
                <div class="item future-3"></div>
                <div class="item future-1"></div>
                <div class="item future-2"></div>
            </div>
            <div class="row-future">
                <div class="item future-2"></div>
                <div class="item future-3"></div>
                <div class="item future-1"></div>
            </div>
        </div>
    </div>
</div>
<!-- EndBoxFuture -->
@include('frontend.contact')

@endsection