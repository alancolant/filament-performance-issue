<?php

namespace App\Filament\Utilities;

use Filament\Schemas\Components\Component;

class GetOptimized
{
    public function __construct(
        protected Component $component,
    )
    {
    }

    public function __invoke(string|Component $key = '', bool $isAbsolute = false): mixed
    {
        $livewire = $this->component->getLivewire();

        $component = $livewire->getSchemaComponent(
            $this->component->resolveRelativeKey($key, $isAbsolute),
            withHidden: true,
//            skipComponentChildContainersWhileSearching: $this->component, // <- commented line
        );

        if (!$component) {
            return data_get(
                $livewire,
                $this->component->resolveRelativeStatePath($key, $isAbsolute)
            );
        }

        return $component->getState();
    }
}
