<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Categories\Domain;

use CodelyTv\Mooc\Shared\Domain\Categories\CategoryId;

interface CategoryRepository
{
	public function save(Category $category): void;
}
