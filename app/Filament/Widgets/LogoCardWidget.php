<?php
namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class LogoCardWidget extends Widget
{
    protected static string $view = 'filament.widgets.logo-card-widget';
    protected string | int | array $columnSpan = 1;
}
