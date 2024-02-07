<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('sites.name', 'CMS');
        $this->migrator->add('sites.description', 'Full CMS');
        $this->migrator->add('sites.logo', '1');
        $this->migrator->add('sites.author', 'abbasmashaddy72');
        $this->migrator->add('sites.address', 'Hyderabad, India');
        $this->migrator->add('sites.email', 'info@cms.com');
        $this->migrator->add('sites.phone', '+91-8639-623367');
        $this->migrator->add('sites.timezone', 'UTC');
        $this->migrator->add('sites.location', 'India');
        $this->migrator->add('sites.currency', 'USD');
        $this->migrator->add('sites.social', []);
    }
};
