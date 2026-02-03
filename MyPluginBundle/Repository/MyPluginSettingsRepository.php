<?php

declare(strict_types=1);

namespace MauticPlugin\MyPluginBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MauticPlugin\MyPluginBundle\Entity\MyPluginSettings;

class MyPluginSettingsRepository extends EntityRepository
{
    public function getSettings(): MyPluginSettings
    {
        $settings = $this->findOneBy([]);

        if (!$settings) {
            $settings = new MyPluginSettings();
        }

        return $settings;
    }
}
