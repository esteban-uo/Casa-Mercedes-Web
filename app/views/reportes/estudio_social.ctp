<table cellspacing="0" cellpadding="0">
  <col width="84">
  <col width="91">
  <col width="14">
  <col width="111">
  <col width="19">
  <col width="94">
  <col width="18">
  <col width="28">
  <col width="62">
  <col width="20">
  <col width="74">
  <tbody><tr>
    <td width="84" align="left" valign="top">
	<img src="../../img/img_logo1.png" width="73" height="152" />
      <table cellpadding="0" cellspacing="0">
        <tbody><tr>
          <td width="84">&nbsp;</td>
        </tr>
      </tbody></table></td>
    <td colspan="10" rowspan="2" width="531">ESTUDIO    SOCIAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Casa Hogar Schultz</td>
  </tr>
  <tr>
    <td width="84">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="91">NOMBRE</td>
    <td colspan="9" width="440"><? echo $Persona['nombre_completo']; ?></td>
  </tr>
  <tr>
    <td width="84">&nbsp;</td>
    <td colspan="2" width="113"># Averiguación</td>
    <td width="18"></td>
    <td colspan="4" width="184"><? echo $Albergado['averiguacion_previa']; ?></td>
  </tr>
  <tr>
    <td width="84"></td>
    <td colspan="3" width="216"># Expediente</td>
    <td colspan="2" width="113"><? echo $Albergado['expediente']; ?></td>
    <td width="18"></td>
    <td colspan="4" width="184"></td>
  </tr>
  <tr>
    <td colspan="11" width="615">ANTECEDENTES</td>
  </tr>
  <tr>
    <td colspan="4">Ha estado en otras    Instituciones</td>
    <td colspan="2">NO</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td rowspan="2">Cuáles</td>
    <td colspan="10" rowspan="2">0</td>
  </tr>
  <tr> </tr>
  <tr>
    <td colspan="4">Consumo de    Sustancias Psicoactivas</td>
    <td colspan="2"><? echo $Albergado['DatosAlbergado']['consumo_sustancias']; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> </tr>
  <tr>
    <td colspan="4">Conductas    Infractoras y /o delictivas</td>
    <td colspan="2"><? echo $Albergado['DatosAlbergado']['delitos']; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr> </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
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
    <td>Ha laborado:&nbsp;</td>
    <td align="right"><? echo ($Albergado['SocioEconomico']['ha_trabajado'])? "Sí":"No"; ?></td>
    <td colspan="7">Edad Inició en que inició a    Trabajar</td>
    <td colspan="2"><? echo $Albergado['SocioEconomico']['tiempo_de_trabajo']; ?></td>
  </tr>
  <tr>
    <td colspan="2">Último Trabajo</td>
    <td colspan="9"><? echo $Albergado['SocioEconomico']['ultimo_trabajo']; ?></td>
  </tr>
  <tr>
    <td></td>
    <td>Tiempo</td>
    <td colspan="2"><? echo $Albergado['SocioEconomico']['tiempo']; ?></td>
    <td colspan="3">Sueldo</td>
    <td colspan="3"><? echo $Albergado['SocioEconomico']['sueldo']; ?></td>
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
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="11">CARACTERÍSTICAS    SOCIOECONÓMICAS</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6">Nivel Económico</td>
    <td colspan="5">Tipo de Zona</td>
  </tr>
  <tr>
    <td colspan="6"><? echo $Albergado['SocioEconomico']['nivel_economico']; ?></td>
    <td colspan="5"><? echo $Albergado['SocioEconomico']['Zona']['title']; ?></td>
  </tr>
  <tr>
    <td colspan="5">Tipo de Vivienda</td>
    <td colspan="6">Material de Construcción</td>
  </tr>
  <tr>
    <td colspan="5"><? echo $Albergado['SocioEconomico']['Vivienda']['title']; ?></td>
    <td colspan="6"><? echo $Albergado['SocioEconomico']['Construccion']['title']; ?></td>
  </tr>
  <tr>
    <td colspan="2">Tipo de Tenencia</td>
    <td colspan="3"><? echo $Albergado['SocioEconomico']['Tenencia']['title']; ?></td>
    <td colspan="3">Distribución</td>
    <td colspan="3"><? echo $Albergado['SocioEconomico']['Distribucion']['title']; ?></td>
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
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="11">ESTRUCTURA    FAMILIAR</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="11" width="615" align="left" valign="top">
      <table cellpadding="0" cellspacing="0">
        <tbody><tr>
          <td colspan="11" width="615">Familia Biológica/ Ampliada</td>
        </tr>
      </tbody></table></td>
  </tr>
  <tr>
    <td width="84">Número de Hijos</td>
    <td colspan="2" width="105">Ambos    Padres</td>
    <td colspan="2" width="130">Padre    o Madre</td>
    <td colspan="2" width="112">Hermanos</td>
    <td colspan="2" width="90">Hermanos    en Hogar</td>
    <td colspan="2" width="94">Hermanos&nbsp; otro Hogar</td>
  </tr>
  <tr>
    <td align="right" width="84"><? echo $Albergado['cant_hijos']; ?></td>
    <td colspan="2" width="105"><? echo ($Albergado['Familia']['ambos_padres'])? "Sí":"No"; ?></td>
    <td colspan="2" width="130"><? echo ($Albergado['Familia']['padre_o_madre'])? "Sí":"No"; ?></td>
    <td colspan="2" width="112"><? echo $Albergado['Familia']['hermanos']; ?></td>
    <td colspan="2" width="90"><? echo $Albergado['Familia']['hermanos_en_hogar']; ?></td>
    <td colspan="2" width="94">0</td>
  </tr>
  <tr>
    <td colspan="3" width="189">Hermanos Con Familia</td>
    <td colspan="3" width="224">Contacto    Con Hermanos</td>
    <td colspan="5" width="202">Contacto    Con Familiares</td>
  </tr>
  <tr>
    <td colspan="3" width="189"><? echo ($Albergado['Familia']['hermanos_con_familia'])? "Sí":"No"; ?></td>
    <td colspan="3" width="224"><? echo ($Albergado['Familia']['contacto_con_hermanos'])? "Sí":"No"; ?></td>
    <td colspan="5" width="202"><? echo ($Albergado['Familia']['contacto_con_familiares'])? "Sí":"No"; ?></td>
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
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td colspan="6">Dinámica Familiar</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">Comunicación</td>
    <td colspan="3"><? echo $Albergado['Social']['comunicacion']; ?></td>
    <td colspan="3">Roles</td>
    <td colspan="3"><? echo $Albergado['Social']['roles']; ?></td>
  </tr>
  <tr>
    <td colspan="2">Normas y Valores</td>
    <td colspan="3"><? echo $Albergado['Social']['normas_y_valores']; ?></td>
    <td colspan="3">Manejo de Autoridad</td>
    <td colspan="3"><? echo $Albergado['Social']['manejo_autoridad']; ?></td>
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
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="11">PLAN SOCIAL</td>
  </tr>
  <tr>
    <td colspan="11" rowspan="4"><? echo $Albergado['Dato']['plan_social']; ?></td>
  </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
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
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="11">HISTORIA DE VIDA</td>
  </tr>
  <tr>
    <td colspan="11" rowspan="50" width="615" align="left" valign="top">
      <table cellpadding="0" cellspacing="0">
        <tbody><tr>
          <td colspan="11" rowspan="50" width="615"><? echo $Albergado['Dato']['historia_de_vida']; ?></td>
        </tr>
      </tbody></table></td>
  </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
</tbody></table>