<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace Doubles\BusinessRules\Responders\Organization;

use OC\BusinessRules\Responders\Organization\OrganizationDetailResponse;

trait OrganizationDetailResponseTestCase
{
    use OrganizationResponseTestCase;

    private function assertOrganizationDetailResponse(
        OrganizationDetailResponse $expected,
        OrganizationDetailResponse $actual
    ): void {
        $this->assertOrganizationResponse($expected, $actual);
    }
}
