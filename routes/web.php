<?php

use Illuminate\Support\Facades\Route;

 // The route to the RSS feed.
 Route::statamic('/feed/posts', 'feed/feed', [
        'layout' => null,
        'content_type' => 'application/xml',
 ]);
