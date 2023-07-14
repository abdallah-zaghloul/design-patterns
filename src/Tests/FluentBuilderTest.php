<?php

namespace AbdallahZaghloul\DesignPatterns\Tests;

use AbdallahZaghloul\DesignPatterns\Structural\FluentBuilder\QueryBuilder;
use PHPUnit\Framework\TestCase;
class FluentBuilderTest extends TestCase
{
    public function testQueryBuilder()
    {
        [$idColumn, $nameColumn ,$table ,$operator, $value] = ["id", "name", "users", "=", "abdallah"];
        $expected = "SELECT $idColumn,$nameColumn FROM $table WHERE $nameColumn $operator $value";
        $query = (new QueryBuilder())->select($idColumn, $nameColumn)->from($table)->where($nameColumn, $operator, $value)->toSQL();
        $this->assertEquals($expected, $query);
    }

}