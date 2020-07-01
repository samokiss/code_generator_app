<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace Doubles\Api\ViewModels\Organization;

use OC\Api\ViewModels\Organization\OrganizationViewModel;
use PHPUnit\Framework\Assert;

trait OrganizationViewModelTestCase
{
    private function assertOrganizationViewModel(OrganizationViewModel $expected, OrganizationViewModel $actual): void
    {
        Assert::assertEquals($expected->createdAt, $actual->createdAt);
        Assert::assertEquals($expected->updatedAt, $actual->updatedAt);
        Assert::assertSame($expected->id, $actual->id);
        Assert::assertSame($expected->description, $actual->description);
        Assert::assertSame($expected->logo, $actual->logo);
        Assert::assertSame($expected->name, $actual->name);
    }
}
