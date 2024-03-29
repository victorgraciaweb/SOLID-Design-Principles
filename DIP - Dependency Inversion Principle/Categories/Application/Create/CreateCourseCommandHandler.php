<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Create;

use CodelyTv\Mooc\Courses\Domain\CourseDuration;
use CodelyTv\Mooc\Courses\Domain\CourseName;
use CodelyTv\Mooc\Shared\Domain\Courses\CategoryId;
use CodelyTv\Shared\Domain\Bus\Command\CommandHandler;

final readonly class CreateCourseCommandHandler implements CommandHandler
{
	public function __construct(private CategoryCreator $creator) {}

	public function __invoke(CreateCourseCommand $command): void
	{
		$id = new CategoryId($command->id());
		$name = new CourseName($command->name());
		$duration = new CourseDuration($command->duration());

		$this->creator->__invoke($id, $name, $duration);
	}
}
