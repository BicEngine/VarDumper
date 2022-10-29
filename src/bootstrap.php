<?php

/**
 * @codingStandardsIgnoreStart
 */

declare(strict_types=1);

use Bic\VarDumper\Caster\FFICDataCaster;
use Bic\VarDumper\Caster\FFICTypeCaster;
use FFI\CData;
use FFI\CType;
use Symfony\Component\VarDumper\Cloner\AbstractCloner;

/** @psalm-suppress MixedArrayAssignment */
AbstractCloner::$defaultCasters[CType::class] = [FFICTypeCaster::class, 'castCType'];
/** @psalm-suppress MixedArrayAssignment */
AbstractCloner::$defaultCasters[CData::class] = [FFICDataCaster::class, 'castCData'];
