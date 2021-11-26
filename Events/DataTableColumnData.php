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

    /**
     * @var array
     */
    private $dataTableJson = [];

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

    public function addNewColumn(string $key, array $newColumn): void
    {
        $this->newColumns[$key] = $newColumn;
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

    /**
     * @return array
     */
    public function getDataTableJson(): array
    {
        return $this->dataTableJson;
    }

    /**
     * @param array $dataTableJson
     */
    public function setDataTableJson(array $dataTableJson): void
    {
        $this->dataTableJson = $dataTableJson;
    }

    /**
     * @param mixed $dataTableJson
     */
    public function addDataTableJson($key,$dataTableJson): array
    {
        $this->dataTableJson[$key] = $dataTableJson;
        return $this->dataTableJson;
    }

}