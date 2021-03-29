<?php

// https://code-with-me.jetbrains.com/NFf9L5hxPW9Pbf4raBY6lA#p=PS&fp=63ACB998AFDF46064333EAD7BE097728B5FC15BF8009FDE963ECAAEF11AC9314


class Personnage
{
    /**
     * Nom du Personnage
     * @var string
     */
    private $name;

    /**
     * Résistance du Personnage
     * @var int
     */
    private $strength = 0;

    /**
     * Force du Personnage
     * @var int
     */
    private $power = 0;

    /**
     * Personnage constructor.
     * @param string $name
     * @param int $strength
     * @param int $power
     */
    public function __construct($name, $strength = null, $power = null)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->power = $power;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    /**
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param int $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

    /**
     * Retourne le nom du personnage et ses caractéristiques.
     * @param bool $longString
     * @return string
     */
    // retourne le nom du personnage et ses caractéristiques. 
    // @return string
    // je mets le paramètre entre les () de getNameAndSpects
    // une condition vérifie automatiquement si une condition est vrai donc dans le if pas besoin de mettre if($longString === true)
    public function getNameAndSpecs($longString = false)
    {
        if ($longString) {

            return "Le nom du personnage est {$this->name} 
            (il possède une force de {$this->power} 
            et une résistance de {$this->strength}).";

        } else {

            return "Personnage {$this->name} (F: {$this->power}, R: {$this->strength})";

        }
    }

}