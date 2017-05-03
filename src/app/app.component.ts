import { Component } from '@angular/core';
import { PersonasService } from './services/personas.service';
import { Ng2SmartTableModule } from 'ng2-smart-table'; //importar modulo
import {LocalDataSource} from 'ng2-smart-table';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  providers : [PersonasService]
})
export class AppComponent {
  title = 'app works!';
  //personas : Array<any> = [];
  personas : LocalDataSource = new LocalDataSource();
  datosTraidos : Array<any> = [];
  columnaNombre = true;
  columnApellido = true;
  columnId = true;
  columnEmail = true;
  filtroNombre = "";
  color = "";
  size;
  datoTraido;
  filtroGeneral = true;

  constructor(private PersonaService:PersonasService)
  {
    this.size = 20;

    PersonaService.traerPersonas()
          .then(data =>{
            this.personas.load(data);
            this.datosTraidos = data;
            console.log(data);
            console.log("entre");

          }) 
         .catch(err =>{//error
            console.log(err);
            console.log("error");
          });


  }

  settings = { //declaro el setting del SmartTalbe
    columns : { 
      id: {title:"ID",editable:false}, //el primer dato es la clave, y adentro declaro el titulo
      first_name: {title:"NOMBRE"},                  //editable:false no te deja editar ese campo
      last_name: {title:"APELLIDO"},
      email: {title:"EMAIL"}
     },
    pager:{
      perPage: 10 //para q me agrupe la pagina q muestro de a 2 datos de mi lista

    },    
    add:{
      confirmCreate:true
    },
    edit:{
      editButtonContent:"Editar",
      saveButtonContent:"Guardar",
      cancelButtonContent:"Cancelar",
      confirmSave:true
    },
    noDataMessage:"No se encontraron datos",
    sort:true,
    actions:{
      add:false,
      edit:false,
      delete:false
    }
    
  }

  mostrarNombre()
  {
    if(this.columnaNombre)
    {
      this.columnaNombre = false;
    }
    else{
      this.columnaNombre = true;
    }
  }
  mostrarApellido()
  {
    if(this.columnApellido)
    {
      this.columnApellido = false;
    }
    else{
      this.columnApellido = true;
    }
  }
  mostrarId()
  {
    if(this.columnId)
    {
      this.columnId = false;
    }
    else{
      this.columnId = true;
    }
  }
  mostrarEmail()
  {
    if(this.columnEmail )
    {
      this.columnEmail = false;
    }
    else{
      this.columnEmail = true;
    }
  }

  filtro()
  {
    if(this.filtroGeneral )
    {
      this.filtroGeneral = false;
    }
    else{
      this.filtroGeneral = true;
    }
  }


}
