@extends("layouts.app")

@section("content")
    <div style="background-color:powderblue;" class="container">

        @if(session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif
        <ul  class="navbar-nav ml-auto">
            <img  src="{{ URL::to('/img/counseling_hero.jpg') }}"  alt="tag"  height="100%" width="100%"/>
        </ul>
        <!-- {{ $articles->links() }} -->

        @foreach($articles as $article)
            <!-- <div class="card mb-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <div class="card-subtitle mb-2 text-muted small">
                        {{ $article->created_at->diffForHumans() }},
                        Category: <b>{{ $article->category->name }}</b>,
                        ({{ count($article->comments) }}) Comments
                    </div>
                    <p class="card-text">{{ $article->body }}</p>
                    <a class="card-link"
                        href="{{ url("/articles/detail/$article->id") }}">
                        View Detail &raquo;
                    </a>
                </div>
            </div> -->
        @endforeach
    </div>
@endsection
