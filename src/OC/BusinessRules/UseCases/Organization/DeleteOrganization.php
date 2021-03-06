<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace OC\BusinessRules\UseCases\Organization;

use OC\BusinessRules\Entities\Organization\Organization;
use OC\BusinessRules\Gateways\Organization\OrganizationGateway;
use OC\BusinessRules\Requestors\Organization\DeleteOrganizationRequest;
use OpenClassrooms\UseCase\Application\Annotations\Security;
use OpenClassrooms\UseCase\Application\Annotations\Transaction;
use OpenClassrooms\UseCase\BusinessRules\Requestors\UseCase;
use OpenClassrooms\UseCase\BusinessRules\Requestors\UseCaseRequest;

class DeleteOrganization implements UseCase
{
    /**
     * @var OrganizationGateway
     */
    private $organizationGateway;

    public function __construct(OrganizationGateway $organizationGateway)
    {
        $this->organizationGateway = $organizationGateway;
    }

    /**
     * @Transaction
     * @Security(roles="")
     *
     * @param DeleteOrganizationRequest $useCaseRequest
     *
     * @throws \OC\BusinessRules\Gateways\Organization\Exceptions\OrganizationNotFoundException
     */
    public function execute(UseCaseRequest $useCaseRequest): void
    {
        $organization = $this->getOrganization($useCaseRequest->getOrganizationId());
        $this->delete($organization);
    }

    private function getOrganization(int $organizationId): Organization
    {
        return $this->organizationGateway->findById($organizationId);
    }

    private function delete(Organization $organization): void
    {
        $this->organizationGateway->delete($organization);
    }
}
