<?php

declare(strict_types=1);

namespace Victormgomes\RestMessages\Enums;

enum CrudAction: string
{
    case INDEX = 'index';
    case SHOW = 'show';
    case STORE = 'store';
    case UPDATE = 'update';
    case DESTROY = 'destroy';
    case RESTORE = 'restore';
    case FORCE_DELETE = 'forceDelete';
}
