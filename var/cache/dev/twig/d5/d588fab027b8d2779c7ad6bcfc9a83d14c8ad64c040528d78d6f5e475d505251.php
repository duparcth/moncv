<?php

/* @App/default/index.html.twig */
class __TwigTemplate_66c3913dc5278e5763cc50c376c78d613a0a8c71a164d3f495f690695fe33425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76dd106fa38975d7c7b238eb1dd0a44524cd88befd9b341258ded0d212408674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76dd106fa38975d7c7b238eb1dd0a44524cd88befd9b341258ded0d212408674->enter($__internal_76dd106fa38975d7c7b238eb1dd0a44524cd88befd9b341258ded0d212408674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_63d2e466019829f809c27c8e1e7507a70d8940e79bae6f5e903c647e0bef27ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d2e466019829f809c27c8e1e7507a70d8940e79bae6f5e903c647e0bef27ba->enter($__internal_63d2e466019829f809c27c8e1e7507a70d8940e79bae6f5e903c647e0bef27ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76dd106fa38975d7c7b238eb1dd0a44524cd88befd9b341258ded0d212408674->leave($__internal_76dd106fa38975d7c7b238eb1dd0a44524cd88befd9b341258ded0d212408674_prof);

        
        $__internal_63d2e466019829f809c27c8e1e7507a70d8940e79bae6f5e903c647e0bef27ba->leave($__internal_63d2e466019829f809c27c8e1e7507a70d8940e79bae6f5e903c647e0bef27ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d83e2376cd03f9de28c430c350e5d645a72aae77d4a0ae9636d74fa1419e0da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83e2376cd03f9de28c430c350e5d645a72aae77d4a0ae9636d74fa1419e0da0->enter($__internal_d83e2376cd03f9de28c430c350e5d645a72aae77d4a0ae9636d74fa1419e0da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39cee275ee607774a05a00bd81f641a2a5559a7a478a0981db5ab67b74ea00a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cee275ee607774a05a00bd81f641a2a5559a7a478a0981db5ab67b74ea00a2->enter($__internal_39cee275ee607774a05a00bd81f641a2a5559a7a478a0981db5ab67b74ea00a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\" id=\"sideNav\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">
        <span class=\"d-block d-lg-none\">Start Bootstrap</span>
        <span class=\"d-none d-lg-block\">
          <img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" src=\"img/profile.jpg\" alt=\"\">
        </span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#about\">A propos</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#experience\">Experiences</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#education\">Formations</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#Skills\">Compétences</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#interests\">Qualifications</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class=\"container-fluid p-0\">

      <section class=\"resume-section p-3 p-lg-5 d-flex d-column\" id=\"about\">
        <div class=\"my-auto\">
          <h1 class=\"mb-0\">Laf
            <span class=\"text-primary\">leur</span>
          </h1>
          <div class=\"subheading mb-5\">Grenoble
            <a href=\"mailto:name@email.com\">lafleur@gmail.com</a>
          </div>
          <p class=\"mb-5\"></p>
          <ul class=\"list-inline list-social-icons mb-0\">
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-linkedin fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"experience\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Experiences</h2>

           ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["experiences"] ?? $this->getContext($context, "experiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 89
            echo "          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "getlieu", array(), "method"), "html", null, true);
            echo "</h3>
              <div class=\"subheading mb-3\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["exp"], "getname", array(), "method"), "html", null, true);
            echo "</div>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\">";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["exp"], "getduree", array(), "method"), "m/Y"), "html", null, true);
            echo " 
            </div>
          </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "          </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"education\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Formations</h2>

          ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formations"] ?? $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 106
            echo "          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "getlieu", array(), "method"), "html", null, true);
            echo "</h3>
              <div class=\"subheading mb-3\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["form"], "getname", array(), "method"), "html", null, true);
            echo "</div>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\">";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["form"], "getdateDebut", array(), "method"), "m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["form"], "getdateFin", array(), "method"), "m/Y"), "html", null, true);
            echo "</span>
            </div>
          </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "            </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"skills\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Compétences informatique</h2>

          <div class=\"subheading mb-3\">Languages</div>
          <ul class=\"list-inline list-icons\">
            <li class=\"list-inline-item\">
              <i>CSS</i>
            </li>
            <li class=\"list-inline-item\">
              <i>HTML5</i>
            </li>
            <li class=\"list-inline-item\">
              <i>PHP</i>
            </li>
            <li class=\"list-inline-item\">
              <i>JAVASCRIPTS</i>
            </li>
          </ul>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"interests\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Loisirs</h2>
          
          ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["loisirs"] ?? $this->getContext($context, "loisirs")));
        foreach ($context['_seq'] as $context["_key"] => $context["lois"]) {
            // line 144
            echo "          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\">";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["lois"], "getlieu", array(), "method"), "html", null, true);
            echo "</h3>
              <div class=\"subheading mb-3\">";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["lois"], "getname", array(), "method"), "html", null, true);
            echo "</div>
              <h3 class=\"mb-0\">";
            // line 148
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lois"], "getfrequence", array()), "m/d/Y"), "html", null, true);
            echo "</h3>

            </div>
          </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "            </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"awards\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Qualifications</h2>
          <ul class=\"fa-ul mb-0\">
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              Faire ses lacets les yeux fermés</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              Plus gros buveur de café du monde avec une moyenne de 22 par jours</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>ère</sup>
              Place - Championnats nationnaux de flechettes à l'aveugle</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>ère</sup>
              Place - Championnats du monde d'esqurime sous marine</li>
          </ul>
        </div>
      </section>
      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"interests\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Loisirs <a href=\"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_loisir");
        echo "\">Loisirs</a>
          </h2>
          ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["loisirs"] ?? $this->getContext($context, "loisirs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tmp"]) {
            // line 181
            echo "             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_loisir", array("id" => $this->getAttribute($context["tmp"], "getId", array(), "method"))), "html", null, true);
            echo "\">Edit ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tmp"], "getName", array(), "method"), "html", null, true);
            echo "</a><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "          
         
          ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["loisirs"] ?? $this->getContext($context, "loisirs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tmp"]) {
            // line 186
            echo "             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_loisir", array("id" => $this->getAttribute($context["tmp"], "getId", array(), "method"))), "html", null, true);
            echo "\">Delete ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tmp"], "getName", array(), "method"), "html", null, true);
            echo "</a><br />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "           
        </div>
      </section>

    </div>

