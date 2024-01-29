<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Categories\Domain;

use CodelyTv\Mooc\Shared\Domain\Categories\CategoryId;
use CodelyTv\Shared\Domain\DomainError;

final class CategoryNotExist extends DomainError
{
	public function __construct(private readonly CategoryId $id)
	{
		parent::__construct();
	}

	public function errorCode(): string
	{
		return 'category_not_exist';
	}

	protected function errorMessage(): string
	{
		return sprintf('The Category <%s> does not exist', $this->id->value());
	}
}
