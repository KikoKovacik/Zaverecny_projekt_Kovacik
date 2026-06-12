<?php

declare(strict_types=1);

namespace formular;

require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/SpravaManager.php';

use App\Database;
use App\SpravaManager;

class Kontakt
{
    private SpravaManager $spravaManager;

    public function __construct()
    {
        $this->spravaManager = new SpravaManager(new Database());
    }

    public function ulozitSpravu(string $meno, string $email, string $sprava): bool
    {
        return $this->spravaManager->createMessage($meno, $email, $sprava);
    }
}
