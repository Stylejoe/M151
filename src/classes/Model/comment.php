<?php

namespace Model;

class Comment{
    public $id;
    public $mediaId;
    public $content;

    public function __construct(
        $mediaId,
        $content
    )
    {
        $this->mediaId = $mediaId;
        $this->content = $content;
    }
}