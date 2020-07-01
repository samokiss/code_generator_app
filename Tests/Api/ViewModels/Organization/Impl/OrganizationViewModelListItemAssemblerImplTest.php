<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace Api\ViewModels\Organization\Impl;

use OC\Api\ViewModels\Organization\OrganizationViewModelListItemAssembler;
use OC\Api\ViewModels\Organization\Impl\OrganizationViewModelListItemAssemblerImpl;
use Doubles\Api\ViewModels\Organization\OrganizationViewModelListItemStub1;
use Doubles\Api\ViewModels\Organization\OrganizationViewModelListItemTestCase;
use Doubles\BusinessRules\Responders\Organization\OrganizationListItemResponseStub1;
use PHPUnit\Framework\TestCase;

class OrganizationViewModelListItemAssemblerImplTest extends TestCase
{
    use OrganizationViewModelListItemTestCase;

    /**
     * @var OrganizationViewModelListItemAssembler
     */
    private $assembler;

    /**
     * @test
     */
    final public function onCreateShouldReturnViewModel(): void
    {
        $actual = $this->assembler->createListItems([new OrganizationListItemResponseStub1()]);
        $expected = [new OrganizationViewModelListItemStub1()];
        $this->assertOrganizationViewModelListItems($expected, $actual);
    }

    protected function setUp(): void
    {
        $this->assembler = new OrganizationViewModelListItemAssemblerImpl();
    }
}
