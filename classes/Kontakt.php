<?php

declare(strict_types=1);

namespace App;

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
