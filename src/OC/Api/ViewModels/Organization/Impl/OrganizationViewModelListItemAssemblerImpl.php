<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace OC\Api\ViewModels\Organization\Impl;

use OC\Api\ViewModels\Organization\OrganizationViewModelAssemblerTrait;
use OC\Api\ViewModels\Organization\OrganizationViewModelListItem;
use OC\Api\ViewModels\Organization\OrganizationViewModelListItemAssembler;
use OC\BusinessRules\Responders\Organization\OrganizationResponse;

class OrganizationViewModelListItemAssemblerImpl implements OrganizationViewModelListItemAssembler
{
    use OrganizationViewModelAssemblerTrait;

    /**
     * @inheritdoc
     */
    public function createListItems(array $organizations): array
    {
        $vms = [];
        foreach ($organizations as $organization) {
            $vms[] = $this->createListItem($organization);
        }

        return $vms;
    }

    /**
     * @return OrganizationViewModelListItemImpl
     */
    private function createListItem(OrganizationResponse $organization): OrganizationViewModelListItem
    {
        $vm = new OrganizationViewModelListItemImpl();
        $this->hydrateCommonFields($vm, $organization);

        return $vm;
    }
}
