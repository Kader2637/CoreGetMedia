@extends('layouts.user.app')

@section('title')
    Beranda
@endsection

@section('seo')
<meta name="description" content="{{ Str::limit(strip_tags(isset($about_get->description)), 100) }}" />
<meta name="title" content="{{ isset($about_get->slogan) }} - GetMedia" />
<meta name="og:image" content="{{ asset('assets/img/getmedia-logo.png') }}" />
<meta name="og:image:secure_url" content="{{ asset('assets/img/getmedia-logo.png') }}" />
<meta name="og:image:type" content="image/png" />
<meta property="og:image" content="{{ asset('assets/img/getmedia-logo.png') }}" />
<meta property="og:image:alt" content="{{ isset($about_get->slogan) }}" />
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:type" content="home" />
<link rel="canonical" href="{{ url('/') }}" />
@endsection

@section('style')
<style>
    .link-one {
        color: #175A95;
    }

    .news-tablist .nav-item .nav-link.active {
        color: #175A95;
    }

    /* .btn-three {
        color: var(--secondaryColor);
        background-color: #ffffff;
    } */

    /* .theme-dark.btn-three {
        color: var(--secondaryColor);
        background-color: #ffffff;
    } */

    .btn-three {
        color: #175A95;

        .btn-three i {
            color: #175A95;
        }

        .news-tablist .nav-item .nav-link.active {
            color: #175A95;
        }


        .btn-three {
            color: #175A95;
            background-color: #ffffff;
        }

        .btn-three i {
            color: #175A95;
        }

        .tag-list li a:hover {
            background-color: #175A95;
            color: var(--whiteColor);
        }

        .tag-list li a {
            color: var(--optionalColor);
            background-color: var(--whiteColor);
            border-radius: 5px;
            padding: 7px 15px 3px 17px;
            font-size: 14px;
            line-height: 30px;
            display: inline-block;
            border: 1px solid #eee;
        }

        .theme-dark .tag-list li a:hover {
            background-color: #175A95;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--whiteColor);
        }

        .news-card-one .news-card-img img {
            border-radius: 50%;
            height: 100px;
            width: 100px;
        }

</style>

<style>
    .carousel-control-next,
    .carousel-control-prev {
        width: 50px;
        height: 50px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .carousel-control-next {
        right: 0;
    }

    .carousel-control-prev {
        left: 0;
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        width: 20px;
        height: 20px;
    }

    .d-flex.position-relative {
        position: relative;
    }

    .news-item {
        flex: 1;
        padding: 0 10px;
        box-sizing: border-box;
    }

    .news-item img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .news-metainfo {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .news-metainfo.d-flex {
        display: flex;
        gap: 5px;
    }

    .news-metainfo li {
        font-size: 12px;
        display: flex;
        align-items: center;
    }

    .news-metainfo li a {
        text-decoration: none;
        color: inherit;
        margin-left: 0px;
    }

</style>

<style>
    .theme-dark .link-one:hover,
    .theme-dark .link-one.active,
    .theme-dark .link-two:hover,
    .theme-dark .link-two.active,
    .theme-dark .single-product-tablist .nav-item .nav-link:hover,
    .theme-dark .single-product-tablist .nav-item .nav-link.active,
    .theme-dark .cart-table table tbody tr td .cart-item:hover,
    .theme-dark .cart-table table tbody tr td .cart-item.active,
    .theme-dark .author-box .social-profile li a i:hover,
    .theme-dark .author-box .social-profile li a i.active,
    .theme-dark .checkbox label a:hover,
    .theme-dark .checkbox label a.active,
    .theme-dark .hero-news-card .hero-news-info h3 a:hover,
    .theme-dark .hero-news-card .hero-news-info h3 a.active,
    .theme-dark .news-tablist .nav-item .nav-link:hover,
    .theme-dark .news-tablist .nav-item .nav-link.active,
    .theme-dark .social-widget li a:hover,
    .theme-dark .social-widget li a.active,
    .theme-dark .social-widget-two li a:hover,
    .theme-dark .social-widget-two li a.active,
    .theme-dark .news-card-info .news-author h5 a:hover,
    .theme-dark .news-card-info .news-author h5 a.active,
    .theme-dark .news-card-one .news-card-info h3 a:hover,
    .theme-dark .news-card-one .news-card-info h3 a.active,
    .theme-dark .navbar-area.header-one .navbar .navbar-nav .nav-item .nav-link:hover,
    .theme-dark .navbar-area.header-one .navbar .navbar-nav .nav-item .nav-link.active,
    .theme-dark .navbar-area.header-two .navbar .navbar-nav .nav-item .nav-link:hover,
    .theme-dark .navbar-area.header-two .navbar .navbar-nav .nav-item .nav-link.active,
    .theme-dark .navbar-area.header-three .navbar .navbar-nav .nav-item .nav-link:hover,
    .theme-dark .navbar-area.header-three .navbar .navbar-nav .nav-item .nav-link.active,
    .theme-dark .blog-card-one .blog-card-info h3 a:hover,
    .theme-dark .blog-card-one .blog-card-info h3 a.active,
    .theme-dark .blog-card-two .blog-card-info h3 a:hover,
    .theme-dark .blog-card-two .blog-card-info h3 a.active,
    .theme-dark .breadcrumb-content .breadcrumb-menu li a:hover,
    .theme-dark .breadcrumb-content .breadcrumb-menu li a.active {
        color: #175A95;
    }

    .theme-dark .btn-three {
        background-color: #222222;

    }

    .theme-dark .trending-news-box .trending-news-slider li{
        color: #ffffff;
    }


@media (min-width: 1024px) {
    .iklan-top {
       height: 250px;
    }
}

.btn-three i {
    font-size: 14px;
    color: #175A95;
}

</style>

@endsection

{{-- @if ($news_latest->count() != 0)
    @include('layouts.user.notification')
@endif --}}

@section('content')

<div class="container-fluid">

    {{-- @if ($advertisement_tops)
    <a href="{{ $advertisement_tops->url }}">
        <div class="mt-4 iklan-top" style="position: relative; width: 100%; height: 200px; overflow: hidden;">
            <img class="iklan-top" src="{{ asset($advertisement_tops && $advertisement_tops->image != null ? 'storage/'.$advertisement_tops->image : "CONTOHIKLAN.png") }}" width="100%" height="auto" alt="">
            <div style="width: 100%; background-color: rgba(0, 0, 0, 0.5); color: white; text-align: center; padding: 10px; box-sizing: border-box; position: relative; top: -50px;">
                <a class="text-white" href="jascript:void(0)">Ingin baca berita tanpa iklan?</a> <a href="/subscribe" style="color: #7cadd8; text-decoration: underline;">Berlangganan</a>
            </div>
        </div>
    </a>
    @else
    <div class="container-fluid mt-5 mb-5 d-flex justify-content-center align-items-center" style="height: 200px;  background-color: var(--bgColor);">
        <p style="color: #22222278">Iklan</p>
    </div>
@endif --}}

@php
    $displayedPopulars = $populars->take(10)->where('news_views_count', '>', 0)->pluck('id');
@endphp


<div class="trending-news-box">
    <div class="row gx-5">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 d-flex justify-content-center">
            <div class="trending-prev me-3"><i class="flaticon-left-arrow"></i></div>
            <h4 class="mt-1">Artikel Populer</h4>
            <div class="trending-next ms-3"><i class="flaticon-right-arrow"></i></div>
        </div>
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
            <div class="trending-news-slider swiper">
                <div class="swiper-wrapper">
                    @forelse ($populars->take(10) as $popular)
                    @if ($popular->news_views_count > 0)
                    <div class="swiper-slide news-card-one">
                        <div class="news-card-img">
                            <img src="{{ asset('storage/' . $popular->image) }}" alt="Image" height="100px" width="100px" style="object-fit: cover;" />
                        </div>
                        <div class="news-card-info">
                            <h3><a href="{{ route('news.singlepost', ['news' => $popular->slug]) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                            </h3>
                            <ul class="news-metainfo d-flex list-style">
                                <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a></li>
                                <li><i class="fi fi-rr-eye"></i>{{ $popular->news_views_count }}x dilihat
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

</div>

{{-- @if ($advertisement_tops)
<div class="container-fluid mt-5 mb-5">
    <img src="{{ asset($advertisement_tops && $advertisement_tops->image != null ? 'storage/'.$advertisement_tops->image : "CONTOHIKLAN.png") }}" width="100%" height="166px" style="object-fit: cover" alt="">
</div>
@endif --}}

@php
$filteredPin = $newsPins->take(3);
$pin_id = $filteredPin->pluck('id');

$excludedId = $displayedPopulars->merge($pin_id);

$filteredCategoryPopulars = $categoryPopulars->whereNotIn('id', $excludedId)->take(5);
@endphp

@php
$includeid = $displayedPopulars->merge($pin_id);

$popular_down = $populars->whereNotIn('id', $includeid)->take(15);
$popular_down_id = $popular_down->pluck('id');
@endphp

<div class="container-fluid pb-4">
    <div class="row">
        <!-- Kolom Satu -->
        <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
            @forelse ($filteredCategoryPopulars as $key => $categoryPopular)
            @if ($loop->first)
            <div class="news-card-two">
                <div class="news-card-img">
                    <img src="{{ asset('storage/' . $categoryPopular->image) }}" class="w-100" style="height: 230px; object-fit: cover;" alt="Image" />
                    <a href="{{ route('categories.show.user', $categoryPopular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $categoryPopular->newsCategories[0]->category->name }}</a>
                </div>
                <div class="news-card-info">
                    <h3><a href="{{ route('news.singlepost', ['news' => $categoryPopular->slug]) }}">{{ $categoryPopular->name }}</a></h3>
                    <ul class="news-metainfo d-flex list-style">
                        <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($categoryPopular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a></li>
                        <li><i class="fi fi-rr-eye"></i>{{ $categoryPopular->news_views_count }}x dilihat</li>
                    </ul>
                </div>
            </div>
            @else
            <div class="news-card-three">
                <div class="news-card-img">
                    <img src="{{ asset('storage/' . $categoryPopular->image) }}" class="w-100" style="height: 120px; object-fit: cover;" alt="Image" />
                </div>
                <div class="news-card-info">
                    <a href="{{ route('categories.show.user', $categoryPopular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $categoryPopular->newsCategories[0]->category->name }}</a>
                    <h3><a href="{{ route('news.singlepost', ['news' => $categoryPopular->slug]) }}">{{ $categoryPopular->name }}</a></h3>
                    <ul class="news-metainfo d-flex list-style">
                        <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($categoryPopular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a></li>
                        <li><i class="fi fi-rr-eye"></i>{{ $categoryPopular->news_views_count }}x dilihat</li>
                    </ul>
                </div>
            </div>
            @endif
            @empty
            <div class="text-center">
                <img src="{{ asset('assets/img/no-data/empty.png') }}" width="200px" alt="">
                <h5>Tidak ada data</h5>
            </div>
            @endforelse
        </div>

        <!-- Kolom Dua -->
        <div class="col-lg-4 col-md-12 col-sm-12 mb-6">
            @forelse ($filteredPin as $key => $newsPin)
            @if ($loop->first)
            <div class="news-card-four">
                <img src="{{ asset('storage/' . $newsPin->image) }}" class="w-100" style="height: 450px; object-fit: cover;" alt="Image" />
                <div class="news-card-info">
                    <h3><a href="{{ route('news.singlepost', ['news' => $newsPin->slug]) }}">{{ $newsPin->name }}</a></h3>
                    <ul class="news-metainfo d-flex">
                        <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($newsPin->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a></li>
                        <li><i class="fi fi-rr-eye"></i>{{ $newsPin->news_views_count }}x dilihat</li>
                    </ul>
                </div>
            </div>
            @else
            <div class="news-card-five mb-6">
                <div class="news-card-img">
                    <img src="{{ asset('storage/' . $newsPin->image) }}" class="w-100" style="height: 200px; object-fit: cover;" alt="Image" />
                    <a href="{{ route('categories.show.user', $newsPin->newsCategories[0]->category->slug) }}" class="news-cat">{{ $newsPin->newsCategories[0]->category->name }}</a>
                </div>
                <div class="news-card-info">
                    <h3><a href="{{ route('news.singlepost', ['news' => $newsPin->slug]) }}">{{ Str::limit($newsPin->name, 40, '...') }}</a></h3>
                    <p>{!! Str::limit(strip_tags($newsPin->description), 60) !!}</p>
                    <ul class="news-metainfo d-flex">
                        <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($newsPin->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a></li>
                        <li><i class="fi fi-rr-eye"></i>{{ $newsPin->news_views_count }}x dilihat</li>
                    </ul>
                </div>
            </div>
            @endif
            @empty
            <div class="text-center">
                <img src="{{ asset('assets/img/no-data/empty.png') }}" width="300px" alt="">
                <h5>Tidak ada data</h5>
            </div>
            @endforelse
        </div>

        <!-- Kolom Tiga -->
        <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
            @php
            $categoryRight_id = $filteredCategoryPopulars->pluck('id');
            $includeid = $displayedPopulars->merge($categoryRight_id)->merge($pin_id);
            $filteredCategory2Populars = $category2Populars->whereNotIn('id', $includeid)->take(5);
            @endphp
            @forelse ($filteredCategory2Populars as $key => $category2Popular)
            @if ($loop->first)
            <div class="news-card-two">
                <div class="news-card-img">
                    <img src="{{ asset('storage/' . $category2Popular->image) }}" class="w-100" style="height: 230px; object-fit: cover;" alt="Image" />
                    <a href="{{ route('categories.show.user', $category2Popular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $category2Popular->newsCategories[0]->category->name }}</a>
                </div>
                <div class="news-card-info">
                    <h3><a href="{{ route('news.singlepost', ['news' => $category2Popular->slug]) }}">{{ $category2Popular->name }}</a></h3>
                    <ul class="news-metainfo d-flex list-style">
                        <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($category2Popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a></li>
                        <li><i class="fi fi-rr-eye"></i>{{ $category2Popular->news_views_count }}x dilihat</li>
                    </ul>
                </div>
            </div>
            @else
            <div class="news-card-three">
                <div class="news-card-img">
                    <img src="{{ asset('storage/' . $category2Popular->image) }}" class="w-100" style="height: 120px; object-fit: cover;" alt="Image" />
                </div>
                <div class="news-card-info">
                    <a href="{{ route('categories.show.user', $category2Popular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $category2Popular->newsCategories[0]->category->name }}</a>
                    <h3><a href="{{ route('news.singlepost', ['news' => $category2Popular->slug]) }}">{{ $category2Popular->name }}</a></h3>
                    <ul class="news-metainfo d-flex list-style">
                        <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($category2Popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a></li>
                        <li><i class="fi fi-rr-eye"></i>{{ $category2Popular->news_views_count }}x dilihat</li>
                    </ul>
                </div>
            </div>
            @endif
            @empty
            <div class="text-center">
                <img src="{{ asset('assets/img/no-data/empty.png') }}" width="200px" alt="">
                <h5>Tidak ada data</h5>
            </div>
            @endforelse
        </div>
    </div>
</div>

<div class="container-fluid pb-75">
    @php
    $categoryRight_id = $filteredCategoryPopulars->pluck('id');
    $pin_id = $filteredPin->pluck('id');
    $categoryLeft_id = $filteredCategory2Populars->pluck('id');

    $includeid = $displayedPopulars->merge($categoryRight_id);
    $excludedIds = $includeid->merge($pin_id);
    $latestid = $excludedIds->merge($categoryLeft_id);

    $latests_news = $latests->whereNotIn('id', $latestid);
    @endphp


    @if($latests_news->isNotEmpty())
    <div class="row align-items-start mb-40">
        <div class="col-md-7">
            <h2 class="section-title">Artikel Terbaru</h2>
            <div class="mb-4 col-3" style="border: 1px solid #E93314; width: 200px"></div>
        </div>
        <div class="col-md-5 text-md-end">
            <a href="{{ route('latest.news') }}" class="link-one">Lihat Semua<i class="flaticon-right-arrow"></i></a>
        </div>
    </div>
    @endif

    <div class="row gx-45">
        <div class="col-xl-9">
            @if($latests_news->isNotEmpty())
            <div class="news-col-wrap">

                @forelse ($latests_news as $latest)
                <div class="news-card-five pb-3">
                    <div class="news-card-img">
                        <img src="{{ asset('storage/' . $latest->image) }}" class="w-100" style="height: 150px; object-fit: cover;" alt="{{ $latest->image }}" />
                        <a href="{{ route('categories.show.user', $latest->newsCategories[0]->category->slug) }}" class="news-cat">{{ $latest->newsCategories[0]->category->name }}</a>
                    </div>
                    <div class="news-card-info">
                        <h3><a href="{{ route('news.singlepost', ['news' => $latest->slug]) }}">{{ Str::limit($latest->name, 150, '...') }}</a>
                        </h3>
                        <p>{!! Str::limit(strip_tags($latest->description), 160) !!}</p>

                        <ul class="news-metainfo d-flex list-style">
                            <li class="author">
                                <span class="author-img">
                                    @if ($latest->user->image != null && Storage::disk('public')->exists($latest->user->image))
                                    <img src="{{ asset('storage/' . $latest->user->image) }}">
                                    @else
                                    <img src="{{ asset('default.png') }}">
                                    @endif
                                </span>
                                <a href="{{ route('author.detail', ['author' => $latest->user->slug]) }}">{{ $latest->user->name }}</a>
                            </li>
                            <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($latest->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                            </li>
                            <li><i class="fi fi-rr-eye"></i>{{ $latest->newsViews()->count() }}x dilihat</li>
                        </ul>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div>
                            <img src="{{ asset('assets/img/no-data/empty.png') }}" width="200px" alt="">
                        </div>
                    </div>
                    <div class="text-center">
                        <h5>Tidak ada data</h5>
                    </div>
                </div>
                @endforelse
            </div>
            @endif

            <div class="left-content mt-5 pt-5">
                @if($popular_down->isNotEmpty())
                <div class="row align-items-end mb-40">
                    <div class="col-md-7">
                        <h2 class="section-title">Artikel Paling Populer</h2>
                    </div>
                    <div class="col-md-5 text-md-end">
                        <a href="{{ route('popular.news') }}" class="link-one">Lihat Semua<i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>

                <div class="row gx-45">
                    <div class="col-xl-7">
                        @forelse ($popular_down as $key => $popular)
                        @if ($key == 11)
                        <div class="news-card-four">
                            <img src="{{ asset('storage/' . $popular->image) }}" class="w-100" style="height: 500px; object-fit: cover;" alt="Image" />
                            <div class="news-card-info">
                                <h3><a href="{{ route('news.singlepost', $popular->slug) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                                </h3>
                                <ul class="news-metainfo d-flex list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                    </li>
                                    <li><i class="fi fi-rr-eye"></i>{{ $popular->newsViews()->count() }}x
                                        dilihat</li>
                                </ul>
                            </div>
                        </div>
                        @elseif ($key >= 13)
                        <div class="news-card-five">
                            <div class="news-card-img">
                                <img src="{{ asset('storage/' . $popular->image) }}" class="w-100" style="height: 150px; object-fit: cover;" alt="Image" />
                                <a href="{{ route('categories.show.user', $popular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $popular->newsCategories[0]->category->name }}</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="{{ route('news.singlepost', $popular->slug) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                                </h3>
                                <p>{{ Str::limit($popular->name, 120, '...') }}</p>
                                <ul class="news-metainfo d-flex list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                    </li>
                                    <li><i class="fi fi-rr-eye"></i>{{ $popular->newsViews()->count() }}x
                                        dilihat</li>
                                </ul>
                            </div>
                        </div>
                        @else
                        @endif
                        @empty
                        <div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('assets/img/no-data/empty.png') }}" width="250px" alt="">
                                </div>
                            </div>
                            <div class="text-center">
                                <h5>Tidak ada data</h5>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <div class="col-xl-5">
                        @forelse ($populars->take(18) as $key => $popular)
                        @if ($key == 12)
                        <div class="news-card-two">
                            <div class="news-card-img">
                                <img src="{{ asset('storage/' . $popular->image) }}" class="w-100" style="height: 300px; object-fit: cover;" alt="Image" />
                                <a href="{{ route('categories.show.user', $popular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $popular->newsCategories[0]->category->name }}</a>
                            </div>
                            <div class="news-card-info">
                                <h3><a href="{{ route('news.singlepost', $popular->slug) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                                </h3>
                                <ul class="news-metainfo d-flex list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                    </li>
                                    <li><i class="fi fi-rr-eye"></i>{{ $popular->newsViews()->count() }}x
                                        dilihat</li>
                                </ul>
                            </div>
                        </div>
                        @elseif ($key >= 15)
                        <div class="news-card-three">
                            <div class="news-card-img">
                                <img src="{{ asset('storage/' . $popular->image) }}" class="w-100" style="height: 100px; object-fit: cover;" alt="Image" />
                            </div>
                            <div class="news-card-info">
                                <a href="{{ route('categories.show.user', $popular->newsCategories[0]->category->slug) }}" class="news-cat">{{ $popular->newsCategories[0]->category->name }}</a>
                                <h3><a href="{{ route('news.singlepost', $popular->slug) }}">{{ Str::limit($popular->name, 50, '...') }}</a>
                                </h3>
                                <ul class="news-metainfo d-flex list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($popular->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                    </li>
                                    <li><i class="fi fi-rr-eye"></i>{{ $popular->newsViews()->count() }}x
                                        dilihat</li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @empty
                        <div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('assets/img/no-data/empty.png') }}" width="200px" alt="">
                                </div>
                            </div>
                            <div class="text-center">
                                <h5>Tidak ada data</h5>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>

                @endif
            </div>

        </div>
        <div class="col-xl-3">
            <div class="sidebar">


                @if($popularCategories->isNotEmpty())
                <div class="sidebar-widget">
                    <h3 class="sidebar-widget-title">Kategori Populer</h3>
                    <ul class="category-widget list-style">
                        @forelse ($popularCategories as $popularCategory)
                        <li>
                            <a href="{{ route('categories.show.user', $popularCategory->slug) }}"><img src="assets/img/icons/arrow-right.svg" alt="Image">{{ $popularCategory->name }}
                                <span>({{ $popularCategory->newsCategories()->count() }})</span></a>
                        </li>
                        @empty
                        <div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('assets/img/no-data/empty.png') }}" width="150px" alt="">
                                </div>
                            </div>
                            <div class="text-center">
                                <h5>Tidak ada data</h5>
                            </div>
                        </div>
                        @endforelse
                    </ul>
                </div>
                @endif
                {{-- <div class="sidebar-widget-two">
                    <div class="contact-widget">
                        <img src="assets/img/contact-bg.svg" alt="Image" class="contact-shape" />
                        <a href="index.html" class="logo">
                            <img class="logo-light" src="{{ asset('assets/img/logo/get-media-dark.svg') }}" alt="Image" />
                <img class="logo-dark" src="{{ asset('assets/img/logo/get-media-light.svg') }}" alt="Image" />
                </a>
                <p>GetMedia berita terlengkap dengan berita terbaru dan terpopuler.</p>
                <ul class="social-profile list-style">
                    <li>
                        <a href="https://www.fb.com/" target="_blank"><i class="flaticon-facebook-1"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank"><i class="flaticon-twitter-1"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank"><i class="flaticon-instagram-2"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="flaticon-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div> --}}
        @if($tags->isNotEmpty())
        <div class="sidebar-widget">
            <h3 class="sidebar-widget-title">Tag Populer</h3>
            <ul class="tag-list list-style">
                @forelse ($tags as $tag)
                <li><a href="{{ route('news-tag-list.user', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                </li>
                @empty
                <div>
                    <div class="d-flex justify-content-center">
                        <div>
                            <img src="{{ asset('assets/img/no-data/empty.png') }}" width="150px" alt="">
                        </div>
                    </div>
                    <div class="text-center">
                        <h5>Tidak ada data</h5>
                    </div>
                </div>
                @endforelse
            </ul>
        </div>
        @endif

        {{-- <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner mb-3">
                <div class="carousel-item active">
                    <div class="d-flex">
                        <div>
                            <img src="{{ asset('assets/img/news/news-2.webp') }}" class="d-block w-100" alt="...">
        <h3 class="pt-2" style="font-size: 12px"><a href="javascript:void(0)">Loerm oamod oekp eocoinw xskni kopi oakoel iaklo oaidnx</a></h3>
        <div class="news-card-info">
            <ul class="news-metainfo d-flex list-style d-flex" style="margin: 0;">
                <li style="font-size: 11px; margin: 0; padding:0">
                    <i class="fi fi-rr-calendar-minus pt-1" style="font-size: 11px; margin: 0;"></i>
                    <a href="javascript:void(0)" class="ms-3">Apr 25, 2023</a>
                </li>
                <li style="font-size: 11px; margin: 0; padding:0">
                    <i class="fi fi-rr-eye pt-1" style="font-size: 11px; margin: 0;"></i>
                    <a href="" class="ms-3">129x dilihat</a>
                </li>
            </ul>
        </div>

    </div>
    <div class="ms-3">
        <img src="{{ asset('assets/img/news/news-2.webp') }}" class="d-block w-100" alt="...">
        <h3 class="pt-2" style="font-size: 12px"><a href="javascript:void(0)">Loerm oamod oekp eocoinw xskni kopi oakoel iaklo oaidnx</a></h3>
        <div class="news-card-info">
            <ul class="news-metainfo d-flex list-style d-flex" style="margin: 0;">
                <li style="font-size: 11px; margin: 0; padding:0">
                    <i class="fi fi-rr-calendar-minus pt-1" style="font-size: 11px; margin: 0;"></i>
                    <a href="javascript:void(0)" class="ms-3">Apr 25, 2023</a>
                </li>
                <li style="font-size: 11px; margin: 0; padding:0">
                    <i class="fi fi-rr-eye pt-1" style="font-size: 11px; margin: 0;"></i>
                    <a href="" class="ms-3">129x dilihat</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="carousel-item">
    <div class="d-flex">
        <div>
            <img src="{{ asset('assets/img/news/news-2.webp') }}" class="d-block w-100" alt="...">
            <h3 class="pt-2" style="font-size: 12px"><a href="javascript:void(0)">Loerm oamod oekp eocoinw xskni kopi oakoel iaklo oaidnx</a></h3>
            <div class="news-card-info">
                <ul class="news-metainfo d-flex list-style d-flex" style="margin: 0;">
                    <li style="font-size: 11px; margin: 0; padding:0">
                        <i class="fi fi-rr-calendar-minus pt-1" style="font-size: 11px; margin: 0;"></i>
                        <a href="javascript:void(0)" class="ms-3">Apr 25, 2023</a>
                    </li>
                    <li style="font-size: 11px; margin: 0; padding:0">
                        <i class="fi fi-rr-eye pt-1" style="font-size: 11px; margin: 0;"></i>
                        <a href="" class="ms-3">129x dilihat</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="ms-3">
            <img src="{{ asset('assets/img/news/news-2.webp') }}" class="d-block w-100" alt="...">
            <h3 class="pt-2" style="font-size: 12px"><a href="javascript:void(0)">Loerm oamod oekp eocoinw xskni kopi oakoel iaklo oaidnx</a></h3>
            <div class="news-card-info">
                <ul class="news-metainfo d-flex list-style d-flex" style="margin: 0;">
                    <li style="font-size: 11px; margin: 0; padding:0">
                        <i class="fi fi-rr-calendar-minus pt-1" style="font-size: 11px; margin: 0;"></i>
                        <a href="javascript:void(0)" class="ms-3">Apr 25, 2023</a>
                    </li>
                    <li style="font-size: 11px; margin: 0; padding:0">
                        <i class="fi fi-rr-eye pt-1" style="font-size: 11px; margin: 0;"></i>
                        <a href="" class="ms-3">129x dilihat</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div> --}}

{{-- @if ($advertisement_rights)
<a href="{{ $advertisement_rights->url }}">
    <div class="sidebar">
        <img src="{{ asset($advertisement_rights->image ? 'storage/'.$advertisement_rights->image : 'CONTOHIKLAN.png') }}" width="100%" height="473px" style="object-fit: cover" alt="...">
    </div>
</a>
@else
<div class="sidebar-widget d-flex justify-content-center align-items-center" style="height: 473px">
    <p style="color: #22222278">Iklan</p>
</div>
@endif --}}


</div>
</div>
</div>

</div>

@if($categoriesPin->isNotEmpty())
<div class="bg_gray editor-news pt-100 pb-75">
    <div class="container-fluid">
        <div class="row gx-5">
            <div class="col-xl-12">
                <div class="editor-box">
                    <div class="row align-items-end mb-40">
                        <div class="col-xl-6 col-md-6">
                            <h2 class="section-title">Pilihan Editor</h2>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <ul class="nav nav-tabs news-tablist d-flex justify-content-end" role="tablist">
                                @foreach ($categoriesPin as $key => $category)
                                <li class="nav-item">
                                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" data-bs-target="#hu{{ ++$key }}" type="button" role="tab">{{ $category->name }}</button>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content editor-news-content">
                        @forelse ($categoriesPin as $key => $category)
                        <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="hu{{ ++$key }}" role="tabpanel">
                            <div class="row">
                                @foreach ($newsByCategory[$category->name]->take(6) as $newsPin)
                                <div class="col-md-4">
                                    <div class="news-card-six">
                                        <div class="news-card-img">
                                            <img src="{{ asset('storage/' . $newsPin->image) }}" class="w-100" style="height: 240px; object-fit: cover;" alt="Image" />
                                            <a href="{{ route('categories.show.user', $newsPin->newsCategories[0]->category->slug) }}" class="news-cat">{{ $newsPin->newsCategories[0]->category->name }}</a>
                                        </div>
                                        <div class="news-card-info">
                                            <div class="news-author">
                                                <div class="news-author-img">
                                                    @if ($newsPin->user->image != null && Storage::disk('public')->exists($newsPin->user->image))
                                                    <img src="{{ asset('storage/' . $newsPin->user->image) }}">
                                                    @else
                                                    <img src="{{ asset('default.png') }}">
                                                    @endif
                                                </div>
                                                <h5>By <a href="{{ route('author.detail', ['author' => $newsPin->user->slug]) }}">{{ $newsPin->user->name }}</a>
                                                </h5>
                                            </div>
                                            <h3><a href="{{ route('news.singlepost', $newsPin->slug) }}">{{ Str::limit($newsPin->name, 50, '...') }}</a>
                                            </h3>
                                            <ul class="news-metainfo d-flex list-style">
                                                <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($newsPin->date)->locale('id_ID')->isoFormat('D MMMM Y') }}</a>
                                                </li>
                                                <li><i class="fi fi-rr-comment"></i>0</li>
                                                <li><i class="fi fi-rr-eye"></i>{{ $newsPin->newsViews()->count() }}x
                                                    dilihat</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @empty
                        <div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('assets/img/no-data/empty.png') }}" width="250px" alt="">
                                </div>
                            </div>
                            <div class="text-center">
                                <h5>Tidak ada data</h5>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <a href="{{ route('all-pinned-list.user') }}" class="btn-three d-block w-100 mt-20">Lihat Lainnya<i class="flaticon-arrow-right "></i></a>

        </div>
    </div>
</div>

@endif

<button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
    <i class="ri-arrow-up-line"></i>
</button>

{{-- @if ($advertisement_unders)
<a href="{{ $advertisement_unders->url }}">
    <div class="container-fluid mt-5 mb-5">
        <img src="{{ asset($advertisement_unders && $advertisement_unders->image != null ? 'storage/'.$advertisement_unders->image : "CONTOHIKLAN.png") }}" width="100%" height="295px" style="object-fit: cover" alt="">
    </div>
</a>
@else
<div class="container-fluid mt-5 mb-5 d-flex justify-content-center align-items-center" style="height: 295px;  background-color: var(--bgColor);">
    <p style="color: #22222278">Iklan</p>
</div>
@endif --}}
{{--
    <div class="modal fade" id="newsletter-popup" tabindex="-1" aria-labelledby="newsletter-popup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fi fi-rr-cross"></i>
                </button>
                <div class="modal-body">
                    <div class="newsletter-bg bg-f"></div>
                    <div class="newsletter-content">
                        <img src="assets/img/newsletter-icon.webp" alt="Image" class="newsletter-icon" />
                        <h2>Join Our Newsletter & Read The New Posts First</h2>
                        <form action="#" class="newsletter-form">
                            <input type="email" placeholder="Email Address" />
                            <button type="button" class="btn-one">Subscribe<i class="flaticon-arrow-right"></i></button>
                        </form>
                        <div class="form-check checkbox">
                            <input class="form-check-input" type="checkbox" id="test_21" />
                            <label class="form-check-label" for="test_21"> I've read and accept <a
                                    href="{{ route('privacy-policy') }}">Privacy Policy</a> </label>
</div>
</div>
</div>
</div>
</div>
</div> --}}

<div class="modal fade" id="quickview-modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickview-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
            <div class="modal-body">
                <div class="video-popup">
                    <iframe width="885" height="498" src="https://www.youtube.com/embed/3FjT7etqxt8" title="How to Design an Elvis Movie Poster in Photoshop" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
