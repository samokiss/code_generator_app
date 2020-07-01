<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace OC\BusinessRules\UseCases\Organization\DTO\Request;

use OC\BusinessRules\Requestors\Organization\CreateOrganizationRequest;
use OC\BusinessRules\Requestors\Organization\CreateOrganizationRequestBuilder;

class CreateOrganizationRequestBuilderImpl implements CreateOrganizationRequestBuilder
{
    /**
     * @var CreateOrganizationRequestDTO
     */
    private $request;

    public function build(): CreateOrganizationRequest
    {
        return $this->request;
    }

    public function create(): CreateOrganizationRequestBuilder
    {
        $this->request = new CreateOrganizationRequestDTO();

        return $this;
    }

    public function withDescription(string $description): CreateOrganizationRequestBuilder
    {
        $this->request->description = $description;

        return $this;
    }

    public function withLogo(string $logo): CreateOrganizationRequestBuilder
    {
        $this->request->logo = $logo;

        return $this;
    }

    public function withName(string $name): CreateOrganizationRequestBuilder
    {
        $this->request->name = $name;

        return $this;
    }
}
