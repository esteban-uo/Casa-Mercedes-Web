<table width="908" border="1" align="center">
			    <tr>
				
			      <td width="73" rowspan="6" align="center"><img src="<?php echo Router::url('/', true)?>img/img_logo1.png" width="73" height="152" /></td>
			      <td colspan="2" align="center" bgcolor="#0066CC">CASA HOGAR SHULTZ</td>
			      <td width="192" rowspan="4" align="center"><img src="http://localhost/Casa-Mercedes-Web/img/pruebas/35261.jpg" alt="Lorem Ipsum Dolor Sit" height="170px" /></td>
		        </tr>
			    <tr>
		        </tr>
			    <tr>
			      <td align="center" bgcolor="#0066CC">#Expediente</td>
			      <td><? echo $Albergado['expediente']; ?></td>
		        </tr>
			    <tr>
			      <td align="center" bgcolor="#0066CC">Fecha Ingreso</td>
			      <td><? echo $Albergado['fecha_ingreso']; ?></td>
		        </tr>
			    <tr>
			      <td align="center" bgcolor="#0066CC">Fecha Egreso</td>
			      <td><? //echo $Albergado['Institucion']['fecha_egreso']; ?></td>
			      <td bgcolor="#0066CC">#Averiguacion</td>
		        </tr>
			    <tr>
			      <td height="23" align="center" bgcolor="#0066CC">Tiempo en CM</td>
			      <td><? echo $Documento['tramitada_por_cm']; ?></td>
			      <td><? echo $Albergado['averiguacion_previa']; ?></td>
		        </tr>
                <tr align="center">
                  <td height="23" colspan="4"></td>
                </tr>
                <tr align="center">
                  <td height="23" colspan="4" bgcolor="#0066CC">Ficha de identificacion</td>
                </tr>
                <tr align="center">
                  <td height="23" colspan="4"></td>
                </tr>
                <tr align="center">
                  <td height="23" colspan="4"><table width="100%" border="0">
                    <tr>
                      <td width="20%" height="33" rowspan="2" bgcolor="#0066CC">Nombre</td>
                      <td width="30%" rowspan="2"><? echo $Persona['nombre_completo']; ?></td>
                      <td width="25%" align="center" bgcolor="#0066CC">Edad</td>
                      <td width="25%" align="center" bgcolor="#0066CC">Sexo</td>
                    </tr>
                    <tr>
                      <td align="center"><?php echo $this->HerramientasCalculos->obtenerEdadYDM($Nacimiento['fecha_nacimiento'],"-"); ?></td>
                      <td width="25%" align="center"><? echo $Persona['sexo']; ?></td>
                    </tr>
                  </table></td>
                </tr>
                <tr align="center">
                  <td height="23" colspan="4"></td>
                </tr>
                <tr align="center">
                <td height="23" colspan="4"><table width="100%" border="0">
                  <tr>
                    <td width="30%" align="center" bgcolor="#0066CC">Fecha de nacimiento</td>
                    <td width="36%" align="center" bgcolor="#0066CC">Estado origen</td>
                    <td width="34%" align="center" bgcolor="#0066CC">Localidad</td>
                  </tr>
                  <tr>
                    <td align="center"><? echo $Nacimiento['fecha_nacimiento']; ?></td>
                    <td align="center"><? echo $Nacimiento['Estado']['title']; ?></td>
                    <td align="center"><? echo $Nacimiento['Municipio']['title']; ?></td>
                  </tr>
                </table></td>
                </tr>
                <tr align="center">
                  <td height="23" colspan="4"></td>
                </tr>
                <tr align="center">
                  <td height="23" colspan="4"><table width="100%" border="0">
                    <tr>
                      <td bgcolor="#0066CC">Canalizada por</td>
                      <td rowspan="3">Domicilio anterior</td>
                    </tr>
                    <tr>
                      <td><? echo $Albergado['remitida_por']; ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td bgcolor="#0066CC">Domicilio anterior ANS</td>
                    </tr>
                  </table></td>
                </tr>
				<tr>
					<td height="23" colspan="4"></td>
				</tr>
				<tr>
                    <td height="23" colspan="4"><table width="100%" border="0">
                    <tr>
                      <td width="30%" rowspan="3"><table width="259" border="0">
                        <tr>
                          <td width="141" bgcolor="#0066CC">Embarazo actual</td>
                          <td width="108" align="right"><? echo $Albergado['embarazo_actual']; ?></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0066CC">Embarazos</td>
                          <td align="right"><? echo $Albergado['numero_embarazos']; ?></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0066CC">Numero de hijos</td>
                          <td align="right"><? echo $Albergado['cant_hijos']; ?></td>
                        </tr>
                      </table></td>
                      <td width="70%" align="center" bgcolor="#0066CC">Motivo de canalizacion</td>
                    </tr>
                    <tr>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center"><table width="100%" border="0">
                        <tr>
                          <td align="center" bgcolor="#0066CC">Altura</td>
                          <td align="center" bgcolor="#0066CC">Tipo sangre</td>
                          <td align="center" bgcolor="#0066CC">Peso</td>
                        </tr>
                        <tr>
                          <td align="center"><? echo $EstadosSalud['altura']; ?></td>
                          <td align="center"><? echo $EstadosSalud['tipo_sangre']; ?></td>
                          <td align="center"><? echo $EstadosSalud['peso']; ?></td>
                        </tr>
                      </table></td>
                    </tr>
                    </table></td>
                </tr>
                <tr align="center">
                  <td height="23" colspan="4" bgcolor="#0066CC">Problematica</td>
                </tr>
                
				<tr align="center">
                  <td height="23" colspan="4"><table width="100%" border="0">
                    <tr>
                      <td align="center" bgcolor="#0066CC">Calle</td>
                      <td align="center" bgcolor="#0066CC">Abandono</td>
                      <td align="center" bgcolor="#0066CC">Omision de cuidados</td>
                      <td align="center" bgcolor="#0066CC">Violencia</td>
                      <td align="center" bgcolor="#0066CC">Abuso</td>
                    </tr>
                    <tr>
                      <td align="center"><? echo ($Albergado['Problematica']['calle'])? "Sí":"No"; ?></td>
                      <td align="center"><? echo ($Albergado['Problematica']['abandono'])? "Sí":"No"; ?></td>
                      <td align="center"><? echo ($Albergado['Problematica']['omision_de_cuidados'])? "Sí":"No"; ?></td>
                      <td align="center"><? echo ($Albergado['Problematica']['violencia'])? "Sí":"No"; ?></td>
                      <td align="center"><? echo ($Albergado['Problematica']['abuso_sexual'])? "Sí":"No"; ?></td>
                    </tr>
                  </table></td>
                </tr>
				<tr align="center">
                  <td height="23" colspan="4"><table width="100%" border="0">
                    <tr>
                      <td width="30%" align="center" bgcolor="#0066CC">Otros</td>
                      <td width="70%">Otros delitos<? if($Albergado['Problematica']['otros_delitos'] != null) echo $Albergado['Problematica']['otros_delitos'];  ?></td>
                    </tr>
                  </table></td>
                </tr>
                <tr align="center">
                  <td height="23" colspan="4">&nbsp;</td>
  </tr>
                <tr align="center">
                  <td height="23" colspan="4" bgcolor="#0066CC">Documentos Oficiales</td>
  </tr>
                <tr align="center">
                  <td height="23" colspan="4"><table width="100%" border="0">
                    <tr>
                      <td width="25%" align="center" bgcolor="#0066CC">Acta nacimiento</td>
                      <td width="25%" align="center" bgcolor="#0066CC">CURP</td>
                      <td width="25%" align="center" bgcolor="#0066CC">IFE</td>
                      <td width="25%" align="center" bgcolor="#0066CC">Cartilla Vacunacion</td>
                    </tr>
                    <tr>
                      <td align="center">&nbsp;</td>
                      <td align="center">&nbsp;</td>
                      <td align="center">&nbsp;</td>
                      <td align="center">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
				<tr align="center">
                  <td height="23" colspan="4"><table width="100%" border="0">
                    <tr>
                      <td height="55" colspan="3">Boletas escolares</td>
                      <td colspan="3">Certificados escolares</td>
                    </tr>
                    <tr>
                      <td width="15%" align="center" bgcolor="#0066CC">Kinder</td>
                      <td width="14%" align="center" bgcolor="#0066CC">Primaria</td>
                      <td width="15%" align="center" bgcolor="#0066CC">Secundaria</td>
                      <td width="17%" align="center" bgcolor="#0066CC">Kinder </td>
                      <td width="20%" align="center" bgcolor="#0066CC">Primaria</td>
                      <td width="19%" align="center" bgcolor="#0066CC">Secundaria</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="3" bgcolor="#0066CC">Preparatoria</td>
                      <td colspan="3" bgcolor="#0066CC">Preparatoria</td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
		      </table>