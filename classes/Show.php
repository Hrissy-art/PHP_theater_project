<?php


class Show
{
    private int $id;
    private string $name;
    private string $theater;
    private int $date;

    private string $img;


    public function __construct(int $id, string $name, string $theater, int $date, string $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->theater = $theater;
        $this->date = $date;
        $this->img = $img;


    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getTheater(): string
    {
        return $this->theater;
    }
    public function setTheater(string $theater): self
    {
        $this->theater = $theater;
        return $this;
    }

    public function getDate(): int
    {
        return $this->date;
    }
    public function setDate(int $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getImg(): string
    {
        return $this->img;
    }
    public function setImg(string $img): self
    {
        $this->img = $img;
        return $this;
    }

}
