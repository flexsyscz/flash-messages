<?php

declare(strict_types=1);

namespace Flexsyscz\FlashMessages;


enum MessageType: string
{
	case Info = 'info';
	case Warning = 'warning';
	case Error = 'danger';
	case Success = 'success';
}
