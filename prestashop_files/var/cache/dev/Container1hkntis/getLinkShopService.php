<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsAccounts\Account\LinkShop' shared service.

return $this->services['PrestaShop\\Module\\PsAccounts\\Account\\LinkShop'] = new \PrestaShop\Module\PsAccounts\Account\LinkShop(${($_ = isset($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] : $this->load('getConfigurationRepositoryService.php')) && false ?: '_'});
