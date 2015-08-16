<?php

/** @var TheRogg\Http\ViewComposers\Home\Models\HomePoliticianReviewModel[] $reviews */

?>

@extends('layouts.master')

@section('main')
    <h2>Your Review Awaits</h2>
    <p>Here are some suggestions to get you started.</p>
    <ul class="Home-CommentList">
        <?php foreach($reviews as $review) : ?>
        <li class="Home-CommentList--item">
            <div class="row">
                <div class="col-md-2">
                    <a href="#"><img class="ProfilePhoto" src="assets/images/user-photos/<?= $review->user->photo ?>"></a>
                </div>
                <div class="col-md-10">
                    <div class="Home-CommentList--names">
                        <span><a href="#"><?= $review->user->username; ?></a>
                            wrote a review for <a href="#"><?= $review->politician->name; ?></a></span>
                    </div>
                    <div class="Home-CommentList--rating">
                        <?= $review->rating; ?> on <?= $review->timestamp; ?>
                    </div>
                    <div><?= $review->comment; ?></div>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
@endsection

@section('sidebar')
    <p>Sidebar</p>
@endsection