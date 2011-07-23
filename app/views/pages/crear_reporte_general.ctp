<table width="908" border="1" align="center">
			    <tr>
			      <td width="73" rowspan="6" align="center"><img src="../../logo.png" width="73" height="152" /></td>
			      <td colspan="2" align="center" bgcolor="#0066CC">CASA HOGAR SHULTZ</td>
			      <td width="192" rowspan="4" align="center"><img src="../../img/Fotografia_de_Usuario/<? echo $persona['FotoImagen']['url']; ?>" width="80" height="120" /></td>
		        </tr>
			    <tr>
			      <td width="176" align="center"></td>
			      <td width="439">&nbsp;</td>
		        </tr>
			    <tr>
			      <td align="center" bgcolor="#0066CC">#Expediente</td>
			      <td><? echo $persona['Albergado']['expediente']; ?></td>
		        </tr>
			    <tr>
			      <td align="center" bgcolor="#0066CC">Fecha Ingreso</td>
			      <td><? echo $persona['Albergado']['fecha_ingreso']; ?></td>
		        </tr>
			    <tr>
			      <td align="center" bgcolor="#0066CC">Fecha Egreso</td>
			      <td><? echo $institucion['Institucion']['fecha_egreso']; ?></td>
			      <td bgcolor="#0066CC">#Averiguacion</td>
		        </tr>
			    <tr>
			      <td height="23" align="center" bgcolor="#0066CC">Tiempo en CM</td>
			      <td><? echo $persona['Documento']['tramitada_por_cm']; ?></td>
			      <td><? echo $persona['Albergado']['averiguacion_previa']; ?></td>
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
                      <td width="30%" rowspan="2"><? echo $persona['Persona']['nombre_completo']; ?></td>
                      <td width="25%" align="center" bgcolor="#0066CC">Edad</td>
                      <td width="25%" align="center" bgcolor="#0066CC">Sexo</td>
                    </tr>
                    <tr>
                      <td align="center"><? echo $persona['Persona']['edad']; ?></td>
                      <td width="25%" align="center"><? echo $persona['Persona']['sexo']; ?></td>
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
                    <td align="center"><? echo $persona['Nacimiento']['fecha_nacimiento']; ?></td>
                    <td align="center"><? echo $persona['Nacimiento']['Estado']['title']; ?></td>
                    <td align="center"><? echo $persona['Nacimiento']['Municipio']['title']; ?></td>
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
                      <td rowspan="3"><? echo $socioEconomico['SocioEconomico']['vivienda_id']; ?></td>
                    </tr>
                    <tr>
                      <td><? echo $persona['Albergado']['remitida_por']; ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td bgcolor="#0066CC">Domicilio anterior</td>
                    </tr>
                  </table></td>
                </tr>
                <td height="23" colspan="4"></td>
                </tr>
                <tr>
                    <td height="23" colspan="4"><table width="100%" border="0">
                    <tr>
                      <td width="30%" rowspan="3"><table width="259" border="0">
                        <tr>
                          <td width="141" bgcolor="#0066CC">Embarazo actual</td>
                          <td width="108" align="right"><? echo $persona['Albergado']['embarazo_actual']; ?></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0066CC">Embarazos</td>
                          <td align="right"><? echo $persona['Albergado']['numero_embarazos']; ?></td>
                        </tr>
                        <tr>
                          <td bgcolor="#0066CC">Numero de hijos</td>
                          <td align="right"><? echo $persona['Albergado']['cant_hijos']; ?></td>
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
                          <td align="center"><? echo $persona['EstadosSalud']['altura']; ?></td>
                          <td align="center"><? echo $persona['EstadosSalud']['tipo_sangre']; ?></td>
                          <td align="center"><? echo $persona['EstadosSalud']['peso']; ?></td>
                        </tr>
                      </table></td>
                    </tr>
                    </table></td>
                </tr>
                <tr align="center">
                  <td height="23" colspan="4"><table width="100%" border="0">
                    <tr>
                      <td width="30%" align="center" bgcolor="#0066CC">Otros</td>
                      <td width="70%">&nbsp;</td>
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
                      <td align="center"><? echo $persona['Albergado']['Problematica'][0]['calle']; ?></td>
                      <td align="center"><? echo $persona['Albergado']['Problematica'][0]['abandono']; ?></td>
                      <td align="center"><? echo $persona['Albergado']['Problematica'][0]['omision_de_cuidados']; ?></td>
                      <td align="center"><? echo $persona['Albergado']['Problematica'][0]['violencia']; ?></td>
                      <td align="center"><? echo $persona['Albergado']['Problematica'][0]['abuso_sexual']; ?></td>
                    </tr>
                  </table></td>
                </tr>
                <tr align="center">
                  
                  <td height="23" colspan="4"></td>
                  
                  
                  
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