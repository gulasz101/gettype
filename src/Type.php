<?php

declare(strict_types=1);

namespace gulasz101;

enum Type: string
{
    case BOOLEAN = 'boolean';
    case INTEGER = 'integer';
    case FLOAT = 'double';
    case STRING = 'string';
    case ARRAY = 'array';
    case OBJECT = 'object';
    case RESOURCE_OPEN = 'resource';
    case RESOURCE_CLOSED = 'resource (closed)';
    case NULL = 'NULL';
    case UNKNOWN = 'unknown type';
}
