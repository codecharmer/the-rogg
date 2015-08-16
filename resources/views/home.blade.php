<?php

/** @var TheRogg\Http\ViewComposers\Home\Models\HomePoliticianReviewModel[] $reviews */

?>

@extends('layouts.master')

@section('main')
    <h2>Your Review Awaits</h2>
    <p>Here are some suggestions to get you started.</p>
    <ul class="Home-CommentList">
        <?php foreach($reviews as $review) : ?>
        <li>
            <div><img src="assets/images/user-photos/<?= $review->user->photo ?>"></div>
            <div>
                <div>
                    <span><?= $review->user->username; ?> wrote a review for <?= $review->politician->name; ?></span>
                </div>
                <div>
                    <?= $review->rating; ?> on <?= $review->timestamp; ?>
                </div>
                <div><?= $review->comment; ?></div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
@endsection

@section('sidebar')
    <p>Sidebar</p>
@endsection