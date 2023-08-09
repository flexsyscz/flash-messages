<?php

declare(strict_types=1);

namespace Flexsyscz\FlashMessages;

use stdClass;


abstract class FlashMessage extends stdClass
{
	public Message $message;
	public string $type;
}
