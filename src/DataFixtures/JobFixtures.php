<?php


namespace App\DataFixtures;
use App\Entity\Jobs;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class JobFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $jobSensioLabs = new Jobs();
        $jobSensioLabs->setCategory($manager->merge($this->getReference('category-programming')));
        $jobSensioLabs->setType('full-time');
        $jobSensioLabs->setCompany('Sensio Labs');
        $jobSensioLabs->setLogo('sensio-labs.gif');
        $jobSensioLabs->setUrl('http://www.sensiolabs.com/');
        $jobSensioLabs->setPosition('Web Developer');
        $jobSensioLabs->setLocation('Paris, France');
        $jobSensioLabs->setDescription('You\'ve already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.');
        $jobSensioLabs->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $jobSensioLabs->setPublic(true);
        $jobSensioLabs->setActivated(true);
        $jobSensioLabs->setToken('job_sensio_labs');
        $jobSensioLabs->setEmail('job@example.com');


        $jobExtremeSensio = new Jobs();
        $jobExtremeSensio->setCategory($manager->merge($this->getReference('category-design')));
        $jobExtremeSensio->setType('part-time');
        $jobExtremeSensio->setCompany('Extreme Sensio');
        $jobExtremeSensio->setLogo('extreme-sensio.gif');
        $jobExtremeSensio->setUrl('http://www.extreme-sensio.com/');
        $jobExtremeSensio->setPosition('Web Designer');
        $jobExtremeSensio->setLocation('Paris, France');
        $jobExtremeSensio->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
        $jobExtremeSensio->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $jobExtremeSensio->setPublic(true);
        $jobExtremeSensio->setActivated(true);
        $jobExtremeSensio->setToken('job_extreme_sensio');
        $jobExtremeSensio->setEmail('job@example.com');



        $jobExpired = new Jobs();
        $jobExpired->setCategory($manager->merge($this->getReference('category-programming')));
        $jobExpired->setType('full-time');
        $jobExpired->setCompany('Sensio Labs');
        $jobExpired->setLogo('sensio-labs.gif');
        $jobExpired->setUrl('http://www.sensiolabs.com/');
        $jobExpired->setPosition('Web Developer Expired');
        $jobExpired->setLocation('Paris, France');
        $jobExpired->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
        $jobExpired->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
        $jobExpired->setPublic(true);
        $jobExpired->setActivated(true);
        $jobExpired->setToken('job_expired');
        $jobExpired->setEmail('job@example.com');
        $jobExpired->setCreatedAt(new \DateTime('-40 days'));
        $jobExpired->setUpdatedAt(new \DateTime('-40 days'));
        $jobExpired->setExpiresAt(new \DateTime('-10 days'));

        $willExpire = new Jobs();
        $willExpire->setCategory($manager->merge($this->getReference('category-programming')));
        $willExpire->setType('full-time');
        $willExpire->setCompany('Sensio Labs');
        $willExpire->setLogo('sensio-labs.gif');
        $willExpire->setUrl('http://www.sensiolabs.com/');
        $willExpire->setPosition('Web Developer  will Expired');
        $willExpire->setLocation('Paris, France');
        $willExpire->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
        $willExpire->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
        $willExpire->setPublic(true);
        $willExpire->setActivated(true);
        $willExpire->setToken('job_will_expire');
        $willExpire->setEmail('job@example.com');
        $willExpire->setCreatedAt(new \DateTime('-27 days'));
        $willExpire->setUpdatedAt(new \DateTime('-27 days'));
        $willExpire->setExpiresAt(new \DateTime('+3 days'));




        $manager->persist($willExpire);
        $manager->persist($jobExpired);
        $manager->persist($jobSensioLabs);
        $manager->persist($jobExtremeSensio);



        for ($i = 100; $i <= 130; $i++) {
            $job = new Jobs();
            $job->setCategory($manager->merge($this->getReference('category-design')));
            $job->setType('full-time');
            $job->setCompany('Company ' . $i);
            $job->setPosition('Web Designer');
            $job->setLocation('Paris, France');
            $job->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
            $job->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
            $job->setPublic(true);
            $job->setActivated(true);
            $job->setToken('job_-' . $i);
            $job->setEmail('job@example.com');
            $manager->persist($job);
        }

        for ($i = 100; $i <= 130; $i++) {
            $job = new Jobs();
            $job->setCategory($manager->merge($this->getReference('category-programming')));
            $job->setType('full-time');
            $job->setCompany('Company ' . $i);
            $job->setPosition('Web Developer');
            $job->setLocation('Tunis, Tunisie');
            $job->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
            $job->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
            $job->setPublic(true);
            $job->setActivated(true);
            $job->setToken('job_' . $i);
            $job->setEmail('job@example.com');
            $manager->persist($job);
        }

        $manager->flush();
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
}