<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("empledos/index", "Atras") }}</li>
            <li class="next">{{ link_to("empledos/new", "Crear ") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>Resultados De Busqueda</h1>
</div>

{{ content() }}

<div class="row">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
            <th>Huella</th>
            <th>Nombre</th>
            <th>Puesto</th>
            <th>Domicilio</th>
            <th>Telefono</th>
            <th>Fecha de ingreso</th>
            <th>Foto</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% if page.items is defined %}
        {% for empledo in page.items %}
            <tr>
                <td>{{ empledo.getId() }}</td>
            <td>{{ empledo.getHuella() }}</td>
            <td>{{ empledo.getNombre() }}</td>
            <td>{{ empledo.getPuesto() }}</td>
            <td>{{ empledo.getDomicilio() }}</td>
            <td>{{ empledo.getTelefono() }}</td>
            <td>{{ empledo.getFechadeingreso() }}</td>
            <td>{{ empledo.getFoto() }}</td>

                <td>{{ link_to("empledos/edit/"~empledo.getId(), "Editar") }}</td>
                <td>{{ link_to("empledos/delete/"~empledo.getId(), "Eliminar") }}</td>
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
                <li>{{ link_to("empledos/search", "First") }}</li>
                <li>{{ link_to("empledos/search?page="~page.before, "Previous") }}</li>
                <li>{{ link_to("empledos/search?page="~page.next, "Next") }}</li>
                <li>{{ link_to("empledos/search?page="~page.last, "Last") }}</li>
            </ul>
        </nav>
    </div>
</div>
