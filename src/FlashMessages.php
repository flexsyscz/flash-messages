<?php

declare(strict_types=1);

namespace Flexsyscz\FlashMessages;

use stdClass;
use Stringable;


trait FlashMessages
{
	public function flashMessage(string|stdClass|Stringable $message, string $type = 'info'): stdClass
	{
		if (!$message instanceof Message) {
			throw new InvalidArgumentException(sprintf('Argument $message must be instance of %s.', Message::class));
		}

		if (!MessageType::from($type)) {
			throw new InvalidArgumentException(sprintf('Argument $type is not valid constant of %s class.', MessageType::class));
		}

		$presenter = $this->getPresenter();
		if ($presenter->isAjax()) {
			$presenter->redrawControl('flashes');
		}

		return parent::flashMessage($message, $type);
	}


	public function flashInfo(string $message, ?string $caption = null): stdClass
	{
		if (method_exists($this, 'translate')) {
			$message = $this->translate($message);
		}

		$message = new Message($message, $caption);
		return $this->flashMessage($message, MessageType::Info->value);
	}


	public function flashWarning(string $message, ?string $caption = null): stdClass
	{
		if (method_exists($this, 'translate')) {
			$message = $this->translate($message);
		}

		$message = new Message($message, $caption);
		return $this->flashMessage($message, MessageType::Warning->value);
	}


	public function flashError(string $message, ?string $caption = null): stdClass
	{
		if (method_exists($this, 'translate')) {
			$message = $this->translate($message);
		}

		$message = new Message($message, $caption);
		return $this->flashMessage($message, MessageType::Error->value);
	}


	public function flashSuccess(string $message, ?string $caption = null): stdClass
	{
		if (method_exists($this, 'translate')) {
			$message = $this->translate($message);
		}

		$message = new Message($message, $caption);
		return $this->flashMessage($message, MessageType::Success->value);
	}
}
