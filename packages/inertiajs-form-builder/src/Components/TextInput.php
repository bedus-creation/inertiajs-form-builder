<?php

namespace MantraPHP\Forms\Components;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Str;

class TextInput implements Arrayable
{
    protected string $tag = 'input';

    protected string $type = 'text';

    public function __construct(
        protected string $name,
    ) {}

    public static function make(string $name): static
    {
        return new static($name);
    }

    public function type(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'id'    => Str::slug($this->name),
            'tag'   => $this->tag,
            'type'  => $this->type,
            'label' => ucfirst($this->name),
        ];
    }
}
