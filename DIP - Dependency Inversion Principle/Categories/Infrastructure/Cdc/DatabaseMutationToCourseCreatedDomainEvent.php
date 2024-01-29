<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Categories\Infrastructure\Cdc;

use CodelyTv\Mooc\Categories\Domain\CategoryCreatedDomainEvent;
use CodelyTv\Shared\Domain\Bus\Event\DomainEvent;
use CodelyTv\Shared\Domain\Utils;
use CodelyTv\Shared\Infrastructure\Cdc\DatabaseMutationAction;
use CodelyTv\Shared\Infrastructure\Cdc\DatabaseMutationToDomainEvent;

final class DatabaseMutationToCourseCreatedDomainEvent implements DatabaseMutationToDomainEvent
{
	/** @return DomainEvent[] */
	public function transform(array $data): array
	{
		$mutation = Utils::jsonDecode($data['new_value']);

		return [
			new CategoryCreatedDomainEvent(
				$mutation['id'],
				$mutation['name'],
				$mutation['duration'],
				null,
				$data['mutation_timestamp'],
			),
		];
	}

	public function tableName(): string
	{
		return 'categories';
	}

	public function mutationAction(): DatabaseMutationAction
	{
		return DatabaseMutationAction::INSERT;
	}
}
