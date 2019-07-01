<div class="row">
    <div class="col-sm-3">
        <p></p>
    </div>
    <div class="col-sm-6">
        <nav>
            <ul class="pagination">
                <li class="previous">{{ link_to("guiacab/index", "Atras") }}</li>
                <li>{{ link_to("guiacab/search", "Primera") }}</li>
                <li>{{ link_to("guiacab/search?page="~page.before, "Ant.") }}</li>
                <li>{{ link_to("guiacab/search?page="~page.next, "Sig.") }}</li>
                <li>{{ link_to("guiacab/search?page="~page.last, "Fin") }}</li>
            </ul>
        </nav>
    </div>
    <div class="col-sm-3">
        <nav>
            <ul class="pagination pagination-lg">
                <li class="btn btn-success">{{ "Pag.  "~page.current ~"  de  " }}</li>
                <li class="btn btn-warning">{{ page.total_pages ~ "  Pags." }}</li>
            </ul>
        </nav>
    </div>
</div>

{{ content() }}

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-responsive table-bordered table-striped" align="center">
                <thead class="coloreando" style="background-color: black">
                    <tr>
                        <th>Fecha Emision</th>
                        <th>Numero Guia</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Estado</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                        <th>Firmar</th>
                        <th>Autorizar</th>
                        <th>Imprimir</th>
                    </tr>
                </thead>
                <tbody>
                    {% if page.items is defined %}
                        {% for guia in page.items %}
                            <tr>
                                <td>{{ guia.txnDate }}</td>
                                <td>{{ guia.refNumber }}</td>
                                <td>{{ guia.dateBegin }}</td>
                                <td>{{ guia.dateEnd }}</td>
                                <td>{{ guia.estado }}</td>
                                <td width="2%">{{ link_to("guiacab/edit/" ~ guia.refNumber, '<i class="glyphicon glyphicon-file"></i>', "class": "btn btn-default") }}</td>
                                <td width="2%">{{ link_to("guiacab/delete/" ~ guia.refNumber, '<i class="glyphicon glyphicon-remove"></i>', "class": "btn btn-default") }}</td>
                                <td width="2%">{{ link_to("guiacab/firmar/" ~ guia.refNumber, '<i class="glyphicon glyphicon-pencil"></i>', "class": "btn btn-default") }}</td>
                                <td width="2%">{{ link_to("guiacab/autorizar/" ~ guia.refNumber, '<i class="glyphicon glyphicon-certificate"></i>', "class": "btn btn-default") }}</td>
                                <td width="2%">{{ link_to("guiacab/impresion/" ~ guia.refNumber, '<i class="glyphicon glyphicon-print"></i>', "class": "btn btn-default") }}</td>

                            </tr>
                        {% endfor %}
                    {% endif %}
                </tbody>
            </table>
        </div>
    </div>
</div>

