<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200721125854 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE website DROP FOREIGN KEY FK_476F5DE78AAA43D0');
        $this->addSql('DROP INDEX UNIQ_476F5DE78AAA43D0 ON website');
        $this->addSql('ALTER TABLE website ADD publisher_id INT DEFAULT NULL, DROP publisher_id_id');
        $this->addSql('ALTER TABLE website ADD CONSTRAINT FK_476F5DE740C86FCE FOREIGN KEY (publisher_id) REFERENCES publisher (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_476F5DE740C86FCE ON website (publisher_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE website DROP FOREIGN KEY FK_476F5DE740C86FCE');
        $this->addSql('DROP INDEX UNIQ_476F5DE740C86FCE ON website');
        $this->addSql('ALTER TABLE website ADD publisher_id_id INT NOT NULL, DROP publisher_id');
        $this->addSql('ALTER TABLE website ADD CONSTRAINT FK_476F5DE78AAA43D0 FOREIGN KEY (publisher_id_id) REFERENCES publisher (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_476F5DE78AAA43D0 ON website (publisher_id_id)');
    }
}
