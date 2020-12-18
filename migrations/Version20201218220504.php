<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201218220504 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant_picture ADD restaurant_id INT NOT NULL');
        $this->addSql('ALTER TABLE restaurant_picture ADD CONSTRAINT FK_DC9013FCB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id)');
        $this->addSql('CREATE INDEX IDX_DC9013FCB1E7706E ON restaurant_picture (restaurant_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant_picture DROP FOREIGN KEY FK_DC9013FCB1E7706E');
        $this->addSql('DROP INDEX IDX_DC9013FCB1E7706E ON restaurant_picture');
        $this->addSql('ALTER TABLE restaurant_picture DROP restaurant_id');
    }
}
