<?php

/*
 * This file is part of the Predis package.
 *
 * (c) 2009-2020 Daniele Alessandri
 * (c) 2021-2023 Till Krüss
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Command\Traits;

use UnexpectedValueException;

trait DB
{
    private $dbModifier = 'DB';

    public function setArguments(array $arguments)
    {
        $argumentsLength = count($arguments);

        if (static::$dbArgumentPositionOffset >= $argumentsLength) {
            parent::setArguments($arguments);

            return;
        }

        if (!is_numeric($arguments[static::$dbArgumentPositionOffset])) {
            throw new UnexpectedValueException('DB argument should be a valid numeric value');
        }

        if ($arguments[static::$dbArgumentPositionOffset] < 0) {
            array_splice($arguments, static::$dbArgumentPositionOffset, 1);
            parent::setArguments($arguments);

            return;
        }

        $argument = $arguments[static::$dbArgumentPositionOffset];
        $argumentsBefore = array_slice($arguments, 0, static::$dbArgumentPositionOffset);
        $argumentsAfter = array_slice($arguments, static::$dbArgumentPositionOffset + 1);

        parent::setArguments(array_merge(
            $argumentsBefore,
            [$this->dbModifier],
            [$argument],
            $argumentsAfter
        ));
    }
}
