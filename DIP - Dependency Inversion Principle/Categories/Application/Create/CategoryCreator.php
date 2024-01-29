<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Categories\Application\Create;

use CodelyTv\Mooc\Categories\Domain\Category;
use CodelyTv\Mooc\Categories\Domain\CategoryDuration;
use CodelyTv\Mooc\Categories\Domain\CategoryName;
use CodelyTv\Mooc\Categories\Domain\CategoryRepository;
use CodelyTv\Mooc\Shared\Domain\Categories\CategoryId;
use CodelyTv\Shared\Domain\Bus\Event\EventBus;

final readonly class CategoryCreator
{
	public function __construct(private CategoryRepository $repository, private EventBus $bus) {}

	public function __invoke(CategoryId $id, CategoryName $name, CategoryDuration $duration): void
	{
		$category = Category::create($id, $name, $duration);

		$this->repository->save($category);
		$this->bus->publish(...$category->pullDomainEvents());
	}
}
