<?php

namespace App\Services;

class ImageContentService
{
    private $imageTag;

    public function __construct()
    {
        $this->imageTag = '<img src="' . asset('assets/img/news/news-1.webp') . '" alt="Image" style="display:block; margin:20px auto;">';
    }

    public function insertImagesInContent(string $content, int $wordInterval = 100): string
    {
        $words = explode(' ', strip_tags($content));
        $wordCount = count($words);

        for ($i = $wordInterval; $i < $wordCount; $i += $wordInterval) {
            array_splice($words, $i, 0, $this->imageTag);
        }

        return implode(' ', $words);
    }
}
