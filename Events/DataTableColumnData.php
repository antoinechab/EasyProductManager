<?php

namespace EasyProductManager\Events;

use Thelia\Core\Event\ActionEvent;
use Thelia\Core\HttpFoundation\Request;

class DataTableColumnData extends ActionEvent
{
    public const PRODUCT_DATATABLE_COLUMN_ADD_DATA = "product.manager.column.add.data";

    private $query;

    /**
     * @var array $newColumns
     */
    private $newColumns = [];

    /**
     * @var Request
     */
    private $request;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param mixed $query
     */
    public function setQuery($query): void
    {
        $this->query = $query;
    }

    /**
     * @return array
     */
    public function getNewColumns(): array
    {
        return $this->newColumns;
    }

    /**
     * @param array $newColumns
     */
    public function setNewColumns(array $newColumns): void
    {
        $this->newColumns = $newColumns;
    }

    public function addNewColumn(array $newColumn): void
    {
        $this->newColumns[] = $newColumn;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @param Request $request
     */
    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

}