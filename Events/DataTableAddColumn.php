<?php

namespace EasyProductManager\Events;

use Thelia\Core\Event\ActionEvent;

class DataTableAddColumn extends ActionEvent
{
    public const PRODUCT_DATATABLE_ADD_COLUMN = "product.manager.add.column";

    /**
     * @var array
     */
    private $columns;

    /** @var int $compteur */
    private $compteur = 3;

    public function __construct()
    {
    }

    /**
     * @return array|null
     */
    public function getColumns(): ?array
    {
        return $this->columns;
    }

    /**
     * @return int
     */
    public function getNewColumns(): int
    {
        return $this->getColumns() ? count($this->getColumns()): 0;
    }

    /**
     * DataTable parameters :
     * [['name'=> 'name','title'=> 'title','orderable'=> false,'searchable'=> false],...]
     *
     * @param array $columns
     */
    protected function setColumns(array $columns): void
    {
        $this->columns = $columns;
    }

    /**
     * @param array $column
     */
    public function addColumn(array $column): void
    {
        $this->columns[] = $column;
        $return = [] ;
        foreach ($this->getColumns() as $key=>$data){
            $name = $data['title'] ? trim(strtolower($data['title'])) : null;
            $return[$name??$key] = [
                'name'=> $name ?? null,
                'title'=> $data['title'] ?? null,
                'orderable'=> $data['orderable'] ?? null,
                'searchable'=> $data['searchable'] ?? null,
            ];
            $this->incrementCompteur();
        }
        $this->setColumns($return);
    }

    /**
     * @return int
     */
    public function getCompteur(): int
    {
        return $this->compteur;
    }

    /**
     * @param int $compteur
     */
    public function setCompteur(int $compteur): void
    {
        $this->compteur = $compteur;
    }

    public function incrementCompteur(): void
    {
        $this->compteur++;
    }

}