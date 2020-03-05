<?php

/**
 * @author    Yuriy Davletshin <yuriy.davletshin@gmail.com>
 * @copyright 2017 Yuriy Davletshin
 * @license   MIT
 */

declare(strict_types=1);

namespace Satori\Application;

/**
 * Base application interface.
 */
interface KernelInterface extends \ArrayAccess
{
    /**
     * Returns a service (object).
     *
     * @param string $id The unique name of the service (object).
     *
     * @throws \LogicException If the service (object) is not defined.
     *
     * @return object The service (object) instance.
     */
    public function __get(string $id): object;

    /**
     * Sets a service (object) definition.
     *
     * @param string   $id         The unique name of the service (object).
     * @param callable $definition The closure or invokable object.
     *
     * @return void
     */
    public function __set(string $id, callable $definition): void;

    /**
     * Checks if a service (object) definition is set.
     *
     * @param string $id The unique name of the service (object).
     *
     * @return bool
     */
    public function __isset(string $id): bool;

    /**
     * Adds a subscription.
     *
     * @param string   $event    The unique name of the event.
     * @param string   $listener The unique name of the listener.
     * @param callable $callback The closure or invokable object.
     *
     * @return void
     */
    public function subscribe(string $event, string $listener, callable $callback): void;

    /**
     * Notifies listeners about an event.
     *
     * @param string $event     The unique name of the event.
     * @param array  $arguments Arguments for event actions.
     *
     * @return void
     */
    public function notify(string $event, array $arguments = null): void;

    /**
     * Runs an application.
     *
     * @param string $id The unique name of the application engine.
     *
     * @return mixed
     */
    public function run(string $id);
}
