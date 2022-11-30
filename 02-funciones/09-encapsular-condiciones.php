<?php

class Article
{
    const PUBLISHED_STATE = 'published';

    const UNPUBLISHED_STATE = 'unpublished';

    const ACTIVE = 1;

    const INACTIVE = 0;

    public $state;

    public $isActive;

    public function isPublished()
    {
        return $this->state === self::PUBLISHED_STATE;
    }

    public function isActive()
    {
        return $this->isActive === self::ACTIVE;
    }

    public function isPublishedAndActive()
    {
        return $this->isPublished() && $this->isActive();
    }
}

$article = new Article();

if ($article->isPublishedAndActive()) {
    // Leer el articulo
}

