<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake = false;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function setParkBrake(bool $parkBrake): bool
    {
        return $this->hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake) {
            throw new Exception("ton frein à main est mis.");
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
