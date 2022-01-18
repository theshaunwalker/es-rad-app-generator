<?php

declare(strict_types=1);

namespace EsRadAppGenerator\EntityStuff\Output\SideEffects;

use EsRadAppGenerator\EntityStuff\Output\EventEntityPropertyMapping;

final class Update implements SideEffect
{
    private string $entityClass;

    /**
     * @var EventEntityPropertyMapping[]
     */
    private array $propertyMappings = [];

    private function __construct()
    {
    }

    /**
     * @param EventEntityPropertyMapping[] $propertyMappings
     *
     */
    public static function forEntityClass(
        string $entityClass,
        array $propertyMappings = []
    ): self {
        $self = new static();

        $self->entityClass      = $entityClass;
        $self->propertyMappings = $propertyMappings;

        return $self;
    }

    public function getEntityClass(): string
    {
        return $this->entityClass;
    }

    /**
     * @return EventEntityPropertyMapping[]
     */
    public function getPropertyMappings(): array
    {
        return $this->propertyMappings;
    }
}
