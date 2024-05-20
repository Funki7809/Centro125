<!-- Feature post -->
<section class="bg0">
    <div class="container">
        <div class="row m-rl--1">
            @if(isset($bestNotes[0]))
            <div class="col-md-6 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url('{{ asset($bestNotes[0]->picture->title) }}');">
                    <a href="{{ route('note.show', [$bestNotes[0]->id]) }}" class="dis-block how1-child1 trans-03"></a>
                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                        <a href="{{ route('category.show', [$bestNotes[0]->category->id]) }}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            {{ ucfirst($bestNotes[0]->category->name) }}
                        </a>

                        <h3 class="how1-child2 m-t-14 m-b-10">
                            <a href="{{ route('note.show', [$bestNotes[0]->id]) }}" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                {{ ucfirst($bestNotes[0]->title) }}
                            </a>
                        </h3>
                        <span class="how1-child2">
                            <span class="f1-s-4 cl11">
                                {{ ucfirst($bestNotes[0]->author->name) }}
                            </span>
                            <span class="f1-s-3 cl11 m-rl-3">
                                -
                            </span>
                            <span class="f1-s-3 cl11">
                                {{ ucfirst($bestNotes[0]->created_at->locale('es')->isoFormat('LLLL')) }}
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(images/post-01.jpg);">
                    <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>
                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                        <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            Business
                        </a>

                        <h3 class="how1-child2 m-t-14 m-b-10">
                            <a href="blog-detail-01.html" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                Microsoft quisque at ipsum vel orci eleifend ultrices
                            </a>
                        </h3>

                        <span class="how1-child2">
                            <span class="f1-s-4 cl11">
                                Jack Sims
                            </span>

                            <span class="f1-s-3 cl11 m-rl-3">
                                -
                            </span>

                            <span class="f1-s-3 cl11">
                                Feb 16
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-md-6 p-rl-1">
                <div class="row m-rl--1">
                @if(isset($bestNotes[1]))
                    <div class="col-12 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url('{{ asset($bestNotes[1]->picture->title) }}');">
                            <a href="{{ route('note.show', [$bestNotes[1]->id]) }}" class="dis-block how1-child1 trans-03"></a>
                            <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                <a href="{{ route('category.show', [$bestNotes[1]->category->id]) }}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    {{ ucfirst($bestNotes[1]->category->name) }}
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="{{ route('note.show', [$bestNotes[1]->id]) }}" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                        {{ ucfirst($bestNotes[1]->title) }}
                                    </a>
                                </h3>
                                <span class="how1-child2">
                                    <span class="f1-s-4 cl11">
                                        {{ ucfirst($bestNotes[1]->author->name) }}
                                    </span>
                                    <span class="f1-s-3 cl11 m-rl-3">
                                        -
                                    </span>
                                    <span class="f1-s-3 cl11">
                                        {{ ucfirst($bestNotes[1]->created_at->locale('es')->isoFormat('LLLL')) }}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-12 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(images/post-02.jpg);">
                            <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Culture
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="blog-detail-01.html" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                        London ipsum dolor sit amet, consectetur adipiscing elit.
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($bestNotes[2]))
                <div class="col-sm-6 p-rl-1 p-b-2">
                    <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url('{{ asset($bestNotes[2]->picture->title) }}');">
                        <a href="{{ route('note.show', [$bestNotes[2]->id]) }}" class="dis-block how1-child1 trans-03"></a>
                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            <a href="{{ route('category.show', [$bestNotes[2]->category->id]) }}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                {{ ucfirst($bestNotes[2]->category->name) }}
                            </a>
                            <h3 class="how1-child2 m-t-14">
                                <a href="{{ route('note.show', [$bestNotes[2]->id]) }}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                    {{ ucfirst($bestNotes[2]->title) }}
                                </a>
                            </h3>
                            <span class="how1-child2">
                                <span class="f1-s-4 cl11">
                                    {{ ucfirst($bestNotes[2]->author->name) }}
                                </span>
                                <span class="f1-s-3 cl11 m-rl-3">
                                    -
                                </span>
                                <span class="f1-s-3 cl11">
                                    {{ ucfirst($bestNotes[2]->created_at->locale('es')->isoFormat('LLLL')) }}
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                @else 
                <div class="col-sm-6 p-rl-1 p-b-2">
                    <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(images/post-03.jpg);">
                        <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                Life Style
                            </a>

                            <h3 class="how1-child2 m-t-14">
                                <a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                    Pellentesque dui nibh, pellen-tesque ut dapibus ut
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endif
                @if(isset($bestNotes[3]))
                <div class="col-sm-6 p-rl-1 p-b-2">
                    <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url('{{ asset($bestNotes[3]->picture->title) }}');">
                        <a href="{{ route('note.show', [$bestNotes[3]->id]) }}" class="dis-block how1-child1 trans-03"></a>

                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            <a href="{{ route('category.show', [$bestNotes[3]->category->id]) }}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                {{ ucfirst($bestNotes[3]->category->name) }}
                            </a>

                            <h3 class="how1-child2 m-t-14">
                                <a href="{{ route('note.show', [$bestNotes[3]->id]) }}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                    {{ ucfirst($bestNotes[3]->title) }}
                                </a>
                            </h3>
                            <span class="how1-child2">
                                <span class="f1-s-4 cl11">
                                    {{ ucfirst($bestNotes[3]->author->name) }}
                                </span>
                                <span class="f1-s-3 cl11 m-rl-3">
                                    -
                                </span>
                                <span class="f1-s-3 cl11">
                                    {{ ucfirst($bestNotes[3]->created_at->locale('es')->isoFormat('LLLL')) }}
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-sm-6 p-rl-1 p-b-2">
                    <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(images/post-04.jpg);">
                        <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                Sport
                            </a>

                            <h3 class="how1-child2 m-t-14">
                                <a href="blog-detail-01.html" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                    Motobike Vestibulum vene-natis purus nec nibh volutpat
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</section>
