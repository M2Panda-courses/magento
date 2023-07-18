<?php declare(strict_types=1);

namespace Panda\BlogExtra\Plugin;

use Panda\Blog\Observer\LogPostDetailView;

class PreventPostDiteilLogger
{
    public function aroundExecute(
        LogPostDetailView $subject,
        callable $proceed,
    ) {
        // Logger working
    }
}
