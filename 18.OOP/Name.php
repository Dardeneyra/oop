<?php

class name
{
    public $names;
    public $new_name;
    public $update_name;
    public $name_key;
    public $remove_name;
    public $new_list;

    public function add_name()
    {
        $this->names[] = $this->new_name;
        return $this->names;
    }

    public function remove_name()
    {
        foreach ($this->names as $key => $name) {
            if ($this->remove_name === $name) {
                unset($this->names[$key]);
            }
        }
        $this->array_reset();

        return $this->names;
    }

    public function update_name() {
        $this->names[$this->name_key] = $this->update_name;
        return $this->names;
}

public function array_reset() {
        $new_list = [];

        foreach ($this->names as $name) {
        $this->new_list[] = $name;
        }
        $this->names = $this->new_list;

        $this->new_list = [];
}

}