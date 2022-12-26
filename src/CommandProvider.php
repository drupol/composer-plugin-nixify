<?php

declare(strict_types=1);

namespace Nixify;

use Composer\Plugin\Capability\CommandProvider as CapabilityCommandProvider;
use Nixify\Command\InstallBinCommand;
use Nixify\Command\NixifyCommand;

final class CommandProvider implements CapabilityCommandProvider
{
    public function getCommands(): array
    {
        return [
            new InstallBinCommand(),
            new NixifyCommand(),
        ];
    }
}
