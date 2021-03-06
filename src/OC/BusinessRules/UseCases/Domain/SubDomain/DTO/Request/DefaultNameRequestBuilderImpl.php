<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace OC\BusinessRules\UseCases\Domain\SubDomain\DTO\Request;

use OC\BusinessRules\Requestors\Domain\SubDomain\DefaultNameRequest;
use OC\BusinessRules\Requestors\Domain\SubDomain\DefaultNameRequestBuilder;

class DefaultNameRequestBuilderImpl implements DefaultNameRequestBuilder
{
    /**
     * @var DefaultNameRequestDTO
     */
    private $request;

    public function build(): DefaultNameRequest
    {
        return $this->request;
    }

    public function create(): DefaultNameRequestBuilder
    {
        $this->request = new DefaultNameRequestDTO();

        return $this;
    }
}
