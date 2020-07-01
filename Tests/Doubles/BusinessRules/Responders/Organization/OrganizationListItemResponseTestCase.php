<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace Doubles\BusinessRules\Responders\Organization;

use OC\BusinessRules\Responders\Organization\OrganizationListItemResponse;
use PHPUnit\Framework\Assert;

trait OrganizationListItemResponseTestCase
{
    use OrganizationResponseTestCase;

    /**
     * @param OrganizationListItemResponse[] $expected
     * @param OrganizationListItemResponse[] $actual
     */
    protected function assertOrganizationListItemResponses(array $expected, array $actual): void
    {
        Assert::assertCount(count($expected), $actual);
        foreach ($expected as $key => $item) {
            $this->assertOrganizationListItemResponse($item, $actual[$key]);
        }
    }

    private function assertOrganizationListItemResponse(
        OrganizationListItemResponse $expected,
        OrganizationListItemResponse $actual
    ): void {
        $this->assertOrganizationResponse($expected, $actual);
    }
}
