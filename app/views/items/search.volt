<div class="row">
    <div class="col-sm-3">
        <p></p>
    </div>
    <div class="col-sm-6">
        <nav>
            <ul class="pagination">
                <li class="previous">{{ link_to("items/index", "Atras") }}</li>
                <li>{{ link_to("items/search", "Primera") }}</li>
                <li>{{ link_to("items/search?page="~page.before, "Ant.") }}</li>
                <li>{{ link_to("items/search?page="~page.next, "Sig.") }}</li>
                <li>{{ link_to("items/search?page="~page.last, "Fin") }}</li>
            </ul>
        </nav>
    </div>
    <div class="col-sm-3">
        <nav>
            <ul class="pagination">
                <li class="btn-info">{{ "Pag.  "~page.current ~"  de  " }}</li>
                <li class="btn-info">{{ page.total_pages ~ "  Pags." }}</li>
            </ul>
        </nav>
    </div>
</div>
{{ content() }}

<div class="row">
    <table class="table table-responsive table-bordered table-striped" align="center">
        <thead class="coloreando" style="background-color: black">
            <tr>
                <th>Numero</th>
                <th>Codigo</th>
                <th>Nombre Corto</th>
                <th>Nombre Largo</th>
                <th>Descripcion de Ventas</th>
                <th>Precio de Venta</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% if page.items is defined %}
                {% for item in page.items %}
                    <tr>
                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.fullname }}</td>
                        <td>{{ item.description }}</td>
                        <td>{{ item.sales_desc }}</td>
                        <td>{{ item.sales_price }}</td>
                        <td>{{ link_to("items/edit/"~item.id, "Edit") }}</td>
                        <td>{{ link_to("items/delete/"~item.id, "Delete") }}</td>
                    </tr>
                {% endfor %}
            {% endif %}
        </tbody>
    </table>
</div>

