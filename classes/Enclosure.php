<?php
class Enclosure{
    protected $name;
    protected $cleanliness;
    protected $animals = [];

    public function __construct($name, $cleanliness = "Good") {
        $this->name = $name;
        $this->cleanliness = $cleanliness;
    }

    public function getName() {
        return $this->name;
    }


    public function getCleanliness() {
        return $this->cleanliness;
    }

    public function getAnimalCount() {
        echo "Nombre d'animaux: " .count($this->animals);
    }

    public function addAnimal(Animal $animal) {
        if (!$this->isFull() && $this->isSameSpecies($animal)) {
            $this->animals[] = $animal;
            //echo "{$animal->getName()} is added to {$this->name} enclosure." . "\n";
        } else {
            echo "Cannot add {$animal->getName()} to {$this->name} enclosure." . "\n";
        }
    }

    public function removeAnimal(Animal $animal) {
        $index = array_search($animal, $this->animals);
        if ($index !== false) {
            unset($this->animals[$index]);
            $this->animals = array_values($this->animals);
            echo "{$animal->getName()} is removed from {$this->name} enclosure." . "\n";
        } else {
            echo "{$animal->getName()} is not in {$this->name} enclosure." . "\n";
        }
    }

    public function isEmpty() {
        return empty($this->animals);
    }


    public function isFull() {
        return count($this->animals) >= 6;
    }

    public function isSameSpecies(Animal $animal) {
        if ($this->isEmpty()) {
            return true;
        }
        $firstAnimalSpecies = $this->animals[0]->getSpecies();
        return $animal->getSpecies() === $firstAnimalSpecies;
    }

    public function displayAnimalCharacteristics() {
        echo "Animals in {$this->name} enclosure:" . "\n";
        foreach ($this->animals as $animal) {
            echo $animal->getCharacteristics() . "\n";
        }
    }
}




?>