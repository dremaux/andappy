<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211110141317 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE property_agence (property_id INT NOT NULL, agence_id INT NOT NULL, INDEX IDX_1AB6F5D5549213EC (property_id), INDEX IDX_1AB6F5D5D725330D (agence_id), PRIMARY KEY(property_id, agence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE property_agence ADD CONSTRAINT FK_1AB6F5D5549213EC FOREIGN KEY (property_id) REFERENCES property (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE property_agence ADD CONSTRAINT FK_1AB6F5D5D725330D FOREIGN KEY (agence_id) REFERENCES agence (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE agence_property');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agence_property (agence_id INT NOT NULL, property_id INT NOT NULL, INDEX IDX_AA7A1C43549213EC (property_id), INDEX IDX_AA7A1C43D725330D (agence_id), PRIMARY KEY(agence_id, property_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE agence_property ADD CONSTRAINT FK_AA7A1C43549213EC FOREIGN KEY (property_id) REFERENCES property (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agence_property ADD CONSTRAINT FK_AA7A1C43D725330D FOREIGN KEY (agence_id) REFERENCES agence (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE property_agence');
    }
}
