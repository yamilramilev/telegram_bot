<?php

namespace tsvetkov\telegram_bot\entities\message;

use tsvetkov\telegram_bot\entities\BaseObject;

/**
 * OfficialDocs: https://core.telegram.org/bots/api#videonote
 *
 * Class VideoNote
 * @package tsvetkov\telegram_bot\entities\message
 */
class VideoNote extends BaseObject
{
    public $objectsArray = [
        'thumb' => PhotoSize::class,
    ];

    /** @var string */
    public $file_id;

    /** @var string */
    public $file_unique_id;

    /** @var int */
    public $length;

    /** @var int */
    public $duration;

    /** @var PhotoSize|null */
    public $thumb;

    /** @var int|null */
    public $file_size;
}