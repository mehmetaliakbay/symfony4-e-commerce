<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190116181612 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE setting (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, keywords VARCHAR(255) DEFAULT NULL, company VARCHAR(255) DEFAULT NULL, adress VARCHAR(255) DEFAULT NULL, fax VARCHAR(15) DEFAULT NULL, phone VARCHAR(15) DEFAULT NULL, email VARCHAR(50) DEFAULT NULL, smtpserver VARCHAR(100) DEFAULT NULL, smtpemail VARCHAR(50) DEFAULT NULL, smptpassword VARCHAR(20) DEFAULT NULL, smtpport INT DEFAULT NULL, aboutus LONGTEXT DEFAULT NULL, contact LONGTEXT DEFAULT NULL, referances LONGTEXT DEFAULT NULL, status VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE setting');
    }
}
