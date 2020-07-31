<?php
class animal
{
    public $nama, $leg, $cold;
    public function set_animal($nama, $leg, $cold)
    {
        $this->nama = $nama;
        $this->leg = $leg;
        $this->cold = $cold;
    }
    public function get_nama()
    {
        return $this->nama;
    }
    public function get_leg()
    {
        return $this->leg;
    }
    public function get_cold()
    {
        return $this->cold;
    }
}
class frog extends animal
{
    public $nama2;
    public function __construct($nama2)
    {
        $this->nama2 = $nama2;
    }
    public function get_name2()
    {
        return $this->nama2;
    }
    public function jump()
    {
        echo 'hop hop';
    }
    public function khusus()
    {
        echo 'berkaki empat';
    }
}
class Ape extends animal
{
    public $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    public function get_name()
    {
        return $this->nama;
    }
    public function yell()
    {
        echo 'Auoo';
    }
}
// $sheep = new Animal("shaun");

// echo $sheep->name; // "shaun"
// echo $sheep->legs; // 2
// echo $sheep->cold_blooded // false

// // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())