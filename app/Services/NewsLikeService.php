<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NewsLikeService
{

    /**
     * Handle store data event to models.
     *
     * @param StoreRequest $request
     *
     * @return array|bool
     */
    public function store($news, $ip)
    {
        $user_id = "";

        if (Auth::check()) {
            $user_id = auth()->user()->id;
        }

        return [
            'news_id' => $news,
            'user_id' => $user_id,
            'ip_address' => $ip
        ];
    }
}
