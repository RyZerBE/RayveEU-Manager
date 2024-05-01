<?php

declare(strict_types=1);

function enableAutoLoader(): void {
    spl_autoload_register(function (string $class): void {
        @require __DIR__ . "/src/" . str_replace(["/", "\\"], DIRECTORY_SEPARATOR, $class) . ".php";
    });
}

enableAutoLoader();

use manager\Manager;

new Manager();

