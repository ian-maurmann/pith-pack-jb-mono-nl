<?php

/**
 * JB Mono NL Resource Pack
 * ------------------------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpUnused                             - Ignore that pack_type is unused.
 */


declare(strict_types=1);

namespace PithFront\PithPackJbMonoNl;

use Pith\Workflow\PithPack;

/**
 * Class JbMonoNlResourcePack
 */
class JbMonoNlResourcePack extends PithPack
{
    public string $access_level = 'world';
    public string $pack_type    = 'resource-pack';
}