<style type="text/css">
	.titleTd{
		font-weight:bold;
	}
	.titleTdEncabezado{
		font-weight:bold;
		border:solid 1px #000;
	}
	.resultadosTr{
		background-color:#E6E6E6;
		border:solid 1px #CCC;
	}
</style>
<table cellspacing="0" cellpadding="0">
  <col width="166" />
  <col width="178" />
  <col width="163" />
  <col width="196" />
  <col width="191" />
  <col width="196" />
  <col width="118" />
  <col width="152" />
  <tr>
    <td width="166"></td>
    <td width="178"></td>
    <td width="163"></td>
    <td width="196"></td>
    <td width="191"></td>
    <td width="196"></td>
    <td class="titleTd" width="118">Fecha de creación</td>
    <td align="right" width="152"><?php echo date("d/m/Y"); ?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="titleTdEncabezado">Nombre</td>
    <td class="titleTdEncabezado">Casa a la que pertenece</td>
    <td class="titleTdEncabezado">No. Expediente</td>
    <td class="titleTdEncabezado">Estado de nacimiento</td>
    <td class="titleTdEncabezado">Municipio de Nacimiento</td>
    <td class="titleTdEncabezado">Fecha de egreso e ingreso</td>
    <td class="titleTdEncabezado">Edad</td>
    <td class="titleTdEncabezado">No. Averiguación Previa</td>
  </tr>
  <?php foreach($Personas as $Persona): ?>
  <tr class="resultadosTr">
    <td><?php echo (isset($Persona['Persona']['nombre_completo']))? $Persona['Persona']['nombre_completo'] : ""; ?></td>
    <td><?php echo (isset($Persona['Albergado']['Casa']['direccion']))? $Persona['Albergado']['Casa']['direccion'] : ""; ?></td>
    <td><?php echo (isset($Persona['Albergado']['expediente']))? $Persona['Albergado']['expediente'] : ""; ?></td>
    <td><?php echo (isset($Persona['Nacimiento']['Estado']['title']))? $Persona['Nacimiento']['Estado']['title'] : ""; ?></td>
    <td><?php echo (isset($Persona['Nacimiento']['Municipio']['title']))? $Persona['Nacimiento']['Municipio']['title'] : ""; ?></td>
    <td align="right"><?php echo (isset($Persona['Persona']['fecha_ingreso']))? $Persona['Persona']['fecha_ingreso'] : ""; ?></td>
    <td align="right"><?php echo (isset($Persona['Nacimiento']['fecha_nacimiento']))? $Persona['Nacimiento']['fecha_nacimiento'] : ""; ?></td>
    <td><?php echo (isset($Persona['Albergado']['averiguacion_previa']))? $Persona['Albergado']['averiguacion_previa'] : ""; ?></td>
  </tr>
  <?php endforeach;?>
</table>