<?php

namespace Tests\DataFixtures\Dto;

/**
 * Class PersonalInfoDto
 */
class PersonalInfoDto
{
    /**
     * @var string
     */
    public $codeWord;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $phone;

    /**
     * @return string
     */
    public function getCodeWord(): string
    {
        return $this->codeWord;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
}