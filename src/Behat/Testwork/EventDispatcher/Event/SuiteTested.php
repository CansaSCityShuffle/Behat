<?php

/*
 * This file is part of the Behat Testwork.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Testwork\EventDispatcher\Event;

use Behat\Testwork\Specification\SpecificationIterator;

/**
 * Testwork suite tested event.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
abstract class SuiteTested extends LifecycleEvent
{
    const BEFORE = 'tester.suite_tested.before';
    const AFTER = 'tester.suite_tested.after';

    /**
     * Returns specification iterator.
     *
     * @return SpecificationIterator
     */
    abstract public function getSpecificationIterator();
}