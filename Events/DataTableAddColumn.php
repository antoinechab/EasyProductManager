<?php

namespace EasyProductManager\Events;

use Thelia\Core\Event\ActionEvent;

class DataTableAddColumn extends ActionEvent
{
    public const PRODUCT_DATATABLE_ADD_COLUMN = "product.manager.add.column";
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