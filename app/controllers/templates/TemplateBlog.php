<?php
namespace controllers\templates;
use core\Component;
use core\TemplatePrototype;
use components\LeftMenu;
use components\TopMenu;
use components\Catalog;

class TemplateBlog extends TemplatePrototype
{
    /**
     *  @param array $arComponents
     */
    protected $arComponents = [];
    public Component $view;
    public function setComponent(Component  $component)
    {
        $this->arComponents[$component->getVariableTemplate()] = $component;
    }

    public function show()
    {
        $this->setComponent((new LeftMenu()));
        $this->setComponent((new TopMenu()));
        $this->setView();
        $this->render(true);


    }

    public function setView()
    {
        $this->arComponents['view'] = $this->view;
    }

}

