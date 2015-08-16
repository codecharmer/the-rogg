<div class="row Review">
    <div class="col-md-2">
        <a href="#"><img class="ProfilePhoto"
                         src="assets/images/user-photos/{{ $review->user->photo }}"></a>
    </div>
    <div class="col-md-10">
        <div class="Review--names">
            <span><a href="#">{{ $review->user->username }}</a> wrote a review for <a href="#">{{ $review->politician->name }}</a></span>
        </div>
        <div class="Review--rating">
            <span class="Review--bells">
                @for($i = 0; $i < $review->rating; $i++)
                    <img class="Review--bell" src="assets/images/liberty-bell.png" alt="{{ $review->rating }}">
                @endfor

                @for($i = 0; $i < 5 - $review->rating; $i++)
                    <img class="Review--bell" src="assets/images/liberty-bell-dark.png" alt="{{ $review->rating }}">
                @endfor
            </span>
            <span class="Review--date"> {{ $review->timestamp->diffForHumans() }}</span>
        </div>
        <div class="Review--comment">{{ $review->comment }}</div>
    </div>
</div>