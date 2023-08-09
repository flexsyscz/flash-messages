<?php

declare(strict_types=1);

namespace Tests\FlashMessages;

use Nextras\Dbal\Utils\DateTimeImmutable;
use Flexsyscz;
use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/../bootstrap.php';


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
}

(new MessageTest())->run();
