<?php 
class Animal {
    protected $species;
    protected $weight;
    protected $size;
    protected $name;
    protected $age;
    protected $isHungry = true;
    protected $isSleeping = false;
    protected $isSick = false;

    public function __construct($species, $weight, $size, $name, $age) {
        $this->species = $species;
        $this->weight = $weight;
        $this->size = $size;
        $this->name = $name;
        $this->age = $age;

    }

        public function eat() {
            if ($this->isHungry) {
                echo "{$this->name} is eating." . "\n";
                $this->isHungry = false;
            } else {
                echo "{$this->name} is not hungry right now." . "\n";
            }
        }

        public function makeSound() {
            echo "{$this->name} is making a sound." . "\n";
        }

        public function sleep() {
            if ($this->isSleeping) {
                echo "{$this->name} is  going to sleep." . "\n";
                $this->isHungry = true;
            } else {
                echo "{$this->name} is already sleeping." . "\n";
            }
        }


        public function wakeUp() {
            if ($this->isSleeping) {
                echo "{$this->name} is waking up." . "\n";
                $this->isHungry = false;
            } else {
                echo "{$this->name} is already awake." . "\n";
            }
        }

        public function getCharacteristics() {
            echo "{$this->species}, {$this->name}, Weight: {$this->weight}, Size: {$this->size}, Age: {$this->age}";
        }

        public function roam() {
            echo "{$this->name} is roaming around." . "\n";
        }

        public function swim() {
            echo "{$this->name} is swimming." . "\n";
        }

        public function fly() {
            echo "{$this->name} is flying." . "\n";
        }

        public function getHealthStatus() {
            return $this->isSick ? "Sick" : "Healthy";
        }

        public function herbivorous() {
            echo "{$this->name} is herbivore." . "\n";
        }
     
    
    /*
         * Get the value of species
         */ 
        public function getSpecies()
        {
                return $this->species;
        }

        /**
         * Set the value of species
         *
         * @return  self
         */ 
        public function setSpecies($species)
        {
                $this->species = $species;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of weight
         */ 
        public function getWeight()
        {
                return $this->weight;
        }

        /**
         * Set the value of weight
         *
         * @return  self
         */ 
        public function setWeight($weight)
        {
                $this->weight = $weight;

                return $this;
        }

        /**
         * Get the value of size
         */ 
        public function getSize()
        {
                return $this->size;
        }

        /**
         * Set the value of size
         *
         * @return  self
         */ 
        public function setSize($size)
        {
                $this->size = $size;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

  
}
  


?>