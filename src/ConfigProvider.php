<?php

declare(strict_types=1);

namespace Configuretech\LaminasJmsSerializer;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
        ];
    }

    public function getDependencyConfig(): array
    {
        return [];
    }
}
