<?php
//namespace Model;

class Expense
{
    private int $id;
    private DateTime $date;
    private string $productName;
    private float $cost;
    private int $categoryId;
    
    public function getId(): int
    {
        return $this->id;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }

    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }

    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }
}