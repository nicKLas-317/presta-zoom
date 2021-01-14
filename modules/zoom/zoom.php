<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class zoom extends Module
{
    public function __construct()
    {
        $this->name = 'zoom';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Nicolas Senentz';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.6',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Zoom module');
        $this->description = $this->l('Zoom produits');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('zoom')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() &&
        $this->registerHook('leftColumn') &&
        $this->registerHook('actionFrontControllerSetMedia') &&
        Configuration::updateValue('zoom', 'zoom');
    }

    public function uninstall()
    {
        if (
            !parent::uninstall() ||
            !Configuration::deleteByName('zoom')
        ) {
            return false;
        }

        return true;
    }

    public function hookDisplayLeftColumn($params)
    {
        $this->context->smarty->assign([
            'my_module_name' => Configuration::get('zoom'),
            // 'my_module_link' => $this->context->link->getModuleLink('mymodule', 'display')
        ]);

        return $this->display(__FILE__, 'zoom.tpl');
    }

    public function hookActionFrontControllerSetMedia()
    {
        $this->context->controller->addCSS(
            // 'zoom',
            $this->_path.'views/css/zoom.css',
            // [
            //     'media' => 'all',
            //     'priority' => 1000,
            // ]
        );
        $this->context->controller->addJS($this->_path.'lib/jquery-3.4.1.min.js');
        $this->context->controller->addJS($this->_path.'lib/jquery.zoom.min.js');
        $this->context->controller->addJS($this->_path.'views/js/zoom.js'
   
        );
    }
}
