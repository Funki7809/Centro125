	<!-- Post -->
	<section class="bg0 p-b-55">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 p-b-80">
                    <div class="p-r-10 p-r-0-sr991">
                        <div class="m-t--40 p-b-40">
                            <!-- Item post -->
                            @foreach($notes->sortByDesc('created_at') as $note)
                            <div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
                                <a href="{{ route('note.show', [$note->id]) }}" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
                                    <img src="{{ asset($note->picture->title) }}" alt="IMG">
                                </a>

                                <div class="size-w-9 w-full-sr575 m-b-25">
                                    <h5 class="p-b-12">
                                        <a href="{{ route('note.show', [$note->id]) }}" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
                                            {{ ucfirst($note->title) }}
                                        </a>
                                    </h5>

                                    <div class="cl8 p-b-18">
                                        <a href="{{ route('note.show', [$note->id]) }}" class="f1-s-4 cl8 hov-cl10 trans-03">
                                            {{ ucfirst($note->author->name) }}
                                        </a>

                                        <span class="f1-s-3 m-rl-3">
                                            -
                                        </span>

                                        <span class="f1-s-3">
                                            {{ ucfirst($note->created_at->locale('es')->isoFormat('LLLL')) }}
                                        </span>
                                    </div>

                                    <p class="f1-s-1 cl6 p-b-24">
                                        {{ $note->description }}
                                    </p>

                                    <a href="{{ route('note.show', [$note->id]) }}" class="f1-s-1 cl9 hov-cl10 trans-03">
                                        Leer más
                                        <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="row justify-content-center">
                            {{ $notes->links() }}
                        </div>
                    </div>
                </div>
                @include('layouts.home.modules.most-popular')
            </div>
        </div>
    </section>