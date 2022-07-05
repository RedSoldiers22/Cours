<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220622094242 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits ADD inc_id INT NOT NULL, ADD types_id INT NOT NULL, ADD pilote_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C8A872D2 FOREIGN KEY (inc_id) REFERENCES inc (id)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C8EB23357 FOREIGN KEY (types_id) REFERENCES types (id)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8CF510AAE9 FOREIGN KEY (pilote_id) REFERENCES pilote (id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8C8A872D2 ON produits (inc_id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8C8EB23357 ON produits (types_id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8CF510AAE9 ON produits (pilote_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C8A872D2');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C8EB23357');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8CF510AAE9');
        $this->addSql('DROP INDEX IDX_BE2DDF8C8A872D2 ON produits');
        $this->addSql('DROP INDEX IDX_BE2DDF8C8EB23357 ON produits');
        $this->addSql('DROP INDEX IDX_BE2DDF8CF510AAE9 ON produits');
        $this->addSql('ALTER TABLE produits DROP inc_id, DROP types_id, DROP pilote_id');
    }
}
