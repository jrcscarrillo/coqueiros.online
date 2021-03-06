{% extends "layouts/adicional.volt" %}
{% block forma %}
    {{ content() }}
    <div align="left">
        {{ link_to("users", "&larr; Atras") }}
    </div>
    <div class="body bg-blue">
    {% endblock %}
    {% block cabecera %}
        {{ form("users/save", 'role': 'form', 'class':'sky-form')}}
    {% endblock %}
    {% block cuerpoforma %}
        <fieldset>

            {% for element in form %}
                {% if is_a(element, 'Phalcon\Forms\Element\Hidden') %}
                    {{ element }}
                {% else %}
                    <section>
                        <div class="row">
                            {{ element.label(['class': 'label col col-4']) }}
                            <div class="col col-8">
                                <label class="input">
                                    <i class="icon-append fa fa-edit"></i>
                                    {{ element }}
                                </label>
                            </div>
                        </div>
                    </section>
                {% endif %}
            {% endfor %}

        </fieldset>
        <footer>
            {{ submit_button("Guardar", "class": "btn btn-success") }}
            <p class="help-block">Guardar los cambios realizados.</p>
        </footer>
    </form>
</div>
{% endblock %}
