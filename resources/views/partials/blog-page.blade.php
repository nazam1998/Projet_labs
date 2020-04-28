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
	                            <h2>{{$item->date()}}</h2>
	                            <h3>{{$item->month()}}
	                                {{$item->year()}}</h3>
	                        </div>
	                    </div>
	                    <div class="post-content">
	                        <h2 class="post-title">{{$item->titre}}</h2>
	                        <div class="post-meta">
							<span><a href="{{route('searchCat',$item->categorie)}}">{{$item->categorie->categorie}}</a></span>
								<span>

									@foreach ($item->tags->shuffle()->take(3) as $index=>$tag)
								<a href="{{route('searchTag',$tag)}}">
	                                @if($loop->last)
	                                {{$tag->tag}}
	                                @else
	                                {{$tag->tag}},
	                                @endif
	                            </a>
	                                @endforeach
							</span>
						<span><a href="{{route('post',$item->id).'#comments'}}">{{$item->comments->count()}} comment(s)</a></span>
	                        </div>
	                        <p>{{\Illuminate\Support\Str::limit($item->texte, 150, $end='...') }}</p>
	                        <a href="{{route('post',$item->id)}}" class="read-more">Read More</a>
	                    </div>
	                </div>
	                @endforeach
	                <!-- Pagination -->


	                <div class="page-pagination">
	                    {{$articles->links()}}
	                </div>

	            </div>
	            <!-- Sidebar area -->
	            <div class="col-md-4 col-sm-5 sidebar">
	                @error('titre')
	                <p class="alert alert-danger">{{$message}}</p>
	                @enderror
	                <!-- Single widget -->
	                <div class="widget-item">
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
	                                {{-- @csrf --}}
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
