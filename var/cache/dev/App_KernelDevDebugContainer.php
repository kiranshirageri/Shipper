<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8htEzgy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8htEzgy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8htEzgy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8htEzgy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8htEzgy\App_KernelDevDebugContainer([
    'container.build_hash' => '8htEzgy',
    'container.build_id' => '27ee1745',
    'container.build_time' => 1579678509,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8htEzgy');
