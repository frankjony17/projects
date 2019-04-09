<?php

/* TareaOperativaBundle:TareaOperativa:index.html.twig */
class __TwigTemplate_ebd0d65cbe19fb9e63e3a34aeda9602fce75b8ca94bb37de1a5e440d4f1e5df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'extjs' => array($this, 'block_extjs'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "TAREAS-OP-ETECSA";
    }

    // line 5
    public function block_favicon($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
    }

    // line 7
    public function block_extjs($context, array $blocks = array())
    {
        $this->env->loadTemplate("::ext-4.2.1.html.twig")->display($context);
    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 10
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tareas_operativas/index.css"), "html", null, true);
        echo "\" />
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        echo "<script>
";
        // line 14
        $this->env->loadTemplate("AdminBundle:Admin:globalScript.html.twig")->display($context);
        // line 15
        echo "
Ext.draw.engine.ImageExporter.defaultUrl = entorno+\"/util/chart/export\";

Ext.application({
    name: 'CDT',
    appFolder: '/js/app',

    controllers: [
        ";
        // line 23
        if (((isset($context["modulo"]) ? $context["modulo"] : $this->getContext($context, "modulo")) == "especialista")) {
            // line 24
            echo "            \"tarea_operativa.especialista.ViewportController\",
            \"tarea_operativa.especialista.TareaGridController\",
            \"tarea_operativa.especialista.TareaFormController\",
            \"tarea_operativa.especialista.OperacionesMenuController\",
            \"tarea_operativa.especialista.AccionFormController\",
            \"tarea_operativa.especialista.HistorialController\",
            \"email.EmailController\",
        ";
        } elseif (((isset($context["modulo"]) ? $context["modulo"] : $this->getContext($context, "modulo")) == "responsable")) {
            // line 32
            echo "            \"tarea_operativa.responsable.ViewportController\",
            \"tarea_operativa.responsable.TareaGridController\",
        ";
        }
        // line 35
        echo "    ],
    launch : function()
    {
        ";
        // line 38
        if (((isset($context["modulo"]) ? $context["modulo"] : $this->getContext($context, "modulo")) == "especialista")) {
            // line 39
            echo "            Ext.create('CDT.view.tarea_operativa.Viewport', { appId: 'tareas-operativas-app-especialista-id' });
        ";
        } elseif (((isset($context["modulo"]) ? $context["modulo"] : $this->getContext($context, "modulo")) == "responsable")) {
            // line 41
            echo "            Ext.create('CDT.view.tarea_operativa.Viewport', { appId: 'tareas-operativas-app-responsable-id' });

        ";
        } else {
            // line 44
            echo "            location.href = entorno+'/secured/logout';
        ";
        }
        // line 46
        echo "    }
});
showWindowsAccion = function(id){Ext.create('CDT.view.tarea_operativa.especialista.accion.AccionForm',{btnText:'Editar',btnIconCls:'edit',myId:id,title:'Editar Acción'});}
</script>";
    }

    public function getTemplateName()
    {
        return "TareaOperativaBundle:TareaOperativa:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  110 => 44,  105 => 41,  101 => 39,  99 => 38,  94 => 35,  89 => 32,  79 => 24,  77 => 23,  67 => 15,  65 => 14,  60 => 13,  53 => 10,  50 => 9,  44 => 7,  38 => 5,  32 => 3,);
    }
}
