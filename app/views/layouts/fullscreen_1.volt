{{ elements.getModelosAdicional() }}
<div class="container">
    <div class="row">

        <div class="col-md-6">
            {% block forma %} {% endblock %}
            {% block cabecera %} {% endblock %}
            <header><?php echo $this->view->descriptivo['cabecera']; ?></header>
            {% block cuerpoforma %} {% endblock %}
        </div>

    </div>
</div>
