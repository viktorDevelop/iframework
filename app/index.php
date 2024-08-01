<?
//Z2hwX3pid1V4UGoxTWFjeWVramVHaHloRkVOTUdvQnU2ejRRR1pEdQ==
abstract class  Component
{
    public function render($comp,$data = [])
    {
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        ob_start();
        $path = $_SERVER['DOCUMENT_ROOT'].'/templates/blog/components/'.$comp.'/template.php';
        if (file_exists($path)) {
            include $path;
        }else{
            echo "404";
        }

        $content = ob_get_contents();

        ob_clean();
        echo $content;
    }
}

class TopMenu extends Component
{
    public function getVariableTemplate()
    {
        return __CLASS__;
    }

    public function show()
    {
        parent::render('menu/menu.top',['arResult'=>[
            [
                'title'=>'home',
                'url'=>'/'
            ],
            [
                'title'=>'php',
                'url'=>'/php'
            ]
        ]]);
    }

}

class Catalog extends Component
{
    public function getVariableTemplate()
    {
        return __CLASS__;
    }

    public function show($k = '')
    {
        parent::render('menu/menu.top');
    }
}

class LeftMenu extends Component
{
    public function getVariableTemplate()
    {
        return __CLASS__;
    }

    public function show($k = '')
    {



    }
}

class TemplatePrototype
{
    protected $temlate_name;

    public function __construct($temlate_name)
    {
        $this->temlate_name = $temlate_name;
    }

    public function render($show = false)
    {

        foreach ($this->arComponents as $key => $value) {
            $$key = $value;
        }

        ob_start();
        $path = $_SERVER['DOCUMENT_ROOT'].'/templates/'.$this->temlate_name.'/template.php';
        if (file_exists($path)) {
            include $path;
        }else{
            echo "404";
        }

        $content = ob_get_contents();

        ob_clean();
        if ($show) {
            echo $content;
        }else{
            return $content;
        }

    }
}

class TemplateBlog extends TemplatePrototype
{
    /**
     *  @param array $arComponents
    */
    protected $arComponents = [];
    public function setComponent(Component $component)
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
        $this->arComponents['view'] = (new Catalog());
    }

}


$temp = new TemplateBlog('blog');

//$temp->
$temp->show();