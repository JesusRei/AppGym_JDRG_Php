<?php

namespace APPGYM_JDRG_PHP\Models;

use DateTime;

class UserGym
{
    //Attributes
    private string $name;
    private string $email;
    private string $birthdate;
    private string $gender;
    private float $weight;
    private float $height;
    private int $hoursTraining;
    private float $hourValue = 4000.0;
    private ?float $imc;
    private ?int $age;
    private ?float $weeklyFee;


    //Magic methods
    public function __construct($name, $email, $birthdate, $gender, $weight, $height, $hoursTraining)
    {
        $this->name = $name;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
        $this->weight = $weight;
        $this->height = $height;
        $this->hoursTraining = $hoursTraining;
        $this->imc = $this->calculateIMC();
        $this->age = $this->calculateAge();
        $this->weeklyFee = $this->calculateWeeklyFee();
    }

    //Getters
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getIMC()
    {
        return $this->imc;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getWeeklyFee()
    {
        return $this->weeklyFee;
    }
    public function getHoursTraining()
    {
        return $this->hoursTraining;
    }
    public function getHourValue()
    {
        return $this->hourValue;
    }

    //Setters
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }
    public function setGender($gender)
    {
        return $this->gender;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function setIMC($imc)
    {
        $this->imc = $imc;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setWeeklyFee($weeklyFee)
    {
        $this->weeklyFee = $weeklyFee;
    }
    public function setHoursTraining($hoursTraining)
    {
        $this->hoursTraining = $hoursTraining;
    }
    public function setHourValue($hourValue)
    {
        $this->hourValue = $hourValue;
    }

    //methods
    public function toArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'birthdate' => $this->birthdate,
            'gender' => $this->gender,
            'weight' => $this->weight,
            'height' => $this->height,
            'imc' => $this->imc,
            'age' => $this->age,
            'weeklyFee' => $this->weeklyFee,
            'hoursTraining' => $this->hoursTraining,
            'hourValue' => $this->hourValue
        ];
    }

    //function to calculate the IMC
    public function calculateIMC()
    {
        if ($this->height > 0) {
            return $this->imc = $this->weight / ($this->height * $this->height);
        } else {
            return $this->imc = 0.0; // O cualquier valor por defecto que prefieras
        }
    }
    //function to calculate the age
    public function calculateAge()
    {
        $birthDate = new DateTime($this->birthdate);
        $currentDate = new DateTime();
        $age = $currentDate->diff($birthDate)->y;
        return $age;
    }
    //function to calculate the weekly fee, using the hours of training and the value of the hour
    public function calculateWeeklyFee()
    {
        return $this->weeklyFee = $this->hoursTraining * $this->hourValue;
    }
}
