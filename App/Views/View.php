<?php

namespace App\Views;

class View
{
    protected static string $file;

    protected array $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function setData(array $data): void
    {
        $this->data = $data;
    }
    public function getData(): array
    {
        return $this->data;
    }
    public function getFile(): string
    {
        return $this->file;
    }
    // public function getFile():string {
    //     return self::PATH . '/'. static::$file;
    // }
    public function getTemplate(): string
    {
        return file_get_contents(static::$file);
    }
    public function getContentHtml(): string
    {
        $search = array_map(fn ($v) => '{{' . $v . '}}', array_keys($this->data));
        return str_replace($search, array_values($this->data), $this->getTemplate());
    }
}
