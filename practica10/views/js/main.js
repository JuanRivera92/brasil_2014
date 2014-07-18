$(document).ready(function() {
		$(function () {
			$('.fancybox').fancybox();
			});
		$(function () {
			$('#datetimepicker1').datetimepicker({
				language: 'es'
					});
					
					
				});
		$(function() {
			$('#datetimepicker2').datetimepicker({
			pickTime: false
			});
		  });
		
		//INICIO FORMULARIO Autor
		$('#Formularioautor').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de la revista y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 100,
								message: 'El nombre de la revista debe ser mayor de 2 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					apellidos: {
						message: 'Los apellidos del autor no son válido',
						validators: {
							notEmpty: {
								message: 'Es necesario los apellidos del autor y no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 200,
								message: 'Los apellidos del autor debe ser mayor de 1 y menos de 200 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ]*$/,
								message: 'Los apellidos del autor sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					email: {
						message: 'El email del autor  no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el email del autor y no puede estar vacío'
							},
						}
					},
				}
			});//FIN FORMULARIO Autor
			//INICIO FORMULARIO status
		$('#Formulariostatus').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					status: {
						message: 'El status no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el status de la revista y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 100,
								message: 'El status de la revista debe ser mayor de 2 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ]*$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
				}
			});//FIN FORMULARIO status
			
			//Inicio de Articulo
			$('#Formularioarticulo').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 500,
								message: 'El nombre debe ser mayor de 2 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ]*$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					resumen: {
						message: 'El resumen no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el resumen y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 500,
								message: 'El resumen debe ser mayor de 2 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'El resumen sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					introduccion: {
						message: 'La introduccion no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario la introduccion y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 500,
								message: 'La introduccion debe ser mayor de 2 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'La introduccion sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					metodologia: {
						message: 'La metodologia no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario la metodologia y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 500,
								message: 'La metodologia debe ser mayor de 2 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'La metodologia sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					contenido: {
						message: 'El contenido no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el contenido y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 500,
								message: 'El contenido debe ser mayor de 2 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'El contenido sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					fecha_creacion: {
						message: 'La fecha no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario la fecha y no puede estar vacío'
							},
						}
					},
					archivo_pdf: {
						message: 'El PDF es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el PDF y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 100,
								message: 'El PDF debe ser mayor de 2 y menos de 100 caracteres de largo'
							},
						}
					},
					conclusiones: {
						message: 'La conclusion no es valida',
						validators: {
							notEmpty: {
								message: 'Es necesario la conclusion y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 500,
								message: 'La conclusion debe ser mayor de 2 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z, ,_]*$/,
								message: 'La conclusion sólo puede consistir en alfabético'
							}
						}
					},
					agradecimientos: {
						message: 'El agradecimiento no es valida',
						validators: {
							notEmpty: {
								message: 'Es necesario el agradecimiento y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 500,
								message: 'El agradecimiento debe ser mayor de 2 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z, ,_]*$/,
								message: 'El agradecimiento sólo puede consistir en alfabético'
							}
						}
					},
					referencias: {
						message: 'La referencia no es valida',
						validators: {
							notEmpty: {
								message: 'Es necesario la referencia y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 500,
								message: 'La referencia debe ser mayor de 2 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z, ,_]*$/,
								message: 'La referencia sólo puede consistir en alfabético'
							}
						}
					},
					
				}
			});//FIN FORMULARIO Articulo
			
					//INICIO FORMULARIO revista
		$('#Formulariorevista').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 500,
								message: 'El nombre  debe ser mayor de 2 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'El nombre sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					// portada: {
						// message: 'La portada no es válido',
						// validators: {
							// notEmpty: {
								// message: 'Es necesario La portada y no puede estar vacío'
							// },
							// stringLength: {
								// min: 2,
								// max: 100,
								// message: 'La portada debe ser mayor de 2 y menos de 100 caracteres de largo'
							// },
							// regexp: {
								// regexp: /^[a-zA-Z0-9, ,_]*$/,
								// message: 'La portada sólo puede consistir en alfabético, número y subrayado'
							// }
						// }
					// },
					fecha_creacion: {
						message: 'La fecha no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario la fecha y no puede estar vacío'
							},
						}
					},
					volumen: {
						message: 'El volumen no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el volumen y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 45,
								message: 'El volumen debe ser mayor de 2 y menos de 45 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'La portada sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					titulo: {
						message: 'El titulo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el titulo y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 200,
								message: 'El titulo debe ser mayor de 2 y menos de 200 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'El subtitulo sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					subtitulo: {
						message: 'El subtitulo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el subtitulo y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 200,
								message: 'El subtitulo debe ser mayor de 2 y menos de 200 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'El subtitulo sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					numero: {
						message: 'El numero no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el numero y no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 11,
								message: 'El numero debe ser mayor de 1 y menos de 11 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9, ]*$/,
								message: 'El numero sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					clave: {
						message: 'La clave no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario La clave y no puede estar vacío'
							},
							stringLength: {
								min: 4,
								max: 45,
								message: 'La clave debe ser mayor de 4 y menos de 45 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'La clave sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					directorio: {
						message: 'El directorio no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el directorio y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 45,
								message: 'el directorio debe ser mayor de 2 y menos de 45 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'directorio sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					editorial: {
						message: 'La editorial no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario La editorial y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 45,
								message: 'La editorial debe ser mayor de 2 y menos de 45 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9, ,_]*$/,
								message: 'La editorial sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					
				}
			});//FIN FORMULARIO revista
			
			//INICIO FORMULARIO pais
			$('#Formulariopais').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del pais no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el status de la revista y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 100,
								message: 'El status de la revista debe ser mayor de 2 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]*$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					idcontinente: {
						message: 'El idcontinente no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario idcontinente de la revista y no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 2,
								message: 'El status de la revista debe ser mayor de 1 y menos de 2 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-2]*$/,
								message: 'El nombre de usuario sólo puede consistir en número'
							}
						}
					},
				}
			});//FIN FORMULARIO pais
			
					//INICIO FORMULARIO equipo
			$('#Formularioequipo').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del equipo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombbre del equipo y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 48,
								message: 'El status de la revista debe ser mayor de 2 y menos de 48 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9]*$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					idpais: {
						message: 'El idpais no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario idpais y no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 1,
								message: 'El idpais debe ser mayor de 1 y menos de 1 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9]*$/,
								message: 'El nombre de usuario sólo puede consistir en número'
							}
						}
					},
					escudo: {
						message: 'El escudo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el escudo y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 45,
								message: 'El escudo debe ser mayor de 2 y menos de 45 caracteres de largo'
							},
						}
					},
				}
			});//FIN FORMULARIO equipo
			
	});//FIN DEL READY