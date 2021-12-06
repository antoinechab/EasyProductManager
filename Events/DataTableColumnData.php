<?php

namespace EasyProductManager\Events;

use Thelia\Core\Event\ActionEvent;
use Thelia\Core\HttpFoundation\Request;

class DataTableColumnData extends ActionEvent
{
    public const PRODUCT_DATATABLE_COLUMN_ADD_DATA = "product.manager.column.add.data";

    /**
     * @var array $newColumns
     */
    private $newColumns = [];

    /**
     * @var array
     */
    private $dataTableJson = [];

    private $object;

    public function __construct()
    {
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
        $this->dataTableJson[$key][] = $dataTableJson;
        return $this->dataTableJson;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object): void
    {
        $this->object = $object;
    }

}