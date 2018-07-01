<?php

namespace DataMapper\Hydrator;

use DataMapper\Exception\DuplicateTypeException;
use DataMapper\Hydrator\Exception\UnknownHydratorTypeException;

/**
 * Interface HydratorRegistryInterface
 */
interface HydratorRegistryInterface
{
    /**
     * @throws UnknownHydratorTypeException
     *
     * @param string $type
     *
     * @return AbstractHydrator
     */
    public function getHydratorByType(string $type): AbstractHydrator;

    /**
     * @throws DuplicateTypeException
     *
     * @param AbstractHydrator $hydrator
     * @param string           $type
     *
     * @return void
     */
    public function registerHydrator(AbstractHydrator $hydrator, string $type): void;

    /**
     * @param string $type
     *
     * @return bool
     */
    public function hasRegisterHydrator(string $type): bool;
}
