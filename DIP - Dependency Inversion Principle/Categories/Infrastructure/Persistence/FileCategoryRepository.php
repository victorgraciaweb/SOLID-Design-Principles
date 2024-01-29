<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Infrastructure\Persistence;

use CodelyTv\Mooc\Courses\Domain\Category;
use CodelyTv\Mooc\Courses\Domain\CategoryRepository;
use CodelyTv\Mooc\Shared\Domain\Courses\CategoryId;

final class FileCategoryRepository implements CategoryRepository
{
	private const FILE_PATH = __DIR__ . '/courses';

	public function save(Category $course): void
	{
		file_put_contents($this->fileName($course->id()->value()), serialize($course));
	}

	public function search(CategoryId $id): ?Category
	{
		return file_exists($this->fileName($id->value()))
			? unserialize(file_get_contents($this->fileName($id->value())))
			: null;
	}

	private function fileName(string $id): string
	{
		return sprintf('%s.%s.repo', self::FILE_PATH, $id);
	}
}
