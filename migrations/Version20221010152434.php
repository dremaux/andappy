<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221010152434 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, possible_response LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', text VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_coins DROP FOREIGN KEY FK_EC43708D7D168D84');
        $this->addSql('DROP TABLE user_coins');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_coins (id INT AUTO_INCREMENT NOT NULL, coins_user_id INT NOT NULL, UNIQUE INDEX UNIQ_EC43708D7D168D84 (coins_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user_coins ADD CONSTRAINT FK_EC43708D7D168D84 FOREIGN KEY (coins_user_id) REFERENCES user (id)');
        $this->addSql('DROP TABLE question');
    }
}
