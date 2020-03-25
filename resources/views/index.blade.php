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
       
        <div class="titulo"><h3>Querido/a colega</h3></div>
        <div class="line"></div>
        <div class="texto-pre">
        Queremos que tengas a mano el padrón para las
Elecciones del Consejo de la Magistratura
        </div>
        
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Nro. de Cedula</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Nro. de Matricula</a>
  </li>
 
</ul>
<div class="tab-content" id="pills-tabContent">
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
        
        <div class="espacio-30px"></div>
        
  <div class="texto-pre">
        Contactá con nosotros a los números<br />
0981542240 o 0982740007<br />
(con Gabriela Maggi)
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
                } else {
                            bool = false;
                }
            }
    });
  
  });
</script>
</body>
</html>