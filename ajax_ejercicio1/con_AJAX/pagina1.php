<?php error_reporting( 0 );
header( 'Content-Type: text/html; charset=ISO-8859-1' );
if ( $_REQUEST[ 'cod' ] == 1 )
echo '<strong>Aries:</strong> Hoy los cambios seran fisicos, personales, de caracter, Te sentiras impulsivo y tomaras  iniciativas. Periodo en donde consideraras unirte a agrupaciones de beneficencia, o de ayuda a los demas.';
if ( $_REQUEST[ 'cod' ] == 2 )
echo '<strong>Tauro:</strong> Hoy los cambios seran privados, intimos. Recuerdos. Ayuda, solidaridad. Asuntos en lugares de retiro. Tu conyuge puede aportar buen status a tu vida o apoyo a tu profesion.';
if ( $_REQUEST[ 'cod' ] == 3 )
echo '<strong>Geminis:</strong> Los asuntos de hoy tienen que ver con las amistades, reuniones, actividades con ellos. Dia esperanzado, ilusiones. Mucha energia sexual y fuerza emocional. Deseos dificiles de controlar.';
if ( $_REQUEST[ 'cod' ] == 4 )
echo '<strong>Cancer:</strong> Este dia la profesion y las relaciones con superiores y con tu madre seran de importancia. Actividad en relacion a estos temas. Momentos positivos con compagneros de trabajo. Actividad laboral agradable.';
if ( $_REQUEST[ 'cod' ] == 5 )
echo '<strong>Leo:</strong> Este dia los estudios, los viajes, el extranjero y la espiritualidad seran lo importante. Pensamientos, religion y filosofia tambien. Vivencias karmicas de la epoca te vuelven responsable tomando decisiones.';
if ( $_REQUEST[ 'cod' ] == 6 )
echo '<strong>Virgo:</strong> Para este dia toma importancia tu vida sexual, tal vez miedos, temas legales, juicios o herencias. Experiencias extragnas. Hay karma de prueba durante este periodo en tu parte psicologica, generandose algunos replanteos.';
if ( $_REQUEST[ 'cod' ] == 7 )
echo '<strong>Libra:</strong> Hoy todo asunto tiene que ver con tu pareja, tambien con socios, con la gente o el publico. Ellos seran lo mas importante del dia. Ganancias a traves de especulaciones o del juego. Actividades vocacionales artisticas.';
if ( $_REQUEST[ 'cod' ] == 8 )
echo '<strong>Escorpion:</strong> Hoy todo asunto tiene que ver con temas de trabajo y de salud. Presta atencion a ambos. Experiencias diversas con compagneros. Durante este periodo tendras muchos recursos para ganar dinero.';
if ( $_REQUEST[ 'cod' ] == 9 )
echo '<strong>Sagitario:</strong> Durante este dia se viviran cambios en relacion a los noviazgos o a los hijos. Creatividad, actividad, diversiones y salidas. Periodo de encuentros con personas o situaciones que te impresionan.';
if ( $_REQUEST[ 'cod' ] == 10 )
echo '<strong>Capricornio:</strong> Los cambios del dia tienen que ver con tu hogar, con la convivencia y con el padre. Asuntos relativos al caracter en la convivencia. El karma de responsabilidad de estos momentos te acercara al mundo de lo desconocido, mucha madurez y contacto con el mas alla.';
if ( $_REQUEST[ 'cod' ] == 11 )
echo '<strong>Acuario:</strong> Hoy todo asunto tiene que ver con el entorno inmediato, hermanos y vecinos, con la comunicacion, los viajes cortos o traslados frecuentes. El hablar y trasladarse sera importante hoy. Mentalidad e ideas activas.';
if ( $_REQUEST[ 'cod' ] == 12 )
echo '<strong>Piscis:</strong> Durante este dia se viviran cambios en la economia, movimientos en los ingresos, negocios, valores. Momentos de gran fuerza y decision profesionales, buscaras el liderazgo.';
?>