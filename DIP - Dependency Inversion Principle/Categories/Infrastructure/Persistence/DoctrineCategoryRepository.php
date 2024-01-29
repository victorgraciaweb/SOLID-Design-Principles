<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Categories\Infrastructure\Persistence;

use CodelyTv\Mooc\Categories\Domain\Category;
use CodelyTv\Mooc\Categories\Domain\CategoryRepository;
use CodelyTv\Mooc\Shared\Domain\Categories\CategoryId;
use CodelyTv\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

final class DoctrineCategoryRepository extends DoctrineRepository implements CategoryRepository
{
	public function save(Category $category): void
	{
		$this->persist($category);
	}
}
