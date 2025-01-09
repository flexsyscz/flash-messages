<?php

declare(strict_types=1);

namespace Tests\FlashMessages;

use Flexsyscz;
use Nextras\Dbal\Utils\DateTimeImmutable;
use Tester\Assert;
use Tester\TestCase;
use tests\FlashMessages\Presenters\DemoPresenter;

require __DIR__ . '/../bootstrap.php';
require __DIR__ . '/Presenters/DemoPresenter.php';


/**
 * @testCase
 */
class MessageTest extends TestCase
{
	public function setUp(): void
	{
	}


	public function testMessage(): void
	{
		$text = 'Hello world!';
		$name = 'Alert';
		$message = new Flexsyscz\FlashMessages\Message($text, $name);

		Assert::equal($text, $message->text);
		Assert::equal($name, $message->name);
		Assert::type(DateTimeImmutable::class, $message->created);
	}


	public function testPresenter(): void
	{
		if (!class_exists(DemoPresenter::class)) {
			return;
		}

		$text = 'Info message';
		$name = 'Title info';

		$presenter = new DemoPresenter();
		$flashMessage = $presenter->flashInfo($text, $name);

		Assert::equal($text, $flashMessage->message->text);
		Assert::equal($name, $flashMessage->message->name);
		Assert::type(DateTimeImmutable::class, $flashMessage->message->created);
	}
}

(new MessageTest())->run();
