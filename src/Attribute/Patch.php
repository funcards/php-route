<?php

declare(strict_types=1);

namespace FC\Router\Attribute;

#[\Attribute(\Attribute::IS_REPEATABLE | \Attribute::TARGET_METHOD)]
final class Patch extends Route
{
    /**
     * @param string $pattern
     * @param string|null $name
     * @param string ...$middlewares
     */
    public function __construct(string $pattern = '', ?string $name = null, string ...$middlewares)
    {
        parent::__construct(Route::PATCH, $pattern, $name, ...$middlewares);
    }
}
