<?php

namespace TheRogg\Http\ViewComposers\Home;

use Illuminate\Contracts\View\View;
use TheRogg\Repositories\Comments\CommentRepositoryInterface as CommentRepo;

class HomeComposer
{
    private $commentRepo;

    public function __construct(CommentRepo $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

    public function compose(View $view)
    {
        $comments = $this->commentRepo->getAll();


        $view->with('comments', $comments);
    }
}