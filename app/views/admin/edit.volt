<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("admin", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Edit admin
    </h1>
</div>

{{ content() }}

{{ form("admin/save", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldId" class="col-sm-2 control-label">Id</label>
    <div class="col-sm-10">
        {{ text_field("id", "type" : "numeric", "class" : "form-control", "id" : "fieldId") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldNombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
        {{ text_field("nombre", "size" : 30, "class" : "form-control", "id" : "fieldNombre") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        {{ text_field("email", "size" : 30, "class" : "form-control", "id" : "fieldEmail") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldContrasena" class="col-sm-2 control-label">Contrasena</label>
    <div class="col-sm-10">
        {{ text_field("contrasena", "size" : 30, "class" : "form-control", "id" : "fieldContrasena") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldD1" class="col-sm-2 control-label">D1</label>
    <div class="col-sm-10">
        {{ text_field("d1", "type" : "numeric", "class" : "form-control", "id" : "fieldD1") }}
    </div>
</div>


{{ hidden_field("id") }}

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Send', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
