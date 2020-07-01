<?php

// Auto Generated by OpenClassrooms Code Generator

declare(strict_types=1);

namespace OC\BusinessRules\UseCases\Organization\DTO\Request;

use OC\BusinessRules\Gateways\Pagination;
use OC\BusinessRules\Requestors\Organization\GetOrganizationsRequest;

final class GetOrganizationsRequestDTO implements GetOrganizationsRequest
{
    /**
     * @var string[]
     */
    public $filters = [];

    /**
     * @var int
     */
    public $itemsPerPage;

    /**
     * @var int
     */
    public $page = Pagination::DEFAULT_PAGE_NUMBER;

    /**
     * @var string[]
     */
    public $sorts = [];

    /**
     * {@inheritdoc}
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * {@inheritdoc}
     */
    public function getSorts(): array
    {
        return $this->sorts;
    }
}
