<?php

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__. '/app',
        __DIR__. '/bootstrap/app.php',
        __DIR__. '/database',
        __DIR__. '/public'
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations:true,
        privatization: true,
        earlyReturn: true,
        strictBooleans: true
    );
