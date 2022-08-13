<?php

namespace Tests;

use Behavioral\Specification\AgeSpecification;
use Behavioral\Specification\ANDSpecification;
use Behavioral\Specification\LanguageSpecification;
use Behavioral\Specification\ORSpecification;
use Behavioral\Specification\SkillSpecifications;
use Behavioral\Specification\TechSpecifications;
use Behavioral\Specification\YearOfExPSpecification;
use Behavioral\Specification\WASTASpecification;
use Behavioral\Specification\CV;
use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{
    public function getSeniorBackendDevSpecification()
    {
        $yerOfEx = new YearOfExPSpecification(5);
        $phpSpec = new LanguageSpecification('php');
        $javaSpec = new LanguageSpecification('java');
        $gitSpec = new TechSpecifications('git');
        $dockerSpec = new TechSpecifications('docker');
        $PSSpec = new SkillSpecifications('problem-solving');
        $ageSpec = new AgeSpecification(25 , 30);

        $seniorSpecifications = new ANDSpecification(
            $yerOfEx,
            $phpSpec,
            $javaSpec,
            $gitSpec,
            $dockerSpec,
            $PSSpec,
            $ageSpec,
        );

        return $seniorSpecifications;

    }
    public function testCanMatchCvWithSeniorSpecifications()
    {
        $cv = new CV('6', ['problem-solving'], 30, ['git', 'docker', 'ci/cd'], ['php', 'java', 'node']);

        self::assertTrue($this->getSeniorBackendDevSpecification()->isSatisfiedBy($cv));
    }

    public function getJuniorBackendDevSpecification()
    {
        $ageSpec = new AgeSpecification(20 , 25);
        $phpSpec = new LanguageSpecification('php');
        $javaSpec = new LanguageSpecification('java');
        $yerOfEx = new YearOfExPSpecification(2);

        $juniorSpecifications = new ANDSpecification(
            $yerOfEx,
            $ageSpec,
            new ORSpecification($phpSpec , $javaSpec)
        );
        return $juniorSpecifications;
    }

    public function testCanMatchCvWithJuniorSpecifications()
    {
        $cv = new CV('3', ['problem-solving'], 24, ['git'], ['java']);

        self::assertTrue($this->getjuniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    private function getjuniorBackEndDevSpecificationWITHWASTA()
    {
        $yearOfEx = new YearOfExPSpecification(2);
        $phpSpec = new LanguageSpecification('php'); //OR
        $javaSpec = new LanguageSpecification('java');
        $gitSpec = new TechSpecifications('git');
        $ageSpec = new AgeSpecification(20, 25);
        $wastaSpec = new WASTASpecification();


        $juniorSpecifications = new ANDSpecification(
            $yearOfEx,
            $ageSpec,
            $gitSpec,
            new ORSpecification($phpSpec, $javaSpec),
        );
        return  new ORSpecification($juniorSpecifications,$wastaSpec);
    }

    public function testCanNOTMatchCvWithSeniorSpecificationsIFAgeIsNotSatisfied()
    {
        $cv = new CV('6', ['problem-solving'], 36, ['git', 'docker', 'ci/cd'], ['php', 'java', 'node']);

        self::assertFalse($this->getseniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    public function testCanNOTMatchCvWithSeniorSpecificationsIFSkillsIsNotSatisfied()
    {
        $cv = new CV('6', [], 34, ['git', 'docker', 'ci/cd'], ['php', 'java', 'node']);

        self::assertFalse($this->getseniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    public function testCanNotMatchCvWithJuniorSpecificationsIfNoLangauges()
    {
        $cv = new CV('3', ['problem-solving'], 24, ['git'], ['node']);

        self::assertFalse($this->getjuniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    public function testCanMatchCvWithJuniorSpecificationsWithWasta()
    {
        $cv = new CV('-2', [], 44, [''], ['forten']);

        self::asserttrue($this->getjuniorBackEndDevSpecificationWITHWASTA()->isSatisfiedBy($cv));
    }


}