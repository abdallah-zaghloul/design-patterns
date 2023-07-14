<?php
namespace AbdallahZaghloul\DesignPatterns\Structural\FluentBuilder;

class QueryBuilder implements IQueryBuilder
{
    /**
     * @var array
     */
    private array $columns;

    /**
     * @var string
     */
    private string $table;

    /**
     * @var string
     */
    private string $attribute;

    /**
     * @var string
     */
    private string $operator;

    /**
     * @var string
     */
    private string $value;

    /**
     * @param ...$columns
     * @return $this
     */
    public function select(...$columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @param string $table
     * @return $this
     */
    public function from(string $table): self
    {
        $this->table = $table;
        return $this;
    }

    /**
     * @param string $attribute
     * @param string $operator
     * @param string $value
     * @return $this
     */
    public function where(string $attribute, string $operator, string $value): self
    {
        [$this->attribute, $this->operator, $this->value] = [$attribute, $operator, $value];
        return $this;
    }

    /**
     * @return string
     */
    public function toSQL(): string
    {
        return sprintf("SELECT %s FROM %s WHERE %s %s %s",
            implode(',', $this->columns),
            $this->table,
            $this->attribute,
            $this->operator,
            $this->value
        );
    }
}