<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5w3VCZx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5w3VCZx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5w3VCZx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5w3VCZx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container5w3VCZx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '5w3VCZx',
    'container.build_id' => '7de735e1',
    'container.build_time' => 1644702737,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5w3VCZx');