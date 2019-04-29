<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$this->load->view('plantilla/cabecera');
        $this->load->view('principal');
        $this->load->view('plantilla/pie_pagina');
	}

	public function nosotros()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$this->load->view('plantilla/cabecera');
        $this->load->view('nosotros');
        $this->load->view('plantilla/pie_pagina');
	}

	public function contactanos()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$this->load->view('plantilla/cabecera');
        $this->load->view('contactanos');
        $this->load->view('plantilla/pie_pagina');
	}

	public function empresa()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$this->load->view('plantilla/cabecera');
        $this->load->view('empresa');
        $this->load->view('plantilla/pie_pagina');
	}


	public function servicio_ecografia()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$dato['imagen']=base_url()."public/images/servicios/boton_ecografia.png";
		$dato['titulo']="Ecografía 3D - 4D";
		$dato['subtitulo1']="Ecografía";
		$dato['subtitulo2']="Qué debo hacer ?";
		$dato['subtitulo3']="Indicaciones Generales";
		$dato['subtitulo4']="Preparación";
		$dato['contenido']="La ecografía es un estudio diagnóstico que utiliza las ondas de ultrasonido para las partes del cuerpo, como por ejemplo el hígado y las vías biliares, el riñón, el útero y los ovarios, las arterias carotídeas, las venas de los Brazos y piernas, las mamas, los músculos y los tendones, etc. 
		Utilizando herramientas del ultrasonido se puede valorar la elasticidad de los nódulos de la mamá y la tiroides, así como también las cicatrices de las lesiones post traumáticas de los músculos y los tendones. 
		La ecografía brinda la posibilidad de usar radiación ionizante, biopsias y punciones de mama, próstata, hígado, músculo, etc.
		Dentro de los diferentes usos de este mismo método, también, en el estudio 3D y 4D, obstétrico es valioso en la etapa de gestación. 
		Es un método inocuo, no doloroso, enteramente dependiente de la persona quien realiza lo que debe practicarse en lugares calificados, con equipos modernos y personal altamente entrenado.@endsection
		";
		$dato['contenido2']="El estudio de ecografía tiene dos peculiaridades: La primera es que es un método 'no invasivo' que no emplea la radiación ionizante. Por esta razón, puede hacerse a cualquier edad y en mujeres embarazadas. La segunda es que es un método enteramente dependiente de la capacidad de la persona que lo realiza, por lo que debe ser practicado en lugares calificados, con equipos modernos y personal altamente entrenado. El médico especialista que realiza el estudio aplicó sobre su piel un gel acuoso, que no mancha la ropa, y que le servirá para deslizar un pequeño aparato llamado transductor el cual emitirá las ondas de ultrasonido y recogerá las ondas de regreso, llamadas ecos. El software del equipo elabora las imágenes de los órganos del cuerpo y la presentación en la pantalla.";
		$dato['contenido3']="La mayoría de los estudios no requieren una preparación previa y solo algunas indicaciones. Los estudios con carácter urgente no suelen requerir preparación. Es conveniente hacer una cita en la que le proporcionamos las instrucciones para su estudio. El día de la cita con la ropa cómoda y el tiempo disponible. La mayoría de los estudios tienen una duración promedio de 15 a 30 minutos, a partir del momento en que usted entra en la sala de exploración.
		";
		$dato['contenido4']="El paciente deberá asistir al centro de portando: 

		Se trata de estudios de abdomen y pelvis. 
	   
		La prueba dura 15-30 minutos, aunque en ocasiones puede durar algo más. 
	   
		La prueba se puede hacer de forma ambulatoria. 
	   
		No hace falta.
	   
		Si actualmente está tomando algún medicamento, por favor NO lo suspenda.
	   
		Puede llevar la ropa que desee, pero conviene que sea fácil de quitar.";
		$this->load->view('plantilla/cabecera');
        $this->load->view('plantilla/servicio_plantilla',$dato);
        $this->load->view('plantilla/pie_pagina');
	}


	public function servicio_densitometria()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$dato['imagen']=base_url()."public/images/servicios/boton_densitometría.png";
		$dato['titulo']="Densitometría";
		$dato['subtitulo1']="Densitometría";
		$dato['subtitulo2']="Indicaciones Generales";
		$dato['subtitulo3']="";
		$dato['subtitulo4']="";
		$dato['contenido']="La densitometría ósea, también llamada densitometría por absorción de energía dual (DXA por sus siglas en inglés), es un estudio rápido, indoloro y no invasivo que utiliza una forma amplificada de rayos-X para medir la pérdida ósea. Es una herramienta de diagnóstico más confiable para la medición de la densidad mineral, el diagnóstico de la osteoporosis y el riesgo de fractura. Un pico es absorbido por el hueso y otro por el tejido blanco, por debajo del total este último y el resto correspondiente a la densidad mineral ósea. Densitometría ósea (DMO) como sus palabras indica un estudio que se basa en la medición del nivel de densidad mineral ósea. Se trata de un procedimiento indoloro y no invasivo

		En imágenes, la densitometría ósea es realizada por tecnólogos y diagnóstica por médicos radiólogos; a través de este método de estudio se puede descifrar a tiempo enfermedades como la osteopenia y la osteoporosis. Osteopenia Afección en la cual los huesos pierden principalmente los minerales como el calcio y el fosfato generando menor densidad ósea (debilidad). Cuando la pérdida de hueso es grave, la afección se llama osteoporosis.";
		$dato['contenido2']="Suele durar muy poco tiempo, unos 15-20 minutos como mucho. 

		No es necesario tomar ningún medicamento previo. Debes comunicar al médico todas las medicinas que tomas para que valore si la prueba es necesaria o no. Si tomas suplementos de calcio no debes ingerirlos 24 horas antes de la prueba. 
	   
		Es mejor acudir a la prueba con la ropa cómoda, ya que allí se cambiará para evitar cinturones y objetos metálicos que puedan interferir en la medición. Las joyas, dentaduras postizas y gafas también molestan y se deben quitar. 
	   
		Tan sólo el embarazo y la lactancia pueden ser contraindicaciones relativas.";
		$dato['contenido3']="";
		$dato['contenido4']="";
		$this->load->view('plantilla/cabecera');
        $this->load->view('plantilla/servicio_plantilla',$dato);
        $this->load->view('plantilla/pie_pagina');
	}

	public function servicio_mamografia()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$dato['imagen']=base_url()."public/images/servicios/boton_mamografia.png";
		$dato['titulo']="Mamografía digital";
		$dato['subtitulo1']="Mamografía";
		$dato['subtitulo2']="Indicaciones Generales";
		$dato['subtitulo3']="";
		$dato['subtitulo4']="";
		$dato['contenido']="La mamografía es hasta el momento el mejor estudio para la detección temprana de cáncer de mama. Es un examen médico no invasivo, que es una pequeña dosis de radiación ionizante. El estudio no requiere la protección del cuello, sino que es un momento para expandir a través de las redes sociales. Sin embargo, en caso de solicitarlo, nosotros le proporcionaremos la protección requerida. La mamografía realizada no ha sido irradiada por los tratamientos de cáncer, no hay riesgos demostrados y que la radiación es mínima. Al contrario, se ha evidenciado que el uso de protectores de tiroides entorpece el examen y puede afectar la visualización y el buen diagnóstico. La respuesta del paciente en su pecho se debe a la compresión, la necesidad, (de pocos segundos), de sus mamas con una paleta que contiene el equipo. Algunas mujeres con sentimientos sensibles pueden experimentar incomodidad. Se recomienda que el paciente se encuentre desodorado en las axilas.
		";
		$dato['contenido2']="Se recomienda que el paciente se encuentre desodorado en las axilas. 

		Tambien debe traer sus exámenes previos en caso de que haya disponibilidad, esto mejorará el nivel de diagnóstico del Médico Radiólogo al poder compararlas.
		";
		$dato['contenido3']="";
		$dato['contenido4']="";
		$this->load->view('plantilla/cabecera');
        $this->load->view('plantilla/servicio_plantilla',$dato);
        $this->load->view('plantilla/pie_pagina');
	}

	public function servicio_rayosx()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$dato['imagen']=base_url()."public/images/servicios/boton_rayosx.png";
		$dato['titulo']="Rayos X Digital";
		$dato['subtitulo1']="Rayos X  ";
		$dato['subtitulo2']="Preparación";
		$dato['subtitulo3']="";
		$dato['subtitulo4']="";
		$dato['contenido']="La radiología es la especialidad médica que permite visualizar partes del interior de nuestro cuerpo, utilizando la radiación electromagnética. 
		Los exámenes de rayos x tradicionales son muy breves, son indoloros, no producen daños ni efectos colaterales. 
		Las embarazadas no deben contener radiografías con su médico tratante y protección especial.
		";
		$dato['contenido2']="Antes de la radiografía, coméntele al equipo médico si está o puede estar embarazada o si tiene un DIU. 
		El metal puede causar imágenes borrosas. Usted debe quitarse todas las joyas y posiblemente deba usar una bata hospitalaria.
		";
		$dato['contenido3']="";
		$dato['contenido4']="";
		$this->load->view('plantilla/cabecera');
        $this->load->view('plantilla/servicio_plantilla',$dato);
        $this->load->view('plantilla/pie_pagina');
	}

	public function servicio_tomografia()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$dato['imagen']=base_url()."public/images/servicios/boton_tomografia.png";
		$dato['titulo']="Tomografía axial";
		$dato['subtitulo1']="Tomografía axial ";
		$dato['subtitulo2']="Contraste Intravenoso";
		$dato['subtitulo3']="Preparación";
		$dato['subtitulo4']="";
		$dato['contenido']="La tomografía computarizada entrega información valiosa sobre el estado del cuerpo en el estudio y que procesa imágenes de gran nitidez. La duración del examen depende de la parte del cuerpo solicitada y algunas necesidades de la administración en el medio intravenoso que permite una imagen más nítida del área a estudiar. Este equipo emite la radiación controlada, por lo que las mujeres embarazadas deben abstenerse de realizarlo. Los diagnósticos son realizados por médicos con especialidad en radiología. Para mejorar la impresión diagnóstica se requiere, en caso de tenerlos, la comparación con estudios anteriores.
		";
		$dato['contenido2']="La aplicación del medio de contraste, implica algunas precauciones, ya que en ocasiones se pueden producir efectos adversos. El paciente debe venir en ayuno de 8 horas, esto significa que no podrá comer ni tomar nada. Solo en caso de tomar la medicina continua debe tomar su medicamento a primera hora con un poco de agua. Además, nuestro centro solicita el examen de creatinina. Se le pide este examen y su creatividad. En palabras simples, es un examen de sangre que permite tener una referencia de la función renal. Esto se debe a que el medio de contraste se elimina por medio de la orina que produce los riñones. Los valores normales aseguran la correcta eliminación del medio de contraste. La aplicación del medio de contraste no provoca efectos adversos en la mayoría de los casos por lo que la persona puede venir sola o acompañada. Es fundamental que los resultados se relacionen con su diagnóstico y que el radiólogo que se puede hacer un examen comparativo. Una persona debe guardar siempre sus exámenes y nunca.
		";
		$dato['contenido3']="La exploración por tomografía en la mayor parte de las regiones corporales no requiere ningún tipo de preparación compleja del paciente. No obstante, las tomografías de abdomen y pelvis requieren frecuentemente ayuno; Se administra el medio de contraste. Una hora antes del estudio para mejorar la detección de anomalías intestinales. Los pacientes deben abstenerse de cualquier ingesta oral varias? ¿Cuántas? horas antes de la inyección intravenosa de contraste para minimizar las náuseas y reducir el riesgo de aspiración.";
		$dato['contenido4']="";
		$this->load->view('plantilla/cabecera');
        $this->load->view('plantilla/servicio_plantilla',$dato);
        $this->load->view('plantilla/pie_pagina');
	}

	public function servicio_resonancia()
	{
		//$dato['string']="hola bebe";
		//$this->load->view('welcome_message',$dato);
		$dato['imagen']=base_url()."public/images/servicios/boton_resonancia.png";
		$dato['titulo']="Resonancia Magnética";
		$dato['subtitulo1']="Resonancia Magnética";
		$dato['subtitulo2']="Precauciones";
		$dato['subtitulo3']="Preparación";
		$dato['subtitulo4']="Requisitos";
		$dato['contenido']="La Resonancia Magnética es un método de diagnóstico especializado, posee como fin de obtener imágenes del cuerpo humano sin el uso de la radiación ionizante (Rayos X). 
		No causa efectos dañinos para el organismo. Usted no notará molestias durante ni después de la exploración, pudiendo realizar sus actividades normales. 
		Se trata de un examen de color que permite a los médicos radiólogos detectar muchas enfermedades de forma rápida y temprana, las mismas que pueden pasar inadvertidas por otros medios. En algunas ocasiones su médico tratante ordenó la utilización de un medio de contraste que es un medicamento que permite observar con claridad y alta resolución. 
		Este material de contraste puede ser administrado al mismo tiempo por la licenciatura en radiología por vía intravenosa.";
		$dato['contenido2']="Es importante que el paciente, el médico, el médico, los marcadores, las válvulas cardiacas, los clips de aneurismas, los fragmentos metálicos dentro de los ojos, los soportes, las agujas bioenergéticas u otros elementos quirúrgicos dentro del cuerpo.";
		$dato['contenido3']="En el caso de resonancias magnéticas, las respuestas previas a la realización del examen. 

		Si el paciente se encuentra en el tratamiento médico (ingesta de medicamentos) no deberá suspender su medicación. No usar maquillaje. 
		
		Asistir con estudios previos (radiografías, ecografías u otros) relacionados con la enfermedad o el diagnóstico médico del paciente; Lo mismo ha contribuido a reforzar el diagnóstico emitido por el Médico Radiólogo.";
		$dato['contenido4']="El paciente debe asistir al centro de portando:  

		Orden o Pedido Médico. 

		Cédula de identidad del paciente. 

		Estudios previos relacionados con el caso en el estudio. 

		Consentimiento por el paciente o el representante en el caso de menores de edad.";
		$this->load->view('plantilla/cabecera');
        $this->load->view('plantilla/servicio_plantilla',$dato);
        $this->load->view('plantilla/pie_pagina');
	}
}
