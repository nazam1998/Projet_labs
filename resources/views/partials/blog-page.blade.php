	<!-- page section -->
	<div class="page-section spad">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-8 col-sm-7 blog-posts">
	                @foreach ($articles as $item)
	                <!-- Post item -->
	                <div class="post-item">
	                    <div class="post-thumbnail">
	                        <img src="{{asset('storage/'.$item->image)}}" alt="">
	                        <div class="post-date">
	                            <h2>{{$item->created_at->format('d')}}</h2>
	                            <h3>{{\Illuminate\Support\Str::limit(date('F',strtotime($item->created_at)), 3, $end='')}}
	                                {{$item->created_at->format('Y')}}</h3>
	                        </div>
	                    </div>
	                    <div class="post-content">
	                        <h2 class="post-title">{{$item->titre}}</h2>
	                        <div class="post-meta">
	                            <a href="">{{$item->categorie->categorie}}</a>
	                            <a href="">
	                            @foreach ($item->tags as $index=>$tag)
	                                @if ($index!=count($item->tags)-1)
	                                {{$tag->tag}},
	                                @else
	                                {{$tag->tag}}

	                                @endif
									@endforeach
	                            </a>
	                            <a href="">{{$item->comments->count()}}</a>
	                        </div>
	                        <p>{{\Illuminate\Support\Str::limit($item->texte, 150, $end='...') }}</p>
	                        <a href="{{route('post',$item->id)}}" class="read-more">Read More</a>
	                    </div>
	                </div>
	                @endforeach
	                <!-- Pagination -->
	                @if (\Request::route()->getName()=='blog')

	                <div class="page-pagination">
	                    {{$articles->links()}}
	                </div>
	                @endif
	            </div>
	            <!-- Sidebar area -->
	            <div class="col-md-4 col-sm-5 sidebar">
	                <!-- Single widget -->
	                <div class="widget-item">
	                    <form action="{{route('search')}}" class="search-form" method="POST">
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

	                        <li><a href="{{route('searchCat',$item)}}">{{$item->categorie}}</a></li>
	                        @endforeach
	                    </ul>
	                </div>
	                <!-- Single widget -->
	                <div class="widget-item">
	                    <h2 class="widget-title">Tags</h2>
	                    <ul class="tag">
	                        @foreach ($tags as $item)

	                        <li><a href="{{route('searchTag',$item)}}">{{$item->tag}}</a></li>
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