</html>
";
        
        $__internal_39cee275ee607774a05a00bd81f641a2a5559a7a478a0981db5ab67b74ea00a2->leave($__internal_39cee275ee607774a05a00bd81f641a2a5559a7a478a0981db5ab67b74ea00a2_prof);

        
        $__internal_d83e2376cd03f9de28c430c350e5d645a72aae77d4a0ae9636d74fa1419e0da0->leave($__internal_d83e2376cd03f9de28c430c350e5d645a72aae77d4a0ae9636d74fa1419e0da0_prof);

    }

    public function getTemplateName()
    {
        return "@App/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 188,  312 => 186,  308 => 185,  304 => 183,  293 => 181,  289 => 180,  284 => 178,  257 => 153,  246 => 148,  242 => 147,  238 => 146,  234 => 144,  230 => 143,  201 => 116,  189 => 112,  183 => 109,  179 => 108,  175 => 106,  171 => 105,  163 => 99,  153 => 95,  147 => 92,  143 => 91,  139 => 89,  135 => 88,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends \"base.html.twig\"%}
  
  {% block body %}

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\" id=\"sideNav\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">
        <span class=\"d-block d-lg-none\">Start Bootstrap</span>
        <span class=\"d-none d-lg-block\">
          <img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" src=\"img/profile.jpg\" alt=\"\">
        </span>
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#about\">A propos</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#experience\">Experiences</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#education\">Formations</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#Skills\">Compétences</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#interests\">Qualifications</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class=\"container-fluid p-0\">

      <section class=\"resume-section p-3 p-lg-5 d-flex d-column\" id=\"about\">
        <div class=\"my-auto\">
          <h1 class=\"mb-0\">Laf
            <span class=\"text-primary\">leur</span>
          </h1>
          <div class=\"subheading mb-5\">Grenoble
            <a href=\"mailto:name@email.com\">lafleur@gmail.com</a>
          </div>
          <p class=\"mb-5\"></p>
          <ul class=\"list-inline list-social-icons mb-0\">
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-linkedin fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fa fa-circle fa-stack-2x\"></i>
                  <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"experience\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Experiences</h2>

           {% for exp in experiences %}
          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\">{{exp.getlieu()}}</h3>
              <div class=\"subheading mb-3\">{{exp.getname()}}</div>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\">{{exp.getduree()|date(\"m/Y\")}} 
            </div>
          </div>
              {% endfor %}
          </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"education\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Formations</h2>

          {% for form in formations %}
          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\">{{form.getlieu()}}</h3>
              <div class=\"subheading mb-3\">{{form.getname()}}</div>
            </div>
            <div class=\"resume-date text-md-right\">
              <span class=\"text-primary\">{{form.getdateDebut()|date(\"m/Y\")}} - {{form.getdateFin()|date(\"m/Y\")}}</span>
            </div>
          </div>
              {% endfor %}
            </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"skills\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Compétences informatique</h2>

          <div class=\"subheading mb-3\">Languages</div>
          <ul class=\"list-inline list-icons\">
            <li class=\"list-inline-item\">
              <i>CSS</i>
            </li>
            <li class=\"list-inline-item\">
              <i>HTML5</i>
            </li>
            <li class=\"list-inline-item\">
              <i>PHP</i>
            </li>
            <li class=\"list-inline-item\">
              <i>JAVASCRIPTS</i>
            </li>
          </ul>
      </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"interests\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Loisirs</h2>
          
          {% for lois in loisirs %}
          <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
            <div class=\"resume-content mr-auto\">
              <h3 class=\"mb-0\">{{lois.getlieu()}}</h3>
              <div class=\"subheading mb-3\">{{lois.getname()}}</div>
              <h3 class=\"mb-0\">{{ lois.getfrequence|date(\"m/d/Y\") }}</h3>

            </div>
          </div>
              {% endfor %}
            </section>

      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"awards\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Qualifications</h2>
          <ul class=\"fa-ul mb-0\">
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              Faire ses lacets les yeux fermés</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              Plus gros buveur de café du monde avec une moyenne de 22 par jours</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>ère</sup>
              Place - Championnats nationnaux de flechettes à l'aveugle</li>
            <li>
              <i class=\"fa-li fa fa-trophy text-warning\"></i>
              1<sup>ère</sup>
              Place - Championnats du monde d'esqurime sous marine</li>
          </ul>
        </div>
      </section>
      <section class=\"resume-section p-3 p-lg-5 d-flex flex-column\" id=\"interests\">
        <div class=\"my-auto\">
          <h2 class=\"mb-5\">Loisirs <a href=\"{{path('create_loisir') }}\">Loisirs</a>
          </h2>
          {% for tmp in loisirs %}
             <a href=\"{{path('edit_loisir', {'id': tmp.getId() } ) }}\">Edit {{ tmp.getName() }}</a><br />
          {% endfor %}
          
         
          {% for tmp in loisirs %}
             <a href=\"{{path('delete_loisir', {'id': tmp.getId() } ) }}\">Delete {{ tmp.getName() }}</a><br />
          {% endfor %}
           
        </div>
      </section>

    </div>

</html>
{% endblock %}", "@App/default/index.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
