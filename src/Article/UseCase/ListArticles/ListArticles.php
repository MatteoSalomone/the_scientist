<?php
/**
 * Created by PhpStorm.
 * User: matteo.salomone
 * Date: 29-Nov-18
 * Time: 3:05 PM
 */

namespace LaravelDay\Article\UseCase\ListArticles;


class ListArticles
{
    public function __invoke():array
    {
        return [
            [
                'title' => 'Articolo 1',
                'body' => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00',
            ]
        ];
    }

}