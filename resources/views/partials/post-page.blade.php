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
							<h2>{{$article->created_at->format('d')}}</h2>
								<h3>{{\Illuminate\Support\Str::limit(date('F',strtotime($article->created_at)), 3, $end='')}} {{$article->created_at->format('Y')}}</h3>
							</div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->titre}}</h2>
                        <div class="post-meta">
                            <a href="">{{$article->categorie->categorie}}</a>
                            <a href="">
                            @foreach ($article->tags as $index=>$item)
                                @if ($index!=count($article->tags)-1)
                                {{$item->tag}},

                                @else
                                {{$item->tag}}

                                @endif
                                @endforeach
                            </a>
                            <a href="">{{$article->comments->count()}}</a>
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
                    <div class="comments">
                        <h2>Comments ({{$article->comments->count()}})</h2>
                        <ul class="comment-list">
                            @foreach ($comments as $item)

                            <li>
                                <div class="avatar">
                                    <img src="{{asset('storage/'.$item->user->image)}}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>{{$item->user->nom.' '.$item->user->prenom}} | {{$item->created_at}}</h3>
                                    <p>{{$item->message}}</p>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
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
                <form action="{{route('search')}}" class="search-form" method="POST">
                        <input type="text" placeholder="Search" name="titre">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $item)

                        <li><a href="#">{{$item->categorie}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $item)

                        <li><a href="">{{$item->tag}}</a></li>
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
