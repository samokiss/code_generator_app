<?php

declare(strict_types=1);

namespace OC\BusinessRules\Entities\Organization;

use Carbon\CarbonImmutable;

abstract class Organization
{
    /**
     * @var \DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $logo;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \DateTimeImmutable
     */
    protected $updatedAt;

    public function __construct(string $description, string $logo, string $name)
    {
        $this->createdAt = CarbonImmutable::now();
        $this->description = $description;
        $this->logo = $logo;
        $this->name = $name;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
