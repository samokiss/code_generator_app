<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace OC\BusinessRules\UseCases\Organization;

use OC\BusinessRules\Entities\Organization\Organization;
use OC\BusinessRules\Gateways\Organization\OrganizationGateway;
use OC\BusinessRules\Requestors\Organization\EditOrganizationRequest;
use OC\BusinessRules\Responders\Organization\OrganizationDetailResponse;
use OC\BusinessRules\Responders\Organization\OrganizationDetailResponseAssembler;
use ;
use OpenClassrooms\UseCase\Application\Annotations\Transaction;
use OpenClassrooms\UseCase\BusinessRules\Requestors\UseCase;
use OpenClassrooms\UseCase\BusinessRules\Requestors\UseCaseRequest;

class EditOrganization implements UseCase
{
    use OrganizationCommonHydratorTrait;

    /**
     * @var OrganizationGateway
     */
    private $organizationGateway;

    /**
     * @var OrganizationDetailResponseAssembler
     */
    private $responseAssembler;

    public function __construct(
        OrganizationGateway $organizationGateway,
        OrganizationDetailResponseAssembler $responseAssembler
    ) {
        $this->organizationGateway = $organizationGateway;
        $this->responseAssembler = $responseAssembler;
    }

    /**
     * @Transaction
     * @Security(roles="")
     *
     * @param EditOrganizationRequest $useCaseRequest
     *
     * @throws \OC\BusinessRules\Gateways\Organization\Exceptions\OrganizationNotFoundException
     */
    public function execute(UseCaseRequest $useCaseRequest): OrganizationDetailResponse
    {
        $organization = $this->getOrganization($useCaseRequest->getOrganizationId());
        $this->populateFromRequest($organization, $useCaseRequest);
        $this->update($organization);

        return $this->createResponse($organization);
    }

    /**
     * @throws \OC\BusinessRules\Gateways\Organization\Exceptions\OrganizationNotFoundException
     */
    private function getOrganization(int $organizationId): Organization
    {
        return $this->organizationGateway->find($organizationId);
    }

    private function update(Organization $organization): void
    {
        $this->organizationGateway->update($organization);
    }

    private function createResponse(Organization $organization): OrganizationDetailResponse
    {
        return $this->responseAssembler->create($organization);
    }
}
