@extends('layout')
@section('title-user')
    Tin tức
@endsection
@section('content-layout')
    <div class="container pt-4">
        <div class="news1" style="display: flex; justify-content: center;">
            <div class="col-md-7">
                <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="img-news"
                    style="width: 100%; height: 350px;" alt="">
            </div>
            <div class="col-md-5" style="margin: 30px; ">
                <div class="news1-title">
                    <h3>Tin mới</h3>
                </div>
                <ul class="list-news1 list-group-flush">
                    @foreach ($latest_titles as $newtt)
                        <a class="list-group-item" href="{{ route('getDetailNews', $newtt->id) }}">
                            <li>{{ $newtt->title }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <h3 class="title">Tin tức & sự kiện</h3>
        <div class="news2 row " style="margin-bottom: 30px; display: flex; justify-content: space-between;">
            @foreach ($latest_news as $item)
                <div class="card-news2 col-3">
                    <a href="{{ route('getDetailNews', $item->id) }}">
                        <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="img-news"
                            width="100%" alt="...">
                        <div class="card-body">
                            <h4 class="new2-title" style="text-align: center;">{{ $item->title }}</h4>
                            <p class="new2-text" style="text-align: justify;">{{ $item->created_at->format('d.m.Y') }}</p>
                            <p class="new2-text" style="text-align: justify; font-size: 12px;">
                                {{ $item->content }}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
