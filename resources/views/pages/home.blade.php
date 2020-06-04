@extends('layout.root',['title' => $text])

@section('content-body')


        <div class="row" >
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="text-center">{{$text}}
        
                    <a class="btn btn-primary btn-sm float-right  my-2  btn_atualizar" href="#" role="button"><i class="nav-icon fas fa-sync"></i> Atualizar</a>

                    <input type="button"  id="sincronizeAll-link"  onclick="location.href='{{route('sincronizeAll')}}'"  class="dn" > </a>
                
                </h3>            
              </div>

                     @if (count($documents))
                    <div class="card-body">
                        <table id="dbTable" class="table table-bordered">
                          <thead>                  
                            <tr>                                                                          
                              <th>Num. NFe</th>
                              <th>Valor</th>      
                              <th>Chave</th>    
                              <th>Importação</th>                                                                   
                            </tr>
                          </thead>
                          <tbody>

                              @foreach ($documents as $document)
                              <tr>                                                  
                                <td>{{$document->num_nf}}</td>                                
                                <td>{{$document->val_nf}}</td>                                
                                <td>{{$document->key_nf}}</td>   
                                <td>{{$document->created_at}}</td>
                           
                              
                              </tr>

                              @endforeach
                          </tbody>
                        </table>
                
                        @else
                        <div class="alert alert-info alert-dismissible">
                          <h5><i class="icon fas fa-info"></i> Nenhum registro encontrado!</h5>
                        </div>                                  
                    </div>
                    @endif

            </div>            
          </div>
      </div>                    

    <div class="col-md-12 links text-center">
        <a href="/docs" target="_blank"><i class="nav-icon fas fa-book"></i> Sobre o projeto</a>
    </div>



@endsection



@section('js')

    <script type="text/javascript">
      $(function(){
         
        $( ".btn_atualizar" ).on( "click", function() {             
             showAlert('Atenção!','Deseja atualizar as notas ficais?','warning',["Cancelar","Atualizar"],false,function(){ $("#sincronizeAll-link").click(); });

        });  

       $('#dbTable').DataTable( {
            "language": {
                 "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
            }
        });        


      });

    </script>

@endsection