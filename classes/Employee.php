<?php 
class Employee{
    protected $name;
    protected $age;
    protected $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    

    public function examineEnclosure(Enclosure $enclosure) {
        echo "{$this->name} is examining the {$enclosure->getName()} enclosure." . "\n";
    }

    

    public function cleanEnclosure(Enclosure $enclosure) {
        echo "{$this->name} is cleaning the {$enclosure->getName()} enclosure." . "\n";

    }


    public function feedAnimals(Enclosure $enclosure) {
        if (!$enclosure->isEmpty()) {
            echo "{$this->name} is feeding the animals in the {$enclosure->getName()} enclosure." . "\n";
        } else {
            echo "{$enclosure->getName()} enclosure is empty." . "\n";
        }
    }


    public function addAnimalToEnclosure(Enclosure $enclosure, Animal $animal) {
        if ($enclosure->canAddAnimal($animal)) {
            echo "{$this->name} is adding {$animal->getName()} to the {$enclosure->getName()} enclosure." . "\n";
            $enclosure->addAnimal($animal);
        } else {
            echo "Cannot add {$animal->getName()} to {$enclosure->getName()} enclosure." . "\n";
        }
    }

    public function moveAnimal(Animal $animal, Enclosure $sourceEnclosure, Enclosure $destinationEnclosure) {
        if ($sourceEnclosure->containsAnimal($animal)) {
            echo "{$this->name} is moving {$animal->getName()} from {$sourceEnclosure->getName()} to {$destinationEnclosure->getName()}." . "\n";
            $sourceEnclosure->removeAnimal($animal);
            $destinationEnclosure->addAnimal($animal);
        } else {
            echo "{$animal->getName()} is not in {$sourceEnclosure->getName()}." . "\n";
        }
    }

}
?>