<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("vehicle/index", "Go Back") }}</li>
            <li class="next">{{ link_to("vehicle/new", "Create ") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Search result</h1>
</div>

{{ content() }}

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ListID</th>
            <th>TimeCreated</th>
            <th>TimeModified</th>
            <th>EditSequence</th>
            <th>Name</th>
            <th>IsActive</th>
            <th>Description</th>
            <th>Status</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for vehicle in page.items %}
            <tr>
                <td>{{ vehicle.getListid() }}</td>
            <td>{{ vehicle.getTimecreated() }}</td>
            <td>{{ vehicle.getTimemodified() }}</td>
            <td>{{ vehicle.getEditsequence() }}</td>
            <td>{{ vehicle.getName() }}</td>
            <td>{{ vehicle.getIsactive() }}</td>
            <td>{{ vehicle.getDescription() }}</td>
            <td>{{ vehicle.getStatus() }}</td>

                <td>{{ link_to("vehicle/edit/"~vehicle.getListid(), "Edit") }}</td>
                <td>{{ link_to("vehicle/delete/"~vehicle.getListid(), "Delete") }}</td>
            </tr>
        {% endfor %}
        {% endif %}
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-1">
        <p class="pagination" style="line-height: 1.42857;padding: 6px 12px;">
            {{ page.current~"/"~page.total_pages }}
        </p>
    </div>
    <div class="col-sm-11">
        <nav>
            <ul class="pagination">
                <li>{{ link_to("vehicle/search", "First") }}</li>
                <li>{{ link_to("vehicle/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("vehicle/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("vehicle/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
