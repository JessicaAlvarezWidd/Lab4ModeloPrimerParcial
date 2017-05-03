import { Injectable } from '@angular/core';
import { Http,Response } from '@angular/http';
import 'rxjs/add/operator/toPromise';


@Injectable()
export class PersonasService {



  constructor(private http : Http) { }

  traerPersonas() //creo un metodo en mi services
  {
    return this.http.get("http://jessicaalvarez.hol.es/") //agrego la direccion de donde voy a obtener los datos
                .toPromise() //para tranformar lo que me trae en promesa, y poder usar el then y el catch
                .then(this.extraerData) //si esta bien y pasa aqui, entro al then //se agrega la funcion, NO SE LA LLAMA
                .catch(this.error); //si hubo error, entro al ERROR
  }

  private extraerData(res:Response)
  {
    return res.json() || {}; //el || es en caso de que no nos traiga nada, en ese caso devolvemos vacio
    //QUIERE RECIBIR UN ARRAY, ASI QUE CONTEGA []
  }

  private error(error:Response)
  {
    return error;
  }
  
}
