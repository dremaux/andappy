<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211124095343 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cagence (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cagence_agence (cagence_id INT NOT NULL, agence_id INT NOT NULL, INDEX IDX_BD7EEA3AE876F0A6 (cagence_id), INDEX IDX_BD7EEA3AD725330D (agence_id), PRIMARY KEY(cagence_id, agence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cagence_agence ADD CONSTRAINT FK_BD7EEA3AE876F0A6 FOREIGN KEY (cagence_id) REFERENCES cagence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cagence_agence ADD CONSTRAINT FK_BD7EEA3AD725330D FOREIGN KEY (agence_id) REFERENCES agence (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cagence_agence DROP FOREIGN KEY FK_BD7EEA3AE876F0A6');
        $this->addSql('DROP TABLE cagence');
        $this->addSql('DROP TABLE cagence_agence');
    }
}
