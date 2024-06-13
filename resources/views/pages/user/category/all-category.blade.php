@extends('layouts.user.app')


@section('style')
    <style>
        @media (min-width: 768px) {
            .icon-eye {
                margin-top: 12px;
            }
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
        .breadcrumb-menu li:after {
            color: #000;
        }
    </style>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="breadcrumb-wrap">
            <h2 class="breadcrumb-title">{{ $category->name }} - Terbaru</h2>
            <ul class="breadcrumb-menu list-style">
                <li><a href="/">Beranda</a></li>
                <li>{{ $category->name }}</li>
            </ul>
        </div>
    </div>

    <div class="sports-wrap ptb-100">
        <div class="container">
            <div class="row gx-55 gx-5">
                <div class="col-lg-8">

                    <div>
                        @forelse ($news as $item)
                            <div class="news-card-five">
                                <div class="news-card-img">
                                    <a href="#"><img src="{{asset('storage/'. $item->image)}}" alt="Image" height="140" width="100%" /></a>
                                    <a data-toggle="tooltip" data-placement="top" title="{{ $item->newsCategories[0]->category->name }}"
                                        href="#" class="news-cat">{{ $item->newsCategories[0]->category->name }}</a>
                                </div>
                                <div class="news-card-info">
                                    <h3><a data-toggle="tooltip" data-placement="top" title="Muga Nemo Aptent Quaerat Explicabo Urna Ni Like Ange"
                                            href="{{ route('news.singlepost', ['news' => $item->slug]) }}">{!! Illuminate\Support\Str::limit(strip_tags($item->name), 200, '...') !!}
                                        </a>
                                    </h3>
                                    <p>{!! Illuminate\Support\Str::limit(strip_tags($item->name), 200, '...') !!}</p>
                                    <ul class="news-metainfo list-style">
                                        <li><i class="fi fi-rr-calendar-minus"></i><a href="javascript:void(0)">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('d F Y') }}</a></li>
                                        <li><i class="fi fi-rr-eye"></i><a href="javascript:void(0)">{{ $item->newsViews_count ? $item->newsViews_count : '0' }}x dilihat</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        @empty
                            
                        @endforelse
                        
                    </div>

                    {{-- <div class="text-center item-center d-flex justify-content-center" style="background-color:#F6F6F6; width:100%;height:200px;">
                    <h5 class="mt-5">Iklan</h5>
                </div> --}}

                </div>

                <div class="col-lg-4">
                    <div class="">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget-title">Kategori Populer</h3>
                                <ul class="category-widget list-style">
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="Fashion"
                                            href="#"><img
                                                src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                                alt="Image">Fashion
                                            <span>( 10 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="Fashion"
                                            href="#"><img
                                                src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                                alt="Image">Fashion
                                            <span>( 10 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="Fashion"
                                            href="#"><img
                                                src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                                alt="Image">Fashion
                                            <span>( 10 )</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tooltip" data-placement="top" title="Fashion"
                                            href="#"><img
                                                src="{{ asset('assets/img/icons/arrow-right.svg') }}"
                                                alt="Image">Fashion
                                            <span>( 10 )</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="sidebar-widget bg-transparent shadow-sm">
                                <h3 class="sidebar-widget-title">Tag Populer</h3>
                                <ul class="tag-list list-style">
                                <li><a href="{{route('list-tag.user')}}">BUSINESS</a></li>
                                <li><a href="{{route('list-tag.user')}}">FOOD</a></li>
                                <li><a href="{{route('list-tag.user')}}">SCIENCE</a></li>
                                <li><a href="{{route('list-tag.user')}}">LIFESTYLE</a></li>
                                <li><a href="{{route('list-tag.user')}}">SPORTS</a></li>
                                <li><a href="{{route('list-tag.user')}}">PHOTO</a></li>
                                <li><a href="{{route('list-tag.user')}}">TECHNOLOGY</a></li>
                                <li><a href="{{route('list-tag.user')}}">CONTENT</a></li>
                                <li><a href="{{route('list-tag.user')}}">FEATURED</a></li>
                                <li><a href="{{route('list-tag.user')}}">AUDIO</a></li>
                                <li><a href="{{route('list-tag.user')}}">FASHION</a></li>
                                </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
