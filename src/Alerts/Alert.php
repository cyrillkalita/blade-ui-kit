<?php

declare(strict_types=1);

namespace BladeUI\Alerts;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /** @var string */
    public $type;

    public function __construct(string $type = 'success')
    {
        $this->type = $type;
    }

    public function render(): View
    {
        return view('blade-ui::components.alerts.alert');
    }
}
