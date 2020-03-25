<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Alfredo Maggi</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="font/stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
</head>  
<body>
    
    <div class="container">
      <div class="cabecera-web"><img src="img/cabecera-web.jpg" width="100%"></div>
      <div class="cabecera-movil"><img src="img/cabecera-movil.jpg" width="100%"></div>
       
        <div class="titulo p1"><h3>Querido/a colega</h3></div>
        <div class="line p1"></div>
        <div class="texto-pre p1">
        Queremos que tengas a mano el padrón para las
Elecciones del Consejo de la Magistratura
        </div>
        
        <ul class="nav nav-pills mb-3 p1" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Nro. de Cedula</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Nro. de Matricula</a>
          </li>
        
        </ul>

        <div class="tab-content p1" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <form>
                @csrf
                <div class="input-group mb-3">
                  <input type="text" name="ssn" id="ssn" class="form-control" placeholder="Nro. de Cédula" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit"><img src="img/buscar.svg" class="bus"></button>
                  </div>
                </div>
              </form>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <form>
                <div class="input-group mb-3">
                  <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Nro. de Matricula" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit"><img src="img/buscar.svg" class="bus"></button>
                  </div>
                </div>
              </form>
          </div>
        
        </div>

        <div class="espacio-30px p1"></div>
        
        <div class="texto-pre p1">
        Contactá con nosotros a los números<br />
0981542240 o 0982740007<br />
(con Gabriela Maggi)
        </div>


        <div class="titulo p2"><h3>Resultado</h3></div>
        <div class="line p2"></div>
       
        <div class="resultado p2">
        
              <div class="row">
                <div class="col">
                  <div class="campo matricula"><strong>Matrícula:</strong> <span></span></div>
                </div>
                <div class="col">
                  <div class="campo ssn"><strong>Cedula de Identidad:</strong> <span></span></div>
                </div>
             </div>
            <div class="row">
                <div class="col">
                  <div class="campo nombres"><strong>Nombre y Apellido:</strong> <span></span></div>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                  <div class="campo fch_nac"><strong>Fecha Nacimiento:</strong> <span></span></div>
                </div>
                <div class="col">
                  <div class="campo vote_2018"><strong>Voto 2018:</strong> <span></span></div>
                </div>
            </div>
        
            <div class="row">
                
                <div class="col">
                  <div class="campo departamento"><strong>Departamento:</strong> <span></span></div>
                </div>
                <div class="col">
                  <div class="campo distrito"><strong>Distrito:</strong> <span></span></div>
                </div>
            </div>
            
           </div>
        
          
        
        
        </div>


        <div class="titulo p3"><h3>Resultado</h3></div>
        <div class="line p3"></div>
       
        <div class="resultado p3">
        
         <div class="alert alert-danger" role="alert">
                
          <h5>EN CASO DE NO FIGURAR O PARA TACHAR LOS PASOS SON LOS SIGUIENTES:</h5>

          

          <strong>PASO 1:</strong> Bajar la nota que corresponda a tu actividad Laboral.

          La nota va dirigida a la Corte Suprema de Justicia detallando los fundamentos de tu nota de tacha o reclamo respectivamente.<br /><br />

          <strong>PASO 2:</strong> Debes imprimir la Nota, sellar y firmar.<br /><br />

          <strong>PASO 3:</strong> Digitalizar la nota firmada y sellada en formato PDF por medios de un scanner, o algún otro medio de conversión.

          Podes enviarnos tu nota por foto y nosotros lo convertimos en PDF al (0982) 740007.<br /><br />

          <strong>PASO 4:</strong> Enviar al mail <a href="#">tachayreclamosabogados@pj.gov.py</a><br /><br />

          Adjuntar la nota.<br /><br />

          

          <h5>OBSERVACIÓN: EL PLAZO DE LAS TACHAS Y RECLAMOS ES HASTA EL VIERNES 27 DE MARZO DEL 2020.</h5>
                      
         </div>
            
        </div>
        
        
        
        <div class="espacio-30px"></div>
        <div class="line-2"></div>
        
        <div class="copy">© Copyright 2020 www.alfredomaggi.com.py </div>
        <div class="follow-web">
        Seguinos: 
        <a style="margin-left: 10px" href="https://www.facebook.com/AlfredoMaggipy/" target="_blank"><img src="img/fb.svg"></a>
        <a style="margin-left: 10px" href="https://www.instagram.com/alfredomaggi/" target="_blank"><img src="img/ig.svg"></a>
            
        </div>
        
        <div class="follow-movil">
        <a href="https://www.facebook.com/AlfredoMaggipy/" target="_blank"><img src="img/fb.svg"></a>
        <a style="margin-left: 10px" href="https://www.instagram.com/alfredomaggi/" target="_blank"><img src="img/ig.svg"></a>
            
        </div>
        
        <div class="espacio-30px"></div>
         <div class="whatsapp"><a href="https://wa.me/0981542240" target="_blank"><img src="img/wha.svg" width="100%"></a> </div>  
    </div>  
 
 
<!-- Java Script -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>     

<script type="text/javascript">

  $(document).ready(function(){

    $('.p2, .p3').fadeOut();

    $('form').on('submit', function(e){
      e.preventDefault();

      var bool = false;
      
      let ssn = $('#ssn').val();
      let matricula = $('#matricula').val();

      var data = {
        '_token' : document.querySelector('meta[name="csrf-token"]').content,
        'ssn' :  ssn,
        'matricula' : matricula
      };

      $.ajax({
          url: '/check',
          method: 'POST',
          async: false,
          dataType: 'json',
          headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
              data: data,
              complete: function (data) {
                  if (data.responseJSON.success) {
                    bool = true;
                    $('.campo.matricula span').html(data.responseJSON.result.matricula);
                    $('.campo.ssn span').html(data.responseJSON.result.ssn);
                    $('.campo.nombres span').html(data.responseJSON.result.nombres + " " + data.responseJSON.result.apellidos);
                    $('.campo.fch_nac span').html(data.responseJSON.result.fch_nac);
                    $('.campo.vote_2018 span').html(data.responseJSON.result.vote_2018);
                    $('.campo.departamento span').html(data.responseJSON.result.departamento);
                    $('.campo.distrito span').html(data.responseJSON.result.distrito);
                    $('.p1').fadeOut();
                    $('.p2').fadeIn();
                  } else {
                    bool = false;
                    $('.p1').fadeOut();
                    $('.p3').fadeIn();
                  }
              }
      });
    
    });

  });
</script>
</body>
</html>