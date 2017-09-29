<div class="row">
    <nav>
        <ul class="pager">
            <li class="previous">{{ link_to("empledos", "Go Back") }}</li>
        </ul>
    </nav>
</div>

<div class="page-header">
    <h1>
        Create empledos
    </h1>
</div>

{{ content() }}

{{ form("empledos/create", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}

<div class="form-group">
    <label for="fieldId" class="col-sm-2 control-label">Id</label>
    <div class="col-sm-10">
        {{ text_field("id", "type" : "numeric", "class" : "form-control", "id" : "fieldId") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldHuella" class="col-sm-2 control-label">Huella</label>
    <div class="col-sm-10">
        {{ text_field("huella", "size" : 30, "class" : "form-control", "id" : "fieldHuella") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldNombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
        {{ text_field("nombre", "size" : 30, "class" : "form-control", "id" : "fieldNombre") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldPuesto" class="col-sm-2 control-label">Puesto</label>
    <div class="col-sm-10">
        {{ text_field("puesto", "size" : 30, "class" : "form-control", "id" : "fieldPuesto") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldDomicilio" class="col-sm-2 control-label">Domicilio</label>
    <div class="col-sm-10">
        {{ text_field("domicilio", "size" : 30, "class" : "form-control", "id" : "fieldDomicilio") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldTelefono" class="col-sm-2 control-label">Telefono</label>
    <div class="col-sm-10">
        {{ text_field("telefono", "size" : 30, "class" : "form-control", "id" : "fieldTelefono") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldFechadeingreso" class="col-sm-2 control-label">Fechadeingreso</label>
    <div class="col-sm-10">
        {{ text_field("fechadeingreso", "size" : 30, "class" : "form-control", "id" : "fieldFechadeingreso") }}
    </div>
</div>

<div class="form-group">
    <label for="fieldFoto" class="col-sm-2 control-label">Foto</label>
    <div class="col-sm-10">
        {{ text_field("foto", "size" : 30, "class" : "form-control", "id" : "fieldFoto") }}
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Save', 'class': 'btn btn-default') }}
    </div>
</div>

</form>
