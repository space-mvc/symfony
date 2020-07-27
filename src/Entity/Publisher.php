<?php

namespace App\Entity;

use App\Repository\PublisherRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PublisherRepository::class)
 */
class Publisher
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $companyName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $companyUrl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $companyEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $companyTelephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $enabled;

    /**
     * getId.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * getFirstName.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * setFirstName.
     *
     * @param string|null $firstName
     * @return $this
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * getLastName.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * setLastName.
     *
     * @param string|null $lastName
     * @return $this
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * getCompanyName.
     *
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * setCompanyName.
     *
     * @param string|null $companyName
     * @return $this
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * getCompanyUrl.
     *
     * @return string|null
     */
    public function getCompanyUrl(): ?string
    {
        return $this->companyUrl;
    }

    /**
     * setCompanyUrl.
     *
     * @param string|null $companyUrl
     * @return $this
     */
    public function setCompanyUrl(?string $companyUrl): self
    {
        $this->companyUrl = $companyUrl;

        return $this;
    }

    /**
     * getCompanyEmail.
     *
     * @return string|null
     */
    public function getCompanyEmail(): ?string
    {
        return $this->companyEmail;
    }

    /**
     * setCompanyEmail.
     *
     * @param string|null $companyEmail
     * @return $this
     */
    public function setCompanyEmail(?string $companyEmail): self
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    /**
     * getCompanyTelephone.
     *
     * @return string|null
     */
    public function getCompanyTelephone(): ?string
    {
        return $this->companyTelephone;
    }

    /**
     * setCompanyTelephone.
     *
     * @param string|null $companyTelephone
     * @return $this
     */
    public function setCompanyTelephone(?string $companyTelephone): self
    {
        $this->companyTelephone = $companyTelephone;

        return $this;
    }

    /**
     * getEnabled.
     *
     * @return string|null
     */
    public function getEnabled(): ?string
    {
        return $this->enabled;
    }

    /**
     * setEnabled.
     *
     * @param string|null $enabled
     * @return $this
     */
    public function setEnabled(?string $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
