<?php
/**
 * Clovers Framework ()
 *
 * @link      https://github.com/donghaichen/Clovers
 * @copyright Copyright (c) 2011-2016
 * @license    (MIT License)
 */
namespace namespace Illuminate\Clover\Interfaces;

use namespace Illuminate\Clover\App;

/**
 * RouteGroup Interface
 *
 * @package Clovers
 * @since   3.0.0
 */
interface RouteGroupInterface
{
    /**
     * Get route pattern
     *
     * @return string
     */
    public function getPattern();

    /**
     * Prepend middleware to the group middleware collection
     *
     * @param callable|string $callable The callback routine
     *
     * @return RouteGroupInterface
     */
    public function add($callable);

    /**
     * Execute route group callable in the context of the Clovers App
     *
     * This method invokes the route group object's callable, collecting
     * nested route objects
     *
     * @param App $app
     */
    public function __invoke(App $app);
}
