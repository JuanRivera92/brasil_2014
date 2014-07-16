$(document).ready(function() {
		$(function () {
			$('.fancybox').fancybox();
			});
		$(function () {
			$('#datetimepicker1').datetimepicker({
				language: 'es'
					});
				});
		$('#Formularioarticulo').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del Articulo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del Articulo y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 500,
								message: 'El nombre del Articulo debe ser mayor de 6 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					resumen: {
						message: 'El nombre del resumen no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el resumen y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 100,
								message: 'El resumen debe ser mayor de 6 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre del volumen sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					introduccion: {
						message: 'La introduccion no es válida',
						validators: {
							notEmpty: {
								message: 'Es necesario la introduccion y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 100,
								message: 'La introduccion debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'La introduccion sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					metodologia: {
						message: 'La metodologia no es válida',
						validators: {
							notEmpty: {
								message: 'Es necesario la metodologia y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'La metodologia debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre de la metodologia sólo puede consistir en alfabético, número y subrayado'
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
								min: 6,
								max: 30,
								message: 'El contenido debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El contenido sólo puede consistir en número'
							}
						}
					},
					fecha_creacion: {
						message: 'La fecha de creacion no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de la clave y no puede estar vacío'
							},
						}
					},
					archivo_pdf: {
						message: 'El nombre del archivo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el archivo y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 100,
								message: 'El nombre del archivo debe ser mayor de 6 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre del archivo sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					conclusiones: {
						message: 'La conclusion no es válida',
						validators: {
							notEmpty: {
								message: 'Es necesario la conclusion y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 100,
								message: 'La conclusion debe ser mayor de 6 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre de la editorial sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					agradecimientos: {
						message: 'El agradecimiento no es válida',
						validators: {
							notEmpty: {
								message: 'Es necesario el agradecimiento y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 100,
								message: 'El agradecimiento debe ser mayor de 6 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El agradecimiento sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					referencias: {
						message: 'La referencia no es válida',
						validators: {
							notEmpty: {
								message: 'Es necesario la referencia y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 100,
								message: 'La referencia debe ser mayor de 6 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'La referencia sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
				}
			});//Fin del Formularioarticulo
			
			// Inicia Formularioautor
			$('#Formularioautor').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del autor no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del autor y no puede estar vacío'
							},
							stringLength: {
								min: 3,
								max: 100,
								message: 'El nombre del autor debe ser mayor de 3 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre del autor sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					apellidos: {
						message: 'El apellido del autor no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el apellido del autor y no puede estar vacío'
							},
							stringLength: {
								min: 9,
								max: 200,
								message: 'El apellido del autor debe ser mayor de 6 y menos de 200 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El apellido del autor sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					email: {
						message: 'El email del autor no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el email del autor y no puede estar vacío'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El email del autor sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
				}
				})//Fin del Formularioautor
				//INICIO DE FORMULARIOREVISTA
			$('#Formulariorevista').bootstrapValidator({
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
								message: 'Es necesario el nombre del autor y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 500,
								message: 'El nombre del autor debe ser mayor de 6 y menos de 500 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre del autor sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					portada: {
						message: 'La portada de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario la portada de la revistay no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 100,
								message: 'La portada de la revista debe ser mayor de 6 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'La portada de la revista sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					fecha: {
						message: 'la fecha de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario la fecha de la revista y no puede estar vacío'
							},
						}
					},
					volumen: {
						message: 'El volumen de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el volumen de la revistay no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 45,
								message: 'El volumen de la revista debe ser mayor de 6 y menos de 45 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El volumen de la revista sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					titulo: {
						message: 'Titulo de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el titulo de la revistay no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 200,
								message: 'El titulo de la revista debe ser mayor de 6 y menos de 200 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El titulo de la revista sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					subtitulo: {
						message: 'Subtitulo de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el subtitulo de la revistay no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 200,
								message: 'El subtitulo de la revista debe ser mayor de 6 y menos de 200 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El subtitulo de la revista sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					numero: {
						message: 'El numero de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el numero de la revistay no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 45,
								message: 'El numero de la revista debe ser mayor de 6 y menos de 45 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9_]+$/,
								message: 'El numero de la revista sólo puede consistir en números'
							}
						}
					},
					clave: {
						message: 'La clave de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario La clave de la revistay no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 45,
								message: 'La clave de la revista debe ser mayor de 6 y menos de 45 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9_]+$/,
								message: 'La clave de la revista sólo puede consistir en números'
							}
						}
					},
					directorio: {
						message: 'El directorio de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario El directorio de la revistay no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 200,
								message: 'El directorio de la revista debe ser mayor de 6 y menos de 200 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El directorio de la revista sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					editorial: {
						message: 'La editorial de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario La editorial de la revistay no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 200,
								message: 'La editorial de la revista debe ser mayor de 6 y menos de 200 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'La editorial de la revista sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
				}
				});// FIN DE FORMULARIOREVISTA
				// Innicio DE status
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
								message: 'Es necesario status y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El status debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El status sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
				}
				});<!--Fin del formulario4-->
			});<!---FIN DEL READY->