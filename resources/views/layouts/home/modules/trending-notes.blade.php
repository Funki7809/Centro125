<!-- Headline -->
<div class="container">
    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
        <div class="f2-s-1 size-a-2 p-r-30 size-w-0 m-tb-6 flex-wr-s-c" style="height: 85px;">
            <span class="text-uppercase cl2 p-r-8">
                Lo más reciente:
            </span>

            <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
                @if(count($bestNotes) == 0)
                    <span class="dis-inline-block slide100-txt-item animated visible-false">
                        Interest rate angst trips up US equity bull market
                    </span>

                    <span class="dis-inline-block slide100-txt-item animated visible-false">
                        Designer fashion show kicks off Variety Week
                    </span>

                    <span class="dis-inline-block slide100-txt-item animated visible-false">
                        Microsoft quisque at ipsum vel orci eleifend ultrices
                    </span>
                @else 
                    @foreach($bestNotes as $note)
                        <span class="dis-inline-block slide100-txt-item animated visible-false">
                            {{ ucfirst($note->title) }}
                        </span>
                    @endforeach
                @endif
            </span>
        </div>
    </div>
</div>
