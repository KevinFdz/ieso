<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->enum('cuatrimestre',['1','2','3','4','5','6','7','8','9','10']);
            $table->timestamps();
        });

        DB::table('materias')->insert([
          //>>>>>>>ING. EN SISTEMAS<<<<<<<<<
    //1° CUATRIMESTRE SISTEMAS
    ['nombre' => 'Diseño estructurado de algoritmos','cuatrimestre' => '1'],
    ['nombre' => 'Contabilidad','cuatrimestre' => '1'],
    ['nombre' => 'Introducción a las ciencias computacionales','cuatrimestre' => '1'],
    //2 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Programación I','cuatrimestre' => '2'],
    ['nombre' => 'Matemáticas discretas','cuatrimestre' => '2'],
    ['nombre' => 'Administración','cuatrimestre' => '2'],
    ['nombre' => 'Electromecanica basica','cuatrimestre' => '2'],
    //3° CUATRIMESTRE SISTEMAS
    ['nombre' => 'Programación II','cuatrimestre' => '3'],
    ['nombre' => 'Matemáticas III','cuatrimestre' => '3'],
    ['nombre' => 'Administración de recursos humanos','cuatrimestre' => '3'],
    ['nombre' => 'Estructura de datos I','cuatrimestre' => '3'],
    ['nombre' => 'Arquitectura de computadoras','cuatrimestre' => '3'],
    //4° CUATRIMESTRE SISTEMAS
    ['nombre' => 'Programación orientada a objetos','cuatrimestre' => '4'],
    ['nombre' => 'Matemáticas IV','cuatrimestre' => '4'],
    ['nombre' => 'Estructura de datos II','cuatrimestre' => '4'],
    ['nombre' => 'Investigación de operaciones I','cuatrimestre' => '4'],
    //5° CUATRIMESTRE SISTEMAS
    ['nombre' => 'Análisis y diseño de sistemas de información I','cuatrimestre' => '5'],
    ['nombre' => 'Estadística y probabilidad','cuatrimestre' => '5'],
    ['nombre' => 'Fundamentos básicos de administración','cuatrimestre' => '5'],
    ['nombre' => 'Base de datos I','cuatrimestre' => '5'],
    ['nombre' => 'Investigación de operaciones II','cuatrimestre' => '5'],
    ['nombre' => 'Inglés V','cuatrimestre' => '5'],
    //6 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Análisis y diseño de sistemas de información II','cuatrimestre' => '6'],
    ['nombre' => 'Métodos numéricos','cuatrimestre' => '6'],
    ['nombre' => 'Ingeniería económica','cuatrimestre' => '6'],
    ['nombre' => 'Base de datos II','cuatrimestre' => '6'],
    ['nombre' => 'Redes de computadoras I','cuatrimestre' => '6'],
    ['nombre' => 'Inglés VI','cuatrimestre' => '6'],
    //7 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Ingeniería de software I','cuatrimestre' => '7'],
    ['nombre' => 'Software de sistemas','cuatrimestre' => '7'],
    ['nombre' => 'Administración de la función informática','cuatrimestre' => '7'],
    ['nombre' => 'Sistemas operativos','cuatrimestre' => '7'],
    ['nombre' => 'Redes de computadoras II','cuatrimestre' => '7'],
    ['nombre' => 'Inglés técnico I','cuatrimestre' => '7'],
    //8 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Ingeniería de software II','cuatrimestre' => '8'],
    ['nombre' => 'Sistemas cliente servidor y para internet','cuatrimestre' => '8'],
    ['nombre' => 'Bases de datos distribuidas','cuatrimestre' => '8'],
    ['nombre' => 'Simulación','cuatrimestre' => '8'],
    ['nombre' => 'Sistemas abiertos','cuatrimestre' => '8'],
    ['nombre' => 'Inglés técnico II','cuatrimestre' => '8'],
    //9 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Comercio electrónico','cuatrimestre' => '9'],
    ['nombre' => 'Auditoria de sistemas','cuatrimestre' => '9'],
    ['nombre' => 'Administración de bases de datos','cuatrimestre' => '9'],
    ['nombre' => 'Inteligencia artificial','cuatrimestre' => '9'],
    ['nombre' => 'Robótica','cuatrimestre' => '9'],
    ['nombre' => 'Inglés técnico III','cuatrimestre' => '9'],
  
    


          //>>>>ADMINISTRACION<<<<<<

    //1°CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Contabilidad básica','cuatrimestre' => '1'],
    ['nombre' => 'Introducción al derecho','cuatrimestre' =>'1'],
    ['nombre' => 'Matemáticas básicas','cuatrimestre'=>'1'],
    //2°CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Contabilidad financiera','cuatrimestre'=>'2'],
    ['nombre' => 'Matemáticas para administración','cuatrimestre'=>'2'],
    //3°CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Contabilidad de costos','cuatrimestre'=>'3'],
    ['nombre' => 'Matemáticas financieras','cuatrimestre'=>'3'],
    //4° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Administración del factor humano I','cuatrimestre'=>'4'],
    ['nombre' => 'Contabilidad para administración','cuatrimestre'=>'4'],
    ['nombre' => 'Estadística','cuatrimestre'=>'4'],
    ['nombre' => 'Economía de la empresa','cuatrimestre'=>'4'],
    //5° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Administración del factor humano II','cuatrimestre'=>'5'],
    ['nombre' => 'Lectura y redacción','cuatrimestre'=>'5'],
    ['nombre' => 'Derecho privado I','cuatrimestre'=>'5'],
    ['nombre' => 'Administración financiera I','cuatrimestre'=>'5'],
    ['nombre' => 'Estadística para administración I','cuatrimestre'=>'5'],
    ['nombre' => 'Seguridad social','cuatrimestre'=>'5'],
    //6° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Psicología de las organizaciones','cuatrimestre'=>'6'],
    ['nombre' => 'Derecho privado II','cuatrimestre'=>'9'],
    ['nombre' => 'Marketing I','cuatrimestre'=>'9'],
    ['nombre' => 'Administración financiera II','cuatrimestre'=>'9'],
    ['nombre' => 'Estadística para administración II','cuatrimestre'=>'9'],
    ['nombre' => 'Administración estratégica','cuatrimestre'=>'9'],
    //7° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Derecho mercantil I','cuatrimestre'=>'7'],
    ['nombre' => 'Comportamiento organizacional','cuatrimestre'=>'7'],
    ['nombre' => 'Marketing II','cuatrimestre'=>'7'],
    //8° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Derecho mercantil II','cuatrimestre'=>'8'],
    ['nombre' => 'Administración de la producción','cuatrimestre'=>'8'],
    ['nombre' => 'Liderazgo','cuatrimestre'=>'8'],
    ['nombre' => 'Etica de las organizaciones','cuatrimestre'=>'8'],
    //9° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Comercio internacional I','cuatrimestre'=>'9'],
    ['nombre' => 'Elaboración de proyectos','cuatrimestre'=>'9'],
    ['nombre' => 'Administración de la pequeña y mediana empresa','cuatrimestre'=>'9'],
    ['nombre' => 'Administración de calidad','cuatrimestre'=>'9'],
    //10° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Simulador de negocios','cuatrimestre'=>'10'],
    ['nombre' => 'Evaluación de proyectos','cuatrimestre'=>'10'],
    ['nombre' => 'Comercio internacional II','cuatrimestre'=>'10'],
    ['nombre' => 'Logística','cuatrimestre'=>'10'],



    //>>>>>CIENCIAS POLITICAS Y DERECHO<<<<<<
    //1° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Introducción al estudio del derecho','cuatrimestre'=>'1'],
    ['nombre' => 'Sociología jurídica','cuatrimestre'=>'1'],
    ['nombre' => 'Procesos básicos del pensamiento','cuatrimestre'=>'1'],
    ['nombre' => 'Matemáticas','cuatrimestre'=>'1'],
    //2° CUATRIMESTRE CIENCIAS POLITICAS

    //3° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Teoría del Estado','cuatrimestre'=>'3'],
    ['nombre' => 'Estadística I','cuatrimestre'=>'3'],
    ['nombre' => 'Informática III','cuatrimestre'=>'3'],
    //4° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Estadística II','cuatrimestre'=>'4'],
    ['nombre' => 'Sistemas políticos contemporáneos','cuatrimestre'=>'4'],
    ['nombre' => 'Informática IV','cuatrimestre'=>'4'],
    //5° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Garantías individuales y sociales','cuatrimestre'=>'5'],
    ['nombre' => 'Derecho público','cuatrimestre'=>'5'],
    ['nombre' => 'SSistema político mexicano','cuatrimestre'=>'5'],
    ['nombre' => 'Razonamiento verbal para la toma de decisiones','cuatrimestre'=>'5'],
    ['nombre' => 'Finanzas públicas I','cuatrimestre'=>'5'],
    //6° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Derecho privado','cuatrimestre'=>'6'],
    ['nombre' => 'Administración pública I','cuatrimestre'=>'6'],
    ['nombre' => 'Ciencia política I','cuatrimestre'=>'6'],
    ['nombre' => 'Liderazgo estratégico','cuatrimestre'=>'6'],
    ['nombre' => 'Finanzas públicas II','cuatrimestre'=>'6'],
    //7° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Derecho económico','cuatrimestre'=>'7'],
    ['nombre' => 'Administración pública II','cuatrimestre'=>'7'],
    ['nombre' => 'Ciencia política II','cuatrimestre'=>'7'],
    ['nombre' => 'Comunicación','cuatrimestre'=>'7'],
    ['nombre' => 'Expresión oral y escrita','cuatrimestre'=>'7'],
    //8° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Derecho municipal','cuatrimestre'=>'8'],
    ['nombre' => 'Política pública II','cuatrimestre'=>'8'],
    //9° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Políticas públicas II','cuatrimestre'=>'9'],
    ['nombre' => 'Derecho internacional público','cuatrimestre'=>'9'],
    ['nombre' => 'Administración de recursos gubernamentales','cuatrimestre'=>'9'],
    ['nombre' => 'Finanzas internacionales','cuatrimestre'=>'9'],
    ['nombre' => 'Manejo de grupos','cuatrimestre'=>'9'],
    //10° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Derecho internacional privado','cuatrimestre'=>'10'],
    ['nombre' => 'Dinámica psicosocial','cuatrimestre'=>'10'],
    ['nombre' => 'Auditoria gubernamental','cuatrimestre'=>'10'],
    ['nombre' => 'Derecho electoral','cuatrimestre'=>'10'],
    ['nombre' => 'Etica','cuatrimestre'=>'10'],



    //>>>>>CONTADURIA<<<<<<
    //1° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Contabilidad I','cuatrimestre'=>'1'],
    //2° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Contabilidad II','cuatrimestre'=>'2'],
    ['nombre' => 'Derecho constitucional y administrativo','cuatrimestre'=>'2'],
    //3° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Contabilidad de costos I','cuatrimestre'=>'3'],
    ['nombre' => 'Matemáticas financieras','cuatrimestre'=>'3'],
    ['nombre' => 'Informática para contabilidad I','cuatrimestre'=>'3'],
    //4° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Contabilidad de costos II','cuatrimestre'=>'4'],
    ['nombre' => 'Derecho mercantil','cuatrimestre'=>'4'],
    ['nombre' => 'Informática para contabilidad II','cuatrimestre'=>'4'],
    //5° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Informática para contabilidad II','cuatrimestre'=>'5'],
    ['nombre' => 'Derecho fiscal','cuatrimestre'=>'5'],
    ['nombre' => 'Contabilidad superior','cuatrimestre'=>'5'],
    //6° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Impuestos I','cuatrimestre'=>'6'],
    ['nombre' => 'Liderazgo y gestión','cuatrimestre'=>'6'],
    ['nombre' => 'Administración de las inversiones','cuatrimestre'=>'6'],
    //7° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Impuestos II','cuatrimestre'=>'7'],
    ['nombre' => 'Contabilidad de sociedades','cuatrimestre'=>'7'],
    ['nombre' => 'Sociología de las organizaciones','cuatrimestre'=>'7'],
    ['nombre' => 'Costos para la toma de decisiones','cuatrimestre'=>'7'],
    //8° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Impuestos III','cuatrimestre'=>'8'],
    ['nombre' => 'Cultura organizacional','cuatrimestre'=>'8'],
    ['nombre' => 'Sistema organizacional y ambiente global','cuatrimestre'=>'8'],
    ['nombre' => 'Finanzas III','cuatrimestre'=>'8'],
    //9° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Comercio internacional','cuatrimestre'=>'9'],
    ['nombre' => 'Manejo de equipos de trabajo','cuatrimestre'=>'9'],
    ['nombre' => 'Auditoría fiscal','cuatrimestre'=>'9'],
    //10° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Grupos y relaciones interpersonales','cuatrimestre'=>'10'],
    ['nombre' => 'Sistemas organizacionales','cuatrimestre'=>'10'],
    ['nombre' => 'Liderazgo organizacional','cuatrimestre'=>'10'],



    //>>>>>>>HISTORIA<<<<<<<<<
    //1° CUATRIMESTRE HISTORIA
      ['nombre' => 'Antropología cultural I','cuatrimestre'=>'1'],
      ['nombre' => 'México prehispánico I','cuatrimestre'=>'1'],
      ['nombre' => 'Investigación histórica y documental I','cuatrimestre'=>'1'],
      ['nombre' => 'Epistemología de las ciencias sociales','cuatrimestre'=>'1'],
      ['nombre' => 'Lectura y redacción I','cuatrimestre'=>'1'],
    //2° CUATRIMESTRE HISTORIA
      ['nombre' => 'Antropología cultural II','cuatrimestre'=>'2'],
      ['nombre' => 'Historia antigua universal I','cuatrimestre'=>'2'],
      ['nombre' => 'México prehispánico II','cuatrimestre'=>'2'],
      ['nombre' => 'Investigación histórica y documental II','cuatrimestre'=>'2'],
      ['nombre' => 'Lectura y redacción II','cuatrimestre'=>'2'],
    //3° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia antigua universal II','cuatrimestre'=>'3'],
      ['nombre' => 'México prehispánico III','cuatrimestre'=>'3'],
      ['nombre' => 'Historia de América Latina I','cuatrimestre'=>'3'],
      ['nombre' => 'Historia universal I','cuatrimestre'=>'3'],
      ['nombre' => 'Investigación histórica y documental III','cuatrimestre'=>'3'],
    //4° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia medieval universal I','cuatrimestre'=>'4'],
      ['nombre' => 'Historiografía de México I','cuatrimestre'=>'4'],
      ['nombre' => 'México colonial I','cuatrimestre'=>'4'],
      ['nombre' => 'Historia económica I','cuatrimestre'=>'4'],
      ['nombre' => 'Historia de Oaxaca I','cuatrimestre'=>'4'],
    //5° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia medieval universal II','cuatrimestre'=>'5'],
      ['nombre' => 'México colonial II','cuatrimestre'=>'5'],
      ['nombre' => 'Historiografía de México II','cuatrimestre'=>'5'],
      ['nombre' => 'Geografía humana I','cuatrimestre'=>'5'],
      ['nombre' => 'Sociología I','cuatrimestre'=>'5'],
    //6° CUATRIMESTRE HISTORIA
      ['nombre' => 'México colonial III','cuatrimestre'=>'6'],
      ['nombre' => 'Historia moderna universal I','cuatrimestre'=>'6'],
      ['nombre' => 'Historia de América latina II','cuatrimestre'=>'6'],
      ['nombre' => 'Historia económica II','cuatrimestre'=>'6'],
      ['nombre' => 'Historiografía universal II','cuatrimestre'=>'6'],
    //7° CUATRIMESTRE HISTORIA
      ['nombre' => 'México independiente I','cuatrimestre'=>'7'],
      ['nombre' => 'Historia moderna universal II','cuatrimestre'=>'7'],
      ['nombre' => 'Patrimonio cultural I','cuatrimestre'=>'7'],
      ['nombre' => 'Geografía humana II','cuatrimestre'=>'7'],
      ['nombre' => 'Sociología II','cuatrimestre'=>'7'],
      ['nombre' => 'Historia de Oaxaca II','cuatrimestre'=>'7'],
    //8° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia y medios de comunicación I','cuatrimestre'=>'8'],
      ['nombre' => 'Historia contemporánea universal I','cuatrimestre'=>'8'],
      ['nombre' => 'México independiente II','cuatrimestre'=>'8'],
      ['nombre' => 'Historia de América latina III','cuatrimestre'=>'8'],
      ['nombre' => 'Patrimonio cultural II','cuatrimestre'=>'8'],
      ['nombre' => 'Didáctica de historia I','cuatrimestre'=>'8'],
    //9° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia contemporánea universal II','cuatrimestre'=>'9'],
      ['nombre' => 'México revolucionario I','cuatrimestre'=>'9'],
      ['nombre' => 'Patrimonio cultural III','cuatrimestre'=>'9'],
      ['nombre' => 'Historia y medios de comunicación II','cuatrimestre'=>'9'],
      ['nombre' => 'Didáctica de historia II','cuatrimestre'=>'9'],
    //10° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia contemporánea universal III','cuatrimestre'=>'10'],
      ['nombre' => 'México revolucionario II','cuatrimestre'=>'10'],
      ['nombre' => 'Patrimonio cultural IV','cuatrimestre'=>'10'],
      ['nombre' => 'Historia y medios de comunicación III','cuatrimestre'=>'10'],
      ['nombre' => 'Didáctica de historia III','cuatrimestre'=>'10'],


      //>>>>>PSICOLOGIA<<<<<<<
      //1° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Bases biológicas de la conducta','cuatrimestre'=>'1'],
      ['nombre' => 'Historia de la psicología I','cuatrimestre'=>'1'],
      ['nombre' => 'Teorías y sistemas','cuatrimestre'=>'1'],
      ['nombre' => 'Sensopercepción','cuatrimestre'=>'1'],
      //2° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Anatomía del sistema nervioso','cuatrimestre'=>'2'],
      ['nombre' => 'Historia de la psicología II','cuatrimestre'=>'2'],
      ['nombre' => 'Motivación y emoción','cuatrimestre'=>'2'],
      ['nombre' => 'Aprendizaje y memoria','cuatrimestre'=>'2'],
      //3° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Fisiología del sistema nervioso','cuatrimestre'=>'3'],
      ['nombre' => 'Pensamiento y lenguaje','cuatrimestre'=>'3'],
      ['nombre' => 'Desarrollo psicológico I Estadística descriptiva','cuatrimestre'=>'3'],
      ['nombre' => 'Teoría del aprendizaje','cuatrimestre'=>'3'],
      //4° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Psicología fisiológica','cuatrimestre'=>'4'],
      ['nombre' => 'Psicopatología','cuatrimestre'=>'4'],
      ['nombre' => 'Desarrollo humano','cuatrimestre'=>'4'],
      ['nombre' => 'Desarrollo psicológico II','cuatrimestre'=>'4'],
      ['nombre' => 'Estadística inferencial','cuatrimestre'=>'4'],
      ['nombre' => 'Psicología diferencial','cuatrimestre'=>'4'],
      //5° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Teorías dela personalidad I','cuatrimestre'=>'5'],
      ['nombre' => 'Psicología clínica','cuatrimestre'=>'5'],
      ['nombre' => 'Psicología industrial I','cuatrimestre'=>'5'],
      ['nombre' => 'Psicología educativa','cuatrimestre'=>'5'],
      ['nombre' => 'Métodos de investigación','cuatrimestre'=>'5'],
      ['nombre' => 'Aprendizaje','cuatrimestre'=>'5'],
      //6° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Teorías de la personalidad II','cuatrimestre'=>'6'],
      ['nombre' => 'Teoría y técnica de la entrevista','cuatrimestre'=>'6'],
      ['nombre' => 'Psicología industrial II','cuatrimestre'=>'6'],
      ['nombre' => 'Sociología de la educación','cuatrimestre'=>'6'],
      ['nombre' => 'Antropología social','cuatrimestre'=>'6'],
      ['nombre' => 'Laboratorio de aprendizaje','cuatrimestre'=>'6'],
      //7° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Trastornos mentales orgánicos','cuatrimestre'=>'7'],
      ['nombre' => 'Psicometría I','cuatrimestre'=>'7'],
      ['nombre' => 'Psicología del trabajo','cuatrimestre'=>'7'],
      ['nombre' => 'Modelos psicopedagógicos','cuatrimestre'=>'7'],
      ['nombre' => 'Psicología social','cuatrimestre'=>'7'],
      ['nombre' => 'Psicología experimental','cuatrimestre'=>'7'],
      //8° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Trastornos mentales neuróticos','cuatrimestre'=>'8'],
      ['nombre' => 'Psicometría II','cuatrimestre'=>'8'],
      ['nombre' => 'Psicodinámica de grupos','cuatrimestre'=>'8'],
      ['nombre' => 'Pruebas psicopedagógicas','cuatrimestre'=>'8'],
      ['nombre' => 'Comunicación social','cuatrimestre'=>'8'],
      ['nombre' => 'Rehabilitación conductual','cuatrimestre'=>'8'],
      //9° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Trastornos mentales psicóticos','cuatrimestre'=>'9'],
      ['nombre' => 'Psicoterapia I','cuatrimestre'=>'9'],
      ['nombre' => 'Orientación vocacional','cuatrimestre'=>'9'],
      ['nombre' => 'Problemas de aprendizaje','cuatrimestre'=>'9'],
      ['nombre' => 'Psicología comunitaria','cuatrimestre'=>'9'],
      ['nombre' => 'Psicofarmacología','cuatrimestre'=>'9'],
      //10° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Supervisión de casos','cuatrimestre'=>'10'],
      ['nombre' => 'Psicoterapia II','cuatrimestre'=>'10'],
      ['nombre' => 'Seminario de tesis','cuatrimestre'=>'10'],
      ['nombre' => 'Técnicas de educación especial','cuatrimestre'=>'10'],
      ['nombre' => 'Etica profesional','cuatrimestre'=>'10'],
      ['nombre' => 'Integración de estudios','cuatrimestre'=>'10'],


      //>>>>>>>>PEDAGOGIA<<<<<<<<<<<
      //1° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Conocimiento de la infancia I','cuatrimestre'=>'1'],
      ['nombre' => 'Teoría pedagógica I','cuatrimestre'=>'1'],
      ['nombre' => 'Sociología de la educación I','cuatrimestre'=>'1'],
      ['nombre' => 'Antropología pedagógica I','cuatrimestre'=>'1'],
      ['nombre' => 'Psicología de la educación I','cuatrimestre'=>'1'],
      ['nombre' => 'Iniciación a la investigación pedagógica I','cuatrimestre'=>'1'],
      //2° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Conocimiento de la infancia II','cuatrimestre'=>'2'],
      ['nombre' => 'Teoría pedagógica II','cuatrimestre'=>'2'],
      ['nombre' => 'Sociología de la educación II','cuatrimestre'=>'2'],
      ['nombre' => 'Antropología pedagógica II','cuatrimestre'=>'2'],
      ['nombre' => 'Psicología de la educación II','cuatrimestre'=>'2'],
      ['nombre' => 'Iniciación a la investigación pedagógica II','cuatrimestre'=>'2'],
      //3° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Historia general de la educación I','cuatrimestre'=>'3'],
      ['nombre' => 'Psicotécnica pedagógica I','cuatrimestre'=>'3'],
      ['nombre' => 'Didáctica general I','cuatrimestre'=>'3'],
      ['nombre' => 'Problemas contemporáneos de la pedagogía I','cuatrimestre'=>'3'],
      ['nombre' => 'Conocimiento de los adolescentes I','cuatrimestre'=>'3'],
      ['nombre' => 'Estadística aplicada a la educación I','cuatrimestre'=>'3'],
      //4° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Historia general de la educación II','cuatrimestre'=>'4'],
      ['nombre' => 'Psicotécnica pedagógica II','cuatrimestre'=>'4'],
      ['nombre' => 'Didáctica general II','cuatrimestre'=>'4'],
      ['nombre' => 'Problemas contemporáneos de la pedagogía II','cuatrimestre'=>'4'],
      ['nombre' => 'Estadística aplicada a la educación II','cuatrimestre'=>'4'],
      //5° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Historia dela educación en México I','cuatrimestre'=>'5'],
      ['nombre' => 'Evaluación escolar I','cuatrimestre'=>'5'],
      ['nombre' => 'Orientación educativa, vocacional y profesional I','cuatrimestre'=>'5'],
      ['nombre' => 'Auxiliares de la comunicación I','cuatrimestre'=>'5'],
      ['nombre' => 'Psicología del aprendizaje I','cuatrimestre'=>'5'],
      ['nombre' => 'Prácticas escolares I','cuatrimestre'=>'5'],
      //6° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Historia dela educación en México II','cuatrimestre'=>'6'],
      ['nombre' => 'Evaluación escolar II','cuatrimestre'=>'6'],
      ['nombre' => 'Orientación educativa, vocacional y profesional II','cuatrimestre'=>'6'],
      ['nombre' => 'Auxiliares dela comunicación II','cuatrimestre'=>'6'],
      ['nombre' => 'Psicología del aprendizaje II','cuatrimestre'=>'6'],
      ['nombre' => 'Prácticas escolares II','cuatrimestre'=>'6'],
      //7° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Filosofía de la educación I','cuatrimestre'=>'7'],
      ['nombre' => 'Didáctica y práctica de la especialidad I','cuatrimestre'=>'7'],
      ['nombre' => 'Legislación educativa mexicana I','cuatrimestre'=>'7'],
      ['nombre' => 'Organización, administración y supervisión escolar I','cuatrimestre'=>'7'],
      ['nombre' => 'Laboratorio psicopedagógico I','cuatrimestre'=>'7'],
      ['nombre' => 'Política educativa en México I','cuatrimestre'=>'7'],
      //8° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Filosofía de la educación II','cuatrimestre'=>'8'],
      ['nombre' => 'Didáctica y práctica de la especialidad II','cuatrimestre'=>'8'],
      ['nombre' => 'Legislación educativa mexicana II','cuatrimestre'=>'8'],
      ['nombre' => 'Organización, administración y supervisión escolar II','cuatrimestre'=>'8'],
      ['nombre' => 'Laboratorio psicopedagógico II','cuatrimestre'=>'8'],
      ['nombre' => 'Política educativa en México II','cuatrimestre'=>'8'],
      //9° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Seminario sobre métodos de investigación y asesoría de tesis I','cuatrimestre'=>'9'],
      ['nombre' => 'Expresión artística I','cuatrimestre'=>'9'],
      ['nombre' => 'Pedagogía monográfica I','cuatrimestre'=>'9'],
      //10° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Seminario sobre métodos de investigación y asesoría de tesis II','cuatrimestre'=>'9'],
      ['nombre' => 'Expresión artística II','cuatrimestre'=>'9'],
      ['nombre' => 'Pedagogía monográfica II','cuatrimestre'=>'9'],

       //>>>>>>>CIENCIAS Y TECNICAS DE LA COMUNICACION<<<<<<<<<
      //1° CUATRIMESTRE CTC
      ['nombre' => 'Historia de los medios','cuatrimestre'=>'9'],
      ['nombre' => 'Proceso creativo de la comunicación','cuatrimestre'=>'9'],
      ['nombre' => 'Expresión oral','cuatrimestre'=>'9'],
      ['nombre' => 'Redacción','cuatrimestre'=>'9'],
      ['nombre' => 'Fotografía I','cuatrimestre'=>'9'],
      ['nombre' => 'Principios de economía','cuatrimestre'=>'9'],
      //2° CUATRIMESTRE CTC
      ['nombre' => 'Filosofía de la comunicación','cuatrimestre'=>'9'],
      ['nombre' => 'Sociología de la comunicación','cuatrimestre'=>'9'],
      ['nombre' => 'Arte y comunicación','cuatrimestre'=>'9'],
      ['nombre' => 'Periodismo I','cuatrimestre'=>'9'],
      ['nombre' => 'Fotografía II','cuatrimestre'=>'9'],
      ['nombre' => 'Radio I','cuatrimestre'=>'9'],
      //3° CUATRIMESTRE CTC
      ['nombre' => 'Lenguaje cinematográfico','cuatrimestre'=>'9'],
      ['nombre' => 'Psicología de la comunicación','cuatrimestre'=>'9'],
      ['nombre' => 'Periodismo II','cuatrimestre'=>'9'],
      ['nombre' => 'Radio II','cuatrimestre'=>'9'],
      ['nombre' => 'Televisión I','cuatrimestre'=>'9'],      
      ['nombre' => 'Producción audiovisual','cuatrimestre'=>'9'],
      //4° CUATRIMESTRE CTC
      ['nombre' => 'Mercadotecnia','cuatrimestre'=>'9'],
      ['nombre' => 'Comunicación en pequeños grupos','cuatrimestre'=>'9'],
      ['nombre' => 'Diseño grafico','cuatrimestre'=>'9'],
      ['nombre' => 'Cultura musical','cuatrimestre'=>'9'],
      ['nombre' => 'Televisión II','cuatrimestre'=>'9'],
      ['nombre' => 'Técnicas de producción en vivo','cuatrimestre'=>'9'],
      //5° CUATRIMESTRE CTC
      ['nombre' => 'Teoría social I','cuatrimestre'=>'9'],
      ['nombre' => 'Teoría de la comunicación I','cuatrimestre'=>'9'],
      ['nombre' => 'Psicología del mexicano','cuatrimestre'=>'9'],
      ['nombre' => 'Investigación de la comunicación','cuatrimestre'=>'9'],
      ['nombre' => 'Gobierno y proceso político en México','cuatrimestre'=>'9'],
      ['nombre' => 'Introducción a la contabilidad','cuatrimestre'=>'9'],
      //6° CUATRIMESTRE CTC
      ['nombre' => 'Teoria de la comunicacion II','cuatrimestre'=>'9'],
      ['nombre' => 'Teoría social II','cuatrimestre'=>'9'],
      ['nombre' => 'Introducción al derecho','cuatrimestre'=>'9'],
      ['nombre' => 'Publicidad y propaganda','cuatrimestre'=>'9'],
      ['nombre' => 'Comunicación y literatura I','cuatrimestre'=>'9'],
      ['nombre' => 'Administración de los medios','cuatrimestre'=>'9'],
      //7° CUATRIMESTRE CTC
      ['nombre' => 'Opinión pública','cuatrimestre'=>'9'],
      ['nombre' => 'Derecho y comunicación','cuatrimestre'=>'9'],
      ['nombre' => 'Comunicación y literatura II','cuatrimestre'=>'9'],
      ['nombre' => 'Historia y crítica cinematográfica','cuatrimestre'=>'9'],
      ['nombre' => 'Radio cultural','cuatrimestre'=>'9'],
      //8° CUATRIMESTRE CTC
      ['nombre' => 'Prensa comparada','cuatrimestre'=>'9'],
      ['nombre' => 'Derecho y etnias','cuatrimestre'=>'9'],
      ['nombre' => 'Didáctica de la comunicación','cuatrimestre'=>'9'],
      ['nombre' => 'Investigación de mercados','cuatrimestre'=>'9'],
      ['nombre' => 'Televisión educativa','cuatrimestre'=>'9'],
      //9° CUATRIMESTRE CTC
      ['nombre' => 'Telemática','cuatrimestre'=>'9'],
      ['nombre' => 'Proyecto profesional','cuatrimestre'=>'9']

      
        /*Falta agregareles el cautrimestre
    //MATERIAS GENERALES
    ['nombre' => 'Administracion I','cuatrimestre'=>'1'],
    ['nombre' => 'Administracion II'],
    ['nombre' => 'Administracion III'],
    ['nombre' => 'Administración de recursos humanos I'],
    ['nombre' => 'Administración de recursos humanos II'],
    ['nombre' => 'Auditoría financiera I'],
    ['nombre' => 'Auditoría financiera II'],

    ['nombre' => 'Comunicacion organizacional'],

    ['nombre' => 'Derecho administrativo'],
    ['nombre' => 'Derecho constitucional'],
    ['nombre' => 'Derecho laboral'],

    ['nombre' => 'Economía'],
    ['nombre' => 'Economía internacional'],
    ['nombre' => 'Estadistica I'],
    ['nombre' => 'Estadistica II'],

    ['nombre' => 'Finanzas I'],
    ['nombre' => 'Finanzas II'],

    ['nombre' => 'Inglés I'],
    ['nombre' => 'Inglés II'],
    ['nombre' => 'Inglés III'],
    ['nombre' => 'Inglés IV'],
    ['nombre' => 'Informatica para contabilidad II'],
    ['nombre' => 'Introduccion al derecho'],

    ['nombre' => 'Informática I'],
    ['nombre' => 'Informática II'],

    ['nombre' => 'Matematicas'],
    ['nombre' => 'Matematicas I'],
    ['nombre' => 'Matematicas II'],
    ['nombre' => 'Microeconomía'],
    ['nombre' => 'Macroeconomía'],
    ['nombre' => 'Matematicas financieras'],
    ['nombre' => 'Mejora continua'],
    ['nombre' => 'Metodología de la investigación'],

    ['nombre' => 'Planeación estratégica'],
    ['nombre' => 'Presupuestos'],

    ['nombre' => 'Relaciones públicas'],
    ['nombre' => 'Seminario de tesis I'],
    ['nombre' => 'Seminario de tesis II'],
    */

      ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
