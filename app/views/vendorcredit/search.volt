<div class="row">
    <div class="col-sm-3">
        <p></p>
    </div>
    <div class="col-sm-6">
        <nav>
            <ul class="pagination">
                <li class="previous">{{ link_to("vendorcredit/index", "Atras") }}</li>
                <li>{{ link_to("vendorcredit/search", "Primera") }}</li>
                <li>{{ link_to("vendorcredit/search?page="~page.before, "Ant.") }}</li>
                <li>{{ link_to("vendorcredit/search?page="~page.next, "Sig.") }}</li>
                <li>{{ link_to("vendorcredit/search?page="~page.last, "Fin") }}</li>
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
                        <th width="30%">Proveedor Nombres/Razon </th>
                        <th>Fecha Emision</th>
                        <th>Numero Retencion</th>
                        <th>Valor Retencion</th>
                        <th>Estado SRI</th>

                        <th>Firma</th>
                        <th>Autoriza</th>
                        <th>Imprime</th>
                    </tr>
                </thead>
                <tbody>
                    {% if page.items is defined%}
                        {% for miscodigos in page.items %}
                            <tr>
                                <td>{{ miscodigos.getVendorrefFullname() }}</td>
                                <td>{{ miscodigos.getTxndate() }}</td>
                                <td>{{ miscodigos.getRefnumber() }}</td>
                                <td>{{ miscodigos.getCreditamount() | number_format(2, ',', '.') }}</td>
                                <td>{{ miscodigos.getCustomField15() }}</td>
                                <td width="2%">{{ link_to("vendorcredit/firmar/" ~ miscodigos.getTxnid(), '<i class="glyphicon glyphicon-pencil"></i>', "class": "btn btn-default") }}</td>
                                <td width="2%">{{ link_to("vendorcredit/autorizar/" ~ miscodigos.getTxnid(), '<i class="glyphicon glyphicon-certificate"></i>', "class": "btn btn-default") }}</td>
                                <td width="2%">{{ link_to("vendorcredit/impresion/" ~ miscodigos.getTxnid(), '<i class="glyphicon glyphicon-print"></i>', "class": "btn btn-default") }}</td>
                            </tr>
                        </tbody>


                        {% endfor %}
                    {% else %}
                        No se han encontrado retenciones sincronizadas desde el Quickbooks
                    {% endif %}
            </table>
        </div>
    </div>
</div>