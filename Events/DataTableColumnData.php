<?php

namespace EasyProductManager\Events;

use Thelia\Core\Event\ActionEvent;

class DataTableColumnData extends ActionEvent
{
    public const PRODUCT_DATATABLE_COLUMN_ADD_DATA = "product.manager.column.add.data";

    /**
     * @var array
     */
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

}