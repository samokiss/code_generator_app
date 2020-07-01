<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace Doubles\BusinessRules\Responders\Organization;

use OC\BusinessRules\UseCases\Organization\DTO\Response\OrganizationListItemResponseDTO;
use Doubles\BusinessRules\Entities\Organization\OrganizationStub1;

class OrganizationListItemResponseStub1 extends OrganizationListItemResponseDTO
{
    public const CREATED_AT = OrganizationStub1::CREATED_AT;

    public const DESCRIPTION = OrganizationStub1::DESCRIPTION;

    public const ID = OrganizationStub1::ID;

    public const LOGO = OrganizationStub1::LOGO;

    public const NAME = OrganizationStub1::NAME;

    public const UPDATED_AT = OrganizationStub1::UPDATED_AT;

    public $createdAt = self::CREATED_AT;

    public $description = self::DESCRIPTION;

    public $id = self::ID;

    public $logo = self::LOGO;

    public $name = self::NAME;

    public $updatedAt = self::UPDATED_AT;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable(self::CREATED_AT);
        $this->updatedAt = new \DateTimeImmutable(self::UPDATED_AT);
    }
}
