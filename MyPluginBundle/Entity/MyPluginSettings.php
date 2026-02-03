<?php

declare(strict_types=1);

namespace MauticPlugin\MyPluginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\\Entity(repositoryClass="MauticPlugin\\MyPluginBundle\\Repository\\MyPluginSettingsRepository")
* @ORM\\Table(name="myplugin_settings")
*/
class MyPluginSettings
{
    /**
    * @ORM\\Id
    * @ORM\\GeneratedValue
    * @ORM\\Column(type="integer")
    */
    private ?int $id = null;

    /**
    * @ORM\\Column(type="boolean")
    */
    private bool $enabled = false;

    /**
    * @ORM\\Column(type="string" length=255)
    */
    private string $textOne = '';

    /**
    * @ORM\\Column(type="string" length=255)
    */
    private string $textTwo = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getTextOne(): string
    {
        return $this->textOne;
    }

    public function setTextOne(string $textOne): self
    {
        $this->textOne = $textOne;
        return $this;
    }

    public function getTextTwo(): string
    {
        return $this->textTwo;
    }

    public function setTextTwo(string $textTwo): self
    {
        $this->textTwo = $textTwo;
        return $this;
    }
}
