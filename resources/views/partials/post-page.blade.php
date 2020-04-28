<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="{{asset('storage/'.$article->image)}}" alt="">
                        <div class="post-date">
                            <h2>{{$article->date()}}</h2>
                            <h3>{{$article->month()}}
                                {{$article->year()}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->titre}}</h2>
                        <div class="post-meta">
                        <span><a href="{{route('searchCat',$article->categorie)}}">{{$article->categorie->categorie}}</a></span>
                           <span>
                            @foreach ($article->tags->shuffle()->take(3) as $index=>$item)
                           <a href="{{route('searchTag',$item)}}">
                                @if($loop->last)
                                {{$item->tag}}
                                @else
                                {{$item->tag}},
                                @endif
                            </a>
                                @endforeach
                            </span>
                          <span><a href="#comments">{{$article->comments->count()}} comment(s)</a></span>
                        </div>
                        <p>{{$article->texte}}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="{{asset('storage/'.$article->user->image)}}" alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{$article->user->nom.' '.$article->user->prenom}},
                                <span>{{$article->user->role->role}}</span></h2>
                            <p>{{$article->user->description}}</p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments" id='comments'>
                        <h2>Comments ({{$article->comments->count()}})</h2>
                        <ul class="comment-list">
                            @foreach ($comments as $item)

                            <li>

                                <div class="avatar">
                                    <img src="{{asset('storage/'.$item->user->image)}}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>{{$item->user->nom.' '.$item->user->prenom}} |
                                        {{$item->created_at->format('d')}}
                                        {{\Illuminate\Support\Str::limit(date('F',strtotime($item->created_at)), 3, $end='')}},
                                        {{$item->created_at->format('Y')}} | {{$item->created_at->format('H:i:s')}}</h3>

                                    <p>{{$item->comment}}</p>
                                    @can('delete',$item, App\Comment::class)
                                    <form action="{{route('comment.destroy',$item)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    @endcan
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from" id="comment">
                            <h2>Leave a comment</h2>
                            @error('comment')
                            <p class="alert alert-danger">{{$message}}</p>
                            @enderror
                            @if (session()->has('msg'))
                            <p class="alert alert-success">{{session('msg')}}</p>
                            @endif
                            <form class="form-class" method="POST" action="{{route('comment.store',$article)}}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="comment" placeholder="Message"></textarea>
                                        @auth
                                        <button class="site-btn" type="submit">send</button>
                                        @else
                                        <button disabled="disabled">send</button>
                                        @endauth
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    @error('titre')
                <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                    <form action="{{route('search')}}" class="search-form" method="GET">
                        @csrf
                        <input type="text" placeholder="Search" name="titre">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $item)
                        <li>
                            <form action="{{route('searchCat',$item)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-transparent">{{$item->categorie}}</button>
                            </form>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $item)

                        <li>
                            <form action="{{route('searchTag',$item)}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-transparent">{{$item->tag}}</button>
                            </form>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>{{$blog->quote}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- page section end-->
