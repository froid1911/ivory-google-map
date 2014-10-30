<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Services\Base;

use Ivory\GoogleMap\Assets\AbstractUninstantiableAsset;

/**
 * Unit system.
 *
 * @link http://code.google.com/apis/maps/documentation/javascript/reference.html#UnitSystem
 * @author GeLo <geloen.eric@gmail.com>
 */
class UnitSystem extends AbstractUninstantiableAsset
{
    const IMPERIAL = 'IMPERIAL';
    const METRIC = 'METRIC';
}