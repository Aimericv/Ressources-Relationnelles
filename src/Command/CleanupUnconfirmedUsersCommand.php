<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CleanupUnconfirmedUsersCommand extends Command
{
    protected static $defaultName = 'app:cleanup-unconfirmed-users';

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Supprime les utilisateurs dont l\'email n\'a pas été confirmé après 2 minutes.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $now = new \DateTime();
        $interval = new \DateInterval('PT2M'); // 2 minutes
        $threshold = $now->sub($interval);

        $users = $this->entityManager->getRepository(User::class)->createQueryBuilder('u')
            ->where('u.isConfirmed = :isConfirmed')
            ->andWhere('u.created_at < :threshold')
            ->setParameter('isConfirmed', false)
            ->setParameter('threshold', $threshold)
            ->getQuery()
            ->getResult();

        foreach ($users as $user) {
            $this->entityManager->remove($user);
        }

        $this->entityManager->flush();

        $output->writeln('Utilisateurs non confirmés supprimés avec succès.');

        return Command::SUCCESS;
    }
}