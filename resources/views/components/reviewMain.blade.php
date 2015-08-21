<div class="row Review">
    <div class="col-md-2">
        @if($review->user->photo)
            <img class="ProfilePhoto" src="/assets/images/user-photos/{{ $review->user->photo }}">
        @else
            <img class="ProfilePhoto" src="/assets/images/generic-profile.png">
        @endif
    </div>
    <div class="col-md-10">
        <div class="Review--names">
            <span>
                {{ $review->user->username }}
                @if(isset($review->politician))
                    wrote a review for
                    <a href="/politicians/{{ $review->politician->slug }}">{{ $review->politician->name }}</a>
                @endif
            </span>
        </div>
        <div class="Review--rating">
            <span class="Review--bells" title="{{ $review->rating }}">
                @for($i = 0; $i < $review->rating; $i++)
                    <img class="Review--bell" src="/assets/images/liberty-bell.png">
                @endfor

                @for($i = 0; $i < 5 - $review->rating; $i++)
                    <img class="Review--bell" src="/assets/images/liberty-bell-dark.png">
                @endfor
            </span>
            <span class="Review--date"> {{ $review->timestamp->diffForHumans() }}</span>
        </div>
        <div class="Review--comment">{{ $review->comment }}</div>
    </div>
</div>