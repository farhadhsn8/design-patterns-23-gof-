<?php
/**
*/
interface Builder
{
    public function setBasement(): void;
    public function setStructure(): void;
    public function setRoof(): void;
}
/**
*/
class House implements Builder
{
    private $House;
    /**
     */
    public function __construct()
    {
        $this->reset();
    }
    public function reset(): void
    {
        $this->house = new House1;
    }
    /**
     */
    public function setBasement(): void
    {
        $this->house->parts[] = "basement";
    }
    public function setStructure(): void
    {
        $this->house->parts[] = "structure";
    }
    public function setRoof(): void
    {
        $this->house->parts[] = "roof";
    }
    /**
     *
     */
    public function getHouse(): House1
    {
        $result = $this->House;
        $this->reset();
        return $result;
    }
}
/**
 */
class House1
{
    public $parts = [];
    public function listParts(): void
    {
        echo "House parts: " . implode(', ', $this->parts) . "\n\n";
    }
}
/**
 */
class Director
{
    /**
     */
    private $builder;
    /**
     */
    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }
    /**
     * The Director can construct several house variations using the same
     * building steps.
     */
    public function buildMinimalViableHouse(): void
    {
        $this->builder->setBasement();
    }
    public function buildFullFeaturedHouse(): void
    {
        $this->builder->setBasement();
        $this->builder->setStructure();
        $this->builder->setRoof();
    }
}
/**
*/
function clientCode(Director $director)
{
    $builder = new House;
    $director->setBuilder($builder);
    echo "Standard basic House:\n";
    $director->buildMinimalViableHouse();
    echo "Standard full featured House:\n";

}
$director = new Director;
clientCode($director);