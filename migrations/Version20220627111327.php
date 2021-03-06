<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220627111327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE burger ADD gestionnaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE burger ADD CONSTRAINT FK_EFE35A0D6885AC1B FOREIGN KEY (gestionnaire_id) REFERENCES gestionnaire (id)');
        $this->addSql('CREATE INDEX IDX_EFE35A0D6885AC1B ON burger (gestionnaire_id)');
        $this->addSql('ALTER TABLE gestionnaire ADD gestionnaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gestionnaire ADD CONSTRAINT FK_F4461B206885AC1B FOREIGN KEY (gestionnaire_id) REFERENCES gestionnaire (id)');
        $this->addSql('CREATE INDEX IDX_F4461B206885AC1B ON gestionnaire (gestionnaire_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE burger DROP FOREIGN KEY FK_EFE35A0D6885AC1B');
        $this->addSql('DROP INDEX IDX_EFE35A0D6885AC1B ON burger');
        $this->addSql('ALTER TABLE burger DROP gestionnaire_id');
        $this->addSql('ALTER TABLE gestionnaire DROP FOREIGN KEY FK_F4461B206885AC1B');
        $this->addSql('DROP INDEX IDX_F4461B206885AC1B ON gestionnaire');
        $this->addSql('ALTER TABLE gestionnaire DROP gestionnaire_id');
    }
}
