<div class="page-header">
    <h1>Identificate</h1>
</div>

<p>Ingrese Su Huella Digital</p>

<div class="container" style="margin-top:100px">
	<div class="col-md-4"></div>
	<div class="col-md-4">
{{ form("empledos/search", "method":"post", "autocomplete" : "off", "class" : "form-horizontal") }}
		
          
          
          <div class="form-group">
    <label for="fieldHuella" class="col-sm-2 control-label">Huella</label>
    <div class="col-sm-10">
        {{ text_field("huella", "size" : 30, "class" : "form-control", "id" : "fieldHuella") }}
    </div>
</div>
          
          
          
		  <input type="hidden" name="<?php echo $this->security->getTokenKey() ?>"
        value="<?php echo $this->security->getToken() ?>"/>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<div class="col-md-4"></div>
	
</div>


