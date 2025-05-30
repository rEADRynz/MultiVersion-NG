<?php

declare(strict_types=1);

namespace AzliRynz\MultiVersion;

use AzliRynz\MultiVersion\session\SessionManager;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use pocketmine\Player;

class MultiVersion{

    public static function getProtocol(Player $player): int{
        return SessionManager::getProtocol($player) ?? ProtocolInfo::CURRENT_PROTOCOL;
    }
}