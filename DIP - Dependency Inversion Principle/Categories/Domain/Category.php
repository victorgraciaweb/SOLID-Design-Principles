<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Categories\Domain;

use CodelyTv\Mooc\Shared\Domain\Categories\CategoryId;
use CodelyTv\Shared\Domain\Aggregate\AggregateRoot;

final class Category extends AggregateRoot
{
	public function __construct(private readonly CategoryId $id, private CategoryName $name, private readonly CategoryDuration $duration) {}

	public static function create(CategoryId $id, CategoryName $name, CategoryDuration $duration): self
	{
		$course = new self($id, $name, $duration);

		$course->record(new CategoryCreatedDomainEvent($id->value(), $name->value(), $duration->value()));

		return $course;
	}

	public function id(): CategoryId
	{
		return $this->id;
	}

	public function name(): CategoryName
	{
		return $this->name;
	}

	public function duration(): CategoryDuration
	{
		return $this->duration;
	}

	public function rename(CategoryName $newName): void
	{
		$this->name = $newName;
	}
}
