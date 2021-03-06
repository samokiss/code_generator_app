<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace OC\BusinessRules\Requestors\Organization;

use OpenClassrooms\UseCase\BusinessRules\Requestors\UseCaseRequest;

interface EditOrganizationRequest extends UseCaseRequest
{
    public function getDescription(): string;

    public function getLogo(): string;

    public function getName(): string;

    public function getOrganizationId(): int;

    public function isDescriptionUpdated(): bool;

    public function isLogoUpdated(): bool;

    public function isNameUpdated(): bool;
}
