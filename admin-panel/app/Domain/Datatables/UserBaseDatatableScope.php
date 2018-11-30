<?php

namespace App\Domain\Util\Datatables;

use Yajra\Datatables\Html\Builder;

abstract class UserBaseDatatableScope
{
    /**
     * @var
     */
    protected $partialHtml;

    /**
     * @return mixed
     */
    abstract public function query();

    /**
     * @param null $url
     *
     * @return array
     */
    public function html($url = null)
    {
        $columns = array_merge([
            [
                'data' => 'application.plateforms.name',
                'name' => 'application.plateforms.name',
                'title' =>'Plateform',
            ],

            
        ],
        $this->partialHtml,
        [
            [
                'data' => 'actions',
                'name' => 'actions',
                'title' => 'Action',
                'searchable' => false,
                'orderable' => false,
            ],
        ]);

        /**
         * @var Builder
         */
        $builder = app('datatables.html');

        return $builder->columns($columns)
            ->ajax($url ?: request()->fullUrl());
    }

    /**
     * @param array $html
     *
     * @return $this
     */
    public function setHtml(array $html)
    {
        $this->partialHtml = $html;

        return $this;
    }
}
