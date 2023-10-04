<?php

declare(strict_types=1);

namespace gulasz101;

/**
 * @throws \ValueError
 */
function gettype(mixed $anyValue): Type
{
    return Type::from(\gettype($anyValue));
}
