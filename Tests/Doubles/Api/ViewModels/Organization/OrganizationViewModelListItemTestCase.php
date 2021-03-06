<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace Doubles\Api\ViewModels\Organization;

use OC\Api\ViewModels\Organization\OrganizationViewModelListItem;
use PHPUnit\Framework\Assert as Assert;

trait OrganizationViewModelListItemTestCase
{
    use OrganizationViewModelTestCase;

    /**
     * @param OrganizationViewModelListItem[] $expected
     * @param OrganizationViewModelListItem[] $actual
     */
    protected function assertOrganizationViewModelListItems(array $expected, array $actual): void
    {
        Assert::assertCount(count($expected), $actual);
        foreach ($expected as $key => $item) {
            $this->assertOrganizationViewModelListItem($item, $actual[$key]);
        }
    }

    private function assertOrganizationViewModelListItem(OrganizationViewModelListItem $expected, OrganizationViewModelListItem $actual): void
    {
        $this->assertOrganizationViewModel($expected, $actual);
    }
}
