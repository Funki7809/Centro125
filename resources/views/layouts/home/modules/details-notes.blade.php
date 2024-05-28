<!-- Tab panes -->
<div class="tab-content p-t-35">
    <!-- - -->
    <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
        <div class="row">
            @if(count($category->note) >= 4)
            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                <!-- Item post -->
                <div class="m-b-30">
                    <a href="{{ route('note.show', [$category->note->last()->id]) }}" class="wrap-pic-w hov1 trans-03">
                        <img src="{{ asset($category->note->last()->picture->title) }}" alt="IMG">
                    </a>

                    <div class="p-t-20">
                        <h5 class="p-b-5">
                            <a href="{{ route('note.show', [$category->note->last()->id]) }}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                {{ ucfirst($category->note->last()->title) }}
                            </a>
                        </h5>

                        <span class="cl8">
                            <a href="{{ route('note.show', [$category->note->last()->id]) }}" class="f1-s-4 cl8 hov-cl10 trans-03">
                                {{ $category->note->last()->author->name }}
                            </a>

                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>

                            <span class="f1-s-3">
                            {{ ucfirst($category->note->last()->created_at->locale('es')->isoFormat('LL')) }}
                            </span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                <!-- Item post -->
                @foreach(collect($category->note)->reverse()->slice(1,3) as $note)
                <div class="flex-wr-sb-s m-b-30">
                    <a href="{{ route('note.show', [$note->id]) }}" class="size-w-1 wrap-pic-w hov1 trans-03">
                        <img src="{{ asset($note->picture->title) }}" alt="IMG">
                    </a>

                    <div class="size-w-2">
                        <h5 class="p-b-5">
                            <a href="{{ route('note.show', [$note->id]) }}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                {{ ucfirst($note->title) }}
                            </a>
                        </h5>

                        <span class="cl8">
                            <a href="{{ route('note.show', [$note->id]) }}" class="f1-s-6 cl8 hov-cl10 trans-03">
                                {{ $note->author->name }}
                            </a>

                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>

                            <span class="f1-s-3">
                                {{ ucfirst($note->created_at->locale('es')->isoFormat('LL')) }}
                            </span>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
            

            @else
            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                <!-- Item post -->
                <div class="m-b-30">
                    <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                        <img src="images/post-05.jpg" alt="IMG">
                    </a>

                    <div class="p-t-20">
                        <h5 class="p-b-5">
                            <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                American live music lorem ipsum dolor sit amet consectetur
                            </a>
                        </h5>

                        <span class="cl8">
                            <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                Music
                            </a>

                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>

                            <span class="f1-s-3">
                                Feb 18
                            </span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                <!-- Item post -->
                <div class="flex-wr-sb-s m-b-30">
                    <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                        <img src="images/post-06.jpg" alt="IMG">
                    </a>

                    <div class="size-w-2">
                        <h5 class="p-b-5">
                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                Donec metus orci, malesuada et lectus vitae
                            </a>
                        </h5>

                        <span class="cl8">
                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                Music
                            </a>

                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>

                            <span class="f1-s-3">
                                Feb 17
                            </span>
                        </span>
                    </div>
                </div>

                <!-- Item post -->
                <div class="flex-wr-sb-s m-b-30">
                    <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                        <img src="images/post-07.jpg" alt="IMG">
                    </a>

                    <div class="size-w-2">
                        <h5 class="p-b-5">
                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                Donec metus orci, malesuada et lectus vitae
                            </a>
                        </h5>

                        <span class="cl8">
                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                Game
                            </a>

                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>

                            <span class="f1-s-3">
                                Feb 16
                            </span>
                        </span>
                    </div>
                </div>

                <!-- Item post -->
                <div class="flex-wr-sb-s m-b-30">
                    <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                        <img src="images/post-08.jpg" alt="IMG">
                    </a>

                    <div class="size-w-2">
                        <h5 class="p-b-5">
                            <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                Donec metus orci, malesuada et lectus vitae
                            </a>
                        </h5>

                        <span class="cl8">
                            <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                Celebrity
                            </a>

                            <span class="f1-s-3 m-rl-3">
                                -
                            </span>

                            <span class="f1-s-3">
                                Feb 12
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>