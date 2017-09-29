<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("admin/index", "Go Back") }}</li>
            <li class="next">{{ link_to("admin/new", "Create ") }}</li>
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
                <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contrasena</th>
            <th>D1</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for admin in page.items %}
            <tr>
                <td>{{ admin.getId() }}</td>
            <td>{{ admin.getNombre() }}</td>
            <td>{{ admin.getEmail() }}</td>
            <td>{{ admin.getContrasena() }}</td>
            <td>{{ admin.getD1() }}</td>

                <td>{{ link_to("admin/edit/"~admin.getId(), "Edit") }}</td>
                <td>{{ link_to("admin/delete/"~admin.getId(), "Delete") }}</td>
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
                <li>{{ link_to("admin/search", "First") }}</li>
                <li>{{ link_to("admin/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("admin/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("admin/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
