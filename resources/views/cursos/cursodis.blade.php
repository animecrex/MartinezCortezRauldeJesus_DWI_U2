<style>
  #contenedor-cursos{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(420px,1fr));
    gap:20px;
    padding:30px;
}

.card{
    display:flex;
    width:100%;
    height:300px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 20px rgba(0,0,0,.15);
}

.img{
    width:100%;
    height:100%;
    overflow:hidden;
}

.img img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

.text{
    width:60%;
    padding:20px;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    text-align:left;
}

.h3{
    font-size:22px;
    font-weight:bold;
    margin-bottom:10px;
}

.p{
    color:#666;
    margin-bottom:15px;
}

.btn-seleccionar{
    align-self:flex-end;
}
</style>

<div id="contenedor-cursos">


</div>
