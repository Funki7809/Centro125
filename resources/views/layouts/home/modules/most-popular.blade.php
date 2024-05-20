<div class="col-md-10 col-lg-4">
    <div class="p-l-10 p-rl-0-sr991 p-b-20">
        <!--  -->
        <div>
            <div class="how2 how2-cl4 flex-s-c">
                <h3 class="f1-m-2 cl3 tab01-title">
                    Lo más reciente
                </h3>
            </div>
            @if(isset($bestNotes))
            <ul class="p-t-35">
                @foreach($bestNotes as $index => $note)
                <li class="flex-wr-sb-s p-b-22">
                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                        {{ $loop->iteration }}
                    </div>
                    <a href="{{ route('note.show', [$note->id]) }}" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                        {{ ucfirst($note->title) }}
                    </a>
                </li>
                @endforeach
            </ul>
            @else
            <ul class="p-t-35">
                <li class="flex-wr-sb-s p-b-22">
                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                        1
                    </div>

                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </a>
                </li>

                <li class="flex-wr-sb-s p-b-22">
                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                        2
                    </div>

                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                        Proin velit consectetur non neque
                    </a>
                </li>

                <li class="flex-wr-sb-s p-b-22">
                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                        3
                    </div>

                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                        Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
                    </a>
                </li>

                <li class="flex-wr-sb-s p-b-22">
                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                        4
                    </div>

                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                        Proin velit justo consectetur non neque elementum
                    </a>
                </li>

                <li class="flex-wr-sb-s p-b-22">
                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
                        5
                    </div>

                    <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                        Proin velit consectetur non neque
                    </a>
                </li>
            </ul>
            @endif
        </div>
        @include('layouts.home.modules.stay-connected')
    </div>
</div>