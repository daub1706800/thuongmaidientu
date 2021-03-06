<?php

/*
 * This file is part of bhittani/kk-star-ratings.
 *
 * (c) Kamal Khan <shout@bhittani.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bhittani\StarRating\core\actions\admin\save;

use function Bhittani\StarRating\core\functions\option;
use function Bhittani\StarRating\core\functions\strip_prefix;
use function Bhittani\StarRating\functions\sanitize;

if (! defined('KK_STAR_RATINGS')) {
    http_response_code(404);
    exit();
}

function appearance(array $payload, string $tab): void
{
    $payload = shortcode_atts(array_fill_keys([
        'gap',
        'greet',
        'legend',
        'position',
        'size',
        'stars',
    ], null), strip_prefix($payload));

    option(sanitize($payload));
}
