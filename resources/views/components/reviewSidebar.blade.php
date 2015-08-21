<div class="row Review">
    <div class="col-md-2">
        <img class="ProfilePhoto"
                    src="/assets/images/user-photos/{{ $review->user->photo }}">
    </div>
    <div class="col-md-10">
        <div class="Review--names">
            <span>{{ $review->user->username }}
                wrote a review for <a href="/politicians/{{ $review->politician->slug }}">{{ $review->politician->name }}</a></span>
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
        </div>
        <div class="Review--comment">{{ $review->comment }}</div>
    </div>
</div>