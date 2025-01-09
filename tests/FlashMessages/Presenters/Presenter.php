<?php

declare(strict_types=1);

namespace tests\FlashMessages\Presenters;


abstract class Presenter
{
	public function isAjax(): bool
	{
		return false;
	}


	public function redrawControl(string $snippet): void
	{
	}


	public function flashMessage(string|\stdClass|\Stringable $message, string $type = 'info'): \stdClass
	{
		$flash = new \stdClass();
		$flash->message = $message;
		$flash->type = $type;

		return $flash;
	}


	public function getPresenter(): Presenter
	{
		return $this;
	}
}
