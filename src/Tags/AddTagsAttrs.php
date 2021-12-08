<?php

namespace IanM\Synopsis\Tags;

use Flarum\Tags\Api\Serializer\TagSerializer;
use Flarum\Tags\Tag;

class AddTagsAttrs
{
    public function __invoke(TagSerializer $serializer, Tag $tag, array $attributes): array
    {
        $attributes['richExcerpts'] = $tag->rich_excerpts;
        $attributes['excerptLength'] = $tag->excerpt_length;

        return $attributes;
    }
}
