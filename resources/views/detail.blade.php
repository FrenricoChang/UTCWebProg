<style>
    .pembungkus{
        padding: 0;
        margin: 0;
        margin-left: 4.5vw;
        margin-right: 4.5vw;
        box-sizing: border-box;

        display: flex;
        flex-direction: column;
    }

    .itreallycounts{
        margin-top: 1.3vw;
        margin-bottom: 1.5vw;
        text-decoration: underline;
        font-size: 1vw;
        font-weight: 500;
    }

    .juduldetail{
        font-family: 'Times New Roman', Times, serif;
        font-size: 3.8vw;
        font-weight: bold;
    }

    .subjuduldetail{
        font-size: 1vw;
        margin-bottom: 0.2vw;
    }

    .namatanggal{
        font-size: 1vw;
        margin-bottom: 0.2vw;
    }

    .fotodetail{
        height: 20vw;
        border: red solid;
    }

    .kotaksosmed{
        display: flex;
        flex-direction: row;
        gap: 0.3vw;
        margin-top: 1vw;
        margin-bottom: 2vw;
    }

    .isidetail{
        font-size: 1vw;
    }

    .kotakvideo{
        margin-top: 2vw;
    }

    .videosection{
        font-size: 1.1vw;
        font-weight: bold;
    }

    .videodetail{
        height: 25vw;
        border: red solid;
    }

</style>

@extends('layout.master')
@section('title', 'Detail')
@section('content')

<div class="pembungkus">

    <div class="itreallycounts">
        IT REALLY COUNTS
    </div>

    <div class="juduldetail">
        {{ $book->title }}
    </div>

    <div class="subjuduldetail">
        In San Diego|jfaksjfhasjkf
    </div>

    <div class="namatanggal">
        {{ $book->author }} | {{ $book->published_date }}
    </div>

    <div class="fotodetail">

    </div>

    <div class="kotaksosmed">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 14 14"><path fill="currentColor" d="M7 0c3.87 0 7 3.13 7 7s-3.13 7-7 7s-7-3.13-7-7s3.13-7 7-7ZM5.72 10.69c3.1 0 4.8-2.57 4.8-4.8v-.22c.33-.24.62-.54.84-.88c-.3.13-.63.22-.97.27c.35-.21.62-.54.74-.93c-.33.19-.69.33-1.07.41c-.31-.33-.75-.53-1.23-.53c-.93 0-1.69.76-1.69 1.69c0 .13.01.26.05.38c-1.4-.07-2.65-.74-3.48-1.76c-.14.25-.23.54-.23.85c0 .58.3 1.1.75 1.4c-.28 0-.54-.08-.76-.21v.02c0 .82.58 1.5 1.35 1.66c-.14.04-.29.06-.44.06c-.11 0-.21-.01-.32-.03c.21.67.84 1.16 1.57 1.17c-.58.45-1.31.72-2.1.72c-.14 0-.27 0-.4-.02c.74.48 1.63.76 2.58.76" class="cls-1"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z"/></svg>
    </div>

    <div class="isidetail">
        {{ $book->description }}
    </div>

    <div class="kotakvideo">
        <div class="videosection">
            Video Section
        </div>

        <div class="videodetail">

        </div>
    </div>
</div>


@endsection
