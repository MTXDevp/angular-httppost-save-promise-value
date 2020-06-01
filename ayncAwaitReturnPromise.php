arrPhoto : any; 
//pnames is a array
async getPhotosPortada(pnames : any){
...
this.arrPhoto = await this.http.post(ruta, JSON.stringify(pnames)).toPromise();
      return this.arrPhoto;

/**
 * Call : 
 *
 * x : any;
 *
 * x.then(f => console.log(f));
 *
/**