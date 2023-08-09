<?php

declare(strict_types=1);

namespace Flexsyscz\FlashMessages;

use Nette\HtmlStringable;
use Nextras\Dbal\Utils\DateTimeImmutable;
use Nette\SmartObject;


/**
 * @property-read string                $text
 * @property-read string|null           $name
 * @property-read DateTimeImmutable     $created
 */
class Message implements HtmlStringable
{
	use SmartObject;

	private string $text;
	private ?string $name;
	private DateTimeImmutable $created;


	public function __construct(string $text, string $name = null)
	{
		$this->text = $text;
		$this->name = $name;
		$this->created = new DateTimeImmutable;
	}


	public function __toString(): string
	{
		return $this->text;
	}


	public function getText(): string
	{
		return $this->text;
	}


	public function getName(): ?string
	{
		return $this->name;
	}


	public function getCreated(): DateTimeImmutable
	{
		return $this->created;
	}
}
