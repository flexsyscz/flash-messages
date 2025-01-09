<?php

declare(strict_types=1);

namespace tests\FlashMessages\Presenters;

use Flexsyscz\FlashMessages\FlashMessages;

require __DIR__ . '/Presenter.php';


final class DemoPresenter extends Presenter
{
	use FlashMessages;
}
