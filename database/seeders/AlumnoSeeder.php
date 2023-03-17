<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alumno;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2018-2021', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '18325061070062', 'nombre' => 'DAMIAN EDUARDO', 'paterno' => 'NAVEJAS','materno' => 'CORRALES', 'nombre_completo' => 'NAVEJAS CORRALES DAMIAN EDUARDO', 'curp' => 'NACD030427HSLVRMA0', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2019-2022', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '19325061070317', 'nombre' => 'MIGUEL ANGEL', 'paterno' => 'GARCIA','materno' => 'ESPINOZA', 'nombre_completo' => 'GARCIA ESPINOZA MIGUEL ANGEL', 'curp' => 'GAEM031204HSLRSGA0', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2019-2022', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '19325061070528', 'nombre' => 'PABLO CANEK', 'paterno' => 'PEREZ','materno' => 'MOLINA', 'nombre_completo' => 'PEREZ MOLINA PABLO CANEK', 'curp' => 'PEMP040810HSLRLBA0', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20302060750212', 'nombre' => 'AOLANIS NAYLE', 'paterno' => 'NAVARRO','materno' => 'PADILLA', 'nombre_completo' => 'NAVARRO PADILLA AOLANIS NAYLE', 'curp' => 'NAPA050209MBCVDLA2', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20308052700993', 'nombre' => 'BETHEL ANALY', 'paterno' => 'LIZARRAGA','materno' => 'PEREZ', 'nombre_completo' => 'LIZARRAGA PEREZ BETHEL ANALY', 'curp' => 'LIPB050515MSLZRTA3', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20311061490072', 'nombre' => 'MOISES ALBERTO', 'paterno' => 'FIGUEROA','materno' => 'AYALA', 'nombre_completo' => 'FIGUEROA AYALA MOISES ALBERTO', 'curp' => 'FIAM050528HSLGYSA0', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20317050760886', 'nombre' => 'DANTE ADONAI', 'paterno' => 'PEREZ','materno' => 'ALVARADO', 'nombre_completo' => 'PEREZ ALVARADO DANTE ADONAI', 'curp' => 'PEAD050226HMSRLNA1', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325050430447', 'nombre' => 'JUAN PABLO', 'paterno' => 'CASTAÑEDA','materno' => 'LUZANIA', 'nombre_completo' => 'CASTAÑEDA LUZANIA JUAN PABLO', 'curp' => 'CALJ050721HSRSZNA7', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325050430529', 'nombre' => 'DIANA VALENTINA', 'paterno' => 'RUEDA','materno' => 'LOPEZ', 'nombre_completo' => 'RUEDA LOPEZ DIANA VALENTINA', 'curp' => 'RULD040210MSLDPNA1', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070001', 'nombre' => 'ANGEL DE JESUS', 'paterno' => 'ABITIA','materno' => 'FERNANDEZ', 'nombre_completo' => 'ABITIA FERNANDEZ ANGEL DE JESUS', 'curp' => 'AIFA051005HSLBRNA1', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070002', 'nombre' => 'MELISSA KASANDRA', 'paterno' => 'ACEVES','materno' => 'ROMAN', 'nombre_completo' => 'ACEVES ROMAN MELISSA KASANDRA', 'curp' => 'AERM050223MBSCMLA2', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070003', 'nombre' => 'MIGUEL ANGEL', 'paterno' => 'ANGUIANO','materno' => 'CRUZ', 'nombre_completo' => 'ANGUIANO CRUZ MIGUEL ANGEL', 'curp' => 'AUCM051211HSLNRGA3', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070004', 'nombre' => 'CARLOS FERNANDO', 'paterno' => 'ANGULO','materno' => 'LOPEZ', 'nombre_completo' => 'ANGULO LOPEZ CARLOS FERNANDO', 'curp' => 'AULC050702HSLNPRA9', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070005', 'nombre' => 'RAUL', 'paterno' => 'ARAUJO','materno' => 'PAYAN', 'nombre_completo' => 'ARAUJO PAYAN RAUL', 'curp' => 'AAPR050210HSLRYLA9', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070006', 'nombre' => 'ANGELA YAMILET', 'paterno' => 'ARIAS','materno' => 'RODRIGUEZ', 'nombre_completo' => 'ARIAS RODRIGUEZ ANGELA YAMILET', 'curp' => 'AIRA050806MSLRDNA3', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070007', 'nombre' => 'MARIA MAGDALENA', 'paterno' => 'ARIZAGA','materno' => 'ESCAMILLA', 'nombre_completo' => 'ARIZAGA ESCAMILLA MARIA MAGDALENA', 'curp' => 'AIEM050922MSLRSGA9', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070008', 'nombre' => 'YULIANA', 'paterno' => 'BAJO','materno' => 'GARATE', 'nombre_completo' => 'BAJO GARATE YULIANA', 'curp' => 'BAGY050501MSLJRLA7', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070010', 'nombre' => 'SANTIAGO ENRIQUE', 'paterno' => 'BARRIOS','materno' => 'PIÑA', 'nombre_completo' => 'BARRIOS PIÑA SANTIAGO ENRIQUE', 'curp' => 'BAPS050225HSRRXNA7', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070011', 'nombre' => 'BRUNO FRANCISCO', 'paterno' => 'BELTRAN','materno' => 'ARAGON', 'nombre_completo' => 'BELTRAN ARAGON BRUNO FRANCISCO', 'curp' => 'BEAB051006HSLLRRA2', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070012', 'nombre' => 'CARLOS DANIEL', 'paterno' => 'BELTRAN','materno' => 'MACHADO', 'nombre_completo' => 'BELTRAN MACHADO CARLOS DANIEL', 'curp' => 'BEMC051020HSLLCRA3', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070013', 'nombre' => 'JUAN ANTONIO', 'paterno' => 'CABRERA','materno' => 'CUEVAS', 'nombre_completo' => 'CABRERA CUEVAS JUAN ANTONIO', 'curp' => 'CACJ051003HBCBVNA6', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070014', 'nombre' => 'BRIANDA VALERIA', 'paterno' => 'CARRILLO','materno' => 'FLORES', 'nombre_completo' => 'CARRILLO FLORES BRIANDA VALERIA', 'curp' => 'CAFB051012MJCRLRA5', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070015', 'nombre' => 'SEBASTIAN', 'paterno' => 'CASTRO','materno' => 'FONSECA', 'nombre_completo' => 'CASTRO FONSECA SEBASTIAN', 'curp' => 'CAFS050531HSLSNBA5', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070016', 'nombre' => 'DULCE MARIA', 'paterno' => 'CRUZ','materno' => 'NORIEGA', 'nombre_completo' => 'CRUZ NORIEGA DULCE MARIA', 'curp' => 'CUND050910MSLRRLA0', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070017', 'nombre' => 'ERNESTO ALONSO', 'paterno' => 'DE LA ROCHA','materno' => 'ALVAREZ', 'nombre_completo' => 'DE LA ROCHA ALVAREZ ERNESTO ALONSO', 'curp' => 'ROAE050630HSLCLRA7', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070018', 'nombre' => 'JULIAN HUMBERTO', 'paterno' => 'DUARTE','materno' => 'SANCHEZ', 'nombre_completo' => 'DUARTE SANCHEZ JULIAN HUMBERTO', 'curp' => 'DUSJ050411HSLRNLA2', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070019', 'nombre' => 'LETZYRIE JIMENA', 'paterno' => 'ESCALANTE','materno' => 'VEGA', 'nombre_completo' => 'ESCALANTE VEGA LETZYRIE JIMENA', 'curp' => 'EAVL050208MSLSGTA8', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070020', 'nombre' => 'JESUS OSVALDO', 'paterno' => 'GARCIA','materno' => 'BELTRAN', 'nombre_completo' => 'GARCIA BELTRAN JESUS OSVALDO', 'curp' => 'GABJ050609HSLRLSA3', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070021', 'nombre' => 'GUILLERMO ALONSO', 'paterno' => 'GOMEZ','materno' => 'MIRALRIO', 'nombre_completo' => 'GOMEZ MIRALRIO GUILLERMO ALONSO', 'curp' => 'GOMG050913HSLMRLA4', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070022', 'nombre' => 'RONNIE MARUAN', 'paterno' => 'GONZALEZ','materno' => 'OSUNA', 'nombre_completo' => 'GONZALEZ OSUNA RONNIE MARUAN', 'curp' => 'GOOR050930HSLNSNA8', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070023', 'nombre' => 'GEORGIA MARIANA', 'paterno' => 'GUEVARA','materno' => 'FELIX', 'nombre_completo' => 'GUEVARA FELIX GEORGIA MARIANA', 'curp' => 'GUFG050214MSLVLRA9', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070024', 'nombre' => 'ANLLELA GERALDINE', 'paterno' => 'HERNANDEZ','materno' => 'PARRA', 'nombre_completo' => 'HERNANDEZ PARRA ANLLELA GERALDINE', 'curp' => 'HEPA050306MSLRRNA2', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070025', 'nombre' => 'PAUL ANTONIO', 'paterno' => 'IBARRA','materno' => 'SANTOS', 'nombre_completo' => 'IBARRA SANTOS PAUL ANTONIO', 'curp' => 'IASP051209HSLBNLA7', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070027', 'nombre' => 'CARLOS ANDRES', 'paterno' => 'JACOBO','materno' => 'VILLARREAL', 'nombre_completo' => 'JACOBO VILLARREAL CARLOS ANDRES', 'curp' => 'JAVC050901HSLCLRA0', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070028', 'nombre' => 'JOSE CARLO', 'paterno' => 'LABASTIDA','materno' => 'BERRELLEZA', 'nombre_completo' => 'LABASTIDA BERRELLEZA JOSE CARLO', 'curp' => 'LABC051220HSLBRRA1', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070030', 'nombre' => 'DANIEL', 'paterno' => 'LOPEZ','materno' => 'GARZA', 'nombre_completo' => 'LOPEZ GARZA DANIEL', 'curp' => 'LOGD050922HSLPRNA8', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070032', 'nombre' => 'GIOVANNI EMMANUEL', 'paterno' => 'MEDINA','materno' => 'RODRIGUEZ', 'nombre_completo' => 'MEDINA RODRIGUEZ GIOVANNI EMMANUEL', 'curp' => 'MERG050617HSLDDVA6', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070034', 'nombre' => 'LUIS ANGEL', 'paterno' => 'NIDOME','materno' => 'NIEBLA', 'nombre_completo' => 'NIDOME NIEBLA LUIS ANGEL', 'curp' => 'NINL050607HSLDBSA2', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070035', 'nombre' => 'ALEXIA YAMILETH', 'paterno' => 'ONTIVEROS','materno' => 'ONTIVEROS', 'nombre_completo' => 'ONTIVEROS ONTIVEROS ALEXIA YAMILETH', 'curp' => 'OIOA051206MSLNNLA6', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070036', 'nombre' => 'IRVIN JOSEPH', 'paterno' => 'ORTIZ','materno' => 'SILVA', 'nombre_completo' => 'ORTIZ SILVA IRVIN JOSEPH', 'curp' => 'OISI050129HSLRLRA0', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070037', 'nombre' => 'ALEXANDER', 'paterno' => 'PALAZUELOS','materno' => 'BELTRAN', 'nombre_completo' => 'PALAZUELOS BELTRAN ALEXANDER', 'curp' => 'PABA050801HSLLLLA7', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070038', 'nombre' => 'MERCEDES GUADALUPE', 'paterno' => 'PEIMBERT','materno' => 'LOPEZ', 'nombre_completo' => 'PEIMBERT LOPEZ MERCEDES GUADALUPE', 'curp' => 'PELM050711MBCMPRA4', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070039', 'nombre' => 'DANNA XIMENA', 'paterno' => 'PEREZ','materno' => 'OSUNA', 'nombre_completo' => 'PEREZ OSUNA DANNA XIMENA', 'curp' => 'PEOD050721MSLRSNA8', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070040', 'nombre' => 'XIMENA ESTEFANIA', 'paterno' => 'POLANCO','materno' => 'MARTINEZ', 'nombre_completo' => 'POLANCO MARTINEZ XIMENA ESTEFANIA', 'curp' => 'POMX050213MGTLRMA0', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070041', 'nombre' => 'ERANDI MAYLI', 'paterno' => 'QUINTERO','materno' => 'MURILLO', 'nombre_completo' => 'QUINTERO MURILLO ERANDI MAYLI', 'curp' => 'QUME050829MSLNRRA5', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070042', 'nombre' => 'MARIA FERNANDA', 'paterno' => 'QUINTERO','materno' => 'VIZCARRA', 'nombre_completo' => 'QUINTERO VIZCARRA MARIA FERNANDA', 'curp' => 'QUVF051106MSLNZRA0', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '4', 'grupo' => '4A', 'numero_control' => '20325061070043', 'nombre' => 'ESTEBAN SEBASTIAN', 'paterno' => 'RODRIGUEZ','materno' => 'AVILEZ', 'nombre_completo' => 'RODRIGUEZ AVILEZ ESTEBAN SEBASTIAN', 'curp' => 'ROAE050504HSLDVSA0', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070044', 'nombre' => 'LUIS ALFONSO', 'paterno' => 'ROMERO','materno' => 'GONZALEZ', 'nombre_completo' => 'ROMERO GONZALEZ LUIS ALFONSO', 'curp' => 'ROGL050919HSLMNSA1', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070045', 'nombre' => 'MARIANE', 'paterno' => 'SANCHEZ','materno' => 'LOPEZ', 'nombre_completo' => 'SANCHEZ LOPEZ MARIANE', 'curp' => 'SALM051030MSLNPRA7', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070046', 'nombre' => 'ARMANDO', 'paterno' => 'SANDOVAL','materno' => 'ESPINOZA', 'nombre_completo' => 'SANDOVAL ESPINOZA ARMANDO', 'curp' => 'SAEA050803HSLNSRA4', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070047', 'nombre' => 'LUIS FERNANDO', 'paterno' => 'SANTANA','materno' => 'ACOSTA', 'nombre_completo' => 'SANTANA ACOSTA LUIS FERNANDO', 'curp' => 'SAAL051114HSLNCSA4', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070048', 'nombre' => 'MELANIE', 'paterno' => 'SIORDIA','materno' => 'TERAN', 'nombre_completo' => 'SIORDIA TERAN MELANIE', 'curp' => 'SITM051229MGTRRLA9', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070049', 'nombre' => 'DANNA ALEJANDRA', 'paterno' => 'URETA','materno' => 'GASTELUM', 'nombre_completo' => 'URETA GASTELUM DANNA ALEJANDRA', 'curp' => 'UEGD050808MSLRSNA8', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070051', 'nombre' => 'SANTIAGO HANZ', 'paterno' => 'WENSES','materno' => 'LOPEZ', 'nombre_completo' => 'WENSES LOPEZ SANTIAGO HANZ', 'curp' => 'WELS051015HSLNPNA2', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070053', 'nombre' => 'MAXIMILIANO', 'paterno' => 'BELTRAN','materno' => 'CORRALES', 'nombre_completo' => 'BELTRAN CORRALES MAXIMILIANO', 'curp' => 'BECM050321HSLLRXA1', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070054', 'nombre' => 'CHRISTINA ALEJANDRA', 'paterno' => 'CALZADA','materno' => 'VILLA', 'nombre_completo' => 'CALZADA VILLA CHRISTINA ALEJANDRA', 'curp' => 'CAVC051208MSLLLHA6', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070055', 'nombre' => 'SEBASTIAN ENRIQUE', 'paterno' => 'CAMPOS','materno' => 'SANCHEZ', 'nombre_completo' => 'CAMPOS SANCHEZ SEBASTIAN ENRIQUE', 'curp' => 'CASS050606HSLMNBA0', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070057', 'nombre' => 'JORGE EMILIO', 'paterno' => 'CAÑEDO','materno' => 'RODRIGUEZ', 'nombre_completo' => 'CAÑEDO RODRIGUEZ JORGE EMILIO', 'curp' => 'CARJ050820HSLXDRA7', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070059', 'nombre' => 'GERMAN', 'paterno' => 'CEBREROS','materno' => 'SANCHEZ', 'nombre_completo' => 'CEBREROS SANCHEZ GERMAN', 'curp' => 'CESG050807HSLBNRA0', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070060', 'nombre' => 'FERNANDO DAMIAN', 'paterno' => 'CERDA','materno' => 'DUARTE', 'nombre_completo' => 'CERDA DUARTE FERNANDO DAMIAN', 'curp' => 'CEDF050511HSLRRRA3', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070061', 'nombre' => 'LUIS ROBERTO', 'paterno' => 'CRESPO','materno' => 'LUGO', 'nombre_completo' => 'CRESPO LUGO LUIS ROBERTO', 'curp' => 'CELL050509HSLRGSA8', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070062', 'nombre' => 'BEATRIZ AIDEE', 'paterno' => 'DIAZ','materno' => 'JIMENEZ', 'nombre_completo' => 'DIAZ JIMENEZ BEATRIZ AIDEE', 'curp' => 'DIJB051123MSLZMTA3', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070063', 'nombre' => 'DAYANA PATRICIA', 'paterno' => 'ESPINOZA','materno' => 'TORRES', 'nombre_completo' => 'ESPINOZA TORRES DAYANA PATRICIA', 'curp' => 'EITD051122MSLSRYA4', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070064', 'nombre' => 'JASSIEL URIEL', 'paterno' => 'FIGUEROA','materno' => 'BARRAZA', 'nombre_completo' => 'FIGUEROA BARRAZA JASSIEL URIEL', 'curp' => 'FIBJ050406HSLGRSA6', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070065', 'nombre' => 'MONICA SOFIA', 'paterno' => 'FRANCO','materno' => 'GARCIA', 'nombre_completo' => 'FRANCO GARCIA MONICA SOFIA', 'curp' => 'FAGM051014MSLRRNA5', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070066', 'nombre' => 'BEATRIZ ESTRELLA', 'paterno' => 'GONZALEZ','materno' => 'CRUZ', 'nombre_completo' => 'GONZALEZ CRUZ BEATRIZ ESTRELLA', 'curp' => 'GOCB050823MSLNRTA8', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070067', 'nombre' => 'JAZMIN ALEJANDRA', 'paterno' => 'HEREDIA','materno' => 'CARREON', 'nombre_completo' => 'HEREDIA CARREON JAZMIN ALEJANDRA', 'curp' => 'HECJ050727MSLRRZA9', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'vespertino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070068', 'nombre' => 'AYLIN MAGALY', 'paterno' => 'HERNANDEZ','materno' => 'IBARRA', 'nombre_completo' => 'HERNANDEZ IBARRA AYLIN MAGALY', 'curp' => 'HEIA050718MSLRBYA0', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070070', 'nombre' => 'CARLOS', 'paterno' => 'ACOSTA','materno' => 'SALAZAR', 'nombre_completo' => 'ACOSTA SALAZAR CARLOS', 'curp' => 'AOSC050607HSLCLRA4', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070071', 'nombre' => 'JOSE LUIS', 'paterno' => 'AISPURO','materno' => 'MARTINEZ', 'nombre_completo' => 'AISPURO MARTINEZ JOSE LUIS', 'curp' => 'AIML050112HSLSRSA4', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070073', 'nombre' => 'SANTIAGO', 'paterno' => 'ARMENTA','materno' => 'RODRIGUEZ', 'nombre_completo' => 'ARMENTA RODRIGUEZ SANTIAGO', 'curp' => 'AERS051021HSLRDNA7', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070074', 'nombre' => 'ALLISON MIRANDA', 'paterno' => 'ASTORGA','materno' => 'GUERRERO', 'nombre_completo' => 'ASTORGA GUERRERO ALLISON MIRANDA', 'curp' => 'AOGA050915MSLSRLA5', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'PROGRAMACIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070075', 'nombre' => 'FERNANDO', 'paterno' => 'AVENDAÑO','materno' => 'MEZA', 'nombre_completo' => 'AVENDAÑO MEZA FERNANDO', 'curp' => 'AEMF050222HNEVZRA1', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070076', 'nombre' => 'VALERIA BERANIA', 'paterno' => 'BELTRAN','materno' => 'DE BORBON', 'nombre_completo' => 'BELTRAN DE BORBON VALERIA BERANIA', 'curp' => 'BEBV051101MSLLRLA6', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070077', 'nombre' => 'JADE YAZMIN', 'paterno' => 'BELTRAN','materno' => 'RUIZ', 'nombre_completo' => 'BELTRAN RUIZ JADE YAZMIN', 'curp' => 'BERJ050924MSLLZDA8', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070078', 'nombre' => 'JESUS ALBERTO', 'paterno' => 'CAMACHO','materno' => 'GIRATA', 'nombre_completo' => 'CAMACHO GIRATA JESUS ALBERTO', 'curp' => 'CAGJ050616HSLMRSA4', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070079', 'nombre' => 'OMAR', 'paterno' => 'CARDENAS','materno' => 'BURGOS', 'nombre_completo' => 'CARDENAS BURGOS OMAR', 'curp' => 'CABO050901HSLRRMA7', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070080', 'nombre' => 'ANDREA RENATA', 'paterno' => 'CHIQUETE','materno' => 'DUARTE', 'nombre_completo' => 'CHIQUETE DUARTE ANDREA RENATA', 'curp' => 'CIDA051211MSLHRNA1', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070081', 'nombre' => 'ALONDRA', 'paterno' => 'CORRALES','materno' => 'BELTRAN', 'nombre_completo' => 'CORRALES BELTRAN ALONDRA', 'curp' => 'COBA051124MSLRLLA7', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070082', 'nombre' => 'ALAN PAUL', 'paterno' => 'CRUZ','materno' => 'NIEBLA', 'nombre_completo' => 'CRUZ NIEBLA ALAN PAUL', 'curp' => 'CUNA050928HSLRBLA1', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070083', 'nombre' => 'OSCAR ANDRES', 'paterno' => 'CUEVAS','materno' => 'LOPEZ', 'nombre_completo' => 'CUEVAS LOPEZ OSCAR ANDRES', 'curp' => 'CXLO050210HSLVPSA2', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070084', 'nombre' => 'ANA VICTORIA', 'paterno' => 'DELGADO','materno' => 'LOPEZ', 'nombre_completo' => 'DELGADO LOPEZ ANA VICTORIA', 'curp' => 'DELA050221MSLLPNA3', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONTABILIDAD', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070085', 'nombre' => 'ROGELIO', 'paterno' => 'ESCALANTE','materno' => 'FELIX', 'nombre_completo' => 'ESCALANTE FELIX ROGELIO', 'curp' => 'EAFR050520HSLSLGA6', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070086', 'nombre' => 'KIMBERLY DAYANA', 'paterno' => 'GALLARDO','materno' => 'BAEZ', 'nombre_completo' => 'GALLARDO BAEZ KIMBERLY DAYANA', 'curp' => 'GABK050216MSLLZMA5', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070087', 'nombre' => 'JESUS MOISES', 'paterno' => 'GAXIOLA','materno' => 'RUBIO', 'nombre_completo' => 'GAXIOLA RUBIO JESUS MOISES', 'curp' => 'GARJ050817HSLXBSA7', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070088', 'nombre' => 'KARIM DE JESUS', 'paterno' => 'GIL','materno' => 'CASTAÑEDA', 'nombre_completo' => 'GIL CASTAÑEDA KARIM DE JESUS', 'curp' => 'GICK050831HSLLSRA2', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070089', 'nombre' => 'ERNESTO RENE', 'paterno' => 'GONZALEZ','materno' => 'ESTRADA', 'nombre_completo' => 'GONZALEZ ESTRADA ERNESTO RENE', 'curp' => 'GOEE050119HSLNSRA6', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070090', 'nombre' => 'SOFIA GUADALUPE', 'paterno' => 'HERRERA','materno' => 'MONZON', 'nombre_completo' => 'HERRERA MONZON SOFIA GUADALUPE', 'curp' => 'HEMS050120MSLRNFA1', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070091', 'nombre' => 'ARMANDO', 'paterno' => 'HIGUERA','materno' => 'CASTILLO', 'nombre_completo' => 'HIGUERA CASTILLO ARMANDO', 'curp' => 'HICA050619HSLGSRA9', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070092', 'nombre' => 'FARAH', 'paterno' => 'IBARRA','materno' => 'DOMINGUEZ', 'nombre_completo' => 'IBARRA DOMINGUEZ FARAH', 'curp' => 'IADF050810MSLBMRA8', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070093', 'nombre' => 'MARCO DANIEL', 'paterno' => 'IBARRA','materno' => 'SANCHEZ', 'nombre_completo' => 'IBARRA SANCHEZ MARCO DANIEL', 'curp' => 'IASM051118HSLBNRA6', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070094', 'nombre' => 'MARIANA', 'paterno' => 'LEON','materno' => 'VALENZUELA', 'nombre_completo' => 'LEON VALENZUELA MARIANA', 'curp' => 'LEVM050728MSLNLRA0', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'CONSTRUCCIÓN', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6B', 'numero_control' => '20325061070095', 'nombre' => 'SAMANTHA', 'paterno' => 'LOPEZ','materno' => 'CHAVEZ', 'nombre_completo' => 'LOPEZ CHAVEZ SAMANTHA', 'curp' => 'LOCS050614MNEPHMA8', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070096', 'nombre' => 'EDUARDO JOSUE', 'paterno' => 'MACEDO','materno' => 'FIGUEROA', 'nombre_completo' => 'MACEDO FIGUEROA EDUARDO JOSUE', 'curp' => 'MAFE051013HSLCGDA2', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070097', 'nombre' => 'MARIA JOSE', 'paterno' => 'MENDOZA','materno' => 'ROJO', 'nombre_completo' => 'MENDOZA ROJO MARIA JOSE', 'curp' => 'MERJ050606MSLNJSA5', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070098', 'nombre' => 'JESUS SANTIAGO', 'paterno' => 'MEZA','materno' => 'LIZARRAGA', 'nombre_completo' => 'MEZA LIZARRAGA JESUS SANTIAGO', 'curp' => 'MELJ050515HSLZZSA4', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'OFIMÁTICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070099', 'nombre' => 'MELISSA', 'paterno' => 'MONREAL','materno' => 'VILLALOBOS', 'nombre_completo' => 'MONREAL VILLALOBOS MELISSA', 'curp' => 'MOVM050427MSLNLLA8', 'sexo' => 'M']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070100', 'nombre' => 'JORGE ARMANDO', 'paterno' => 'MONTOYA','materno' => 'LERMA', 'nombre_completo' => 'MONTOYA LERMA JORGE ARMANDO', 'curp' => 'MOLJ050618HSLNRRA9', 'sexo' => 'H']);
        Alumno::create([ 'carrera' => 'ELECTRÓNICA', 'generacion' => '2020-2023', 'turno' => 'matutino', 'semestre'=> '6', 'grupo' => '6A', 'numero_control' => '20325061070101', 'nombre' => 'JUAN PABLO', 'paterno' => 'MORENO','materno' => 'MACIAS', 'nombre_completo' => 'MORENO MACIAS JUAN PABLO', 'curp' => 'MOMJ050629HSLRCNA8', 'sexo' => 'H']);
    }
}
