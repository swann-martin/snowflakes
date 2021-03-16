<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Snowflake;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class Snowflakes extends Fixture
{
    private $_name;
    private $_luckyNumber;
    private $_description;
    private $_createdAt;


    public function __construct()
    {
    }
    public function load(ObjectManager $manager)
    {
        // $product = new Product();

        $snowflake1 = new Snowflake;
        $snowflake1->setName('Flocon')
            ->setLuckyNumber(1)
            ->setDescription('Je suis le flocon numéro 1')
            ->setCreatedAt(new \DateTime());
        $manager->persist($snowflake1);

        $snowflake2 = new Snowflake;
        $snowflake2->setName('Flocon2')
            ->setLuckyNumber(2)
            ->setDescription('Je suis le flocon numéro 2')
            ->setCreatedAt(new \DateTime());
        $manager->persist($snowflake2);

        $snowflake3 = new Snowflake;
        $snowflake3->setName('Flocon3')
            ->setLuckyNumber(3)
            ->setDescription('Je susi le flocon numéro 3')
            ->setCreatedAt(new \DateTime());
        $manager->persist($snowflake3);

        $manager->flush();
    }
}
