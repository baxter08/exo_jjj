<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230601091622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produc (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, descriptif VARCHAR(255) NOT NULL, age_minimum VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD description VARCHAR(255) DEFAULT NULL, DROP descriptif, CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE age_minimum age_minimum VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD adresse VARCHAR(255) DEFAULT NULL, ADD age VARCHAR(255) DEFAULT NULL, ADD date_de_naissance DATETIME DEFAULT NULL, DROP date, DROP adress, CHANGE nom nom VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE produc');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE product ADD descriptif INT NOT NULL, DROP description, CHANGE nom nom INT NOT NULL, CHANGE age_minimum age_minimum INT NOT NULL');
        $this->addSql('ALTER TABLE `user` ADD date DATETIME NOT NULL, ADD adress VARCHAR(2000) NOT NULL, DROP adresse, DROP age, DROP date_de_naissance, CHANGE nom nom VARCHAR(255) NOT NULL');
    }
}
