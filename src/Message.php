<?php

declare(strict_types=1);

namespace Flexsyscz\FlashMessages;

use Nette\HtmlStringable;
use Nextras\Dbal\Utils\DateTimeImmutable;


class Message implements HtmlStringable
{
	public readonly DateTimeImmutable $created;


	public function __construct(public readonly string $text, public readonly ?string $name = null)
	{
		$this->created = new DateTimeImmutable;
	}


	public function __toString(): string
	{
		return $this->text;
	}
}
