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
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->titre}}</h2>
                        <div class="post-meta">
                            <a href="">{{$article->categorie->categorie}}</a>
                            <a href="">@foreach ($article->tags as $item)
                                {{$item->tag}},
                                @endforeach</a>
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
                            <form class="form-class">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="site-btn">send</button>
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
