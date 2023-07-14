<?php

namespace AbdallahZaghloul\DesignPatterns\Structural\FluentBuilder;

interface IQueryBuilder
{
    /**
     * @param ...$columns
     * @return $this
     */
    public function select(...$columns): self;


    /**
     * @param string $table
     * @return $this
     */
    public function from(string $table): self;


    /**
     * @param string $attribute
     * @param string $operator
     * @param string $value
     * @return $this
     */
    public function where(string $attribute, string $operator , string $value): self;


    /**
     * @return string
     */
    public function toSQL(): string;

}